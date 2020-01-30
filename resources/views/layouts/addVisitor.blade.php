@extends('layouts.app')
@section('content')               
               <!-- block Fade in/out Message box -->
            <!--
                <h3><span class="title">Fade in/out Message box</span><span class="underlined">&nbsp;</span></h3>
                <input type="button" class="button" value="Click here to show message box" name="open_msgbox" id="open_msgbox" />
                <div class="msgbox" id="msgbox1">
                    <div class="icon"><img src="img/icons/alert.gif" alt="" title="" /></div>
                    <div class="text">
                        This block is used to display messages ( e.g. Your Page was successfully updated. )
                        <br />
                        click icon to close this message box!<br />
                    </div>
                    <div class="close"><a href="#" id="close_msgbox" title="Close message box"><img src="img/icons/icon_minus.gif" alt="" title="" /></a></div>
                    <div class="clear"></div>
                </div>
                <!-- end block Fade in/out Message box -->

           
                
                <!-- block example form -->
                <center>
                <h3><span class="title">تسجيل جديد</span><span>&nbsp;</span></h3>
                {{ Form::open(['route' => 'visitors.store']) }}
                <fieldset>
                <legend>تسجيل جديد</legend>
    				<table>
                    <tr><td>{{Form::text('prenom')}}<td><label>الإسم الشخصي</label></td></tr>
                    <tr><td>{{Form::text('nom')}}<td><label>الإسم العائلي</label></td></tr>
                    <tr><td>{{Form::text('cin')}}<td><label>ب.ت.و</label></td></tr>
                    <tr>
                    <td>
                    {!! Form::select('service', 
                        array('الكتابة العامة' => 'الكتابة العامة',
                        'إدارة المجلس الإقليمي' => 'إدارة المجلس الإقليمي',
                        'قسم العمل الاجتماعي'=>'قسم العمل الاجتماعي',
                        'قسم الشؤون القروية'=>'قسم الشؤون القروية', 
                        'قسم الجماعات المحلية' => 'قسم الجماعات المحلية',
                        'قسم التعمير و البيئة'=>'قسم التعمير و البيئة', 
                        'قسم الشؤون الاقتصادية والتنسيق'=>'قسم الشؤون الاقتصادية والتنسيق', 
                        'قسم الموارد البشرية و الوسائل العامة'=>'قسم الموارد البشرية و الوسائل العامة', 
                        'مصلحة الشكايات'=>'مصلحة الشكايات', 
                        'مصلحة الهجرة و جوازات السفر'=>'مصلحة الهجرة و جوازات السفر', 
                        'مصلحة حمل السلاح و الصيد'=>'مصلحة حمل السلاح و الصيد',
                        'إدارة القيادة الإقليمية للقوات المساعدة'=>'إدارة القيادة الإقليمية للقوات المساعدة',
                        'الحالة المدنية'=>'الحالة المدنية',
                        'أبوستيل'=>'أبوستيل',
                        'المساعدة الطبية'=>'المساعدة الطبية',
                        ), 
                            null,[]) !!}
                    
                    <td><label>المصلحة المعنية</label></td>
    
                    </tr>
         
                    </table>
                    {{Form::submit('تسجيل',array('class' => 'buttonn'))}}
        				
                </fieldset>
				{{ Form::close() }}
                <!-- end block example form -->


                <div class="clear"></div>
                </center>
                @endsection