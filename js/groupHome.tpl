{/<include "header.tpl">/}
     <!-- /GROUPHOME START -->
      <section id="content">
        <section class="vbox">
          <header class="header bg-white b-b b-light">
            <p>{/<$groupType>/} / {/<$groupName>/}</p>
          </header>
          <section class="scrollable">
            <section class="hbox stretch">
              <aside class="aside-lg bg-light lter b-r">
                <section class="vbox">
                  <section class="scrollable">
                    <div class="wrapper">
                      <div class="clearfix m-b"> <a href="#" class="pull-left thumb m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                        <div class="clear">
                          <div class="h3 m-t-xs m-b-xs">{/<$groupName>/}</div>
                          <small class="text-muted"><i class="fa fa-map-marker"></i>{/<$groupLocation>/}</small> </div>
                      </div>
                      <div class="panel wrapper panel-success">
                        <div class="row">
                          <div class="col-xs-4"> <a href="#members" data-toggle="tab"> <span class="m-b-xs h4 block">{/<$groupMemberCount>/}</span> <small class="text-muted">组内成员</small> </a> </div>
                          <div class="col-xs-4"> <a href="#followers" data-toggle="tab"> <span class="m-b-xs h4 block">{/<$groupFollowerCount>/}</span> <small class="text-muted">关注者</small> </a> </div>
                          <div class="col-xs-4"> <a href="#"> <span class="m-b-xs h4 block">{/<$groupActCount>/}</span> <small class="text-muted">事件</small> </a> </div>
                        </div>
                      </div>
                      <div class="btn-group btn-group-justified m-b"> 
                      {/<if $groupAccess == 0>/}
                        <a class="btn btn-primary btn-rounded" data-toggle="button"><span class="text"> <i class="fa fa-eye-slash"></i> 解散集体</span> <span class="text-active"> <i class="fa fa-eye-slash"></i> 处理中 </span> </a>
                        {/<elseif $groupAccess lt 3>/}
                         <a class="btn btn-primary btn-rounded" data-toggle="button"><span class="text"> <i class="fa fa-eye-slash"></i> 退出集体</span><span class="text-active"> <i class="fa fa-eye-slash"></i> 处理中 </span> </a>
                        {/<elseif $groupAccess eq 3>/}
                        <a class="btn btn-primary btn-rounded" data-toggle="button"><span class="text"> <i class="fa fa-eye-slash"></i> 取消关注 </span> <span class="text-active"> <i class="fa fa-eye-slash"></i> 处理中 </span></a>
                        {/<else>/}
                      <a class="btn btn-primary btn-rounded" data-toggle="button"> <span class="text"> <i class="fa fa-eye"></i> 关注 </span> <span class="text-active"> <i class="fa fa-eye-slash"></i> 处理中 </span></a>
                      {/</if>/}
                       <a class="btn btn-dark btn-rounded" data-loading-text="连接中" href="?do=updtsc"> <i class="fa fa-pencil"></i> 成绩录入 </a> </div>
                       
                      <div> <small class="text-uc text-xs text-muted">我在本组的身份</small>{/<if $groupAccess eq '0'>/}
                        <p>超级管理员</p><p> <a class="btn-sm btn-dark btn-rounded" href="?do=14&i={/<$groupID>/}">管理考试</a> <a class="btn-sm btn-success btn-rounded" href="?do=vgsc&i={/<$groupID>/}">查看集体成绩</a></p>
                        {/<elseif $groupAccess eq '1'>/}
                        <p>管理员</p><p>  <a class="btn-sm btn-dark btn-rounded" href="?do=14&i={/<$groupID>/}">管理考试</a><a class="btn-sm btn-success btn-rounded" href="?do=vgsc&i={/<$groupID>/}">查看集体成绩</a></p>
                        {/<elseif $groupAccess eq '2'>/}
                        <p>组内成员</p>
                        {/<elseif $groupAccess eq '3'>/}
                        <p>编外关注者</p>
                        {/<else>/}
                        <p>访客</p>
                        {/</if>/}
                        <p><a class="btn-sm btn-danger btn-rounded" href="?do=vmsc&i={/<$groupID>/}">参照当前集体浏览成绩报表</a></p>
                        <small class="text-uc text-xs text-muted">集体描述</small>
                        <p>{/<$groupDescription>/}</p>
                        <div class="line"></div>
                        <small class="text-uc text-xs text-muted">连携方式</small>
                        <p class="m-t-sm"> <a href="#" class="btn btn-rounded btn-red btn-icon"><i class="fa fa-weibo"></i></a> <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-renren"></i></a> <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a> </p>
                      </div>
                    </div>
                  </section>
                </section>
              </aside>
              <aside class="bg-white">
                <section class="vbox">
                  <header class="header bg-light bg-gradient">
                    <ul class="nav nav-tabs nav-white">
                      <li class="active"><a href="#activity" data-toggle="tab">事件表</a></li>
                      <li class=""><a href="#members" data-toggle="tab">成员</a></li>
                      <li class=""><a href="#followers" data-toggle="tab">关注者</a></li>
                      {/<if $groupAccess lt '2'>/}
                      <li class=""><a href="#interaction" data-toggle="tab">集体配置</a></li>{/</if>/}
                    </ul>
                  </header>
                  <section class="scrollable">
                    <div class="tab-content">
                      <div class="tab-pane active" id="activity">
                        <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                        
                        {/<if $groupActCount neq '0'>/}
                        {/<section name=sec1 loop=$actdata start=0>/}
                        {/<if $actdata[sec1]['type'] eq 's'>/}
                          <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a>  <small class="pull-right">{/<$actdata[sec1]['time']>/}</small> <strong class="block"><a href="?do=s&si={/<$actdata[sec1]['actid']>/}" class="clear">{/<$actdata[sec1]['actname']>/}</a></strong><small>由{/<$actdata[sec1]['creator']>/}发起的信息收集项目<p class='pull-right'><a class="btn-sm btn-light btn-rounded" href="?do=s&si={/<$actdata[sec1]['actid']>/}">参与</a>{/<if $groupAccess lt '2'>/}<a class="btn-sm btn-primary btn-rounded" href="?do=11&si={/<$actdata[sec1]['actid']>/}">编辑</a><a class="btn-sm btn-dark btn-rounded" href="?do=vdt&si={/<$actdata[sec1]['actid']>/}">查看结果</a>{/</if>/}</p></small> </li>
                          {/<elseif $actdata[sec1]['type'] eq 't'>/}
                           <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a>  <small class="pull-right">{/<$actdata[sec1]['time']>/}</small> <strong class="block"><a href="?do=t&ti={/<$actdata[sec1]['actid']>/}" class="clear">{/<$actdata[sec1]['actname']>/}</a></strong><small>由{/<$actdata[sec1]['creator']>/}发起的成绩统计项目  {/<if $groupAccess lt '2'>/}<p class='pull-right'><a class="btn-sm btn-primary btn-rounded" href="?do=11&si={/<$actdata[sec1]['actid']>/}">编辑</a><a class="btn-sm btn-dark btn-rounded" href="?do=vdt&si={/<$actdata[sec1]['actid']>/}">查看成绩统计</a></p>{/</if>/}</small> </li>
                          {/</if>/}
                          {/</section>/}
                          {/<else>/}
                          <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">暂无事件</small> <strong class="block">这里没有事件</strong> <small>或您没有权限查看此集体的事件表</small> </a> </li>
                      {/</if>/}
                        </ul>
                      </div>
                      <div class="tab-pane" id="members">
                        <div class="text-center wrapper">
                          {/<if $groupMemberCount neq '0'>/}
                        {/<section name=sec1 loop=$memberdata start=0>/}
                          <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a>  <small class="pull-right">成员</small> <strong class="block"><a href="?do=u&ui={/<$memberdata[sec1]['userid']>/}" class="clear">{/<$memberdata[sec1]['trnm']>/}</a></strong> </li>
                          {/</section>/}
                          {/<else>/}
                          <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">暂无成员</small> <strong class="block">此集体没有成员</strong> <small>或您没有权限查看此集体的事件表</small> </a> </li>
                      {/</if>/}
                        </div>
                      </div>
                      
                       <div class="tab-pane" id="followers">
                        <div class="text-center wrapper"> 
                        {/<if $groupFollowerCount neq '0'>/}
                        {/<section name=sec1 loop=$followerdata start=0>/}
                          <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a>  <small class="pull-right">编外关注者</small> <strong class="block"><a href="?do=u&ui={/<$followerdata[sec1]['userid']>/}" class="clear">{/<$followerdata[sec1]['trnm']>/}</a></strong> </li>
                          {/</section>/}
                          {/<else>/}
                          <li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">暂无关注者</small> <strong class="block">此集体没有人关注</strong> <small>或您没有权限查看此集体</small> </a> </li>
                      {/</if>/}
                         </div>
                      </div>
                      {/<if $groupAccess lt '2'>/}
                      <div class="tab-pane" id="interaction">
                      <div class='wrapper'>
                      <label>集体报表</label>
                      <button id='viewreport' class='btn btn-dark'>暂无报表</button>
                      </div>
                        <div class="wrapper"> 
                        <p><label>添加成员</label></p>
                       <p> <select data-required="true" class="form-control m-t" id="invkeyType">
                        <option value="2">邀请为成员</option>
                            <option value="3">邀请关注</option>
                          </select><button id='gnrtkey' class='btn btn-success' onclick="gnrtk();">生成邀请码</button>
                      </p><p><span id='key'> 邀请码用于新用户与您的集体建立关联。
                        </span></p>
                        </div>
                      </div>{/</if>/}
                    </div>
                  </section>
                </section>
              </aside>
              <!--THIRD ASIDE-->
              <aside class="aside-lg col-lg-4 b-l">
                <section class="vbox">
                  <section class="scrollable">
                    <div class="wrapper">
                      <section class="panel panel-default" id='postsendpanel'>
                        <form>
                          <textarea class="form-control no-border" id='postconttxt' rows="3" placeholder="近来何而为之?"></textarea>
                        </form>
                        <footer class="panel-footer bg-light lter">
                          <button class="btn btn-info pull-right btn-sm" onclick="postkp();">展帖</button>
                          <ul class="nav nav-pills nav-sm">
                            <li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
                          </ul>
                        </footer>
                      </section>
                      <section class="panel panel-default">
                        <h4 class="font-thin padder">看板</h4>
                        <ul class="list-group" id='postitems'>
                        {/<if $postcount eq 0>/}
                          <li class="list-group-item" id='nopost'>
                            <p>没有内容</p>
                            <small class="block text-muted"><i class="fa fa-quote-left"></i>看板暂无内容，您可以在上方刷板。</small> </li>
                            {/<else>/}
                            {/<section name=sec1 loop=$postdata start=0>/}
                             <li class="list-group-item">
                            <p>{/<$postdata[sec1]['content']>/}</p>
                            <small class="block text-muted">{/<$postdata[sec1]['sender']>/} / <i class="fa fa-clock-o"></i>{/<$postdata[sec1]['time']>/} </small> </li>
                            {/</section>/}
                            {/</if>/}
                        </ul>
                      </section>
                      <section class="panel clearfix bg-info lter">
                        <div class="panel-body"> <a href="#" class="thumb pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
                          <div class="clear"> <a href="#" class="text-info">@{/<$groupName>/} <i class="fa fa-weibo"></i>#{/<$groupType>/}#</a> <small class="block text-muted">{/<$groupFollowerCount>/} 关注 / {/<$groupMemberCount>/} 成员</small> <a href="#" class="btn btn-xs btn-success m-t-xs">关注</a> </div>
                        </div>
                      </section>
                    </div>
                  </section>
                </section>
              </aside>
              
              <!--3ASIDE END-->
              
              
            </section>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
           {/<include "footer.tpl">/}
           
           
        <script src="../account/js/jquery.js"></script>
        <script>
