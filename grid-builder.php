<?php
	require_once('includes/header.php');
?>
<div class="navbar navbar-inverse navbar-fixed-top navbar-layoutit">
  <div class="navbar-header">
    <button data-target="navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
      <span class="glyphicon-bar"></span>
      <span class="glyphicon-bar"></span>
      <span class="glyphicon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img src="img/favicon.png">
      ibootstrap
      <span class="label label-default">BETA</span>
    </a>
  </div>
  <div class="collapse navbar-collapse">

    <ul class="nav pull-right">
      <li>

        <div class="btn-group btn-donate pull-right"></div>

        <div class="btn-group">
          <a class="btn btn-xs btn-primary active" href="./en"><i class="glyphicon-globe glyphicon"></i>
            English
          </a>
          <button role="button" data-toggle="modal" data-target="#feedbackModal" id="feedback"
                  class="btn btn-xs btn-primary active"><i class="glyphicon-comment glyphicon"></i>
            联系我们
          </button>
        </div>
      </li>
    </ul>
    <ul class="nav" id="menu-layoutit">
      <li>
        <div class="btn-group" data-toggle="buttons-radio">
          <button type="button" id="edit" class="btn btn-xs btn-primary active"><i
                  class="glyphicon glyphicon-edit "></i>
            编辑
          </button>
          <button type="button" class="btn btn-xs btn-primary" id="devpreview">
            <i class="glyphicon-eye-close glyphicon"></i>
            开发
          </button>
          <button type="button" class="btn btn-xs btn-primary" id="sourcepreview">
            <i class="glyphicon-eye-open glyphicon"></i>
            预览
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-xs btn-primary" id="button-download-modal" data-target="#downloadModal"
                  role="button" data-toggle="modal"><i class="glyphicon-chevron-down glyphicon"></i>
            下载
          </button>
          <!--  <button class="btn btn-xs btn-primary" id="button-share-modal" href="/share/indexV3" role="button" data-toggle="modal" data-target="#shareModal"> <i class="glyphicon-share glyphicon"></i>
          分享
      </button>
      -->
          <button class="btn btn-xs btn-primary" href="#clear" id="clear">
            <i class="glyphicon-trash glyphicon"></i>
            清空
          </button>
        </div>
      </li>
    </ul>
  </div>
  <!--/.navbar-collapse -->
</div>
<!--/.navbar-fixed-top -->

