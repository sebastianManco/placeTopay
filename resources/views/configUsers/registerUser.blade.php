<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <meta name="description" content="">    
         <meta name="author" content="Sebastian Manco Valencia">
         
            <!-- CSS only -->
        <link rel="stylesheet" href="/css/app.css">  
            <!-- JS, Popper.js, and jQuery -->
        <script src="/js/app.js"> </script>
        <title>User Register</title>
    </head>
    <body>
        <div class="container">
            
            <h1>User Register</h1>
            <div class="row">
                <form action="" method="POST">
                    <div class="form-group">
                        <!---nombre--->

                        <label for="name"> Full Name </label>
                    <input type="text" class="form-control" id="name" placeholder="" value="{{old('name')}}">
                    </div>
                    <!---Apellido--->

                    <div class="form-group">
                        <label for="name"> Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="{{old('lastName')}}">
                    </div>

                    <!---email-->

                    <div class="form-group">
                        <label for="fhone"> Email</label>
                    <input type="text" class="form-control" id="fhone" placeholder="" value="{{old('fhone')}}">
                    </div>

                    <!---telefono-->

                    <div class="form-group">
                        <label for="phone">phone number</label>
                    <input type="text" class="form-control" id="phone" placeholder="" value="{{old('phone')}}">
                    </div>
                    <!---direccion-->

                    <div class="form-group">
                        <label for="direction"> Direction</label>
                    <input type="text" class="form-control" id="direction" placeholder="" value="{{old('direction')}}">
                    </div>
                    
                    <!--tipo de identificacion-->

                    <label for="cedula"> Type of identification document</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">C.C
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">T.E
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="" >T.I
                        </label>
                    </div>

                        <!---tipo de documento--->
                        <div class="form-group">
                            <label for="Document"> Nº Identification</label>
                        <input type="text" class="form-control" id="Identification" placeholder="" value="{{old('Identification')}}">
                        </div> 
                        <!---usuario--->
                    <div class="form-group">
                        <label for="userName"> User Name</label>
                    <input type="text" class="form-control" id="userName" placeholder="" value="{{old('userName')}}">
                    </div>         
                    <!---contraseña--->

                    <div class="form-group">
                        <label for="password"> Password</label>
                    <input type="password" class="form-control" id="password" placeholder="" value="{{old('password')}}">
                    </div>
                </form>

            </div>
            <button type="button" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-secondary">Cancel</button>
        </div>

    </body>
</html>