function gnrtk(){
			var ac=$('#invkeyType').val();
		$.ajax({url:"../api/GroupService.php",data:"do=gnrtivk&gid={/<$groupID>/}}&access="+ac,type:"POST",success: function(json)
		{
		json=$.parseJSON(json);
			if(json.status=='0')
			{
				$("#gnrtkey").hide(1000);
				
				showqw("<input class='search__input' name='search' type='search' placeholder='邀请码' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>请使用此邀请码:"+json.key+"<br>将其发送给未加入本集体的Cheelem用户使其拥有加入此集体的途径。此邀请码一小时内有效。</span><button class='btn-lg btn-dark' id='qw-btn' onclick='closeQWindow();'>确定</button>");
				
				$("#key").html("<br>请使用此邀请码: <br>"+json.key+"<br>将其发送给未加入本集体的Cheelem用户使其拥有加入此集体的途径。<br>此邀请码一小时内有效。");
			}
			else
			{
				showqw("<input class='search__input' name='search' type='search' placeholder='很抱歉...' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>我们遇到了一些错误，请稍后重试。若此信息持续出现，请向我们反馈。</span><button class='btn-lg btn-dark' id='qw-btn' onclick='closeQWindow();'>确定</button>");
			}
			
			},error:function(){
				showqw("<input class='search__input' name='search' type='search' placeholder='很抱歉...' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>我们遇到了一些错误，请稍后重试。若此信息持续出现，请向我们反馈。</span><button class='btn-lg btn-dark' id='qw-btn' onclick='closeQWindow();'>确定</button>");
				}});
		}
		function postkp()
		{
			
			postcontent=$('#postconttxt').val();
			if(postcontent=='')
			{
				showqw("<input class='search__input' name='search' type='search' placeholder='似乎缺了些什么...' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>请将需要展帖的内容填写完整。</span><button class='btn-lg btn-dark' id='qw-btn' onclick='closeQWindow();'>确定</button>");
				return false;
			}
			$.ajax({url:"../api/GroupService.php",data:"do=pstkp&gid={/<$groupID>/}}&content="+postcontent,type:"POST",success: function(data)
		{
			if(data=='0')
			{
				$("#nopost").hide(600);
				$("#postsendpanel").fadeOut(500).fadeIn(700);
				$('#postconttxt').val('');
				$("#postitems").prepend("<li id='newpostitem' style='display:none' class=\"list-group-item\"><p>"+postcontent+"</p><small class=\"block text-muted\">我 / <i class=\"fa fa-clock-o\"></i>刚刚</small> </li>");
				$("#newpostitem").show(1000);
			}
			else
			{
				showqw("<input class='search__input' name='search' type='search' placeholder='很抱歉...' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>我们遇到了一些错误，请稍后重试。若此信息持续出现，请向我们反馈。</span><button class='btn-lg btn-dark' id='qw-btn' onclick='closeQWindow();'>确定</button>");
			}
			
			},error:function(){
				showqw("<input class='search__input' name='search' type='search' placeholder='很抱歉...' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>我们遇到了一些通信错误，请稍后重试。若此信息持续出现，请向我们反馈。</span><button class='btn-lg btn-dark' id='qw-btn' onclick='closeQWindow();'>确定</button>");
				
				}});
			
		}
		</script>
     
