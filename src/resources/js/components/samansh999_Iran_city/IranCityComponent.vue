<template>
    <div class="container">
        <div class="form-group text-right">
            <label for="province"><span class="text-danger"> * </span><span>استان</span></label>
            <select class="form-control" name="province" id="province" v-model="province_selected"
                    dir="rtl">
                <option v-for="province in provinces" v-bind:value="province.id" v-text="province.name"></option>
            </select>
        </div>

        <div class="form-group text-right" v-if="province_selected">
            <label for="cities"><span class="text-danger"> * </span><span>شهرستان</span></label>
            <select class="form-control" name="cities" id="cities" v-model="city_selected"
                    dir="rtl">
                <option v-for="city in cities" v-bind:value="city.id" v-text="city.name"></option>
            </select>
            <p v-if="city_waiting" class="float-right text-success text-right" v-text="city_message" dir="rtl"></p>
        </div>

        <div class="form-group text-right" v-if="city_selected">
            <label for="sections"><span class="text-danger"> * </span><span>بخش</span></label>
            <select class="form-control" name="sections" id="sections" v-model="section_selected"
                    dir="rtl">
                <option v-for="section in sections"  v-bind:value="section.id" v-text="section.name"></option>
            </select>
            <p v-if="section_waiting" class="float-right text-success text-right" v-text="section_message" dir="rtl"></p>

        </div>


        <div class="form-group text-right" v-if="section_selected">
            <label for="towns"><span class="text-danger"> * </span><span>شهر</span></label>
            <select class="form-control" name="towns" id="towns" v-model="town_selected"
                    dir="rtl">
                <option v-for="town in towns"  v-bind:value="town.id" v-text="town.name"></option>
            </select>
            <p class=" text-success text-right"  dir="rtl">از بین شهر یا دهستان یکی را باید انتخاب کنید</p>
            <p v-if="town_waiting" class="float-right text-success text-right" v-text="town_message" dir="rtl"></p>

        </div>

        <div class="form-group text-right" v-if="section_selected">
            <label for="rurals"><span class="text-danger"> * </span><span>دهستان</span></label>
            <select class="form-control" name="rurals" id="rurals" v-model="rural_selected"
                    dir="rtl">
                <option v-for="rural in rurals"  v-bind:value="rural.id" v-text="rural.name"></option>
            </select>
            <p class=" text-success text-right"  dir="rtl">از بین شهر یا دهستان یکی را باید انتخاب کنید</p>

            <p v-if="rural_waiting" class="float-right text-success text-right" v-text="rural_message" dir="rtl"></p>
        </div>
    </div>
</template>

<script>
    export default {
        //todo :: receive props and find city detail
        props: ['province_id', 'city_id', 'section_id', 'town_id', 'rural_id'],
        data: function () {
            this.provinces = [];
            axios.get('/iran-city/all-provinces').then(response => {
                this.provinces = response.data;
            });

            return {
                provinces: [],
                province_selected: '',
                province_waiting: false,
                province_message: '',

                cities: [],
                city_selected: '',
                city_waiting: false,
                city_message: '',

                sections: [],
                section_selected: '',
                section_waiting: false,
                section_message: '',

                towns: [],
                town_selected: '',
                town_waiting: false,
                town_message: '',

                rurals: [],
                rural_selected: '',
                rural_waiting: false,
                rural_message: '',
            };

        },
        watch: {
            province_selected: function () {
                this.cities = [];
                this.city_selected = '';
                this.city_waiting = true;
                this.city_message = ' لطفا صبر کنید ... ';

                this.sections = [];
                this.section_selected = '';

                this.getProvinceCities()
            },
            city_selected: function () {
                if (this.city_selected !== ''){
                    this.sections = [];
                    this.section_selected = '';
                    this.section_waiting = true;
                    this.section_message = ' لطفا صبر کنید ... ';

                    this.getCitySections()
                }

            },
            section_selected: function () {
                if (this.section_selected !== ''){
                    this.towns = [];
                    this.town_selected = '';
                    this.town_waiting = true;
                    this.town_message = ' لطفا صبر کنید ... ';

                    this.rurals = [];
                    this.rural_selected = '';
                    this.rural_waiting = true;
                    this.rural_message = ' لطفا صبر کنید ... ';

                    this.getSectionTowns();
                    this.getSectionRurals();
                }

            },
            rural_selected: function () {
                this.town_selected = '';
            },
            town_selected: function () {
                this.rural_selected = '';
            },
        },
        methods: {
            getProvinceCities() {
                axios.get('/iran-city/province-cities/' + this.province_selected).then(response => {
                    this.cities = response.data;
                    this.city_waiting = false;
                }).catch(error => {
                    //todo :: create server message
                    this.city_message = 'مشکلی پیش امده با پشتیبانی تماس بگیرید';
                    console.log(error)
                });
            },
            getCitySections() {
                axios.get('/iran-city/city-sections/' + this.city_selected).then(response => {
                    this.sections = response.data;
                    this.section_waiting = false;
                }).catch(error => {
                    //todo :: create server message
                    this.section_message = 'مشکلی پیش امده با پشتیبانی تماس بگیرید';
                });
            },
            getSectionTowns() {
                axios.get('/iran-city/section-towns/' + this.section_selected).then(response => {
                    this.towns = response.data;
                    this.town_waiting = false;
                }).catch(error => {
                    //todo :: create server message
                    this.section_message = 'مشکلی پیش امده با پشتیبانی تماس بگیرید';
                });
            },
            getSectionRurals() {
                axios.get('/iran-city/section-rurals/' + this.section_selected).then(response => {
                    this.rurals = response.data;
                    this.rural_waiting = false;
                }).catch(error => {
                    //todo :: create server message
                    this.section_message = 'مشکلی پیش امده با پشتیبانی تماس بگیرید';
                });
            },
        }

    }
</script>
