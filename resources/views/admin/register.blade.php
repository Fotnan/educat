<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Education</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
</head>

<body style="font-family: Roboto, sans-serif;">
<!-- Start: 1 Row 1 Column -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Укажите кем вы являетесь:</h3>
            <section id="register"></section>
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-1">Частное лицо</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-2">Юридическое лицо</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="tab-1">
                        <div class="error">
                            <p class="text-bg-danger"></p>
                        </div>
                        <form>
                            <label class="form-label" style="margin-top: 11px;"><strong>Имя обучаемого</strong></label>
                            <input class="form-control" type="text" name="firstname" autofocus="" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Фамилия обучаемого</strong></label>
                            <input class="form-control" type="text" required="" name="secondname">

                            <label class="form-label" style="padding-top: 5px;"><strong>Личный код обучаемого</strong></label>
                            <input class="form-control" type="text" name="p_code" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>E-майл обучаемого</strong></label>
                            <input class="form-control" type="email" name="email" inputmode="email" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Пароль</strong></label>
                            <input class="form-control" type="password" name="password" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Повторить пароль</strong></label
                            <input class="form-control" type="password" name="re-password" required="">

                            <div class="form-check" style="padding-top: 10px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-1" name="confirm" value="0" required="">
                                <label class="form-check-label" for="formCheck-1"><strong>Согласен с </strong><a href="conditions.html" target="_blank"><strong>условиями</strong></a></label>

                            </div><button class="btn btn-primary" type="submit" style="padding-top: 10px;margin-top: 11px;">Зарегистрироваться</button>
                        </form>
                    </div>
                    <div class="tab-pane active" role="tabpanel" id="tab-2">
                        <div>
                            <p class="text-bg-danger"></p>
                        </div>
                        <form>
                            <label class="form-label" style="margin-top: 11px;"><strong>Имя обучаемого</strong></label>
                            <input class="form-control" type="text" name="firstname" autofocus="" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Фамилия обучаемого</strong></label>
                            <input class="form-control" type="text" required="" name="secondname">

                            <label class="form-label" style="padding-top: 5px;"><strong>Личный код</strong></label>
                            <input class="form-control" type="text" name="p_code" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Телефон обучаемого</strong></label>
                            <input class="form-control" type="tel" name="telephone" inputmode="tel" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>E-майл обучаемого</strong></label>
                            <input class="form-control" type="email" name="email" inputmode="email" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Пароль</strong></label>
                            <input class="form-control" type="password" name="password" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Повторить пароль</strong></label>
                            <input class="form-control" type="password" name="re-password" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>Телефон юр. лица</strong></label>
                            <input class="form-control" type="tel" name="telephone" inputmode="tel" required="">

                            <label class="form-label" style="margin-top: 11px;"><strong>Наименование юр. лица</strong><br></label>
                            <input class="form-control" type="text" name="firm" autofocus="" required="">

                            <label class="form-label" style="margin-top: 11px;"><strong>Наименование плательщика</strong><br></label>
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" name="firm_pay" autofocus="" required="" title="Заказчик и плательщик разные">
                            <label class="form-label" style="margin-top: 11px;"><strong>Адрес плательщика</strong><br>

                            </label><input class="form-control" type="text" name="address_pay" autofocus="" required="" title="Заказчик и плательщик разные">
                            <label class="form-label" style="margin-top: 11px;"><strong>Имя администратора</strong><br></label>
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" name="admin_name" autofocus="" required="" title="Представитель юр. лица">

                            <label class="form-label" style="margin-top: 11px;"><strong>Фамилия администратора</strong><br></label>
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" name="admin_second" autofocus="" required="" title="Представитель юр. лица">

                            <label class="form-label" style="padding-top: 5px;"><strong>Телефон юр. лица</strong></label>
                            <input class="form-control" type="tel" name="admin_telephone" inputmode="tel" required="">

                            <label class="form-label" style="padding-top: 5px;"><strong>E-майл юр. лица</strong></label>
                            <input class="form-control" type="email" name="admin_email" inputmode="email" required="">
                            <div class="form-check" style="padding-top: 10px;">
                                <input class="form-check-input" type="checkbox" id="formCheck-2" name="confirm" value="0" required="">
                                <label class="form-check-label" for="formCheck-2"><strong>Согласен с </strong><a href="conditions.html" target="_blank"><strong>условиями</strong></a></label>
                                
                            </div><button class="btn btn-primary" type="submit" style="padding-top: 10px;margin-top: 11px;">Зарегистрироваться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End: 1 Row 1 Column -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
</body>

</html>
