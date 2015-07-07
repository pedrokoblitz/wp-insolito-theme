/*
 * 
 */
$.Controller.extend('View',
{
	/*
	 * 
	 */
	render : function(html, data) {
		var output = Mustache.render(html, data);
		this.element.html(output);
	}

});

/*
 * 
 */
$.Class.extend('Tag',
{
	/*
	 * 
	 */
	title : function(slug) {
		var response = $.parseJSON($.ajax({type : "GET",url : '/?json=get_tag_index', async : false}).responseText);
		var title;
		$.each(response.tags, function(k,v){
			if (v.slug == slug) {
				title = v.title;
			}
		});
		return title;
	},
});

/*
 * 
 */
$.Class.extend('Category',
{
	/*
	 * 
	 */
	title : function(slug) {
		var response = $.parseJSON($.ajax({type : "GET",url : '/?json=get_category_index', async : false}).responseText);
		var title;
		$.each(response.categories, function(k,v){
			if (v.slug == slug) {
				title = v.title;
			}
		});
		return title;
	},
});

/*
 * 
 */
$.Class.extend('Year',
{
	/*
	 * 
	 */
	title : function(slug) {
		var response = $.parseJSON($.ajax({type : "GET",url : '/?json=get_date_index', async : false}).responseText);
		var title;
		$.each(response.tags, function(k,v){
			if (v.slug == slug) {
				title = v.title;
			}
		});
		return title;
	},
});


/*
 * 
 */
$.Class.extend('Post',
{
	/*
	 * 
	 */
	list : function(page) {

		var url = '/?json=1';

		if (page !== '1') {
			url += '&paged=' + page;
		}

		$.get(url,function(data){
			var html = '';
			c = new View($('#post'));
			c.render(html, data);
		});
	},

	/*
	 * 
	 */
	listCategory : function(page,category) {
		var category = '&slug=' + category;
		var url = '/?json=get_category_posts'+category;

		if (page !== '1') {
			url += '&paged=' + page;
		}

		$.get(url,function(data){
			var html = '';
			c = new View($('#post'));
			c.render(html, data);
		});
	},

	/*
	 * 
	 */
	listTag : function(tag,page) {
		var tag = '&slug=' + tag
		var url = '/?json=get_tag_posts' + tag;

		if (page) {
			url += '&paged='+page;
		}

		$.get(url, function(data){
			var html = '{{#posts}}<h4 class="navCapa">  <a href="#/post/{{slug}}" id="{{slug}}"> {{&title}} </a></h4>{{/posts}}';
			var element = $('#post');
			element.hide();
			c = new View(element);
			c.render(html, data);
			element.fadeIn();
		});
	},

	/*
	 * 
	 */
	listYear : function(year, page) {
		var ano = '&date=' + year;
		var url = '/?json=get_date_posts';

		if (page !== '1') {
			url += '&paged='+page;
		}
		$.get(url + ano,function(data){
			// console.log(d)
			var html = '{{#posts}}<h4 class="navCapa"> <a href="#" id="{{slug}}">{{title}}</a> </h4>{{/posts}}';
			c = new View($('#post'))
			c.render(html, data);
		});
	},

	/*
	 * 
	 */
	show : function(slug) {
		$('#capa').hide();
		var url = '/?json=get_post&slug=' + slug;

		$.get(url, function(data){
			var html = '<a href="#/" class="fecha"><i class="icon-remove"></i> fechar</a><h1>{{{post.title}}}</h1>{{{post.content}}}';

			c = new View('#conteudo');
			c.render(html, data);
		});

		$('#conteudo').fadeIn();
	},
});

/*
 * 
 */
$.Class.extend('Page',
{
	/*
	 * 
	 */
	list : function(page) {
		var tipo = '&post_type=page;'
		var url = '/?json=1';

		if (page !== '1') {
			url += '&paged='+page;
		}
		$.get(url,function(data){
			var html = '';
			c = new View($('#post'));
			c.render(html, data);
		});
	},

	/*
	 * 
	 */
	listChildren : function(id) {
		var url = '/' + id;
		$.get(url, function(data){
			var html = '';
			c = new View($('#post'));
			c.render(html, data);
		});
	},

	/*
	 * 
	 */
	show : function(slug) {
		var url = '/json=get_post&page_id='+slug;
		$.get(url,function(data){
			var html = '';
			c = new View('#conteudo');
			c.render(html, data);
		});

	},


});

/*
 * 
 */
$.Class.extend('Search',
{
	/*
	 * 
	 */
	search : function(q) {
		var url = '/?json=get_search_results&q=' + q;
		$.get(url,function(datac){
			var html = '';
			c = new View('#resultados');
			c.render(html, data);
		});
	},
});

/*
 * 
 */
$.Class.extend('Nav',{
	local : 'home',

	/* constructor
	 * 
	 */
	init : function() {
		var url = '/?json=get_tag_index&order_by=title';

		$.get(url,function(data){
			var itens = this.fisherYates(data['tags']);
		});
  	},

	/*
	 * 
	 */
	setLocal : function(local) {
		this.local = local;
	},

	/*
	 * 
	 */
	showHome : function() {
		$('#conteudo').hide().empty();
		$('#capa').fadeIn();
	},

	/*
	 * 
	 */
	selectTag : function(slug) {
		var title;
		var tag = new Tag();
		title = tag.title(slug);

		$('#tag')
			.hide()
			.empty()
			.append('<h1 class="page-title">'+title+'</h1>')
			.fadeIn();

		$('#post').empty();

		var post = new Post();
		post.listTag(slug);
	},

	/* randomize array with Fisher-Yates algorithm
	 * 
	 */
	fisherYates : function(myArray) {
	  var i = myArray.length, j, tempi, tempj;
	  if (i == 0) return false;
	  while (--i) {
		 j = Math.floor(Math.random() * (i + 1));
		 tempi = myArray[i];
		 tempj = myArray[j];
		 myArray[i] = tempj;
		 myArray[j] = tempi;
	   }
	   return myArray;	
	},

});

/* 
 * 
 */
$.Controller.extend('Site',
{
	/* constructor
	 * 
	 */
	init : function(rawEl, rawOptions) {
		nav = new Nav();

		// initialize the application
		var app = Sammy('#app', function() {
		  this.get('#/', function() {
				if (nav.local == 'post') {
					nav.showHome();
				}
				$('#post, #tag').empty();
				nav.setLocal('home');
		  });

		  this.get('#/post/:slug', function() {
				var post = new Post();
				post.mostrar(this.params.slug);
				nav.setLocal('post');
		  });

		  this.get('#/tag/:slug', function(context) {
				if (nav.local == 'post') {
					nav.mostrarCapa();
				} 
				nav.selectTag(this.params.slug);
				nav.setLocal('tag');
		  });

		});

		// start the application
		app.run('#/');

	},

	/* event binding
	 * 
	 */
	'.item mouseover' : function(el) {
		var slug = $(el).attr('id');
		// code missing here
		location.hash = '#/tag/'+slug;
	},

	/* event binding
	 * 
	 */
	'.item mouseout' : function(el) {
		// code missing here
		var slug = $(el).attr('id');
	},

});
