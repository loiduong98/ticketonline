<!DOCTYPE html>
<title>Gửi mail</title>
<base href="{{asset('')}}">
<h1>Gửi mail</h1>
<div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err){{$err}}<br>
                                @endforeach      
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif

<form method="POST" action="page/mail">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Họ Tên</label>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <button type="submit">Gửi</button>
    </div>
</form>
</div>