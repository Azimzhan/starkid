<template>
<div>
    <div class="row about-course">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div v-if="success" class="alert alert-success" role="alert">
                        Новый курс успешно добавлен
                    </div>
                </div>
            </div>
            <div class="card-body" v-if="!availableToAddLesson">
                <form @submit="formSubmit" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4 justify-self-center">
                            <img :src="imageUrl" alt="" class="img-fluid" style=" box-shadow: 0 2px 9px 0 rgba(169, 184, 200, 0.2);">  
                                <div class="custom-file">
                                <input type="file" @change="onImageChange" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" v-model="courseName" id="course-name" name="course-name" class="form-control form-control-lg custom-shadow border-0" placeholder="Наименование курса" required>
                            <h6 class="mt-3 mb-0 pl-2">Категория курса</h6>
                            <select v-model="subject" class="w-50 mb-2 custom-select custom-select-set form-control bg-white text-secondary mt-2 border-0 custom-shadow">
                                <option value="1">Робототехника</option>
                                <option value="2">Математика</option>
                                <option value="3">Физика</option>
                            </select>
                            <br>
                            <div class="input-group mt-2 mb-2">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i data-feather="lock" class="svg-icon text-danger"></i></span>
                                </div>
                                <input type="text" class="form-control custom-shadow border-0" :value="'Автор: ' + userName" aria-describedby="basic-addon1" readonly>
                            </div>
                            <select v-model="level" class="w-75 custom-select custom-select-set form-control bg-white text-secondary mt-2 border-0 custom-shadow">
                                <option value="3"> Средний - 3</option>
                                <option value="1">Супер легкий - 1</option>
                                <option value="2">Легкий - 2</option>
                                <option value="4">Сложный - 4</option>
                            </select>
                            <!-- <h6 class="mt-3">Будет ли курс платным?</h6>  -->
                            <div class="form-group form-check mt-3" >
                                <input type="checkbox" v-model="coursePrice" class="form-check-input">
                                <label class="form-check-label">Этот курс будет платным</label>
                            </div>
                            <!-- <input type="checkbox" data-toggle="toggle" v-model="coursePrice" data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="light"> -->
                            <input type="text" v-model="price" v-if="coursePrice" name="price" class="form-control form-control-lg custom-shadow border-0 mt-2" placeholder="Стоимость курса">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mt-4 border-bottom pb-3">О курсе</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea v-model="about" name="about-course" rows=15 class="form-control border-0 text-left custom-shadow" placeholder="Информация о курсе" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-4 text-center">
                            <button class="btn btn-outline-primary mt-3 mb-2 pl-2" type="submit" >Добавить курс</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <add-lesson-component v-if="!availableToAddLesson"></add-lesson-component>
</div>
</template>

<script>

    export default {
        data: function() {
        return {
            coursePrice: false,
            userName: "",
            subject: 1,
            level: 3,
            price: "",
            courseName: "",
            about: "",
            success: false,
            availableToAddLesson: false,
            image: "",
            lessons: [],
            url: "http://localhost:8888/starkid/public/",
            imageUrl: "https://nostrahomes.com.au/uploads/cms/unknown.jpg"
        };
        },
        mounted() {
            this.getUserData()
        },
        methods: {
            onImageChange(e){
                var fileReader = new FileReader()
                fileReader.readAsDataURL(e.target.files[0])
                fileReader.onload = (e) => {
                    this.imageUrl = e.target.result
                }
                this.image = e.target.files[0];
                
            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
 
                let formData = new FormData();
                formData.append('image', this.image);
                formData.append('course_name', this.courseName);
                formData.append('level', this.level);
                formData.append('subject', this.subject);
                formData.append('about', this.about);
                formData.append('course_price', this.price);
 
                axios.post(this.url+'add/course', formData, config)
                .then(function (response) {
                    currentObj.availableToAddLesson = true;
                    currentObj.success = true;
                    setTimeout(() => currentObj.success = false, 3000);
                    console.log(response.data)
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            },
            getUserData: function() {
                
                axios.get('http://localhost:8888/starkid/public/get/user').then((response) => {
                    this.userName = response.data.user
                });
            }
        }
    }
</script>
