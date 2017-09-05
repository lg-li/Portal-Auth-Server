/**
 * Cheelem Question Window
 * Copyright 2016, Cheelem
 */


	var pageContainer = document.querySelector('.page'),
		//openCtrl = document.getElementById('btn-search'),
		//closeCtrl = document.getElementById('btn-search-close'),
		searchContainer = document.querySelector('.search'),
		inputSearch = searchContainer.querySelector('.search__input')
		,dm1=document.getElementById('dummy1')
		,dm2=document.getElementById('dummy2')
		,dm3=document.getElementById('dummy3')
		,dm4=document.getElementById('dummy4');
		

	function init() {
		initEvents();	
	}

	function initEvents() {
		//openCtrl.addEventListener('click', openQWindow);
		//closeCtrl.addEventListener('click', closeQWindow);
		document.addEventListener('keyup', function(ev) {
			// escape key.
			if( ev.keyCode == 27 ) {
				closeSearch();
			}
		});
	}

	function openQWindow() {
		pageContainer.classList.add('page--move');
		searchContainer.classList.add('search--open');
		setTimeout(function() {
			inputSearch.focus();
		}, 1200);
	}

	function closeQWindow() {
		
		pageContainer.classList.remove('page--move');
		searchContainer.classList.remove('search--open');
		inputSearch.blur();
		inputSearch.value = '';
		location.hash='';
		dm1.classList.add('dummy-hide');
		dm2.classList.add('dummy-hide');
		dm3.classList.add('dummy-hide');
		dm4.classList.add('dummy-hide');
	}

	init();
	location.hash='';
	dm1.classList.add('dummy-hide');
	dm2.classList.add('dummy-hide');
	dm3.classList.add('dummy-hide');
	dm4.classList.add('dummy-hide');
	
	function logout()
	{
		showqw("<input class='search__input' name='search' type='search' placeholder='注意...' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' readonly/><span class='search__info' id='qw-info'>确定要登出？这将清除您当前在这台设备上的登录记录。</span><a class='btn-lg btn-dark' href='../api/LogoutGate.php' id='qw-btn'>确定</a>");
	}
	function showqw(content)
	{
		dm1.classList.remove('dummy-hide');
		dm2.classList.remove('dummy-hide');
		dm3.classList.remove('dummy-hide');
		dm4.classList.remove('dummy-hide');
		location.hash='qw-panel';
		$("#qw-content").html(content);
		openQWindow();
		
	}