<div class="container">
  <div class="row">
    <div class="">
      <div class="sidebar-nav">

        <ul class="nav nav-list accordion-group">
          <li class="nav-header">
            <div class="pull-right popover-info">
              <i class="glyphicon glyphicon-question-sign"></i>

              <div class="popover fade right">
                <div class="arrow"></div>
                <h3 class="popover-title">帮助</h3>

                <div class="popover-content">
                  在这里设置你的栅格布局, 栅格总数默认为12, 用空格分割每列的栅格值, 如果您需要了解更多信息，请访问
                  <a href="http://v3.bootcss.com/css/#grid">BOOTSTRAP栅格系统.</a>
                </div>
              </div>
            </div>
            <i class="glyphicon-plus glyphicon"></i>
            布局设置
          </li>
          <li class="rows" id="estRows">

            <div class="lyrow ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">
                <input value="12" class="form-control" type="text"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-12 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">
                <input value="6 6" class="form-control" type="text"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-6 column"></div>
                  <div class="col-md-6 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">
                <input value="8 4" class="form-control" type="text"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-8 column"></div>
                  <div class="col-md-4 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">
                <input value="4 4 4" class="form-control" type="text"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-4 column"></div>
                  <div class="col-md-4 column"></div>
                  <div class="col-md-4 column"></div>
                </div>
              </div>
            </div>

            <div class="lyrow ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon-remove glyphicon"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">
                <input value="2 6 4" class="form-control" type="text"></div>
              <div class="view">
                <div class="row clearfix">
                  <div class="col-md-2 column"></div>
                  <div class="col-md-6 column"></div>
                  <div class="col-md-4 column"></div>
                </div>
              </div>
            </div>

          </li>
        </ul>

        <ul class="nav nav-list accordion-group">
          <li class="nav-header">
            <i class="glyphicon glyphicon-plus"></i>
            基本CSS
            <div class="pull-right popover-info">
              <i class="glyphicon glyphicon-question-sign "></i>

              <div class="popover fade right">
                <div class="arrow"></div>
                <h3 class="popover-title">帮助</h3>

                <div class="popover-content">
                  将组件元素拖放入你需要放入的栅格列中。之后，你可以设置该元素的样式。如果你需要了解更多内容，请访问
                  <a target="_blank" href="http://v3.bootcss.com/css/">基本CSS.</a>
                </div>
              </div>
            </div>
          </li>
          <li class="boxes" id="elmBase">
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      对齐
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-left">靠左</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-center">居中</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-right">靠右</a>
                                      </li>
                                    </ul>
								</span>
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      标记
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="muted">禁用</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-warning">警告</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-error">错误</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-info">提示</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-success">成功</a>
                                      </li>
                                    </ul>
								</span>
							</span>

              <div class="preview">标题栏</div>
              <div class="view">
                <h3 contenteditable="true">h3. 这是一套可视化布局系统.</h3>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      对齐
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-left">靠左</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-center">居中</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-right">靠右</a>
                                      </li>
                                    </ul>
								</span>
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      标记
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="muted">禁用</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-warning">警告</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-error">错误</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-info">提示</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="text-success">成功</a>
                                      </li>
                                    </ul>
								</span>

								<a class="btn btn-xs btn-default" href="#" rel="lead">Lead</a>
							</span>

              <div class="preview">段落</div>
              <div class="view">
                <p><em>Git</em>
                  是一个分布式的版本控制系统，最初由 <strong>Linus Torvalds</strong>
                  编写，用作Linux内核代码的管理。在推出后，Git在其它项目中也取得了很大成功，尤其是在
                  <small>Ruby</small>
                  社区中。
                </p>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">地址</div>
              <div class="view">
                <address contenteditable="true"><strong>Twitter, Inc.</strong>
                  <br>
                  795 Folsom Ave, Suite 600
                  <br>
                  San Francisco, CA 94107
                  <br> <abbr title="Phone">P:</abbr>
                  (123) 456-7890
                </address>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="pull-right">Pull right</a>
							</span>

              <div class="preview">引用块</div>
              <div class="view clearfix">
                <blockquote contenteditable="true">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                  </p>
                  <small>
                    Someone famous
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </blockquote>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="list-unstyled">无样式</a>
								<a class="btn btn-xs btn-default" href="#" rel="list-inline">嵌入</a>
							</span>

              <div class="preview">无序列表</div>
              <div class="view">
                <ul contenteditable="true">
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit</li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ul>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="list-unstyled">无样式</a>
								<a class="btn btn-xs btn-default" href="#" rel="list-inline">嵌入</a>
							</span>

              <div class="preview">有序列表</div>
              <div class="view">
                <ol contenteditable="true">
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit</li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ol>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="dl-horizontal">竖向对齐</a>
							</span>

              <div class="preview">详细描述</div>
              <div class="view">
                <dl contenteditable="true">
                  <dt>Description lists</dt>
                  <dd>A description list is perfect for defining terms.</dd>
                  <dt>Euismod</dt>
                  <dd>
                    Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                  </dd>
                  <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                  <dt>Malesuada porta</dt>
                  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                  <dt>Felis euismod semper eget lacinia</dt>
                  <dd>
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus.
                  </dd>
                </dl>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      样式
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="table-striped">条纹</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="table-bordered">边框</a>
                                      </li>
                                    </ul>
								</span>
								<a class="btn btn-xs btn-default" href="#" rel="table-hover">鼠标指示</a>
								<a class="btn btn-xs btn-default" href="#" rel="table-condensed">紧凑</a>
							</span>

              <div class="preview">表格</div>
              <div class="view">
                <table class="table" contenteditable="true">
                  <thead>
                  <tr>
                    <th>编号</th>
                    <th>产品</th>
                    <th>交付时间</th>
                    <th>状态</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Default</td>
                  </tr>
                  <tr class="success">
                    <td>1</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Approved</td>
                  </tr>
                  <tr class="error">
                    <td>2</td>
                    <td>TB - Monthly</td>
                    <td>02/04/2012</td>
                    <td>Declined</td>
                  </tr>
                  <tr class="warning">
                    <td>3</td>
                    <td>TB - Monthly</td>
                    <td>03/04/2012</td>
                    <td>Pending</td>
                  </tr>
                  <tr class="info">
                    <td>4</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td>Call in to confirm</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="form-inline">嵌入</a>
							</span>

              <div class="preview">提交表单</div>
              <div class="view">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email"></div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password"></div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input id="exampleInputFile" type="file">

                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
              <span class="configuration"></span>

              <div class="preview">纵向表单</div>
              <div class="view">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input class="form-control" id="inputEmail3" placeholder="Email" type="email"></div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input class="form-control" id="inputPassword3" placeholder="Password" type="password"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      样式
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-primary">原生</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-info">信息</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-success">成功</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-warning">提醒</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-danger">危险</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-inverse">反转</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-link">链接</a>
                                      </li>
                                    </ul>
								</span>
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      尺寸
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="">
                                        <a href="#" rel="btn-lg">大</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-default">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-sm">小</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-xs">微型</a>
                                      </li>
                                    </ul>
								</span>

								<a class="btn btn-xs btn-default" href="#" rel="btn-block">通栏</a>
								<a class="btn btn-xs btn-default" href="#" rel="active">活动</a>
								<a class="btn btn-xs btn-default" href="#" rel="disabled">禁用</a>
							</span>

              <div class="preview">按钮</div>
              <div class="view">
                <button type="button" class="btn btn-default" contenteditable="true">按钮</button>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      样式
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="img-rounded">圆角</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="img-circle">圆圈</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="img-thumbnail">相框</a>
                                      </li>
                                    </ul>
								</span>
							</span>

              <div class="preview">图片</div>
              <div class="view">
                <img alt="140x140"
                     src="img/default_004.jpg">
              </div>
            </div>
          </li>
        </ul>

        <ul class="nav nav-list accordion-group">
          <li class="nav-header">
            <i class="glyphicon glyphicon-plus"></i>
            工具组件
            <div class="pull-right popover-info">
              <i class="glyphicon glyphicon-question-sign "></i>

              <div class="popover fade right">
                <div class="arrow"></div>
                <h3 class="popover-title">帮助</h3>

                <div class="popover-content">
                  将组件元素拖放入你需要放入的栅格列中。之后，你可以设置该组件的样式。如果你需要了解更多内容，请访问
                  <a target="_blank" href="http://v3.bootcss.com/components/">工具组件.</a>
                </div>
              </div>
            </div>
          </li>
          <li class="boxes" id="elmComponents">
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      尺寸
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-group-lg">大</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-group-md">中</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-group-sm">小</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="btn-group-xs">微型</a>
                                      </li>
                                    </ul>
								</span>
								<a class="btn btn-xs btn-default" href="#" rel="btn-group-vertical">竖向</a>
							</span>

              <div class="preview">按钮组</div>
              <div class="view">
                <div class="btn-group">
                  <button class="btn btn-default" type="button">
                    <i class="glyphicon glyphicon-align-left"></i>
                    左
                  </button>
                  <button class="btn btn-default" type="button">
                    <i class="glyphicon glyphicon-align-center"></i>
                    中
                  </button>
                  <button class="btn btn-default" type="button">
                    <i class="glyphicon glyphicon-align-right"></i>
                    右
                  </button>
                  <button class="btn btn-default" type="button">
                    <i class="glyphicon glyphicon-align-justify"></i>
                    全
                  </button>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="dropup">朝向</a>
							</span>

              <div class="preview">下拉菜单</div>
              <div class="view">
                <div class="btn-group">
                  <button class="btn btn-default" contenteditable="true">Action</button>
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" contenteditable="true">
                    <li>
                      <a href="#">操作</a>
                    </li>
                    <li class="disabled">
                      <a href="#">另一操作</a>
                    </li>
                    <li class="divider"><br></li>
                    <li>
                      <a href="#">其它</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      样式
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="">
                                        <a href="#" rel="nav-tabs">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="nav-pills">线框</a>
                                      </li>
                                    </ul>
								</span>
								<a class="btn btn-xs btn-default" href="#" rel="nav-stacked">切换格式</a>
							</span>

              <div class="preview">导航</div>
              <div class="view">
                <ul class="nav nav-tabs" contenteditable="true">
                  <li class="active">
                    <a href="#">首页</a>
                  </li>
                  <li>
                    <a href="#">简介</a>
                  </li>
                  <li class="disabled">
                    <a href="#">信息</a>
                  </li>
                  <li class="dropdown pull-right">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                      下拉 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">操作</a>
                      </li>
                      <li>
                        <a href="#">设置栏目</a>
                      </li>
                      <li>
                        <a href="#">更多设置</a>
                      </li>
                      <li class="divider"><br></li>
                      <li>
                        <a href="#">分割线</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">路径导航</div>
              <div class="view">

                <ul class="breadcrumb">
                  <li>
                    <a href="#" contenteditable="true">Home</a>
                  </li>
                  <li>
                    <a href="#" contenteditable="true">Library</a>
                  </li>
                  <li class="active" contenteditable="true">Data</li>
                </ul>

              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      尺寸
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="">
                                        <a href="#" rel="pagination-lg">大</a>
                                      </li>
                                      <li class="active">
                                        <a href="#" rel="">众</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="pagination-sm">小</a>
                                      </li>
                                    </ul>
								</span>

							</span>

              <div class="preview">分页</div>
              <div class="view">
                <ul class="pagination" contenteditable="true">
                  <li>
                    <a href="#">Prev</a>
                  </li>
                  <li>
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>
                    <a href="#">Next</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      样式
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="">
                                        <a href="#" rel="label-default">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="label-primary">Primary</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="label-success">Success</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="label-info">Info</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="label-warning">Warning</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="label-danger">Danger</a>
                                      </li>
                                    </ul>
								</span>
							</span>

              <div class="preview">标签</div>
              <div class="view">
                <span class="label label-default" contenteditable="true">标签</span>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
              <span class="configuration"></span>

              <div class="preview">徽章</div>
              <div class="view">
                <ul class="nav nav-pills" contenteditable="true">
                  <li class="active">
                    <a href="#">
                      <span class="badge pull-right">42</span>
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="badge pull-right">16</span>
                      More
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="well">Well</a>
							</span>

              <div class="preview">巨幕</div>
              <div class="view">
                <div class="jumbotron" contenteditable="true">
                  <h1>Hello, world!</h1>

                  <p>
                    This is a template for a simple marketing or informational
                    website. It includes a large callout called the hero unit and three
                    supporting pieces of content. Use it as a starting point to create
                    something more unique.
                  </p>

                  <p>
                    <a class="btn btn-primary btn-large" href="#">Learn more</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">页头</div>
              <div class="view">
                <div class="page-header">
                  <h1 contenteditable="true">
                    Example page header
                    <small>Subtext for header</small>
                  </h1>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">文本</div>
              <div class="view">
                <h2 contenteditable="true">Heading</h2>

                <p contenteditable="true">
                  Donec id elit non mi porta gravida at eget metus. Fusce
                  dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                  fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                  mollis euismod. Donec sed odio dui.
                </p>

                <p>
                  <a class="btn" href="#" contenteditable="true">View details »</a>
                </p>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">缩略图</div>
              <div class="view">
                <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="300x200"
                           src="img/default_006.jpg">

                      <div class="caption" contenteditable="true">
                        <h3>Thumbnail label</h3>

                        <p>
                          Cras justo odio, dapibus ac facilisis in, egestas eget
                          quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor
                          id nibh ultricies vehicula ut id elit.
                        </p>

                        <p>
                          <a class="btn btn-primary" href="#">Action</a>
                          <a class="btn" href="#">Action</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="300x200"
                           src="img/default.jpg">

                      <div class="caption" contenteditable="true">
                        <h3>Thumbnail label</h3>

                        <p>
                          Cras justo odio, dapibus ac facilisis in, egestas eget
                          quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor
                          id nibh ultricies vehicula ut id elit.
                        </p>

                        <p>
                          <a class="btn btn-primary" href="#">Action</a>
                          <a class="btn" href="#">Action</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="300x200"
                           src="img/default_007.jpg">

                      <div class="caption" contenteditable="true">
                        <h3>Thumbnail label</h3>

                        <p>
                          Cras justo odio, dapibus ac facilisis in, egestas eget
                          quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor
                          id nibh ultricies vehicula ut id elit.
                        </p>

                        <p>
                          <a class="btn btn-primary" href="#">Action</a>
                          <a class="btn" href="#">Action</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

							<span class="configuration">

								<a class="btn btn-xs btn-default" href="#" rel="progress-striped">条纹</a>
								<a class="btn btn-xs btn-default" href="#" rel="active">动画</a>
							</span>

              <div class="preview">进度条</div>
              <div class="view">
                <div class="progress">
                  <div class="progress-bar progress-success" style="width: 60%;"></div>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<a class="btn btn-xs btn-default" href="#" rel="well">嵌入</a>
							</span>

              <div class="preview">媒体</div>
              <div class="view">
                <div class="media">
                  <a href="#" class="pull-left">
                    <img src="img/default_002.jpg"
                         class="media-object"></a>

                  <div class="media-body" contenteditable="true">
                    <h4 class="media-heading">Nested media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in
                    vulputate at, tempus viverra turpis.
                    <div class="media">
                      <a href="#" class="pull-left">
                        <img src="img/default_002.jpg"
                             class="media-object"></a>

                      <div class="media-body" contenteditable="true">
                        <h4 class="media-heading">Nested media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                        scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in
                        vulputate at, tempus viverra turpis.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
              <span class="configuration"></span>

              <div class="preview">列表组</div>
              <div class="view">
                <div class="list-group" contenteditable="true">
                  <a href="#" class="list-group-item active">Home</a>

                  <div class="list-group-item">List header</div>
                  <div class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>

                    <p class="list-group-item-text">...</p>
                  </div>
                  <div class="list-group-item">
                    <span class="badge">14</span>
                    Help
                  </div>
                  <a class="list-group-item active">
                    <span class="badge">14</span>
                    Help
                  </a>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      样式
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="">
                                        <a href="#" rel="panel-default">Default</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="panel-primary">Primary</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="panel-success">Success</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="panel-info">Info</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="panel-warning">Warning</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="panel-danger">Danger</a>
                                      </li>
                                    </ul>
								</span>

							</span>

              <div class="preview">面板</div>
              <div class="view">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title" contenteditable="true">Panel title</h3>
                  </div>
                  <div class="panel-body" contenteditable="true">Panel content</div>
                  <div class="panel-footer" contenteditable="true">Panel footer</div>
                </div>
              </div>
            </div>

          </li>
        </ul>

        <ul class="nav nav-list accordion-group">
          <li class="nav-header">
            <i class="glyphicon glyphicon-plus"></i>
            JavaScript
            <div class="pull-right popover-info">
              <i class="glyphicon glyphicon-question-sign "></i>

              <div class="popover fade right">
                <div class="arrow"></div>
                <h3 class="popover-title">帮助</h3>

                <div class="popover-content">
                  将组件元素拖放入你需要放入的栅格列中。之后，你可以设置该javascript组件的样式。如果你需要了解更多内容，请访问
                  <a target="_blank" href="http://v3.bootcss.com/javascript/">JavaScript.</a>
                </div>
              </div>
            </div>
          </li>
          <li class="boxes mute" id="elmJS">
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>

              <div class="preview">遮罩窗体</div>
              <div class="view">
                <!-- Button to trigger modal -->
                <a id="myModalLink" href="#myModalContainer" role="button" class="btn" data-toggle="modal">触发遮罩窗体</a>

                <!-- Modal -->
                <div class="modal fade" id="myModalContainer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel" contenteditable="true">标题</h4>
                      </div>
                      <div class="modal-body" contenteditable="true">内容...</div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" contenteditable="true">关闭
                        </button>
                        <button type="button" class="btn btn-primary" contenteditable="true">保存</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      位置
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="navbar-static-top">头部</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="navbar-fixed-top">固定在头部</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="navbar-fixed-bottom">固定在底部</a>
                                      </li>
                                    </ul>
								</span>
								<a class="btn btn-xs btn-default" href="#" rel="navbar-inverse">反转</a>
                              <!--a class="btn btn-xs btn-default" href="#" rel="navbar-static-top">Static top</a>
                          <a class="btn btn-mini" href="#" rel="navbar-fixed-top">Navbar fixed top</a>
                          <a class="btn btn-mini" href="#" rel="navbar-fixed-bottom">Navbar fixed bottom</a-->
						</span>

              <div class="preview">导航栏</div>
              <div class="view">

                <nav class="navbar navbar-default" role="navigation">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active">
                        <a href="#">Link</a>
                      </li>
                      <li>
                        <a href="#">Link</a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Dropdown <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#">Action</a>
                          </li>
                          <li>
                            <a href="#">Another action</a>
                          </li>
                          <li>
                            <a href="#">Something else here</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#">Separated link</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#">One more separated link</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input class="form-control" placeholder="Search" type="text"></div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a href="#">Link</a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          Dropdown
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#">Action</a>
                          </li>
                          <li>
                            <a href="#">Another action</a>
                          </li>
                          <li>
                            <a href="#">Something else here</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#">Separated link</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <!-- /.navbar-collapse -->
                </nav>

              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>
              <span class="configuration"></span>

              <div class="preview">选项卡</div>
              <div class="view">
                <div class="tabbable" id="myTabs">
                  <!-- Only required for left/right tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a href="#tab1" data-toggle="tab" contenteditable="true">Section 1</a>
                    </li>
                    <li>
                      <a href="#tab2" data-toggle="tab" contenteditable="true">Section 2</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                      <p contenteditable="true">I'm in Section 1.</p>
                    </div>
                    <div class="tab-pane" id="tab2">
                      <p contenteditable="true">Howdy, I'm in Section 2.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>
						<span class="configuration">
							<span class="btn-group btn-group-xs">
								<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                  样式
                                  <span class="caret"></span>
                                </a>
								<ul class="dropdown-menu">
                                  <li class="">
                                    <a href="#" rel="alert-success">Success</a>
                                  </li>
                                  <li class="">
                                    <a href="#" rel="alert-info">Info</a>
                                  </li>
                                  <li class="">
                                    <a href="#" rel="alert-warning">Warning</a>
                                  </li>
                                  <li class="">
                                    <a href="#" rel="alert-danger">Danger</a>
                                  </li>
                                </ul>
							</span>

						</span>

              <div class="preview">提示框</div>
              <div class="view">
                <div class="alert alert-success alert-dismissable" contenteditable="true">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4>注意!</h4>
                  <strong>Warning!</strong>
                  Best check yo self, you're not looking too good.
                  <a href="#" class="alert-link">alert link</a>
                </div>
              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>

              <div class="preview">手风琴切换</div>
              <div class="view">
                <div class="panel-group" id="myAccordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a class="panel-title" data-toggle="collapse" data-parent="#myAccordion" href="#collapseOne"
                         contenteditable="true">Collapsible Group Item #1</a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body" contenteditable="true">Anim pariatur cliche...</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a class="panel-title" data-toggle="collapse" data-parent="#myAccordion" href="#collapseTwo"
                         contenteditable="true">Collapsible Group Item #2</a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body" contenteditable="true">Anim pariatur cliche...</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="box box-element ui-draggable">
              <a href="#close" class="remove label label-danger">
                <i class="glyphicon glyphicon-remove"></i>
                删除
              </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>

              <div class="preview">幻灯片</div>
              <div class="view">

                <div class="carousel slide" id="myCarousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                    <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img alt=""
                           src="img/default_008.jpg">

                      <div class="carousel-caption">
                        <h4>First Thumbnail label</h4>

                        <p>
                          Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id
                          nibh ultricies vehicula ut id elit.
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <img alt=""
                           src="img/default_003.jpg">

                      <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>

                        <p>
                          Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id
                          nibh ultricies vehicula ut id elit.
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <img alt=""
                           src="img/default_005.jpg">

                      <div class="carousel-caption">
                        <h4>Third Thumbnail label</h4>

                        <p>
                          Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id
                          nibh ultricies vehicula ut id elit.
                        </p>
                      </div>
                    </div>
                  </div>

                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>

              </div>
            </div>
          </li>
        </ul>

      </div>
    </div>
    <!--/span-->
    <div style="min-height: 754px;" class="demo ui-sortable">
      <div class="lyrow">
        <a href="#close" class="remove label label-danger">
          <i class="glyphicon glyphicon-remove"></i>
          删除
        </a>
			<span class="drag label label-default">
				<i class="glyphicon glyphicon-move"></i>
				拖动
			</span>

        <div class="preview">9 3</div>
        <div class="view">
          <div class="row clearfix">
            <div class="col-md-12 column ui-sortable">
              <div class="box box-element">
                <a href="#close" class="remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  删除
                </a>
							<span class="drag label label-default">
								<i class="glyphicon glyphicon-move"></i>
								拖动
							</span>
							<span class="configuration">
								<span class="btn-group btn-group-xs">
									<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                      位置
                                      <span class="caret"></span>
                                    </a>
									<ul class="dropdown-menu">
                                      <li class="active">
                                        <a href="#" rel="">默认</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="navbar-static-top">头部</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="navbar-fixed-top">固定在头部</a>
                                      </li>
                                      <li class="">
                                        <a href="#" rel="navbar-fixed-bottom">固定在底部</a>
                                      </li>
                                    </ul>
								</span>
								<a class="btn btn-xs btn-default" href="#" rel="navbar-inverse">反转</a>
                              <!--a class="btn btn-xs btn-default" href="#" rel="navbar-static-top">Static top</a>
                          <a class="btn btn-mini" href="#" rel="navbar-fixed-top">Navbar fixed top</a>
                          <a class="btn btn-mini" href="#" rel="navbar-fixed-bottom">Navbar fixed bottom</a-->
						</span>

                <div class="preview">导航栏</div>
                <div class="view">

                  <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse"
                              data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active">
                          <a href="#">Link</a>
                        </li>
                        <li>
                          <a href="#">Link</a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                            <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="#">Action</a>
                            </li>
                            <li>
                              <a href="#">Another action</a>
                            </li>
                            <li>
                              <a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Separated link</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">One more separated link</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input class="form-control" placeholder="Search" type="text"></div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                      <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="#">Link</a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                            <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="#">Action</a>
                            </li>
                            <li>
                              <a href="#">Another action</a>
                            </li>
                            <li>
                              <a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Separated link</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                  </nav>

                </div>
              </div>
              <div class="box box-element">
                <a href="#close" class="remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  删除
                </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>
						<span class="configuration">
							<a class="btn btn-xs btn-default active" href="#" rel="well">嵌入</a>
						</span>

                <div class="preview">Jumbotron</div>
                <div class="view">
                  <div class="jumbotron well" contenteditable="true">
                    <h1>Hello, world!</h1>

                    <p>
                      This is a template for a simple marketing or informational
                      website. It includes a large callout called the hero unit and three
                      supporting pieces of content. Use it as a starting point to create
                      something more unique.
                    </p>

                    <p>
                      <a class="btn btn-primary btn-large" href="#">Learn more</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lyrow" style="display: block;">
        <a href="#close" class="remove label label-danger">
          <i class="glyphicon glyphicon-remove"></i>
          删除
        </a>
		<span class="drag label label-default">
			<i class="glyphicon glyphicon-move"></i>
			拖动
		</span>

        <div class="preview">4 4 4</div>
        <div class="view">
          <div class="row clearfix">
            <div class="col-md-4 column ui-sortable" style="">
              <div class="box box-element">
                <a href="#close" class="remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  删除
                </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>

                <div class="preview">Text</div>
                <div class="view">
                  <h2 contenteditable="true">Heading</h2>

                  <p contenteditable="true">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                  </p>

                  <p>
                    <a class="btn" href="#" contenteditable="true">View details »</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 column ui-sortable" style="">
              <div class="box box-element">
                <a href="#close" class="remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  删除
                </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>

                <div class="preview">Text</div>
                <div class="view">
                  <h2 contenteditable="true">Heading</h2>

                  <p contenteditable="true">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                  </p>

                  <p>
                    <a class="btn" href="#" contenteditable="true">View details »</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 column ui-sortable" style="">
              <div class="box box-element">
                <a href="#close" class="remove label label-danger">
                  <i class="glyphicon glyphicon-remove"></i>
                  拖动
                </a>
						<span class="drag label label-default">
							<i class="glyphicon glyphicon-move"></i>
							拖动
						</span>

                <div class="preview">Text</div>
                <div class="view">
                  <h2 contenteditable="true">Heading</h2>

                  <p contenteditable="true">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                  </p>

                  <p>
                    <a class="btn" href="#" contenteditable="true">View details »</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/span-->
    <div id="download-layout">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active">
                    <a href="#">Link</a>
                  </li>
                  <li>
                    <a href="#">Link</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong
                            class="caret"></strong></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Action</a>
                      </li>
                      <li>
                        <a href="#">Another action</a>
                      </li>
                      <li>
                        <a href="#">Something else here</a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                        <a href="#">Separated link</a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                        <a href="#">One more separated link</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input class="form-control" type="text">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="#">Link</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong
                            class="caret"></strong></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Action</a>
                      </li>
                      <li>
                        <a href="#">Another action</a>
                      </li>
                      <li>
                        <a href="#">Something else here</a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                        <a href="#">Separated link</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </nav>
            <div class="jumbotron">
              <h1>
                Hello, world!
              </h1>

              <p>
                This is a template for a simple marketing or informational website.
                It includes a large callout called the hero unit and three supporting
                pieces of content. Use it as a starting point to create something more
                unique.
              </p>

              <p>
                <a class="btn btn-primary btn-large" href="#">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="col-md-4 column">
            <h2>
              Heading
            </h2>

            <p>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
              tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus. Etiam porta sem malesuada magna mollis
              euismod. Donec sed odio dui.
            </p>

            <p>
              <a class="btn" href="#">View details »</a>
            </p>
          </div>
          <div class="col-md-4 column">
            <h2>
              Heading
            </h2>

            <p>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
              tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus. Etiam porta sem malesuada magna mollis
              euismod. Donec sed odio dui.
            </p>

            <p>
              <a class="btn" href="#">View details »</a>
            </p>
          </div>
          <div class="col-md-4 column">
            <h2>
              Heading
            </h2>

            <p>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
              tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus. Etiam porta sem malesuada magna mollis
              euismod. Donec sed odio dui.
            </p>

            <p>
              <a class="btn" href="#">View details »</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/row-->

  <script type="text/javascript">
    $(document).ready(function () {
      // alert($('#download-layout').html());
    });
  </script>
