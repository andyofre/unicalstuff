@extends('layouts.custom')

@section('contents')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Theme style -->
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>


<div class="content-wrapper">

    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="apply.html">
                        <img class="logo-dark" src="./assets/custom/logo.png" srcset="./assets/custom/unical.png 2x"
                            alt="" width="180px" />
                        <img class="logo-light" src="./assets/custom/logo-light.png"
                            srcset="./assets/custom/unical.png 2x" alt="" width="180px" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas-nav">
                    <div class="offcanvas-header d-lg-none d-xl-none">
                        <a href="apply.html"><img src="./assets/custom/logo-light.png"
                                srcset="./assets/custom/logo-light.png" alt="" /></a>
                        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                            aria-label="Close"></button>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Unical GSS</a></li>
                        <li class="nav-item  "><a class="nav-link" href="{{route('register.student')}}">
                                Register</a>

                        </li>

                        <li class="nav-item  "><a class="nav-link " href="{{route('validate.student')}}">Courses
                                Registration</a>
                        </li>
                        <li class="nav-item  "><a class="nav-link" href="#">Print Reciept</a></li>


                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-lg-4">
                    <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                        <li class="nav-item d-none d-md-block">
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Register now </a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <div class="navbar-hamburger"><button class="hamburger animate plain"
                                    data-toggle="offcanvas-nav"><span></span></button></div>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>

    <!-- /header -->
    <section class="wrapper bg-ash">
        <div class="container pt-18 pb-5" style="z-index: 5; position:relative">
            <div class="row gx-0 gy-12 align-items-center">

                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-2">
                    <h5 class="display-6 mb-10 px-xl-13">Select courses you want to make payments <br /> </h5>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->


    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-14 pt-md-0 pb-md-17 mt-1">

            <div class="row">
                <div class="card mt-5 col-lg-12 offset-lg-2 col-xl-10 offset-xl-1">

                    <p class="lead text-center mb-2 py-12">You can select course base on department</p>
                    <p class="lead text-center text-danger" style="display:none" id="courseAddingError"></p>



                    <form action="{{route('picked.add')}}" method="POST" id="course_form">
                        @csrf

                        <div class="add_item">
                            <div id="courseTarget">
                                <div class="msg text-danger text-center"></div>
                            </div>


                        </div>

                        <div class="col-12 text-center py-3">
                            {{-- <button type="submit"
                                class="btn btn-primary rounded-pill btn-send mb-3">Submit</button> --}}

                            <button type="submit" class="btn btn-primary rounded-pill btn-send mb-3">submit</button>

                        </div>
                    </form>




                </div>

                <!-- /form -->
            </div>
            <!-- /column -->
        </div>

</div>
<!-- /.container -->
</section>
</div>



