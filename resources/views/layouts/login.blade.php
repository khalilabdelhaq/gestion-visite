<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="shortcut icon" type="image/x-icon" href="img/icons/logo_interieur.ico" />
  <title>عمالة إقليم الفقيه بن صالح</title>
  <link type="text/css" href="./css/style.css" rel="stylesheet" />
  <!--[if lte IE 6]>
    <link type="text/css" href="./css/style_ie6.css" rel="stylesheet" />
  <![endif]-->
</head>

<body>
<div id="page">

  <!-- content -->
  <div id="container">
    <div id="logbox">
        	    <div id="logbox-title">النظام المعلوماتي لتذبير المرتفقين</div>
        		<div id="logbox_left"></div>
        		<div id="logbox_right">
								<form class="logbox-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
    	  				<p>
    			  			<label for="username">الحساب</label>
    						<input type="text" name="username" id="username" value="" />
    					</p>
    					<p>
    						<label for="password">كلمة المرور</label>
    						<input type="password" name="password" id="password" required/>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                 @endif
																<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>تذكرني
                                    </label>
                                </div>
                            </div>
                        </div>
                        </p>
												<div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
														<input type="submit" name="submit" value=" دخول" class="button" />
                            </div>
                        </div>
    				</form>
				</div>
                <div class="clear"></div>
      	</div>
  </div>

</div>
</body>

</html>