</div>
<!--/.fluid-container-->

<script type="text/javascript">

  function saveLayout() {
    return;
    $.ajax({
      type: "POST",
      url: "/build_v3/saveLayout",
      data: {'layout-v3': $('.demo').html()},
      success: function (data) {
        //updateButtonsVisibility();
      }
    });
  }

  //下载代码
  function downloadLayout() {
    $.ajax({
      type: "POST",
      url: "/build_v3/downloadLayout",
      data: {'layout-v3': $('#download-layout').html()},
      success: function (data) {
        window.location.href = '/build_v3/download';
      }
    });
  }

  function downloadHtmlLayout() {
    $.ajax({
      type: "POST",
      url: "/build_v3/downloadLayout",
      data: {'layout-v3': $('#download-layout').html()},
      success: function (data) {
        window.location.href = '/build_v3/downloadHtml';
      }
    });
  }

  function undoLayout() {

    $.ajax({
      type: "POST",
      url: "/build_v3/getPreviousLayout",
      data: {},
      success: function (data) {
        undoOperation(data);
      }
    });
  }

  function redoLayout() {

    $.ajax({
      type: "POST",
      url: "/build_v3/getPreviousLayout",
      data: {},
      success: function (data) {
        redoOperation(data);
      }
    });
  }

  $(document).on('hidden.bs.modal', function (e) {
    $(e.target).removeData('bs.modal');
  });

  $('body').on('click', '#continue-share-non-logged', function () {
    $('#share-not-logged').hide();
    $('#share-logged').removeClass('hide');
    $('#share-logged').show();
  });

  $('body').on('click', '#continue-download-non-logged', function () {
    $('#download-not-logged').hide();
    $('#download').removeClass('hide');
    $('#download').show();
    $('#downloadhtml').removeClass('hide');
    $('#downloadhtml').show();
    $('#download-logged').removeClass('hide');
    $('#download-logged').show();
  });


