<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ url('admin') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo" srcset=""
                            style="transform: scale(2)"></a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                        height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                opacity=".3"></path>
                            <g transform="translate(-210 -1)">
                                <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                <circle cx="220.5" cy="11.5" r="4"></circle>
                                <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                        </path>
                    </svg>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Content</li>

                <li class="sidebar-item {{ Request::is('admin') ? 'active' : '' }}">
                    <a href="{{ url('admin') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li
                    class="sidebar-item {{ Request::is('dashboard/heroes') || Request::is('dashboard/heroes/*') || Request::is('dashboard/heroes/*/edit') || Request::is('dashboard/counters') || Request::is('dashboard/counters/*/edit') || Request::is('dashboard/testimonis') || Request::is('dashboard/testimonis/create') || Request::is('dashboard/testimonis/*') || Request::is('dashboard/contacts') || Request::is('dashboard/contacts/*') || Request::is('dashboard/contacts/*/edit') ? 'active' : '' }} has-sub">
                    <a href="{{ url('hero') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Home</span>
                    </a>
                    <ul
                        class="submenu {{ Request::is('dashboard/heroes') || Request::is('dashboard/heroes/*') || Request::is('dashboard/counters') || Request::is('dashboard/counters/*/edit') || Request::is('dashboard/testimonis') || Request::is('dashboard/testimonis/create') || Request::is('dashboard/testimonis/*') || Request::is('dashboard/contacts') || Request::is('dashboard/contacts/*') || Request::is('dashboard/contacts/*/edit') ? 'active' : '' }}">
                        <li
                            class="submenu-item {{ Request::is('dashboard/heroes') || Request::is('dashboard/heroes/*') ? 'active' : '' }}">
                            <a href="/dashboard/heroes">Hero</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/counters') || Request::is('dashboard/counters/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/counters">Counter</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/testimonis') || Request::is('dashboard/testimonis/create') || Request::is('dashboard/testimonis/*') ? 'active' : '' }}">
                            <a href="/dashboard/testimonis">Testimoni</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/contacts') || Request::is('dashboard/contacts/create') || Request::is('dashboard/contacts/*') || Request::is('dashboard/contacts/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/contacts">Contact</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item {{ Request::is('dashboard/intros') || Request::is('dashboard/intros/*') || Request::is('dashboard/intros/*/edit') || Request::is('dashboard/visis') || Request::is('dashboard/visis/*/edit') || Request::is('dashboard/alasans') || Request::is('dashboard/alasans/*') || Request::is('dashboard/alasans/*/edit') || Request::is('dashboard/teams') || Request::is('dashboard/teams/*') || Request::is('dashboard/teams/*/edit') || Request::is('dashboard/questions') || Request::is('dashboard/questions/*') || Request::is('dashboard/softs') ? 'active' : '' }} has-sub">
                    <a href="{{ url('intro') }}" class='sidebar-link'>
                        <i class="bi bi-info-circle-fill"></i>
                        <span>About</span>
                    </a>
                    <ul
                        class="submenu {{ Request::is('dashboard/intros') || Request::is('dashboard/intros/*') || Request::is('dashboard/intros/*/edit') || Request::is('dashboard/visis') || Request::is('dashboard/visis/*/edit') || Request::is('dashboard/alasans') || Request::is('dashboard/alasans/*') || Request::is('dashboard/alasans/*/edit') || Request::is('dashboard/teams') || Request::is('dashboard/teams/*') || Request::is('dashboard/teams/*/edit') || Request::is('dashboard/questions') || Request::is('dashboard/questions/*') || Request::is('dashboard/softs') ? 'active' : '' }}">
                        <li
                            class="submenu-item {{ Request::is('dashboard/intros') || Request::is('dashboard/intros/*') || Request::is('dashboard/intros/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/intros">Intro</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/visis') || Request::is('dashboard/visis/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/visis">Visi Misi</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/alasans') || Request::is('dashboard/alasans/*') || Request::is('dashboard/alasans/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/alasans">Alasan</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/teams') || Request::is('dashboard/teams/*') || Request::is('dashboard/teams/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/teams">Team</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/questions') || Request::is('dashboard/questions/*') ? 'active' : '' }}">
                            <a href="/dashboard/questions">Questions</a>
                        </li>
                        <li class="submenu-item {{ Request::is('dashboard/softs') ? 'active' : '' }}">
                            <a href="/dashboard/softs">Arsip Questions</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/dashboard/questions/create">Input Questions</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item {{ Request::is('dashboard/events') || Request::is('dashboard/events/create') || Request::is('dashboard/events/*') || Request::is('dashboard/events/*/edit') || Request::is('dashboard/mentors') || Request::is('dashboard/mentors/create') || Request::is('dashboard/mentors/*/edit') || Request::is('dashboard/recomendeds') || Request::is('dashboard/recomendeds/create') || Request::is('dashboard/recomendeds/*/edit') || Request::is('dashboard/statuses') || Request::is('dashboard/statuses/create') || Request::is('dashboard/statuses/*/edit') || Request::is('dashboard/categories') || Request::is('dashboard/categories/create') || Request::is('dashboard/categories/*/edit') ? 'active' : '' }} has-sub">
                    <a href="{{ url('event') }}" class='sidebar-link'>
                        <i class="bi bi-calendar2-event-fill"></i>
                        <span>Event</span>
                    </a>
                    <ul
                        class="submenu {{ Request::is('dashboard/events') || Request::is('dashboard/events/create') || Request::is('dashboard/events/*') || Request::is('dashboard/events/*/edit') || Request::is('dashboard/mentors') || Request::is('dashboard/mentors/create') || Request::is('dashboard/mentors/*/edit') || Request::is('dashboard/recomendeds') || Request::is('dashboard/recomendeds/create') || Request::is('dashboard/recomendeds/*/edit') || Request::is('dashboard/statuses') || Request::is('dashboard/statuses/create') || Request::is('dashboard/statuses/*/edit') || Request::is('dashboard/categories') || Request::is('dashboard/categories/create') || Request::is('dashboard/categories/*/edit') ? 'active' : '' }}">
                        <li
                            class="submenu-item {{ Request::is('dashboard/events') || Request::is('dashboard/events/create') || Request::is('dashboard/events/*') || Request::is('dashboard/events/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/events">Event</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/mentors') || Request::is('dashboard/mentors/create') || Request::is('dashboard/mentors/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/mentors">Mentor</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/recomendeds') || Request::is('dashboard/recomendeds/create') || Request::is('dashboard/recomendeds/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/recomendeds">Rekomendasi</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/statuses') || Request::is('dashboard/statuses/create') || Request::is('dashboard/statuses/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/statuses">Status</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/categories') || Request::is('dashboard/categories/create') || Request::is('dashboard/categories/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/categories">Kategori</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item {{ Request::is('dashboard/achievements') || Request::is('dashboard/achievements/create') || Request::is('dashboard/achievements/*') || Request::is('dashboard/achievements/*/edit') || Request::is('dashboard/tachievements') || Request::is('dashboard/tachievements/*') || Request::is('dashboard/tachievements/*/edit') || Request::is('dashboard/pesertas') || Request::is('dashboard/pesertas/create') || Request::is('dashboard/pesertas/*') || Request::is('dashboard/pesertas/*/edit') ? 'active' : '' }} has-sub">
                    <a href="{{ url('achievement') }}" class='sidebar-link'>
                        <i class="bi bi-star-fill"></i>
                        <span>Achievement</span>
                    </a>
                    <ul
                        class="submenu {{ Request::is('dashboard/achievements') || Request::is('dashboard/achievements/create') || Request::is('dashboard/achievements/*') || Request::is('dashboard/achievements/*/edit') || Request::is('dashboard/tachievements') || Request::is('dashboard/tachievements/*') || Request::is('dashboard/tachievements/*/edit') || Request::is('dashboard/pesertas') || Request::is('dashboard/pesertas/create') || Request::is('dashboard/pesertas/*') || Request::is('dashboard/pesertas/*/edit') ? 'active' : '' }}">
                        <li
                            class="submenu-item {{ Request::is('dashboard/achievements') || Request::is('dashboard/achievements/create') || Request::is('dashboard/achievements/*') || Request::is('dashboard/achievements/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/achievements">Magang Kerja</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/pesertas') || Request::is('dashboard/pesertas/create') || Request::is('dashboard/pesertas/*') || Request::is('dashboard/pesertas/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/pesertas">Karya Peserta</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/tachievements') || Request::is('dashboard/tachievements/*') || Request::is('dashboard/tachievements/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/tachievements">Total Achievement</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Menu</li>

                <li
                    class="sidebar-item {{ Request::is('dashboard/headers') || Request::is('dashboard/headers/*/edit') || Request::is('dashboard/footers') || Request::is('dashboard/footers/*/edit') ? 'active' : '' }} has-sub">
                    <a href="{{ url('header') }}" class='sidebar-link'>
                        <i class="bi bi-menu-button-wide-fill"></i>
                        <span>Header Footer</span>
                    </a>
                    <ul
                        class="submenu {{ Request::is('dashboard/headers') || Request::is('dashboard/headers/*/edit') || Request::is('dashboard/footers') || Request::is('dashboard/footers/*/edit') ? 'active' : '' }}">
                        <li
                            class="submenu-item {{ Request::is('dashboard/headers') || Request::is('dashboard/headers/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/headers">Header</a>
                        </li>
                        <li
                            class="submenu-item {{ Request::is('dashboard/footers') || Request::is('dashboard/footers/*/edit') ? 'active' : '' }}">
                            <a href="/dashboard/footers">Footer</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Account</li>

                <li class="sidebar-item {{ Request::is('admin/*/edit') ? 'active' : '' }}">
                    <a href="/admin/{{ auth()->user()->id }}/edit" class='sidebar-link'>
                        <i class="bi bi-lock-fill"></i>
                        <span>Change Password</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link' data-bs-toggle="modal" data-bs-target="#logout">
                        <i class="bi bi-door-open-fill"></i>
                        <span>Logout</span>
                    </a>

                    {{-- <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" href="{{ url('logout') }}" class='sidebar-link border-0'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </button>
                    </form> --}}
                </li>

            </ul>
        </div>
    </div>
</div>


<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Logout!
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>yakin mau <b>Logout?</b></p>
            </div>
            <div class="modal-footer">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" href="{{ url('logout') }}"
                        class='sidebar-link border-0 btn btn-danger btn-sm'>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
