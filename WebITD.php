<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style>
        .h3{
            color: aqua;

        }
        .border{
            padding: 3px; color: black;
        }
        .home{
            width: 70px;
            height: 50px;
            float: left;
            text-size-adjust: 20px;
            z-index: 3;
        }
        .course{
            width: 70px;
            height: 50px;
            float: left;
            text-size-adjust: 20px;
            z-index: 3;
        }
        .facility{
            width: 70px;
            height: 50px;
            float: left;
            text-size-adjust: 20px;
            z-index: 3;
        }
        .job{
            width: 70px;
            height: 50px;
            float: left;
            text-size-adjust: 20px;
            z-index: 3;
            
        }
        .holder_wrap{
            position:relative;
            display:block;
            height:auto;
        }
        .image {
            display: block;
            width: 100%;
            height: auto;
            z-index: 0;
        }
        .menubar{
            position: absolute;
            padding-right: 0 ;
            padding-top: 20px;
            color: white;
            top: 10px;
            right: 0;
            width: 400px;
            height: 100px;

        }
        .logo{
            display: block;
            width: 100%;
            height: auto;
            position: absolute;
            top: 0%;
            left: 0;
            padding-top: 20px;
            padding-left: 50px;
            z-index: 2;
            
        }
        .bar{
            width: 100%;
            height: auto;
            position: absolute;
            z-index: 1;
            top: 0%;
            
        }
        .holder_wrap_img{
            position:absolute;
        }
        .holder_wrap_img img{
            position:relative; 
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
            <div class="holder_wrap">
                
                <div class="holder_wrap_img">
                    <img src="Group4.png" alt="" class="image" style="width:100%;height:100%">
                    <div class="bar">
                        <img src="Rectangle 1.jpg" alt=""class="image" style="width:100%;height:auto; opacity: 30%;">
                        <div class="logo">
                            <img src="Group 3.png" alt="">
                        </div>
                        <div class="menubar">
                            <div class="home"><b>Home</b></div>
                            <div class="course"><b>Course</b></div>
                            <div class="facility"><b>Facility</b></div>
                            <div class="job"><b>Job</b></div>
                                
                        </div>
                    </div>
                    
                </div>
                    
            </div>
        </div>
        <div class="row">
            <h2 style="color: orange;">หลักสูตร</h2>
            
        </div>
        <div class="row">
            <center><table> 
                <tbody>
                    <h3>Classroom</h3>
                    <tr>
                        <th><img src="77221796_2845642748793582_4654110047519899648_o.jpg" class="img-fluid" width="350" height="230"></th>
                        <th><img src="78101202_2845655115459012_5550960147330760704_o.jpg" class="img-fluid" width="350" height="230"></th>
                        <th><img src="78281245_2845655352125655_3941487991435821056_o.jpg" class="img-fluid" width="350" height="230"></th>
                     </tr>
    
                </tbody>
            </table></center>
        </div>

    </div>
    

</body>
</html>
