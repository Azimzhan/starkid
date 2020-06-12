<template>
<div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-4 border-bottom pb-3">Уроки</h4>
            <div class="row mt-3 mb-2"  v-if="!noLessons">
                <div class="col-md-12 text-center">
                    <h3><i data-feather="video-off" class="svg-icon text-danger mt-3 mb-3"></i></h3> 
                    <p>Пока нет добавленных уроков</p>
                </div>
            </div>

            <div class="row" v-if="noLessons">
                <!-- LESSON CARD --> 
                <div class="col-md-12" v-for="lesson in lessons" :key="lesson.id">
                    <div class="card custom-shadow">
                        <div class="card-body">
                            <div class="card-title">
                                <p>{{lesson.lesson_name}}</p>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-md-12 ">
                                    <p>{{lesson.lesson_desc}}</p>
                                    <!-- <p>Тест: <feather type="check" class="text-success align-middle"></feather></p> -->
                                    <p><feather type="message-circle" class="text-warning align-middle"></feather> - {{comments.length}}</p>
                                </div>
                            </div>
                            <div class="row mt-2 ml-1" v-if="documents.length">
                                <div class="row" v-for="doc in documents" :key="doc.id">
                                    <div class="col-md-12">
                                        <h6>Прикрепленные документы</h6>
                                        <p> <feather type="paperclip" class="text-primary align-middle"></feather> {{doc.doc}}</p>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row mt-2" v-if="!documents.length">
                                <div class="col-md-12">
                                    <h4></h4>
                                    <p><feather type="file-minus" class="text-danger aling-middle"></feather> Нет прикрепленных документов</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 border-top pt-2">
                                    <a href="" class="btn btn-primary"> <feather type="edit-3" class="text-light align-middle"></feather> Редактировать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END LESSON CARD  -->
                <div class="col-md-4 offset-md-4 text-center mt-4">
                    <button class="btn btn-outline-primary mb-2 text-center" data-toggle="modal" data-target="#addNewLessonModal">Добавить урок</button>
                </div>
            </div>
            
        </div>
    </div>
    
    <!---ADD NEW LESSON MODAL -->
    <div class="modal fade" id="addNewLessonModal" tabindex="-1" role="dialog" aria-labelledby="addNewLessonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-information h1 text-info"></i>
                        <p class="mt-1">Добавление нового урока</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row ">
                                        <form @submit="formSubmit" enctype="multipart/form-data">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group mt-2">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i data-feather="lock" class="svg-icon text-danger"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control custom-shadow border-0" :value="'Урок №'+(lessons.length+1)" aria-describedby="basic-addon1" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="pl-2">Наименование урока</h6>
                                                <input type="text" v-model="lessonName" class="form-control custom-shadow border-0" placeholder="Наименование урока">
                                            </div>
                                            <div class="col-md-12 mb-3" v-if="videoId">
                                               <iframe class="w-100" style="height: 30vh" :src="'https://www.youtube.com/embed/'+videoId" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="pl-2">Ссылка на урок</h6>
                                                <input type="text" v-model="lessonUrl" class="form-control custom-shadow border-0" @change="getVideoId()" placeholder="Ссылка на урок">
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="pl-2">Описание урока</h6>
                                                <textarea v-model="aboutLesson" class="border-0 w-100 pl-2 custom-shadow" rows="5"></textarea>
                                            </div>
                                            <div class="col-md-12 mb-3 border-bottom pb-3">
                                                <h6 class="pl-2">Материалы к уроку</h6>
                                                <div class="row d-flex pl-2">
                                                    <div class="col-md-4 justify-content-center align-self-center mt-2">
                                                        <a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a>
                                                    </div>
                                                    <div class="col-md-7 justify-content-center align-self-center mt-2">
                                                        <input type="text" v-model="docDesc" name="docs-info" class="form-control border-0 custom-shadow font-14" value="Краткая информация по документу"> 
                                                    </div>
                                                    <div class="col-md-1 justify-content-center align-self-center mt-2">
                                                        <a href="#" class="btn btn-outline-danger"><i data-feather="trash" class="svg-icon"></i></a>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary mt-3 ml-2">
                                                    <i data-feather="folder-plus" class="svg-icon"></i>
                                                    Добавить новый</button>
                                            </div>
                                        </form>    
                                    </div>
                                    <div class="ro">
                                         <div class="col-md-12">
                                            <h6 class="pl-2 mb-4">Тест к уроку</h6>
                                    
                                            <!-- QUIZ QUESTION CARD-->
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <input type="text" class="form-control border-0 custom-shadow" placeholder="Вопрос">
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="font-12 text-left pl-2 mb-1 mt-2">Вариантов ответа</h6>
                                                            <div class="customize-input w-30 mb-4">
                                                                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                <div class="input-group-text bg-light">
                                                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                                                </div>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Вариант ответа">
                                                            </div>
                    
                                                            <div class="row mb-2">
                                                                <div class="col-md-12">
                                                                    {{-- <span class="badge badge-pill badge-success">Вопрос используется для контроля внимания</span> --}}
                                                                    <h6>Использовать для вопроса контроля внимания?</h6> 
                                                                    <input type="checkbox" checked data-toggle="toggle" data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="light">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <h6 class="font-14 mt-3 mb-1">Укажите на какой минуте задать этот вопрос</h6>
                                                                    <input type="text" class="form-control border-0 custom-shadow w-25 mb-2" value="11:55" placeholder="На какой минуте показать вопрос">
                                                                </div>
                                                            </div>
                
                                                            <a href="#" class="btn btn-danger mb-2 font-12">Удалить вопрос</a>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END QUIZ QUESTION CARD-->
                                            
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3 text-center">
                                                    <button class="btn btn-outline-primary mb-2 text-center" data-toggle="modal" data-target="#addNewQuestionModal">Добавить новый вопрос</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-md-4 text-center">
                            <a href="#" class="btn btn-outline-success my-2" data-dismiss="modal">Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---END ADD NEW LESSON MODAL -->

</div>
</template>

<script>
    import { getIdFromURL } from 'vue-youtube-embed'
    export default {
        data: function() {
        return {
           lessons: [],
           noLessons: true,
           documents: [],
           comments: [],
           lessonName: '',
           lessonUrl: '',
           aboutLesson: '',
           lessonDocs: '',
           docDesc: '',
           videoId: ''
        };
        },
        mounted() {
            this.getAllCourseLessons()
        },
        methods: {
            getAllCourseLessons: function() {
                axios.get('http://localhost:8888/starkid/public/get/lessons/1').then((response) => {
                   this.lessons = response.data
                   if(this.lessons.length > 0){
                       noLessons: false
                       this.getLessonDocs()
                        this.getLessonComments()
                   }
                });
            },
            getLessonDocs: function(){
                axios.get('http://localhost:8888/starkid/public/get/lesson/1/docs').then((response) => {
                   this.documents = response.data
                   console.log(this.documents)
                });
            },
            getLessonComments: function(){
                axios.get('http://localhost:8888/starkid/public/get/lesson/1/comments').then((response) => {
                   this.comments = response.data
                   console.log(this.comments)
                });
            },
            formSubmit(e){
                e.preventDefault();
                 
            },
            getVideoId(){
                
                this.videoId = getIdFromURL(this.lessonUrl)
                console.log(this.videoId)
            }
        }
    }
</script>
