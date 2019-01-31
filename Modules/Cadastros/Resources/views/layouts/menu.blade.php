<li class="nav-main-heading">
        <span class="sidebar-mini-visible">BG</span>
        <span class="sidebar-mini-hidden">Cadastros</span>
    </li>
    <li class="@activeIfUrl('cadastros/*','open')">
        <a class="nav-submenu" data-toggle="nav-submenu" href="javascript:void(0)">
            <i class="si si-briefcase"></i>
            <span class="sidebar-mini-hide">Cadastros</span>
        </a>
        <ul>
            <li>
                <a class="@activeIfUrl('cadastros/client*','active')" href="{{ route('client') }}">
                    <span class="sidebar-mini-hide">
                        <i class="fa fa-eye mr-5"></i> 
                        {{ __('Clientes') }}
                    </span>
                </a>
            </li>
            <li>
                <a class="@activeIfUrl('cadastros/person*','active')" href="{{ route('person') }}">
                    <span class="sidebar-mini-hide">
                        <i class="fa fa-edit mr-5"></i> 
                        {{ __('Colaboradores') }}
                    </span>
                </a>
            </li>        
            <li>
                <a class="@activeIfUrl('cadastros/provider*','active')" href="{{ route('provider') }}">
                    <span class="sidebar-mini-hide">
                        <i class="fa fa-edit mr-5"></i> 
                        {{ __('Fornecedores') }}
                    </span>
                </a>
            </li>        
        </ul>
    </li>