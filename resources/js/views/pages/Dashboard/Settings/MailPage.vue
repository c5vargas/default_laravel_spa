<template>
    <Admin>
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $t('dashboard.settings.settings') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $t('dashboard.settings.mail') }}</li>
            </ol>
        </nav>

        <div class="row">
            <settings-nav-tabs />

            <transition name="fade" appear>
                <div class="col-7 col-md-10 col-lg-9 ps-0" v-if="settingStore.settings">
                    <form-component />
                    <send-test-component />
                </div>
            </transition>
        </div>
    </Admin>
</template>

<script setup>
import { onBeforeMount } from "vue";
import { useSettingsStore } from "@/stores/settings";
import Admin from "@/views/layouts/Admin";
import FormComponent from "@/views/components/Settings/Mail/FormComponent.vue";
import SendTestComponent from "@/views/components/Settings/Mail/SendTestComponent.vue";
import SettingsNavTabs from "@/views/components/Settings/SettingsNavTabs.vue";

const settingStore = useSettingsStore()

onBeforeMount(async() => {
    await settingStore.fetch()
})
</script>
