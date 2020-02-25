@extends('layout.default')
@section('title', 'Login')
@section('content')

    <div class=" my-5 ">
        <div class="card card-cascade col-md-8 col-lg-9 col-xl-8 mx-auto" id="login-box">
            <h5 class="card-header view-cascade elegant-color-dark text-white text-center py-4">
                <strong>Acesso Restrito</strong>
            </h5>
            <form class="card-body mx-4 mt-4s">
                {{ csrf_field() }}
                <div class="md-form">
                    <input type="text" name="usuario" id="usuario" pattern="^[a-zA-Z][a-zA-Z-_\.]{3,20}$" class="form-control" min="1" required>
                    <label for="form_usuario">Usuário ou Email</label>
                    
                </div>
                <div class="md-form pb-1 pb-md-3">
                    <input type="password" name="senha" id="senha" class="form-control" required>
                    <label for="form_senha">Senha</label>
                </div>
                <div class=" d-flex align-items-center mb-4">
                    <button type="submit" id="submit-id-submit" class="btn btn-submit btn-grey btn-rounded z-depth-1a">Entrar</button>
                </div>
            </form>
        </div>
    </div>
 
<script> 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.btn-submit').click(function (e){
        $("#submit-id-submit").attr("disabled", true);
        e.preventDefault();
        
    var data = {
                login: $("input[name='usuario']").val(),
                senha: $("input[name='senha']").val()
        }
   $.ajax({
        type: 'POST',
        url: 'login',
        data: data,
        success: function (data){
            
            if(data['status'] == 'error'){
                $('#login-box').effect("shake");
                setTimeout(function() { 
                $("#submit-id-submit").attr('disabled', false);
                $("#submit-id-submit").val('Submit');
                }, 2000);
            }else
                window.location.href = "dashboard";
        }                

   });
});

</script>

@stop