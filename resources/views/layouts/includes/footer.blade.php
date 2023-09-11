<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-widget address">
                        <h2>Наши контакты</h2>
                        <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</p>
                        <ul class="list">
                            <li><i class="fa fa-phone"></i>Телефон: <a href="tel:{{$settings->phone}}">{{$settings->phone}} </li>
                            <li><i class="fa fa-envelope"></i>Email: <a href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                            <li><i class="fa fa-map-o"></i>Адрес: {{$settings->address}}</li>
                        </ul>
                        <ul class="social">
                            <li><a href="{{$settings->facebook ?? '#'}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$settings->twitter ?? '#'}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$settings->vk ?? '#'}}"><i class="fa fa-vk"></i></a></li>
                            <li><a href="{{$settings->ok ?? '#'}}"><i class="fa fa-odnoklassniki"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-widget links">
                        <h2>Навигация по сайту</h2>
                        <ul class="list">
                        @foreach($menu->where('show_in_footer') as $footerLink)
                            <li><a href="{{$footerLink->getUrl()}}"><i class="fa fa-angle-right"></i>{{$footerLink->title}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p>© Copyright © {{date('Y')}}. Все права защищены</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