<script type="application/javascript">
    /***********Course Components handler Module****************/
    
    let Courses = {};
    Courses.components = 1;
    Courses.list = [];

    @foreach ( $course as $courses )
    Courses.list.push({
        course_id: `{{$courses->id}}`,
        course_title: `{{$courses->course_title}}`,
        course_code: `{{$courses->course_code}}`,
        isSelected: false
    });
    @endforeach


    //The addCourseComponents() function requires a parameter which is where the appendage is to be made
    function addCourseComponents(target){
        //Check if the last course component has empty inputs
        if(canAdd()){
            return;
        }
         
      

        var template = document.createElement("div");
        template.classList.add("row"); //A bootstrap class
        template.classList.add("gx-2");
        template.classList.add("mx-5");
        template.classList.add("coursecomponent");
        template.dataset.number = `cc_${Courses.components}`;
        template.innerHTML = `
                <div class="col-md-5">
                    <div class="form-floating mb-4">
                        <select class="form-select course-select" data-number="cc_${Courses.components}" required="" name="course_title">
                            <option selected="" disabled="" value="">Select Course *</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating mb-4">
                        <input class="form-select" type="text" value="Course Code" name="course_code" data-number="cc_${Courses.components}" readonly="">
                    </div>
                </div>
                <div class="col-md-2" id="add_item">
                    <div class="form-floating mb-4 course-control">
                        <button class="btn btn-primary addeventmore"><i class="uil uil-plus fs-13"></i></button>
                    </div> 
                </div>
            `;
        let removeBtn = `<button data-number="cc_${Courses.components}" class="btn btn-danger removeeventmore"><i class="uil uil-minus fs-10"></i></button>`;
        Courses.list.forEach((course)=>{
            if(!course.isSelected){
                //If the course has not been selected
                //Add it to the list of selected components
                let select = template.querySelector(".course-select");
                let optiontoAppend = `<option data-id="${course.course_id}" value="${course.course_title}" data-course_title="${course.course_title}" data-course_code="${course.course_code}">${course.course_title}</option>`;
                select.innerHTML+= optiontoAppend;
            }
        });

        let allCourseSelects = document.querySelectorAll(".course-select");
        if(allCourseSelects.length >= 1){
            //If there are more than one selects this means that the remove button should be aded to remove the new components
            let courseControl = template.querySelector(".course-control");
            courseControl.innerHTML+=removeBtn;
        }

        //Add the event of adding a component to the add button
        template.querySelector(".addeventmore").addEventListener("click", (event)=>{
            event.preventDefault();
            addCourseComponents(getTarget());
        });

        //Add the event of deleting the component to the remove button
        if(template.querySelector(".removeeventmore")!=null){
            //This mechanism is hinged on the fact that template has a class of courseComponent, so if this is altered, it must also be altered here
            template.querySelector(".removeeventmore").addEventListener("click", (event)=>{
                event.preventDefault();
                event.stopImmediatePropagation();
                event.stopPropagation();
                //Get the node array pair of the button and it's containing parent
                
                let arr = document.querySelectorAll(`[data-number=${event.target.dataset.number}]`);
                arr.forEach((item)=>{
                   if(item.classList.contains("coursecomponent")){
                       getTarget().removeChild(item);
                   } 
                });

                reflectSelections();
            });
        }

        //Add the functionality of dynamically changing the course, it utilises the fact the name of the course code input is course_code
        let select = template.querySelector(".course-select");
        select.addEventListener("change", (event)=>{
            //Get the current selection
            let currentSelection = event.target.selectedOptions[0];
            let courseCode = currentSelection.dataset.course_code;

            //Get the node array pair of the button and it's containing parent and change the readonly course code input
            //This block of code is what updates the left component of the select component
            let arr = document.querySelectorAll(`[data-number=${event.target.dataset.number}]`);
            arr.forEach((item)=>{
                if(item.name == "course_code"){
                    item.value = courseCode;
                } 
            });

            //Now cause the selection to reflect
            reflectSelections();
        });
        

        // //Subroutine to stop new component selects from having selected courses in them
        function reflectSelections(){
            //Reset all course selections
            Courses.list.forEach((course)=>{
                course.isSelected = false;
            });
            
            //Now cause those ones that has been selected to reflect in the courses list
            let selections = document.querySelectorAll(".course-select");
            selections.forEach((item)=>{
                let index = item.selectedOptions[0].dataset.id-1;
                
                Courses.list[index].isSelected = true;
            });
            
        }

        function canAdd(){
            //Requires a element with class 'msg'
            let msg = getTarget().querySelector(".msg");


            //If the courses has been exhausted 
            let isExhausted = false;
            let len = Courses.list.length;
            let count = 0;
            for(var a=0; a<len; a++){
                //If this one has been selected, increment the count
                if(Courses.list[a].isSelected){
                    count++;
                }
            }
            //If count == len then the courses have been exhausted
            if(count == len){
                isExhausted = true;
            }

            //If it has been exhausted, return true;
            if(isExhausted){
                msg.style.display = "block";
                msg.textContent = "No more courses to add!";
                return true;
            }

            //If the input is empty
            let courseSelects = document.querySelectorAll(".course-select");
            let pernultimateSelect = courseSelects[courseSelects.length-1];
            if(pernultimateSelect !== undefined){
                if(pernultimateSelect.value == ""){
                    msg.style.display = "block";
                    msg.textContent = "Please select a course first";
                    return true;
                }else if(pernultimateSelect.value != ""){
                    msg.style.display = "none";
                    msg.textContent = "";
                    return false;
                }
                    
            }

           

            
        }


        target.appendChild(template);
        Courses.components++;

    }

    function removeCourseComponents(target,elem){
        //This function removes the target
        let selects = target.querySelectorAll(".courseComponent");
        alert(target);
        alert(elem);
        for(var a=0; a<selects.length; a++){
            let item = selects.item(a);
            //If the item has the button, then it should be the one to be deleted
            //This is checked by their number attribute
            if(item.datasets.number == elem.datasets.number){

                target.removeChild(item);
                break;
            }
        };
        
        Courses.components--;
    }

    function getTarget(){
        //This function returns the target for appending the 
        let ans = document.querySelector("#courseTarget");
        return ans;
    }
</script>

{{-- This guy will remain here --}}
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", ()=>{
        addCourseComponents(getTarget());



    //     function submitCourseData(form){
    //         //Coupled with Courses object using the list attribute having an array value
    //         let request = new XMLHttpRequest();
            
    //         //When the request was successful
    //         request.addEventListener("load", ()=>{
    //             document.write(request.response);
    //         });
    //         //when there was an error
    //         request.addEventListener("error", ()=>{
    //             alert("Sorry, an error just occured, try again");
                
    //         });

    //         let data = new FormData();
    //         let token = document.querySelector("[name=_token]");

    //         data.append("_token", token.value);
    //         let selectedCourses = [];
    //         Courses.list.forEach((course)=>{
    //             if(course.isSelected){
    //                 selectedCourses.push(course);
    //             }
    //         });
    //         selectedCourses.forEach((selectedCourse)=>{
    //             data.append("course_title", selectedCourse.course_title);
    //         });
    //         console.log(selectedCourses);
    //         request.open("POST", "/picked-course");
    //         request.send(data);
    //     }


    //     let form = document.querySelector("#course_form");
    //     form.addEventListener("submit", (event)=>{
    //         event.preventDefault();
    //         submitCourseData();
    //     });
    })
        
</script>

<script type="application/javascript">

</script>

@endsection