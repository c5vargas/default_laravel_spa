<template>
    <nav class="navbar">
        <a href="#" class="sidebar-toggler">
            <i class="bi bi-list"></i>
        </a>
        <div class="navbar-content">
            <form class="search-form">
                <div class="input-group">
                    <div class="input-group-text">
                        <i class="bi bi-search"></i>
                    </div>
                    <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                            class="ms-1 me-1 d-none d-md-inline-block">English</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us"
                                id="us"></i> <span class="ms-1"> English </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr"
                                id="fr"></i> <span class="ms-1"> French </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de"
                                id="de"></i> <span class="ms-1"> German </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt"
                                id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es"
                                id="es"></i> <span class="ms-1"> Spanish </span></a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-envelope"></i>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p>9 New Messages</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="p-1">
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Leonardo Payne</p>
                                        <p class="tx-12 text-muted">Project status</p>
                                    </div>
                                    <p class="tx-12 text-muted">2 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Carl Henson</p>
                                        <p class="tx-12 text-muted">Client meeting</p>
                                    </div>
                                    <p class="tx-12 text-muted">30 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Jensen Combs</p>
                                        <p class="tx-12 text-muted">Project updates</p>
                                    </div>
                                    <p class="tx-12 text-muted">1 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Amiah Burton</p>
                                        <p class="tx-12 text-muted">Project deatline</p>
                                    </div>
                                    <p class="tx-12 text-muted">2 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Yaretzi Mayo</p>
                                        <p class="tx-12 text-muted">New record</p>
                                    </div>
                                    <p class="tx-12 text-muted">5 hrs ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <div class="indicator">
                            <div class="circle"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p>6 New Notifications</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="p-1">
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white bi bi-gift"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>New Order Recieved</p>
                                    <p class="tx-12 text-muted">30 min ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                        <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                            <div class="mb-3">
                                <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                            </div>
                            <div class="text-center">
                                <p class="tx-16 fw-bolder">Amiah Burton</p>
                                <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                            </div>
                        </div>
                        <ul class="list-unstyled p-1">
                            <li class="dropdown-item py-2">
                                <a href="../../pages/general/profile.html" class="text-body ms-0">
                                    <i class="me-2 icon-md bi bi-person"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="dropdown-item py-2">
                                <a href="javascript:;" class="text-body ms-0">
                                    <i class="me-2 icon-md bi bi-person-gear"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li class="dropdown-item py-2">
                                <a href="javascript:;" class="text-body ms-0">
                                    <i class="me-2 icon-md bi bi-repeat"></i>
                                    <span>Switch User</span>
                                </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="javascript:;" class="text-body ms-0" @click="handleLogOut">
                                <i class="me-2 icon-md bi bi-box-arrow-in-left"></i>
                                <span>{{$t('auth.logout')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
</template>

<script setup>
import { useAuthStore } from '@/stores/auth';
const authStore = useAuthStore()

async function handleLogOut() {
    await authStore.logOut()
}
</script>