</script>

<div style="display: none;" class="modal fade" id="downloadModal" tabindex="-1" role="dialog"
     aria-labelledby="downloadModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">下载</h4>
      </div>
      <div class="modal-body">

        <div id="download-logged" class="">
          <div class="alert alert-info">已在下面生成干净的HTML, 可以复制粘贴代码到你的body内<br>
            请使用bootstrap3.0.1,可在这里下载 <a target="_blank" href="http://www.bootcdn.cn/bootstrap/">http://www.bootcdn.cn/bootstrap</a>
          </div>
          <p>
				<textarea>&lt;div class="container"&gt;
	&lt;div class="row clearfix"&gt;
		&lt;div class="col-md-12 column"&gt;
			&lt;nav class="navbar navbar-default" role="navigation"&gt;
				&lt;div class="navbar-header"&gt;
					 &lt;button type="button" class="navbar-toggle"
data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
&lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;&lt;span
class="icon-bar"&gt;&lt;/span&gt;&lt;span
class="icon-bar"&gt;&lt;/span&gt;&lt;span
class="icon-bar"&gt;&lt;/span&gt;&lt;/button&gt; &lt;a
class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
				&lt;/div&gt;

				&lt;div class="collapse navbar-collapse"
id="bs-example-navbar-collapse-1"&gt;
					&lt;ul class="nav navbar-nav"&gt;
						&lt;li class="active"&gt;
							 &lt;a href="#"&gt;Link&lt;/a&gt;
						&lt;/li&gt;
						&lt;li&gt;
							 &lt;a href="#"&gt;Link&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="dropdown"&gt;
							 &lt;a href="#" class="dropdown-toggle"
