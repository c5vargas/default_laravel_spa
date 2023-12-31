import AnalyticsPage from '@/views/pages/Dashboard/Settings/AnalyticsPage.vue'
import hasPermission from '../guards/hasPermission'
import IndexPage from '@/views/pages/Dashboard/IndexPage.vue'
import LocalizationPage from '@/views/pages/Dashboard/Settings/LocalizationPage.vue'
import MailPage from '@/views/pages/Dashboard/Settings/MailPage.vue'
import NotificationsPage from '@/views/pages/Dashboard/Notifications/NotificationsPage.vue'
import NotificationsSinglePage from '@/views/pages/Dashboard/Notifications/SinglePage.vue'
import OneSignalPage from '@/views/pages/Dashboard/Settings/OneSignalPage.vue'
import RolesPage from '@/views/pages/Dashboard/Settings/RolesPage.vue'
import SettingsPage from '@/views/pages/Dashboard/Settings/SettingsPage.vue'
import SinglePage from '@/views/pages/Dashboard/Users/SinglePage.vue'
import UsersPage from '@/views/pages/Dashboard/Users/UsersPage.vue'

const routes = [
    {
        name: "dashboard",
        path: "/dashboard",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.dashboard'
        },
        component: IndexPage,
    },
    {
        name: "dashboard.users",
        path: "/dashboard/users",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.users'
        },
        component: UsersPage,
    },
    {
        name: "dashboard.users.single",
        path: "/dashboard/users/:id",
        props: (route) => ({ id: route.params.id }),
        beforeEnter: [hasPermission],
        meta: {
            permission: 'edit.users'
        },
        component: SinglePage,
    },
    {
        name: "dashboard.notifications",
        path: "/dashboard/notifications",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.notifications'
        },
        component: NotificationsPage,
    },
    {
        name: "dashboard.notifications.single",
        path: "/dashboard/notifications/:id",
        props: (route) => ({ id: route.params.id }),
        beforeEnter: [hasPermission],
        meta: {
            permission: 'edit.notifications'
        },
        component: NotificationsSinglePage,
    },
    {
        name: "dashboard.settings",
        path: "/dashboard/settings",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        redirect: { path: '/dashboard/settings/general' }
    },
    {
        name: "dashboard.settings.general",
        path: "/dashboard/settings/general",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        component: SettingsPage,
    },
    {
        name: "dashboard.settings.analytics",
        path: "/dashboard/settings/analytics",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        component: AnalyticsPage,
    },
    {
        name: "dashboard.settings.localization",
        path: "/dashboard/settings/localization",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        component: LocalizationPage,
    },
    {
        name: "dashboard.settings.mail",
        path: "/dashboard/settings/mail",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        component: MailPage,
    },
    {
        name: "dashboard.settings.roles",
        path: "/dashboard/settings/roles",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        component: RolesPage,
    },
    {
        name: "dashboard.settings.onesignal",
        path: "/dashboard/settings/onesignal",
        beforeEnter: [hasPermission],
        meta: {
            permission: 'view.settings'
        },
        component: OneSignalPage,
    },
]

export default routes
