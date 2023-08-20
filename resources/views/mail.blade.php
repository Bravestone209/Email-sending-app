<!DOCTYPE html>
<html>
<head>
    <title>Welcome To LearnVern</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <style>

section{
                background: linear-gradient(to bottom, grey,white);
            }


            textarea{
                width: 100%;
                resize:none;
            }
            .main_box{
                background: linear-gradient(to top, grey,white);

                
            }

          
          </style>

</head>
<body>

    <section>
        <h1 class="card-title text-center ml-4 mx-4">Welcome , to the mail sending machine.</h1>

<div class="container ">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5 border border-secondary main_box">
                <div class="card-body">
                    <h4 class="text-center">This is simple email sending app.</h4>
<br><br>
                    <p class="card-title text-center">Here , you just have to put the mail address to which you want to send message.</p>
                    <hr>
                    @include('flash_data')
                    <hr>
                    <form action="{{route ('mail1')}}" method="POST" name="emailSendingForm"
                          enctype="multipart/from-data">
                        <hr>
                        @csrf
                        <div class="form-group">
                            <label for="country">Enter Email Ids: -</label>
                            <input type="text" name="email" id="email"> <br>
                            <small>You can put multiple email Id's.</small>
                        </div>

                        <label for="text">Enter message: -</label>
                        <textarea name="text" id="text" cols="30"></textarea>



                        <br>
                        <center>
                            <input type="submit" name="submit_emails" class="btn btn-success" value="Send Email">
                        </center>
                    </form>
                </div>
            </div>
        </div>

    </section>
</body>
</html>



