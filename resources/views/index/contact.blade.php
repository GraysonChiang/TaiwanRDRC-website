<!--Contact Starts-->
<div class="container contactform center">

    <div class="row wowload fadeInLeftBig" style="margin-top: 50px">
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">

            <h2 class="text-center  wowload fadeInUp" style="margin: 0px">聯絡我們</h2>
            <hr style="border: 1px solid lightgray; width: 100% ">

            <span style="text-align: center;font-size: 16px;">
                    如有任何疑問，請留下您的正確資料，我們會在最短的時間內與您聯繫
                </span>
        </div>
    </div>

    <div class="row wowload fadeInLeftBig" style="margin-top: 50px">
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">

            <form action="{{ asset('/messagePost') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="姓名">
                <input type="text" name="phone" placeholder="手機號碼">
                <select name="type" class="selectpicker" style="width: 100%;
                                                height: 3.5em;
                                                -webkit-appearance: none;
                                                -webkit-border-radius: 1px;
                                                margin-bottom: 20px;
                                                padding-left: 14px;">
                    <option >====請選擇====</option>
                    <option value="士兵">志願役士兵</option>
                    <option value="專軍">專業軍士官班</option>
                    <option value="預校">中正預校</option>
                    <option value="二專">士官二專班</option>
                    <option value="正期">正期班</option>
                    <option value="預官">大專考選預官(士)</option>
                    <option value="飛常">飛行常備軍官班</option>
                    <option value="軍情">軍情局專業軍專班</option>
                </select>


                <textarea rows="5" name="content" placeholder="請輸入文字..."></textarea>
                <button class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i>
                    Send
                </button>
            </form>
        </div>
    </div>


</div>