data-toggle="dropdown"&gt;Dropdown&lt;strong
class="caret"&gt;&lt;/strong&gt;&lt;/a&gt;
							&lt;ul class="dropdown-menu"&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Another action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Something else here&lt;/a&gt;
								&lt;/li&gt;
								&lt;li class="divider"&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Separated link&lt;/a&gt;
								&lt;/li&gt;
								&lt;li class="divider"&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;One more separated link&lt;/a&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
					&lt;form class="navbar-form navbar-left" role="search"&gt;
						&lt;div class="form-group"&gt;
							&lt;input class="form-control" type="text" /&gt;
						&lt;/div&gt; &lt;button type="submit" class="btn
btn-default"&gt;Submit&lt;/button&gt;
					&lt;/form&gt;
					&lt;ul class="nav navbar-nav navbar-right"&gt;
						&lt;li&gt;
							 &lt;a href="#"&gt;Link&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="dropdown"&gt;
							 &lt;a href="#" class="dropdown-toggle"
data-toggle="dropdown"&gt;Dropdown&lt;strong
class="caret"&gt;&lt;/strong&gt;&lt;/a&gt;
							&lt;ul class="dropdown-menu"&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Another action&lt;/a&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Something else here&lt;/a&gt;
								&lt;/li&gt;
								&lt;li class="divider"&gt;
								&lt;/li&gt;
								&lt;li&gt;
									 &lt;a href="#"&gt;Separated link&lt;/a&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;

			&lt;/nav&gt;
			&lt;div class="jumbotron"&gt;
				&lt;h1&gt;
					Hello, world!
				&lt;/h1&gt;
				&lt;p&gt;
					This is a template for a simple marketing or informational website.
 It includes a large callout called the hero unit and three supporting
