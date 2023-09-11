<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>Мы работаем для <span>Вас уже более 5 лет для</span> лучших результатов</h2>
                    <span data-toggle="modal" data-target="#callbackModal" class="btn primary"><i class="fa fa-send"></i>Заказать звонок</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <form action="{{route('web.contact-callback')}}" class="modal-dialog" role="document" method="POST">
        @csrf

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заказать звонок</h4>
            </div>
            <div class="modal-body contact-us" style="float: unset; display: block">
                <div style="padding: 0 20px">
                @if ($message = Session::get('callback-success'))
                    <div class="alert alert-success alert-dismissible">
                        <div style="display: flex; gap: 20px;">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </div>
                            <div>
                                {{ $message }}
                            </div>
                        </div>
                        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Ваше имя:</label>
                            <input type="text" name="name" placeholder="Ваше имя" required="required" value="{{old('name')}}">
                            @error('name') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Ваш номер телефона:</label>
                            <input type="text" name="email" placeholder="+7ххххххххх" required="required" value="{{old('email')}}">
                            @error('email') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </form>
</div>
