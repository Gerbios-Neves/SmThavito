<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 May 2021 10:06:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('beagle/img/logo-fav.png')}}">
    <title>Escola de Conducao Thavito</title>

    <script src="https://kit.fontawesome.com/df3f7cb777.js" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/tabela/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/tabela/css/jquery.dataTables.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/jqvmap/jqvmap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('beagle/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('beagle/css/app.css')}}" type="text/css"/>

    <style>
      div.dataTables_wrapper {
        margin-bottom: 3em;
      }
    </style>

  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="index.html"></a>
          </div>
          <div class="page-title"><span>Tela Principal</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{asset('beagle/img/avatar.png')}}" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                                <div class="dropdown-menu" role="menu">     
                                  <div class="user-info">
                                    <div class="user-name"> {{ Auth::user()->name }} </div>
                                    <div class="user-position online">Logado</div>
                                  </div>
                                  <!-- <a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a>
                                  <a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a> -->
                                  <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item" href="{{route('logout')}}"><span class="icon mdi mdi-power"></span>Sair</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                  @endguest
            </ul>
            <ul class="nav navbar-nav float-right be-icons-nav">
              <!-- <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li> -->
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                    <div class="list">
                      <div class="be-scroller-notifications">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="{{asset('beagle/img/avatar2.png')}}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{asset('beagle/img/avatar3.png')}}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{asset('beagle/img/avatar4.png')}}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{asset('beagle/img/avatar5.png')}}" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('beagle/img/github.png')}}" alt="Github"><span>GitHub</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('beagle/img/bitbucket.png')}}" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('beagle/img/slack.png')}}" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('beagle/img/dribbble.png')}}" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('beagle/img/mail_chimp.png')}}" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="{{asset('beagle/img/dropbox.png')}}" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="/admin"><i class="icon mdi mdi-home"></i><span>Menu Principal</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Alunos</span></a>
                    <ul class="sub-menu">
                      <li class="parent"><a href="/aluno/create"><i class="fas fa-user-plus"></i>Adicionar novo Aluno</a>
                      </li>
                      <li><a href="/aluno"><i class="fas fa-list"></i>Listar Alunos</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Cartas</span></a>
                    <ul class="sub-menu">
                      <li><a href="/carta/create">Adicionar nova Carta</a>
                      </li>
                      <li><a href="/carta">Listar Cartas</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Professores</span></a>
                    <ul class="sub-menu">
                      <li><a href="/professor/create">Adicionar novo Professor</a>
                      </li>
                      <li><a href="/professor">Listar Professores</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Turmas</span></a>
                    <ul class="sub-menu">
                      <li><a href="/turma/create">Adicionar nova Turma</a>
                      </li>
                      <li><a href="/turma">Listar Turmas</a>
                      </li>
                    </ul>
                  </li>
                  <li class="divider">Relatorios</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Pagamentos</span></a>
                    <ul class="sub-menu">
                      <li><a href="/pagamento/create">Adicionar Novo Pagamento</a>
                      </li>
                      <li><a href="/pagamento">Listar Pagamentos</a>
                      </li>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Relatorios</span></a>
                    <ul class="sub-menu">
                      <li><a href="#">Relatorios</a>
                      </li>
                    </ul>
                  </li>
                <li class="divider">Configuracoes</li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Usuarios</span></a>
                    <ul class="sub-menu">
                      <li><a href="/user/create">Adicionar novo Usuario</a>
                      </li>
                      <li><a href="/user">Listar Usuarios</a>
                      </li>
                    </ul>
                  </li>
                  <!--<li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Roles</span></a>
                    <ul class="sub-menu">
                      <li><a href="">Dar Role</a>
                      </li>
                    </ul>
                  </li>-->
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        @yield('content')
      </div>
    </div>

   
    <script src="{{asset('beagle/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/jquery.flot.pie.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/jquery.flot.time.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/plugins/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/plugins/curvedLines.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-flot/plugins/jquery.flot.tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery.sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/countup/countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jqvmap/jquery.vmap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/lib/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
    
    <script src="{{asset('beagle/tabela/js/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('beagle/tabela/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('table.display').DataTable();
        });

      	App.init();
        App.dashboard();
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 May 2021 10:08:47 GMT -->
</html>