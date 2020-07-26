<?php
/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA https://www.prestashop.com/forums/user/132608-vekia/
 * @copyright 2010-2017 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER http://mypresta.eu
 * support@mypresta.eu
 */

class AdminMenuTabsController extends ModuleAdminController
{
    protected $position_identifier = 'id_tab';

    public function __construct()
    {
        $this->bootstrap = true;
        $this->multishop_context = Shop::CONTEXT_ALL;
        $this->table = 'tab';
        $this->list_id = 'tab';
        $this->className = 'Tab';
        $this->lang = true;

        parent::__construct();

        $this->fieldImageSettings = array(
            'name' => 'icon',
            'dir' => 't'
        );
        $this->imageType = 'gif';
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?'),
                'icon' => 'icon-trash'
            )
        );
        $this->fields_list = array(
            'id_tab' => array(
                'title' => $this->trans('ID', array(), 'Admin.Global'),
                'align' => 'center',
                'class' => 'fixed-width-xs'
            ),
            'name' => array(
                'title' => $this->trans('Name', array(), 'Admin.Global')
            ),
            'class_name' => array(
                'title' => $this->l('Class')
            ),
            'module' => array(
                'title' => $this->l('Module')
            ),
            'active' => array(
                'title' => $this->trans('Enabled', array(), 'Admin.Global'),
                'align' => 'center',
                'active' => 'status',
                'type' => 'bool',
                'orderby' => false
            ),
            'position' => array(
                'title' => $this->l('Position'),
                'filter_key' => 'a!position',
                'position' => 'position',
                'align' => 'center',
                'class' => 'fixed-width-md'
            )
        );
    }

    public function advert() {
        return'
        
        <div class="panel clearfix">
        <h3>'.$this->l('MyPresta.eu Modules').'<a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7WE8PTH4ZPYZA" class="list-toolbar-btn"><span class="pull-right label-tooltip" data-toggle="tooltip" data-original-title="'.$this->l('I develop this addon for free, say thank you by donating me via PayPal').'" data-html="true" data-placement="top">'.$this->l('Donate Me').'</span></a></h3>
		  <iframe src="//apps.facepages.eu/somestuff/onlyexample.html" width="100%" height="150" border="0" style="border:none;"></iframe>
		</div>';
    }

    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_title = $this->l('Menus');

        if ($this->display == 'details') {
            $this->page_header_toolbar_btn['back_to_list'] = array(
                'href' => Context::getContext()->link->getAdminLink('AdminMenuTabs'),
                'desc' => $this->l('Back to list', null, null, false),
                'icon' => 'process-icon-back'
            );
        } elseif (empty($this->display)) {
            $this->page_header_toolbar_btn['new_menu'] = array(
                'href' => self::$currentIndex.'&addtab&token='.$this->token,
                'desc' => $this->l('Add new menu', null, null, false),
                'icon' => 'process-icon-new'
            );
        }

        parent::initPageHeaderToolbar();
    }

    /**
     * AdminController::renderForm() override
     * @see AdminController::renderForm()
     */
    public function renderForm()
    {
        $tabs = Tab::getTabs($this->context->language->id);
        // If editing, we clean itself
        if (Tools::isSubmit('id_tab')) {
            foreach ($tabs as $key => $tab) {
                if ($tab['id_tab'] == Tools::getValue('id_tab')) {
                    unset($tabs[$key]);
                }
            }
        }

        // added category "Home" in var $tabs
        $tab_zero = array(
            'id_tab' => 0,
            'name' => $this->l('Home')
        );
        array_unshift($tabs, $tab_zero);

        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Menus'),
                'icon' => 'icon-list-ul'
            ),
            'input' => array(
                array(
                    'type' => 'hidden',
                    'name' => 'position',
                    'required' => false
                ),
                array(
                    'type' => 'text',
                    'label' => $this->trans('Name', array(), 'Admin.Global'),
                    'name' => 'name',
                    'lang' => true,
                    'required' => true,
                    'hint' => $this->l('Invalid characters:').' &lt;&gt;;=#{}'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Class'),
                    'name' => 'class_name',
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Module'),
                    'name' => 'module'
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Status'),
                    'name' => 'active',
                    'required' => false,
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->trans('Enabled', array(), 'Admin.Global')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->trans('Disabled', array(), 'Admin.Global')
                        )
                    ),
                    'hint' => $this->l('Show or hide menu.')
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            )
        );

        $display_parent = true;
        if (Validate::isLoadedObject($this->object) && !class_exists($this->object->class_name.'Controller')) {
            $display_parent = false;
        }

        if ($display_parent) {
            $this->fields_form['input'][] = array(
                'type' => 'select',
                'label' => $this->l('Parent'),
                'name' => 'id_parent',
                'options' => array(
                    'query' => $tabs,
                    'id' => 'id_tab',
                    'name' => 'name'
                )
            );
        }

        return $this->advert().parent::renderForm();
    }

    /**
     * AdminController::renderList() override
     * @see AdminController::renderList()
     */
    public function renderList()
    {
        $this->addRowAction('edit');
        $this->addRowAction('details');
        $this->addRowAction('delete');

        $this->_where = 'AND a.`id_parent` = 0';
        $this->_orderBy = 'position';

        return $this->advert() . parent::renderList();
    }

    public function initProcess()
    {
        if (Tools::getIsset('details'.$this->table)) {
            $this->list_id = 'details';

            if (isset($_POST['submitReset'.$this->list_id])) {
                $this->processResetFilters();
            }
        } else {
            $this->list_id = 'tab';
        }

        return parent::initProcess();
    }

    public function renderDetails()
    {
        if (($id = Tools::getValue('id_tab'))) {
            $this->lang = false;
            $this->list_id = 'details';
            $this->addRowAction('edit');
            $this->addRowAction('details');
            $this->addRowAction('delete');
            $this->toolbar_btn = array();

            /** @var Tab $tab */
            $tab = $this->loadObject($id);
            $this->toolbar_title = $tab->name[$this->context->employee->id_lang];

            $this->_select = 'b.*';
            $this->_join = 'LEFT JOIN `'._DB_PREFIX_.'tab_lang` b ON (b.`id_tab` = a.`id_tab` AND b.`id_lang` = ' .
                (int) $this->context->language->id.')';
            $this->_where = 'AND a.`id_parent` = '.(int)$id;
            $this->_orderBy = 'position';
            $this->_use_found_rows = false;

            self::$currentIndex = self::$currentIndex.'&details'.$this->table;
            $this->processFilter();
            return $this->advert() . parent::renderList();
        }
    }

    public function postProcess()
    {
        /* PrestaShop demo mode */
        if (_PS_MODE_DEMO_) {
            $this->errors[] = $this->trans('This functionality has been disabled.', array(), 'Admin.Notifications.Error');
            return;
        }
        /* PrestaShop demo mode*/

        if (($id_tab = (int)Tools::getValue('id_tab')) && ($direction = Tools::getValue('move')) && Validate::isLoadedObject($tab = new Tab($id_tab))) {
            if ($tab->move($direction)) {
                Tools::redirectAdmin(self::$currentIndex.'&token='.$this->token);
            }
        } elseif (Tools::getValue('position') && !Tools::isSubmit('submitAdd'.$this->table)) {
            if ($this->access('edit') !== '1') {
                $this->errors[] = $this->trans('You do not have permission to edit this.', array(), 'Admin.Notifications.Error');
            } elseif (!Validate::isLoadedObject($object = new Tab((int)Tools::getValue($this->identifier)))) {
                $this->errors[] = $this->trans('An error occurred while updating the status for an object.', array(), 'Admin.Notifications.Error').
                    ' <b>'.$this->table.'</b> '.$this->trans('(cannot load object)', array(), 'Admin.Notifications.Error');
            }
            if (!$object->updatePosition((int)Tools::getValue('way'), (int)Tools::getValue('position'))) {
                $this->errors[] = $this->trans('Failed to update the position.', array(), 'Admin.Notifications.Error');
            } else {
                Tools::redirectAdmin(self::$currentIndex.'&conf=5&token='.Tools::getAdminTokenLite('AdminMenuTabs'));
            }
        } elseif (Tools::isSubmit('submitAdd'.$this->table) && Tools::getValue('id_tab') === Tools::getValue('id_parent')) {
            $this->errors[] = $this->trans('You can\'t put this menu inside itself. ', array(), 'Admin.Advparameters.Notification');
        } elseif (Tools::isSubmit('submitAdd'.$this->table) && $id_parent = (int)Tools::getValue('id_parent')) {
            $this->redirect_after = self::$currentIndex.'&id_'.$this->table.'='.$id_parent.'&details'.$this->table.'&conf=4&token='.$this->token;
        } elseif (isset($_GET['details'.$this->table]) && is_array($this->bulk_actions)) {
            $submit_bulk_actions = array_merge(array(
                'enableSelection' => array(
                    'text' => $this->l('Enable selection'),
                    'icon' => 'icon-power-off text-success'
                ),
                'disableSelection' => array(
                    'text' => $this->l('Disable selection'),
                    'icon' => 'icon-power-off text-danger'
                )
            ), $this->bulk_actions);
            foreach ($submit_bulk_actions as $bulk_action => $params) {
                if (Tools::isSubmit('submitBulk'.$bulk_action.$this->table) || Tools::isSubmit('submitBulk'.$bulk_action)) {
                    if ($this->access('edit')) {
                        $this->action = 'bulk'.$bulk_action;
                        $this->boxes = Tools::getValue($this->list_id.'Box');
                    } else {
                        $this->errors[] = $this->trans('You do not have permission to edit this.', array(), 'Admin.Notifications.Error');
                    }
                    break;
                } elseif (Tools::isSubmit('submitBulk')) {
                    if ($this->access('edit')) {
                        $this->action = 'bulk'.Tools::getValue('select_submitBulk');
                        $this->boxes = Tools::getValue($this->list_id.'Box');
                    } else {
                        $this->errors[] = $this->trans('You do not have permission to edit this.', array(), 'Admin.Notifications.Error');
                    }
                    break;
                }
            }
        } else {
            // Temporary add the position depend of the selection of the parent category
            if (!Tools::isSubmit('id_tab')) { // @todo Review
                $_POST['position'] = Tab::getNbTabs(Tools::getValue('id_parent'));
            }
        }

        if (!count($this->errors)) {
            parent::postProcess();
        }
    }

    protected function afterImageUpload()
    {
        /** @var Tab $obj */
        if (!($obj = $this->loadObject(true))) {
            return;
        }
        @rename(_PS_IMG_DIR_.'t/'.$obj->id.'.gif', _PS_IMG_DIR_.'t/'.$obj->class_name.'.gif');
    }

    public function ajaxProcessUpdatePositions()
    {
        $way = (int)(Tools::getValue('way'));
        $id_tab = (int)(Tools::getValue('id'));
        $positions = Tools::getValue('tab');

        // when changing positions in a tab sub-list, the first array value is empty and needs to be removed
        if (!$positions[0]) {
            unset($positions[0]);
            // reset indexation from 0
            $positions = array_merge($positions);
        }

        foreach ($positions as $position => $value) {
            $pos = explode('_', $value);

            if (isset($pos[2]) && (int)$pos[2] === $id_tab) {
                if ($tab = new Tab((int)$pos[2])) {
                    if (isset($position) && $tab->updatePosition($way, $position)) {
                        echo 'ok position '.(int)$position.' for tab '.(int)$pos[1].'\r\n';
                    } else {
                        echo '{"hasError" : true, "errors" : "Can not update tab '.(int)$id_tab.' to position '.(int)$position.' "}';
                    }
                } else {
                    echo '{"hasError" : true, "errors" : "This tab ('.(int)$id_tab.') can t be loaded"}';
                }

                break;
            }
        }
    }
}