pieces of content. Use it as a starting point to create something more
unique.
				&lt;/p&gt;
				&lt;p&gt;
					 &lt;a class="btn btn-primary btn-large" href="#"&gt;Learn
more&lt;/a&gt;
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row clearfix"&gt;
		&lt;div class="col-md-4 column"&gt;
			&lt;h2&gt;
				Heading
			&lt;/h2&gt;
			&lt;p&gt;
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
massa justo sit amet risus. Etiam porta sem malesuada magna mollis
euismod. Donec sed odio dui.
			&lt;/p&gt;
			&lt;p&gt;
				 &lt;a class="btn" href="#"&gt;View details »&lt;/a&gt;
			&lt;/p&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4 column"&gt;
			&lt;h2&gt;
				Heading
			&lt;/h2&gt;
			&lt;p&gt;
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
massa justo sit amet risus. Etiam porta sem malesuada magna mollis
euismod. Donec sed odio dui.
			&lt;/p&gt;
			&lt;p&gt;
				 &lt;a class="btn" href="#"&gt;View details »&lt;/a&gt;
			&lt;/p&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4 column"&gt;
			&lt;h2&gt;
				Heading
			&lt;/h2&gt;
			&lt;p&gt;
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
massa justo sit amet risus. Etiam porta sem malesuada magna mollis
euismod. Donec sed odio dui.
			&lt;/p&gt;
			&lt;p&gt;
				 &lt;a class="btn" href="#"&gt;View details »&lt;/a&gt;
			&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</textarea>
          </p>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->

  <script type="text/javascript">
    downloadLayoutSrc();
    $('#modal-download-sign-in-button').click(function (event) {
      $('.help-inline').hide();
      var form = $('#boxDownloadLoginForm');
      var ajaxLoginUrl = '/login/ajaxLogin';
      jQuery.ajax({
        type: "post",
        dataType: "json",
        url: ajaxLoginUrl,
        data: form.serialize(),
        success: function (response) {
          if (response.success) {
            $('#download-not-logged').hide();
            $('#download').removeClass('hide');
            $('#download').show();
            $('#downloadhtml').removeClass('hide');
            $('#downloadhtml').show();
            $('#download-logged').removeClass('hide');
            $('#download-logged').show();
          } else {
            if (response.errors && response.errors.length > 0) {
              $.each(response.errors, function (i, item) {
                $('#' + item.field + '-download-error').html(item.error);
                $('#' + item.field + '-download-error').show();
              });
            }
          }
        },
        error: function (response) {

        }
      });

      return false;
    });
  </script>

</div>

<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel"
     aria-hidden="true"></div>
<div style="display: none;" class="modal fade" id="feedbackModal" tabindex="-1" role="dialog"
     aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">联系我们</h4>
      </div>
      <div class="modal-body">

        <div id="download-logged" class="">
          <div class="alert alert-info">
            Github:
            <a href="https://github.com/savokiss/layoutit">https://github.com/savokiss/layoutit</a>
          </div>
        </div>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php
	require_once('includes/footer.php');
?> 