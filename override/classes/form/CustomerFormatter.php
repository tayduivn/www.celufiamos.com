<?php
use Symfony\Component\Translation\TranslatorInterface;
class CustomerFormatter extends CustomerFormatterCore
{
    private $translator;
    private $language;

    private $ask_for_birthdate = true;
    private $ask_for_partner_optin = true;
    private $partner_optin_is_required = true;
    private $ask_for_password = true;
    private $password_is_required = true;
    private $ask_for_new_password = false;

    public function getFormat()
    {
        $format = [];
        $format['id_customer'] = (new FormField())
            ->setName('id_customer')
            ->setType('hidden')
        ;
        $genders = Gender::getGenders(Context::getContext()->language->id);
        if ($genders->count() > 0) {
            $genderField = (new FormField())
                ->setName('id_gender')
                ->setType('radio-buttons')
                ->setLabel(
                    Context::getContext()->getTranslator()->trans(
                        'Género', [], 'Shop.Forms.Labels'
                    )
                )->setRequired(true)
            ;
            foreach ($genders as $gender) {
                $genderField->addAvailableValue($gender->id, $gender->name);
            }
            $format[$genderField->getName()] = $genderField;
        }
        $format['document_type'] = (new FormField())
            ->setName('document_type')
            ->setType('select')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Tipo de documento', [], 'Shop.Forms.Labels'
                )
            )
            ->setRequired(true)
        ;
        $format['document_type']->addAvailableValue(
            '1',
            Context::getContext()->getTranslator()->trans(
                'Cédula de ciudadania', [], 'Shop.Forms.Labels'
            )
        );

        $format['document'] = (new FormField())
            ->setName('document')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Cédula', [], 'Shop.Forms.Labels'
                )
            )
            ->setRequired(true)
        ;

        if ($this->ask_for_birthdate) {
            $format['birthday'] = (new FormField())
                ->setName('birthday')
                ->setType('text')
                ->setLabel(
                    Context::getContext()->getTranslator()->trans(
                        'Birthdate', [], 'Shop.Forms.Labels'
                    )
                )
                ->addAvailableValue('placeholder', 'YYYY-MM-DD')
                ->setRequired(true)
            ;

            $format['f_exped'] = (new FormField())
                ->setName('f_exped')
                ->setLabel(
                    Context::getContext()->getTranslator()->trans(
                        'Fecha de expedicion', [], 'Shop.Forms.Labels'
                    )
                )
                ->addAvailableValue('placeholder', 'YYYY-MM-DD')
                ->setRequired(true)
            ;            
        }        



        $format['firstname'] = (new FormField())
            ->setName('firstname')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Primer Nombre', [], 'Shop.Forms.Labels'
                )
            )
            ->setRequired(true)
        ;

        $format['firstname2'] = (new FormField())
            ->setName('firstname2')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Segundo Nombre', [], 'Shop.Forms.Labels'
                )
            )
        ;
        $format['lastname'] = (new FormField())
            ->setName('lastname')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Primer Apellido', [], 'Shop.Forms.Labels'
                )
            )
            ->setRequired(true)
        ;
        
        $format['lastname2'] = (new FormField())
            ->setName('lastname2')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Segundo Apellido', [], 'Shop.Forms.Labels'
                )
            )
        ;
        if (Configuration::get('PS_B2B_ENABLE')) {
            $format['company'] = (new FormField())
                ->setName('company')
                ->setType('text')
                ->setLabel(Context::getContext()->getTranslator()->trans(
                    'Company', [], 'Shop.Forms.Labels'
                ));
            $format['siret'] = (new FormField())
                ->setName('siret')
                ->setType('text')
                ->setLabel(Context::getContext()->getTranslator()->trans(
                    // Please localize this string with the applicable registration number type in your country. For example : "SIRET" in France and "Código fiscal" in Spain.
                    'Identification number', [], 'Shop.Forms.Labels'
                ));
        }

        $format['email'] = (new FormField())
            ->setName('email')
            ->setType('email')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Email', [], 'Shop.Forms.Labels'
                )
            )
            ->setRequired(true)
        ;
        $format['mobile'] = (new FormField())
            ->setName('mobile')
            ->setType('tel')
            ->setLabel(
                Context::getContext()->getTranslator()->trans(
                    'Celular', [], 'Shop.Forms.Labels'
                )
            )
            ->setRequired(true)
        ;        

        if ($this->ask_for_password) {
            $format['password'] = (new FormField())
                ->setName('password')
                ->setType('password')
                ->setLabel(
                    Context::getContext()->getTranslator()->trans(
                        'Password', [], 'Shop.Forms.Labels'
                    )
                )
                ->setRequired($this->password_is_required)
            ;
        }

        if ($this->ask_for_new_password) {
            $format['new_password'] = (new FormField())
                ->setName('new_password')
                ->setType('password')
                ->setLabel(
                    Context::getContext()->getTranslator()->trans(
                        'New password', [], 'Shop.Forms.Labels'
                    )
                )
            ;
        }

        if ($this->ask_for_partner_optin) {
            $format['optin'] = (new FormField())
                ->setName('optin')
                ->setType('checkbox')
                ->setLabel(
                    Context::getContext()->getTranslator()->trans(
                        'Receive offers from our partners', [], 'Shop.Theme.Customeraccount'
                    )
                )
                ->setRequired($this->partner_optin_is_required)
            ;
        }

        // ToDo, replace the hook exec with HookFinder when the associated PR will be merged
        $additionalCustomerFormFields = Hook::exec('additionalCustomerFormFields', array(), null, true);

        if (is_array($additionalCustomerFormFields)) {
            foreach ($additionalCustomerFormFields as $moduleName => $additionnalFormFields) {
                if (!is_array($additionnalFormFields)) {
                    continue;
                }

                foreach ($additionnalFormFields as $formField) {
                    $formField->moduleName = $moduleName;
                    $format[$moduleName . '_' . $formField->getName()] = $formField;
                }
            }
        }

        // TODO: TVA etc.?

        return $this->addConstraints($format);
    }

    private function addConstraints(array $format)
    {
        $constraints = Customer::$definition['fields'];

        foreach ($format as $field) {
            if (!empty($constraints[$field->getName()]['validate'])) {
                $field->addConstraint(
                    $constraints[$field->getName()]['validate']
                );
            }
        }

        return $format;
    }    
}