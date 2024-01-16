<template>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <Link class="navbar-brand me-lg-5" href="/">
            <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="CARDCRAFT PRO logo" />
            <img class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="CARDCRAFT PRO logo" />
        </Link>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="../../assets/images/user-icon.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Faraimunashe</h2>
                        <a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <Link href="/" class="nav-link d-flex align-items-center" >
                        <span class="sidebar-icon">
                            <img src="../../assets/img/brand/light.svg" height="20" width="20" alt="CARDCRAFT PRO Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">CARDCRAFT PRO</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/" class="nav-link" :class="{'active': $page.url.startsWith('/dashboard')}">
                        <span class="sidebar-icon">
                            <HomeIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="#" class="nav-link" :class="{'active': $page.url.startsWith('/settings')}">
                        <span class="sidebar-icon">
                            <UserPlusIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">New Student</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="#" class="nav-link" :class="{'active': $page.url.startsWith('/settings')}">
                        <span class="sidebar-icon">
                            <ArrowPathIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">Replacement</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="#" class="nav-link" :class="{'active': $page.url.startsWith('/settings')}">
                        <span class="sidebar-icon">
                            <LinkIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">Digitize</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="#" class="nav-link" :class="{'active': $page.url.startsWith('/settings')}">
                        <span class="sidebar-icon">
                            <PhotoIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">Update Image</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/users" class="nav-link" :class="{'active': $page.url.startsWith('/settings')}">
                        <span class="sidebar-icon">
                            <UsersIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">Users</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="#" class="nav-link" :class="{'active': $page.url.startsWith('/settings')}">
                        <span class="sidebar-icon">
                            <Cog8ToothIcon class="icon icon-xs me-2"/>
                        </span>
                        <span class="sidebar-text">Settings</span>
                    </Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import { HomeIcon, UserPlusIcon, ArrowPathIcon, LinkIcon, PhotoIcon, Cog8ToothIcon, UsersIcon } from '@heroicons/vue/24/solid';

export default {
    components: { Link, HomeIcon, UserPlusIcon, ArrowPathIcon, LinkIcon, PhotoIcon, Cog8ToothIcon, UsersIcon }
}
</script>
