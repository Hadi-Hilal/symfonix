<template>
    <Head>
        <link rel="stylesheet" :href="asset_path + 'site/css/module-css/page-header.css'" />
        <title>{{ metaTitle }}</title>
        <meta name="description" :content="metaDescription">
        <meta name="keywords" :content="metaKeywords">
        <meta name="robots" :content="metaRobots">
        <link v-if="metaCanonical" rel="canonical" :href="metaCanonical">
        <meta property="og:title" :content="metaTitle">
        <meta property="og:description" :content="metaDescription">
        <meta v-if="metaImage" property="og:image" :content="metaImage">
        <meta v-if="metaCanonical" property="og:url" :content="metaCanonical">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" :content="metaTitle">
        <meta name="twitter:description" :content="metaDescription">
        <meta v-if="metaImage" name="twitter:image" :content="metaImage">
    </Head>
    <app-layout>


                <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" :style="{ backgroundImage: `url(${banner})` }">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ custom_page.title[locale] }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li>
                                <Link :href="route('home')" v-if="typeof route !== 'undefined'">
                                    <i class="fas fa-home"></i>{{ trans('Home') }}
                                </Link>
                                <a :href="`/${locale === 'ar' ? 'ar' : ''}`" v-else>
                                    <i class="fas fa-home"></i>{{ trans('Home') }}
                                </a>
                            </li>
                            <li><span :class="`icon-${locale === 'ar' ? 'left' : 'right'}-arrow-1`"></span></li>
                            <li>{{ custom_page.title[locale] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <div class="my-5">
            <div class="container">
                <div class="content mb-10">
                  <div v-html="custom_page.content[locale]"></div>
                </div>
            </div>
        </div>
     </app-layout>
</template>

<script setup>
import {computed} from 'vue'
import {usePage, Head, Link} from '@inertiajs/vue3'

const page = usePage()
const trans = (key) => page.props.translations[key] || key;
const seo = computed(() => page.props.seo)
const settings = computed(() => page.props.settings || {})
const custom_page = computed(() => page.props.custom_page)
const asset_path = computed(() => page.props.asset_path || '')
const locale = computed(() => page.props.locale || 'en')
const banner = computed(() => page.props.banner)
const meta = computed(() => page.props.meta || {})

const metaTitle = computed(() => {
    const pageTitle = custom_page.value?.title?.[locale.value] || ''
    return meta.value.title || `${pageTitle} | ${seo.value.website_name || ''}`.trim()
})
const metaDescription = computed(() => {
    return meta.value.description || custom_page.value?.description || seo.value.website_desc || ''
})
const metaKeywords = computed(() => {
    return meta.value.keywords || custom_page.value?.keywords || seo.value.website_keywords || ''
})
const metaImage = computed(() => {
    return meta.value?.og?.image || meta.value?.twitter?.image || banner.value || settings.value?.meta_img || ''
})
const metaCanonical = computed(() => meta.value.canonical || '')
const metaRobots = computed(() => meta.value.robots || 'index, follow')
</script>
<script>


import AppLayout from '@/Layouts/App.vue';

export default {
    components: {
        AppLayout
    }

};
</script>
