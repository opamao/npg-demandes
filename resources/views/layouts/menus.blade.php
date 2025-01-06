       <!-- Sidebar -->
       <div class="sidebar" id="sidebar">
           <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">

                   <ul class="sidebar-vertical">
                       <!-- Main -->
                       <li class="menu-title"><span>{{ __('messages.main') }}</span></li>
                       <li class="submenu">
                           <a href="#"><i class="fe fe-home"></i> <span>{{ __('messages.dashboard') }}</span> <span
                                   class="menu-arrow"></span></a>
                           <ul style="display: none;">
                               <li><a class="{{ Request::is('index') ? 'active' : '' }}"
                                       href="{{ url('index') }}">{{ __('messages.dashboard') }}</a></li>
                           </ul>
                       </li>
                       <!-- /Main -->

                       <li class="submenu">
                           <a href="#" class=""><i class="fe fe-user"></i> <span>
                                   {{ __('messages.super-admin') }}</span>
                               <span class="menu-arrow"></span></a>
                           <ul>
                               <li><a class="{{ Request::is('dashboard') ? 'active' : '' }}"
                                       href="{{ url('dashboard') }}">{{ __('messages.dashboard') }}</a>
                               </li>
                               <li><a class="{{ Request::is('companies') ? 'active' : '' }}"
                                       href="{{ url('companies') }}">{{ __('messages.companies') }}</a>
                               </li>
                           </ul>
                       </li>

                       <!-- Customers -->
                       <li class="menu-title"><span>{{ __('messages.customers') }}</span></li>
                       <li>
                           <a class="{{ Request::is('customers') ? 'active' : '' }}" href="{{ url('customers') }}"><i
                                   class="fe fe-users"></i> <span>{{ __('messages.customers') }}</span></a>
                       </li>
                       <li>
                           <a class="{{ Request::is('customer-details') ? 'active' : '' }}"
                               href="{{ url('customer-details') }}"><i class="fe fe-file"></i>
                               <span>{{ __('messages.customer-details') }}</span></a>
                       </li>
                       <li>
                           <a class="{{ Request::is('vendors') ? 'active' : '' }}" href="{{ url('vendors') }}"><i
                                   class="fe fe-user"></i> <span>{{ __('messages.vendors') }}</span></a>
                       </li>
                       <!-- /Customers -->

                       <!-- Inventory -->
                       <li class="menu-title"><span>{{ __('messages.inventory') }}</span></li>
                       <li class="submenu">
                           <a href="#"><i class="fe fe-package"></i> <span>
                                   {{ __('messages.products-service') }}</span>
                               <span class="menu-arrow"></span></a>
                           <ul style="display: none;">
                               <li><a class="{{ Request::is('product-list') ? 'active' : '' }}"
                                       href="{{ url('product-list') }}">{{ __('messages.product-list') }}</a></li>
                               <li><a class="{{ Request::is('category') ? 'active' : '' }}"
                                       href="{{ url('category') }}">{{ __('messages.category') }}</a>
                               </li>

                               <li><a class="{{ Request::is('units') ? 'active' : '' }}"
                                       href="{{ url('units') }}">{{ __('messages.units') }}</a></li>
                           </ul>
                       </li>
                       <li>
                           <a class="{{ Request::is('inventory') ? 'active' : '' }}" href="{{ url('inventory') }}"><i
                                   class="fe fe-user"></i> <span>{{ __('messages.inventory') }}</span></a>
                       </li>
                       <!-- /Inventory -->

                       <!-- Signature -->
                       <li class="menu-title"><span>{{ __('messages.signature') }}</span></li>
                       <li>
                           <a class="{{ Request::is('signature-list') ? 'active' : '' }}"
                               href="{{ url('signature-list') }}"><i class="fe fe-clipboard"></i>
                               <span>{{ __('messages.list-signature') }}</span></a>
                           <a class="{{ Request::is('signature-invoice') ? 'active' : '' }}"
                               href="{{ url('signature-invoice') }}"><i class="fe fe-box"></i>
                               <span>{{ __('messages.signature-invoice') }}</span></a>
                       </li>
                       <!-- /Signature -->

                       <!-- Sales -->
                       <li class="menu-title"><span>{{ __('messages.sales') }}</span></li>
                       <li class="submenu">

                           <a href="#"><i class="fe fe-file"></i> <span>{{ __('messages.invoices') }}</span><span
                                   class="menu-arrow"></span></a>
                           <ul style="display: none;">
                               <li><a class="{{ Request::is('invoices') ? 'active' : '' }}"
                                       href="{{ url('invoices') }}">{{ __('messages.invoice-list') }}</a></li>
                               <li><a class="{{ Request::is('invoice-details-admin') ? 'active' : '' }}"
                                       href="{{ url('invoice-details-admin') }}">{{ __('messages.invoice-detail') }}
                                       (Admin)</a></li>
                               <li><a class="{{ Request::is('invoice-details') ? 'active' : '' }}"
                                       href="{{ url('invoice-details') }}">{{ __('messages.invoice-detail') }}
                                       ({{ __('messages.customers') }})</a></li>
                           </ul>
                       </li>
                       <li>
                           <a class="{{ Request::is('recurring-invoices') ? 'active' : '' }}"
                               href="{{ url('recurring-invoices') }}"><i class="fe fe-clipboard"></i>
                               <span>{{ __('messages.recurring-invoices') }}</span></a>
                       </li>
                       <li>
                           <a class="{{ Request::is('credit-notes') ? 'active' : '' }}"
                               href="{{ url('credit-notes') }}"><i class="fe fe-edit"></i>
                               <span>{{ __('messages.credit-notes') }}</span></a>
                       </li>
                       <!-- /Sales -->

                       <!-- Quotations -->
                       <li class="menu-title"><span>{{ __('messages.quotations') }}</span></li>
                       <li>
                           <a class="{{ Request::is('quotations') ? 'active' : '' }}"
                               href="{{ url('quotations') }}"><i class="fe fe-clipboard"></i>
                               <span>{{ __('messages.quotations') }}</span></a>
                       </li>
                       <li>
                           <a class="{{ Request::is('delivery-challans') ? 'active' : '' }}"
                               href="{{ url('delivery-challans') }}"><i class="fe fe-file-text"></i>
                               <span>{{ __('messages.delivery-challans') }}</span></a>
                       </li>
                       <!-- /Quotations -->

                       <!-- Reports -->
                       <li class="menu-title"><span>{{ __('messages.reports') }}</span></li>
                       <!-- /Reports -->
                       <li class="submenu">
                           <a href="#"><i class="fe fe-box"></i><span>{{ __('messages.reports') }}</span> <span
                                   class="menu-arrow"></span></a>
                           <ul>
                               <li><a class="{{ Request::is('expense-report') ? 'active' : '' }}"
                                       href="{{ url('expense-report') }}">{{ __('messages.free') }}</a></li>
                               <li><a class="{{ Request::is('purchase-report') ? 'active' : '' }}"
                                       href="{{ url('purchase-report') }}">{{ __('messages.Gadget') }}</a></li>
                               <li><a class="{{ Request::is('purchase-return') ? 'active' : '' }}"
                                       href="{{ url('purchase-return') }}">{{ __('messages.orders') }}</a></li>
                               <li><a class="{{ Request::is('sales-report') ? 'active' : '' }}"
                                       href="{{ url('sales-report') }}">{{ __('messages.delivery') }}</a></li>
                           </ul>
                       </li>
                       <!-- User Management -->
                       <li class="menu-title"><span>{{ __('messages.user-management') }}</span></li>
                       <li>
                           <a class="{{ Request::is('users') ? 'active' : '' }}" href="{{ url('users') }}"><i
                                   class="fe fe-user"></i> <span>{{ __('messages.users') }}</span></a>
                       </li>
                       <li>
                           <a class="{{ Request::is('roles-permission') ? 'active' : '' }}"
                               href="{{ url('roles-permission') }}"><i class="fe fe-clipboard"></i>
                               <span>{{ __('messages.roles-permission') }}</span></a>
                       </li>
                       <li>
                           <a class="{{ Request::is('delete-account-request') ? 'active' : '' }}"
                               href="{{ url('delete-account-request') }}"><i class="fe fe-trash-2"></i>
                               <span>{{ __('messages.delete-account') }}</span></a>
                       </li>
                       <!-- /User Management -->
                   </ul>
               </div>
           </div>
       </div>
       <!-- /Sidebar -->
