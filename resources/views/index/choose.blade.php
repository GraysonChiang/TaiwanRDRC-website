<div class="row">
    <div class="col-lg-offset-1 col-lg-4 col-xs-12">
        <h3 class="text-center fadeInLeft " style="text-align: center">
            最新消息
        </h3>
        <hr style="border: 1px solid lightgray; margin-top: 10px">
        <div style="list-style-type: none;line-height: 25px; padding: 0px;">
            @foreach ($result['data'] as $data )
                <div class="row">
                    <div class="col-lg-3 col-xs-10 " >
                    <span style="color:#1BC0DC;font-size: 20px;">
                        <b>{{ $data->data }}</b>
                    </span>
                        &nbsp;&nbsp;
                    </div>
                    <div class="col-lg-9 col-xs-11 ">
                    <span>
                    <a type="button"
                       href=""
                       data-toggle="modal"
                       data-target="#myModal-{{ $data->id }}"
                       style="text-decoration: none;color: #999999;font-size: 20px;">
                    {{ $data->title }}
                    </a>
                </span>
                    </div>
                </div>
            @endforeach
        </div>

        @foreach ($result['data'] as $data )
            <div class="modal fade" id="myModal-{{ $data->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="">
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{ $data->title }}</h4>
                        </div>
                        <div class="modal-body" style="margin-top: 20px;margin-bottom: 20px;">
                       <span style="font-size: 30px; line-height: 50px;">
                           {{ $data->content }}
                        </span>
                            <br>
                            <br>
                            @if($data->file1)
                                <span style="font-size: 25px;">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <a href="https://rdrc.mnd.gov.tw/rdrc/{{ $data->file1 }}" target="_blank">附件1</a>
                                </span>
                            @endif

                            @if($data->file2)
                                <span style="font-size: 25px;">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <a href="https://rdrc.mnd.gov.tw/rdrc/{{ $data->file2 }}" target="_blank">附件2</a>
                                </span>
                            @endif

                            @if($data->file3)
                                <span style="font-size: 25px;">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <a href="https://rdrc.mnd.gov.tw/rdrc/{{ $data->file3 }}" target="_blank">附件3</a>
                                </span>
                            @endif
                        </div>
                        <div class="modal-footer" style="text-align: left">
                            <span>發布單位：{{ $data->dep }} </span>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-lg-offset-1 col-lg-4 col-xs-12">
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-6 col-xs-6   process">
                <ul class="text-center list-inline  ">
                    <li style="height: 15em; width: 15em; line-height: 22em;">
                        <span style="font-size: 25px" class="scroll">
                            <a href="#study" style="text-decoration: none;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b>升學</b>
                                </a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-xs-6   process">
                <ul class="text-center list-inline">

                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span class="scroll" style="font-size: 25px">
                            <a href="#work" style="text-decoration: none;">
                                    <i class="fa fa-user" aria-hidden="true"></i><b>就業</b>
                                </a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6  col-xs-6 process">
                <ul class="text-center list-inline  ">
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span style="font-size: 25px">
                            <a href="https://rdrc.mnd.gov.tw/rdrcnew/tpry/healthreserve.asp?item=92" target="_blank" style="text-decoration: none;">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i><b>體檢</b>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6  col-xs-6 process">
                <ul class="text-center list-inline  ">
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span class="scroll" style="font-size: 25px">
                            <a href="#register" style="text-decoration: none;">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i><b>報名</b>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>