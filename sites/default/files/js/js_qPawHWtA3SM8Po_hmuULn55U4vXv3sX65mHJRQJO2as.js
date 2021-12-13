/*
 * DC jQuery Social Stream
 * Copyright (c) 2013 Design Chemical
 * http://www.designchemical.com/blog/index.php/premium-jquery-plugins/jquery-social-stream-plugin/
 * Version 1.6.2 (10-07-2017)
 *
 */

(function($){

	SocialStreamObject = function(el, options) {
		this.create(el, options);
	};

	$.extend(SocialStreamObject.prototype, {

		version   : '1.6.2',

		create: function(el, options) {

			this.defaults = {
				feeds: {
					facebook: {
						id: '',
						intro: 'Posted',
						out: 'intro,thumb,title,text,user,share',
						text: 'content',
						comments: 3,
						image_width: 4, //3 = 600 4 = 480 5 = 320 6 = 180,
						url: '/libraries/media/facebook.php',
						feed: 'feed', // feed, posts
						icon: 'facebook.png'
					},
					twitter: {
						id: '',
						intro: 'Tweeted',
						search: 'Tweeted',
						out: 'intro,thumb,text,share',
						retweets: false,
						replies: false,
						images: '', // large w: 786 h: 346, thumb w: 150 h: 150, medium w: 600 h: 264, small w: 340 h 150
						url: '/libraries/media/twitter.php',
						icon: 'twitter.png'
					},
					google: {
						id: '',
						intro: 'Shared',
						out: 'intro,thumb,title,text,share',
						api_key: 'AIzaSyAWNgUpUj_W26tP3yev5Ysr4Zb53OIPgR4',
						image_height: 300,
						image_width: 300,
						shares: true,
						icon: 'google.png'
					},
					youtube: {
						id: '',
						intro: 'Uploaded',
						search: 'Search',
						out: 'intro,thumb,title,text,user,share',
						text: 0,
						api_key: '',
						thumb: 'medium', //default 120 x 90, medium 320 x 180, high 480 x 360, standard 640 x 480
						icon: 'youtube.png'
					},
					flickr: {
						id: '',
						intro: 'Uploaded',
						out: 'intro,thumb,title,text,share',
						lang: 'en-us',
						icon: 'flickr.png'
					},
					delicious: {
						id: '',
						intro: 'Bookmarked',
						out: 'intro,thumb,title,text,user,share',
						icon: 'delicious.png'
					},
					pinterest: {
						id: '',
						intro: 'Pinned',
						out: 'intro,thumb,text,user,share',
						url: '/libraries/media/rss.php',
						icon: 'pinterest.png'
					},
					rss: {
						id: '',
						intro: 'Posted',
						out: 'intro,thumb,title,text,user,share',
						url: '/libraries/media/rss.php',
						text: 'contentSnippet',
						icon: 'rss.png'
					},
					lastfm: {
						id: '',
						intro: 'Listened to,Loved,Replied',
						out: 'intro,thumb,title,text,user,share',
						feed: 'recenttracks,lovedtracks,replytracker',
						icon: 'lastfm.png'
					},
					dribbble: {
						id: '',
						intro: 'Posted,Liked',
						out: 'intro,thumb,title,text,user,share',
						accessToken: '55cab8e9db75df986449fe486fdd46501e4c8d985b7ba6b9a0bfc2d229bc88b3',
						feed: 'shots,likes',
						icon: 'dribbble.png'
					},
					vimeo: {
						id: '',
						intro: 'Liked,Video,Appeared In,Video,Album,Channel,Group',
						out: 'intro,thumb,title,text,user,share',
						feed: 'likes,videos,appears_in,all_videos,albums,channels,groups',
						thumb: 'large',
						stats: true,
						icon: 'vimeo.png'
					},
					stumbleupon: {
						id: '',
						intro: 'Shared,Reviewed',
						out: 'intro,thumb,title,text,user,share',
						feed: 'favorites,reviews',
						icon: 'stumbleupon.png'
					},
					deviantart: {
						id: '',
						intro: 'Deviation',
						out: 'intro,thumb,title,text,user,share',
						icon: 'deviantart.png'
					},
					tumblr: {
						id: '',
						intro: 'Posted',
						out: 'intro,title,text,user,share',
						thumb: 100,
						video: 250,
						icon: 'tumblr.png'
					},
					instagram: {
						id: '',
					    intro: 'Posted',
						search: 'Search',
					    out: 'intro,thumb,text,user,share,meta',
						accessToken: '',
						redirectUrl: '',
						clientId: '',
						thumb: 'low_resolution',
						icon: 'instagram.png'
					}
				},
				remove: '',
				twitterId: '',
				days: 5,
				limit: 10,
				max: 'days',
				external: true,
				speed: 600,
				height: 550,
				wall: false,
				centre: false,
				order: 'date',
				filter: true,
				controls: true,
				rotate: {
					direction: 'up',
					delay: 8000
				},
				style: {
					layout: 'classic',
					colour: 'light'
				},
				dates: 'min,mins,hr,hrs,day,days,week,weeks,month,months,year,years',
				transition: '0.8s',
				cache: true,
				container: 'dcsns',
				cstream: 'stream',
				content: 'dcsns-content',
				iconPath: 'images/dcsns-dark/',
				imagePath: 'images/dcsns-dark/',
				debug: false
			};

			this.o = {}, this.timer_on = 0, this.id = 'dcsns-'+$(el).index(), this.timerId = '', this.o = $.extend(true,this.defaults,options), opt = this.o, $load = $('<div class="dcsns-loading">creating stream ...</div>');

			$(el).addClass(this.o.container).addClass(this.o.style.layout).addClass(this.o.style.colour).append('<div class="'+this.o.content+'"><ul class="'+this.o.cstream+'"></ul></div>');

			var $c = $('.'+this.o.content,el), $a = $('.'+this.o.cstream,el), $l = $('li',$a);

			if(opt.height > 0 && opt.wall == false){
				$c.css({height:opt.height+'px'});
			}

			if(this.o.filter == true || this.o.controls == true){
				var x = '<div class="dcsns-toolbar">';
				if(this.o.filter == true){

					var fclass = this.o.center == true ? 'option-set filter dc-center' : 'option-set filter';
					x += '<ul id="dcsns-filter" class="' + fclass + ' ' + this.o.style.layout + ' ' + this.o.style.colour + '">';
					x += this.o.wall == true ? '<li><a href="#filter" data-group="dc-filter"  data-filter="*" class="selected link-all">all</a></li>' : '' ;
					var $f = $('.filter',el);
					$.each(opt.feeds, function(k,v){
						x += v.id != '' ? '<li class="active f-'+k+'"><a href="#filter" rel="'+k+'" data-group="dc-filter" data-filter=".dcsns-'+k+'"><span class="socicon socicon-'+k+'">'+k+'</span></a></li>' : '' ;
					});
					x += '</ul>';
				}
				if(this.o.controls == true && opt.wall == false){
					var play = this.o.rotate.delay <= 0 ? '' : '<li><a href="#" class="play"></a></li>' ;
					x += '<div class="controls"><ul>'+play+'<li><a href="#" class="prev"></a></li><li><a href="#" class="next"></a></li></ul></div>';
				}
				x += '</div>';
				if(opt.wall == false){
					$(el).append(x);
				} else {
					$(el).before(x);
				}
			}

			if(this.o.wall == true){
				$('.dcsns-toolbar').append($load);
				var w = $("#dcsns-filter.dc-center").width()/2;
				$("#dcsns-filter.dc-center").css({'margin-left': -w + "px"}).fadeIn();
				this.createwall($a);
			} else {
				$c.append($load);
			}
			this.createstream(el,$a,0,opt.days);
			this.addevents(el,$a);
			if(this.o.rotate.delay > 0){
				this.rotate(el);
			}
			$load.remove();
		},

		createstream: function(obj,s,f1,f2){
			$.each(opt.feeds, function(k,v){
				if(opt.feeds[k].id != ''){
					var txt = [];
					$.each(opt.feeds[k].intro.split(','), function(i,v){
						v = $.trim(v);
						txt.push(v);
					});
					$.each(opt.feeds[k].id.split(','), function(i,v){
						v = $.trim(v);
						if(opt.feeds[k].feed && v.split('#').length < 2){
							if(k == 'youtube' && v.split('/').length > 1) {
								getFeed(k,v,opt.iconPath,opt.feeds[k],obj,opt,f1,f2,'posted','',i);
							} else {
								$.each(opt.feeds[k].feed.split(','), function(i,feed){
									getFeed(k,v,opt.iconPath,opt.feeds[k],obj,opt,f1,f2,txt[i],feed,i);
								});
							}
						} else {
							intro = v.split('#').length < 2 ? opt.feeds[k].intro : opt.feeds[k].search ;
							getFeed(k,v,opt.iconPath,opt.feeds[k],obj,opt,f1,f2,intro,'',i);
						}
					});
				}
			});
		},

		createwall: function(obj){
				obj.isotope({
					itemSelector : 'li.dcsns-li',
					transitionDuration: opt.transition,
					getSortData : {
						postDate : function( itemElem ){
							return parseInt($(itemElem).attr('rel'),10);
						}
					},
					sortBy : 'postDate',
					masonry: {
						isFitWidth: opt.center
					}
				});
		},

		addevents: function(obj,$a){
			var self = this, speed = this.o.speed;
			var $container = $('.stream',obj), filters = {}
			$('.controls',obj).delegate('a','click',function(){
				var x = $(this).attr('class');
				switch(x)
				{
					case 'prev':
					self.pauseTimer();
					ticker($a,'prev',speed);
					break;
					case 'next':
					self.pauseTimer();
					ticker($a,'next',speed);
					break;
					case 'play':
					self.rotate(obj);
					$('.controls .play').removeClass('play').addClass('pause');
					break;
					case 'pause':
					self.pauseTimer();
					break;
				}
				return false;
			});
			$('.filter',obj).delegate('a','click',function(){
				if(opt.wall == false){
					var rel = $(this).attr('rel');
					if($(this).parent().hasClass('active')){
						$('.dcsns-'+rel,$a).slideUp().addClass('inactive');
						$(this).parent().animate({opacity: 0.3},400);
					} else {
						$('.dcsns-'+rel,$a).slideDown().removeClass('inactive');
						$(this).parent().animate({opacity: 1},400);
					}
					$(this).parent().toggleClass('active');
				}
				return false;
			});
			if(this.o.external){
				$a.delegate('a','click',function(){
					if(!$(this).parent().hasClass('section-share')){
						this.target = '_blank';
					}
				});
			}
		},
		rotate: function(a){
			var self = this, stream = $('.'+this.o.cstream,a), speed = this.o.speed, delay = this.o.rotate.delay, r = this.o.rotate.direction == 'up' ? 'prev' : 'next' ;
			this.timer_on = 1;
			$('.controls .play').removeClass('play').addClass('pause');
			this.timerId = setTimeout(function(){
				ticker(stream,r,speed);
				self.rotate(a);
			}, delay);
		},
		pauseTimer: function(){
			clearTimeout(this.timerId);
			this.timer_on = 0;
			$('.controls .pause').removeClass('pause').addClass('play');
		}
	});

	$.fn.dcSocialStream = function(options, callback){
		var d = {};
		this.each(function(){
			var s = $(this);
			d = s.data("socialtabs");
			if (!d){
				d = new SocialStreamObject(this, options, callback);
				s.data("socialtabs", d);
			}
		});
		return d;
	};

	function getFeed(type,id,path,o,obj,opt,f1,f2,intro,feed,fn){

		var stream = $('.stream',obj), list = [],d = '', px = 300, c = [],data, href, url, n = opt.limit, txt = [], src;
		frl = 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num='+n+'&callback=?&q=';

		switch (type) {

			case 'facebook':
			var cp = id.split('/');
			var curl = o.url.replace(/\&#038;/gi, "&");
			url = url = cp.length > 1 ? curl + '?id='+cp[1]+'&limit='+n+'&feed=photos' : curl + '?id='+id+'&limit='+n+'&feed='+o.feed;
			break;

			case 'twitter':
			var curl = o.url.replace(/\&#038;/gi, "&");
			var cp = id.split('/'), cq = id.split('#'), cu = o.url.split('?'), replies = o.replies == true ? '&exclude_replies=false' : '&exclude_replies=true' ;
			var param = '&include_entities=true&include_rts='+o.retweets+replies;
			url1 = cu.length > 1 ? curl + '&' : curl + '?';
			url = cp.length > 1 ? url1 + 'url=list&list_id='+cp[1]+'&per_page='+n+param : url1 + 'url=timeline&screen_name='+id+'&count='+n+param;
			if(cq.length > 1){
				var rts = o.retweets == false ? '+exclude:retweets' : '' ;
				url = url1 + 'url=search&q='+cq[1]+'&count='+n;
			}
			break;

			case 'google':
			n = n > 100 ? 100 : n ;
			href = 'https://plus.google.com/'+id;
			url = 'https://www.googleapis.com/plus/v1/people/'+id+'/activities/public';
			data = {key: o.api_key, maxResults: n, prettyprint: false, fields: "items(id,kind,object(attachments(displayName,fullImage,id,image,objectType,url),id,objectType,plusoners,replies,resharers,url),published,title,url,verb)"};
			break;

			case 'youtube':
			n = n > 50 ? 50 : n ;
			var cp = id.split('/'), cq = decodeURIComponent(id).split('#'), cc = id.split('!');
			if(cq.length > 1){
				url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&key=' + o.api_key + '&pageToken=&order=date&maxResults=' + n + '&q=' + cq[1];
				href = 'https://www.youtube.com/results?search_query=' + cq[1];
			} else {
				if(cc.length > 1){
					id = cc[1];
					id = 'UU' + cc[1].substring(2);
					href = 'https://www.youtube.com/channel/UC' + id.substring(2);
				} else {
					id = cp.length > 1 ? cp[1] : id ;
					if(id.substr(0,2) != 'UU'){
						if(id.substr(0,2) != 'UC'){
							// is playlist ID
							href = 'https://www.youtube.com/playlist?list=' + id;
						} else {
							// is channel ID
							href = 'https://www.youtube.com/channel/' + id;
							id = 'UU' + id.substring(2);
						}
					} else {
						// is list ID
						href = 'https://www.youtube.com/channel/UC' + id.substring(2);
					}
				}
				url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=' + id + '&key=' + o.api_key + '&pageToken=&maxResults=' + n;
			}
			break;

			case 'flickr':
			var cq = id.split('/'), fd = cq.length > 1 ? 'groups_pool' : 'photos_public' ;
			id = cq.length > 1 ? cq[1] : id ;
			href = 'https://www.flickr.com/photos/'+id;
			url = 'https://api.flickr.com/services/feeds/'+fd+'.gne?id='+id+'&lang='+o.lang+'&format=json&jsoncallback=?';
			break;

			case 'delicious':
			href = 'https://www.delicious.com/'+id;
			url = 'http://feeds.delicious.com/v2/json/'+id;
			break;

			case 'pinterest':
			var cp = id.split('/');
			url = 'https://www.pinterest.com/'+id;
			var curl = o.url.replace(/\&#038;/gi, "&");
			href = 'http://www.pinterest.com/'+id;
			url = cp.length > 1 ? curl + '?id='+id+'&limit='+n+'&feed=board&type='+type : curl + '?id='+id+'&limit='+n+'&feed=user&type='+type;
			break;

			case 'rss':
			href = id;
			var cp = id.split('://');
			var curl = o.url.replace(/\&#038;/gi, "&");
			url = curl + '?id='+encodeURIComponent(cp[1])+'&limit='+n+'&type='+type;
			break;

			case 'lastfm':
			href = 'https://www.last.fm/user/'+id;
			var ver = feed == 'lovedtracks' ? '2.0' : '1.0' ;
			url = frl + encodeURIComponent('https://ws.audioscrobbler.com/'+ver+'/user/'+id+'/'+feed+'.rss');
			break;

			case 'dribbble':
			href = 'https://www.dribbble.com/'+id;
			url = 'https://api.dribbble.com/v1/users/'+id+'/'+feed+'?access_token='+o.accessToken+'&sort=recent&page=';
			break;

			case 'vimeo':
			href = 'https://www.vimeo.com/'+id;
			url = 'https://vimeo.com/api/v2/'+id+'/'+feed+'.json';
			break;

			case 'stumbleupon':
			href = 'https://www.stumbleupon.com/stumbler/'+id;
			url = frl + encodeURIComponent('http://rss.stumbleupon.com/user/'+id+'/'+feed);
			break;

			case 'deviantart':
			href = 'https://'+id+'.deviantart.com';
			url = frl + encodeURIComponent('https://backend.deviantart.com/rss.xml?type=deviation&q=by%3A'+id+'+sort%3Atime+meta%3Aall');
			break;

			case 'tumblr':
			href = 'http://'+id+'.tumblr.com';
			url = 'http://'+id+'.tumblr.com/api/read/json?callback=?&num='+n;
			break;

			case 'instagram':
			href = '#';
			url = 'https://api.instagram.com/v1';
			var cp = id.substr(0,1), cq = id.split(cp), url1 = cq[1], qs = '', ts = 0;
			switch(cp)
			{
				case '?':
				var p = cq[1].split('/');
				qs = '&lat='+p[0]+'&lng='+p[1]+'&distance='+p[2];
				url += '/media/search';
				break;
				case '#':
				url += '/tags/'+url1+'/media/recent';
				ts = 1;
				break;
				case '!':
				url += '/users/'+url1+'/media/recent';
				break;
				case '@':
				url += '/locations/'+url1+'/media/recent';
				break;
			}
			if(o.accessToken == '' && ts == 0){
				if (location.hash) {
					o.accessToken = location.hash.split('=')[1] ;
				} else {
					location.href="https://instagram.com/oauth/authorize/?client_id="+o.clientId+"&redirect_uri="+o.redirectUrl+"&response_type=token";
				}
			}
			url += '?access_token='+o.accessToken+'&client_id='+o.clientId+'&count='+n+qs;
			break;
		}
		var dataType = type == 'twitter' || type == 'facebook' || type == 'rss' || type == 'pinterest' || type == 'dribbble' ? 'json' : 'jsonp';
		jQuery.ajax({
			url: url,
			data: data,
			cache: opt.cache,
			dataType: dataType,
			success: function(a){
				var error = '';
				switch(type)
				{
					case 'facebook':
						a = a.responseData.feed.entries ? a.responseData.feed.entries : '';
					break;
					case 'google':
						error = a.error ? a.error : '' ;
						a = a.items;
					break;
					case 'flickr':
						a = a.items;
					break;
					case 'instagram':
						a = a.data;
					break;
					case 'pinterest':
						a = a.item;
					break;
					case 'twitter':
						error = a.errors ? a.errors : '' ;
						if(cq.length > 1){a = a.statuses} ;
					break;
					case 'youtube':
						a = a.items;
					break;
					case 'dribbble':
					break;
					case 'tumblr':
						a = a.posts;
					break;
					case 'delicious':
					break;
					case 'vimeo':
					break;
					case 'rss':
						a = a.item;
					break;
					default:
						if(a.responseStatus == 200){
							a = a.responseData.feed.entries;
						} else {
							error = a.responseDetails;
						}
					break;
				}
				if(error == ''){
					$.each(a, function(i,item){
						if(i < n){
							var html = [], q = item.link, u='<a href="'+href+'" class="link-user">'+id+'</a>', w='', x = '<a href="'+q+'">'+item.title+'</a>', y='', z='', zz='', m='', d = item.publishedDate, sq = q, st = item.title, s = '';
							switch(type)
							{
								case 'facebook':
									x = '';
									thumb = item.thumb;
									if(thumb != null)
									{
										if(thumb.indexOf('safe_image.php') != -1) {
											if(thumb.indexOf('fbstaging') != -1) {
												thumb = 'https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=260&refresh=86400&url='+encodeURIComponent(thumb);
											} else {
												thumb = unescape(thumb.match(/url=([^&]+)/)[1]);
											}
										}
										thumb = thumb.replace(/^http:\/\//i, 'https://');
										y = '<a href="'+q+'"><img src="'+thumb+'" alt="" /></a>';
									}
									var pageName = item.pageName ;
									st = item.content ;
									if (cp.length > 1) {
										st = cp[0] != '' ? cp[0] : pageName ;
										pageName = cp[0] != '' ? cp[0] : pageName ;
									}
									u = '<a href="'+item.pageLink+'" class="link-user">'+pageName+'</a>';
									href = item.pageLink;
									z = linkify(item.content,type);
								break;

								case 'twitter':
								d = parseTwitterDate(item.created_at);
								var un = item.user.screen_name, ua = item.user.profile_image_url_https ;
								href = 'https://www.twitter.com/'+un;
								q = href;
								y = '<img src="'+ua+'" alt="" />' ;
								if(o.images != '' && item.entities.media){
									$.each(item.entities.media, function(i,media){
										z += '<img src="'+media.media_url_https+':'+o.images+'" alt="" />';
									});
								}
								z += '<span class="twitter-user"><a href="https://www.twitter.com/'+un+'"><strong>'+item.user.name+' </strong>@'+un+'</a></span>';
								z += '<span class="twitter-text">' + linkify(item.full_text,type) + '</span>';
								u = '<a href="https://www.twitter.com/'+un+'" class="link-user">'+un+'</a>';
								sq = item.id_str;
								break;

								case 'delicious':
								var d = new Date();
								d = d.setRFC3339(item.dt);
								x = '<a href="'+item.u+'">'+item.d+'</a>';
								q = item.u;
								z = item.n;
								sq = item.u;
								st = item.d;
								break;

								case 'rss':
								z = item.text;
								var src = item.image;
								y = src ? '<a href="'+q+'"><img src="'+src+'" alt="" /></a>' : '' ;
								break;

								case 'pinterest':
								var src = $('img',item.description).attr('src');
								if(src){
									var res = src.replace('236x', '736x');
								}

								y = src ? '<a href="'+q+'"><img src="'+res+'" alt="" /></a>' : '' ;
								z = item.text;
								st = z;
								break;

								case 'youtube':
								x =	item.snippet.title;
								var vidId = cq.length > 1 ? item.id.videoId : item.snippet.resourceId.videoId ;
								var ytthumb = o.thumb == '0' ? 'medium' : o.thumb ;
								q = 'https://www.youtube.com/watch?v='+vidId+'&feature=youtube_gdata';
								sq = q;
								if(item.snippet.thumbnails){
									y = '<a href="'+q+'" title="'+item.snippet.title+'"><img src="'+item.snippet.thumbnails[ytthumb].url+'" alt="'+item.snippet.title+'" /></a>';
								} else {
									opt.remove += ','+q;
								}
								z = o.text > 0 ? cut(item.snippet.description,o.text) : item.snippet.description ;
								d = item.snippet.publishedAt;
								var profile = 'Youtube';
								if(cq.length > 1){
									profile = decodeURIComponent(id);
								} else if(cp.length > 1){
									profile = cp[0];
								} else if(cc.length > 1){
									profile = cc[0];
								}
								u='<a href="'+href+'" class="link-user">'+profile+'</a>';
								st = item.snippet.title;
								break;

								case 'flickr':
								d = parseTwitterDate(item.published);
								x =	item.title;
								y = '<a href="' + q + '" title="'+ item.title +'"><img src="' + item.media.m + '" alt="" /></a>';
								break;

								case 'lastfm':
								q = item.content;
								break;

								case 'dribbble':
								d = item.created_at;
								dribbble = feed == 'likes' ? item.shot : item ;
								q = dribbble.html_url;
								st = dribbble.title ;
								y = '<a href="'+q+'"><img src="' + dribbble.images.normal + '" alt="' + st + '" /></a>';
								x = '<a href="'+q+'">'+st+'</a>';
								z = '<span class="meta"><span class="views">'+num(dribbble.views_count)+'</span><span class="likes">'+num(dribbble.likes_count)+'</span><span class="comments">'+num(dribbble.comments_count)+'</span></span>';
								sq = q;
								break;

								case 'instagram':
								d = parseInt(item.created_time * 1000,10);
								x = '';
								y = '<a href="'+ q +'"><img src="' + item.images[o.thumb].url + '" alt="" /></a>';
								z = item.caption !=null ? htmlEncode(item.caption.text) : '' ;
								u = '<a href="'+q+'" class="link-user">'+item.user.username+'</a>';
								href = 'https://instagram.com/'+item.user.username;
								st = item.caption !=null ? item.caption.text : '' ;
								break;

								case 'vimeo':
								f = feed, at = item.name, tx = item.description, q = item.url;
								if(f == 'channels'){
									y = item.logo != '' ? '<a href="'+q+'" class="logo"><img src="'+item.logo+'" alt="" width="'+px+'" /></a>' : '' ;
								} else if(f == 'groups'){
									y = '<a href="'+q+'"><img src="'+item.thumbnail+'" alt="" /></a>';
								} else {
									var thumb = 'thumbnail_'+o.thumb, at = item.title, tx = f != 'albums' ? item.duration+' secs' : item.description ;
									y = '<a href="'+item.url+'" title="'+at+'"><img src="'+item[thumb]+'" alt="" /></a>';
								}
								x = '<a href="'+q+'">'+at+'</a>';
								z = tx;
								if(o.stats == true){
									var m = '';
									m += f == 'albums' || f == 'channels' || f == 'groups' ? '<span class="videos">'+num(item.total_videos)+'</span>' : '' ;
									if(f == 'channels'){
										m += '<span class="users">'+num(item.total_subscribers)+'</span>';
									} else if(f == 'groups'){
										m += '<span class="users">'+num(item.total_members)+'</span>';
									} else if(f != 'albums'){
										m += '<span class="likes">'+num(item.stats_number_of_likes)+'</span><span class="views">'+num(item.stats_number_of_plays)+'</span><span class="comments">'+num(item.stats_number_of_comments)+'</span>';
									}
									z += '<span class="meta">'+m+'</span>';
								}
								var dt = item.upload_date;
								if(f == 'likes'){
									dt = item.liked_on;
								} else if(f == 'albums' || f == 'channels' || f == 'groups'){
									dt = item.created_on;
								}
								var d = new Date();
								d = d.setVimeo(dt);
								sq = q;
								st = at;
								break;

								case 'stumbleupon':
								var src = $('img',item.content).attr('src');
								y = src != '' && feed == 'favorites' ? '<a href="'+q+'"><img src="'+src+'" alt="" /></a>' : '' ;
								z = item.contentSnippet;
								break;

								case 'deviantart':
								var src = $('img',item.content).attr('src');
								y = src ? '<a href="'+q+'"><img src="'+src+'" alt="" /></a>' : '' ;
								z = item.contentSnippet;
								break;

								case 'tumblr':
								q = item['url-with-slug'];
								d = item.date;
								x = '<a href="'+q+'">';
								switch(item.type)
								{
									case 'photo':
									x = item['photo-caption'];
									z = '<a href="'+q+'"><img src="'+item['photo-url-'+o.thumb]+'" alt="" /></a>';
									st = x;
									break;
									case 'video':
									x += item['video-caption'];
									z = o.video != '400' ? item['video-player-'+o.video] : item['video-player'] ;
									st = x;
									break;
									case 'regular':
									x += item['regular-title'];
									z = item['regular-body'];
									st = x;
									break;
									case 'quote':
									x += item['quote-source'];
									z = item['quote-text'];
									st = x;
									break;
									case 'audio':
									x = item['id3-artist'] ? '<a href="'+q+'">'+item['id3-artist']+' - '+item['id3-album']+'</a>' : '' ;
									x += item['id3-title'] ? '<a href="'+q+'" class="track">'+item['id3-title']+'</a>' : '' ;
									z = item['audio-caption'];
									z += item['audio-player'];
									st = item['id3-artist']+' - '+item['id3-album']+' - '+item['id3-title'];
									break;
									case 'conversation':
									x += item['conversation-title'];
									z = item['conversation-text'];
									st = x;
									break;
									case 'link':
									var ltxt = item['link-text'].replace(/:/g, '').replace(/\?/g, '').replace(/\!/g, '').replace(/\./g, '').replace(/\'/g, '').replace(/\(/g, '').replace(/\)/g, '').replace(/\@/g, '').replace(/\#/g, '').replace(/\|/g, '').replace(/\&/g, '');
									x = '<a href="'+item['link-url']+'">'+ltxt+'</a>';
									z = item['link-description'];
									st = ltxt;
									break;
								}
								x += item.type != 'photo' || item.type != 'audio' ? '</a>' : '' ;
								st = stripHtml(st);
								sq = q;
								break;

								case 'google':
								var g = item.object.replies ? num(item.object.replies.totalItems) : 0, m = item.object.plusoners ? num(item.object.plusoners.totalItems) : 0, p = item.object.resharers ? num(item.object.resharers.totalItems) : 0, dl;
								var d = new Date();
								d = d.setRFC3339(item.published);
								dl = {src: "",imgLink: "",useLink: "",useTitle: ""};
								var k = item.object.attachments;
								if (k) if (k.length){
									for (var l = 0; l < k.length; l++) {
										var h = k[l];
										if (h.image) {
											dl.src = h.image.url;
											dl.imgLink = h.url;
											if (h.fullImage) {
												dl.w = h.fullImage.width || 0;
												dl.h = h.fullImage.height || 0
											}
										}
										if (h.objectType == "article") dl.useLink = h.url;
										if (h.displayName) dl.useTitle = h.displayName
									}
									if (!dl.useLink) dl.useLink = dl.imgLink;
									var img_h = o.image_height ? o.image_height : 300 ;
									var img_w = o.image_width ? o.image_width : 300 ;
									if (dl.src.indexOf("resize_h") >= 0) dl.src = dl.w >= dl.h ? dl.src.replace(/resize_h=\d+/i, "resize_h=" + img_h) : dl.src.replace(/resize_h=\d+/i, "resize_w=" + img_w)
								}
								dl = dl;
								q = dl.useLink;
								y = (dl.src ? (dl.useLink ? '<a href="' + dl.useLink + '">' : '')+'<img src="' + dl.src + '" />'+(dl.useLink ? '</a>' : '') : '');
								var t1 = px/(dl.w/dl.h) < px/3 ? ' class="clear"' : '' ;
								x = (dl.useLink ? '<a href="' + dl.useLink + '"'+t1+'>' : '')+(item.title ? item.title : dl.useTitle)+(dl.useLink ? '</a>' : '');
								if(o.shares){
									z = '<span class="meta"><span class="plusones">+1s '+m+'</span><span class="shares">'+p+'</span><span class="comments">'+g+'</span></span>';
								}
								sq = q;
								st = dl.useTitle;
								break;
							}
							icon = '<a href="'+href+'"><span class="socicon socicon-'+type+'">'+type+'</span></a>';
							if(type == 'twitter'){
								var intent = 'https://twitter.com/intent/';
								s = '<a href="'+intent+'tweet?in_reply_to='+sq+'&via='+opt.twitterId+'" class="share-reply">Compartir Tweet</a>';
								s += '<a href="'+intent+'retweet?tweet_id='+sq+'&via='+opt.twitterId+'" class="share-retweet">Retweet</a>';
								s += '<a href="'+intent+'favorite?tweet_id='+sq+'" class="share-favorite">Favorito</a>';
								s += share('','https://twitter.com/'+un+'/status/'+sq,opt.twitterId);
							} else {
								s = share(st,sq,opt.twitterId);
							}

							$.each(o.out.split(','), function(i,v){

								zz += v != 'intro' ? '<span class="section-'+v+'">' : '' ;
								switch(v)
								{
									case 'intro':
									zintro = opt.style.layout == 'modern' ? '<span class="section-'+v+'">' + u : '<span class="section-'+v+'">' ;
									if(type == 'twitter'){
										zintro += '<a href="'+q+'" class="link-intro">'+decodeURIComponent(intro)+'</a> <span><a href="https://twitter.com/'+un+'/status/'+item.id_str+'">'+nicetime(new Date(d).getTime(),0,opt.dates)+'</a></span></span>';
									} else {
										zintro += '<a href="'+q+'" class="link-intro">'+decodeURIComponent(intro)+'</a> <span>'+nicetime(new Date(d).getTime(),0,opt.dates)+'</span></span>';
									}
									break;
									case 'title':
									zz += x;
									break;
									case 'thumb':
									zz += y;
									break;
									case 'text':
									zz += z;
									break;
									case 'user':
									opt.style.layout == 'modern' ? '' : zz += u ;
									break;
									case 'meta':
									zz += m;
									break;
									case 'share':
									zz += s;
									break;
								}
								zz += v != 'intro' ? '</span>' : '' ;
							});

							var df = type == 'instagram' ? nicetime(d,1,opt.dates) : nicetime(new Date(d).getTime(),1,opt.dates);
							var ob = df;
							switch(opt.order)
							{
								case 'random':
								ob = randomish(6);
								break;
								case 'none':
								ob = 1;
								break;
							}
							var out = '<li rel="'+ob+'" class="dcsns-li dcsns-'+type+' dcsns-feed-'+fn+'">'+w+'<div class="inner">'+zz+'<span class="clear"></span></div>'+zintro+icon+'</li>', str = decodeURIComponent(opt.remove), rem = q;
							if(type == 'twitter'){
								rem = 'https://twitter.com/'+un+'/status/'+item.id_str;
							}
							if( str.indexOf( rem ) !== -1 && rem != '' ){
								n = n + 1;
							} else {
								if(opt.max == 'days'){
									if(df <= f2 * 86400 && df >= f1 * 86400){
										list.push(out);
									} else if(df > f2 * 86400) {
										return false;
									}
								} else {
									list.push(out);
								}
							}
						}
					});
				} else if(opt.debug == true){
					list.push('<li class="dcsns-li dcsns-error">Error. '+error+'</li>');
				}
			},
			complete: function(){
				var $newItems = $(list.join(''));
				if(opt.wall == true){
					stream.isotope( 'insert', $newItems );
					if(type == 'facebook' || type == 'pinterest' || type == 'rss' || type == 'dribbble'){
						$('li.dcsns-'+type+' .section-thumb img',stream).css('opacity',0).show().fadeTo(800,1);
						$('img',stream).on('load', function(){ stream.isotope('layout'); });
					}
					if(type == 'twitter'){
						setTimeout(function(){
							stream.isotope('layout');
						},1000);
						$('img',stream).on('load', function(){ stream.isotope('layout'); });
					}

				} else {
					stream.append($newItems);
					sortstream(stream,'asc');
				}
				if(type == 'flickr' && cq.length > 1){
					flickrHrefLink(cq[1],$newItems);
				}
			}
		});
		return;
	}

	function linkify(text,type){
		text = text.replace(
			/((https?\:\/\/)|(www\.))(\S+)(\w{2,4})(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/gi,
			function(url){
				var full_url = !url.match('^https?:\/\/') ? 'http://' + url : url ;
				return '<a href="' + full_url + '">' + url + '</a>';
			}
		);
		if(type == 'twitter'){
			text = text.replace(/(^|\s)@(\w+)/g, '$1@<a href="http://www.twitter.com/$2">$2</a>');
			text = text.replace(/(^|\s)#(\w+)/g, '$1#<a href="http://twitter.com/search/%23$2">$2</a>');
		} else if(type == 'facebook'){

			text = text.replace(/<\/br>/g, ' ');
			text = text.replace(/(^|\s)#(\w+)/g, '$1#<a href="http://facebook.com/hashtag/%23$2">$2</a>');
		}
		return text;
	}

	function cut(text,n){
		var short = text.substr(0, n);
		if (/^\S/.test(text.substr(n)))
		short = short.replace(/\s+\S*$/, "");
		return short;
	}

	function htmlEncode(v){
		return $('<div/>').text(v).html();
	}

	function stripHtml(v){
		var $html = $(v);
		return $html.text();
	}

	Date.prototype.setRFC3339 = function(dString){
	   var utcOffset, offsetSplitChar;
	   var offsetMultiplier = 1;
	   var dateTime = dString.split('T');
	   var date = dateTime[0].split('-');
	   var time = dateTime[1].split(':');
	   var offsetField = time[time.length - 1];
	   var offsetString;
	   offsetFieldIdentifier = offsetField.charAt(offsetField.length - 1);
	   if (offsetFieldIdentifier == 'Z') {
		  utcOffset = 0;
		  time[time.length - 1] = offsetField.substr(0, offsetField.length - 2);
	   } else {
		  if (offsetField[offsetField.length - 1].indexOf('+') != -1) {
			 offsetSplitChar = '+';
			 offsetMultiplier = 1;
		  } else {
			 offsetSplitChar = '-';
			 offsetMultiplier = -1;
		  }
		  offsetString = offsetField.split(offsetSplitChar);
		  time[time.length - 1] == offsetString[0];
		  offsetString = offsetString[1].split(':');
		  utcOffset = (offsetString[0] * 60) + offsetString[1];
		  utcOffset = utcOffset * 60 * 1000;
	   }
	   this.setTime(Date.UTC(date[0], date[1] - 1, date[2], time[0], time[1], time[2]) + (utcOffset * offsetMultiplier ));
	   return this;
	};

	Date.prototype.setFbAlbum = function(dString){
	   var utcOffset, offsetSplitChar = '+', offsetMultiplier = 1, dateTime = dString.split('T'), date = dateTime[0].split('-'), time = dateTime[1].split(':'), offsetField = time[time.length - 1], offsetString;
		  if (offsetField[offsetField.length - 1].indexOf('+') != -1) {
			 offsetSplitChar = '-';
			 offsetMultiplier = -1;
		  }
		  offsetTime = offsetField.split(offsetSplitChar);
		  utcOffset = parseInt((offsetTime[1]/100),10) * 60 * 1000;
	   this.setTime(Date.UTC(date[0], date[1] - 1, date[2], time[0], time[1], offsetTime[0]) + (utcOffset * offsetMultiplier ));
	   return this;
	};

	Date.prototype.setVimeo = function(dString){
	   var utcOffset = 0, offsetSplitChar, offsetMultiplier = 1;
	   var dateTime = dString.split(' ');
	   var date = dateTime[0].split('-');
	   var time = dateTime[1].split(':');
	   this.setTime(Date.UTC(date[0], date[1] - 1, date[2], time[0], time[1], time[2]) + (utcOffset * offsetMultiplier ));
	   return this;
	};

	function parseTwitterDate(a){
		var out = !!navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.indexOf("MSIE")>= 0 || navigator.userAgent.indexOf("Edge")>= 0 ? a.replace(/(\+\S+) (.*)/, '$2 $1') : a ;
		return out;
	}

	function nicetime(a,out,dates){
        var d = Math.round((+new Date - a) / 1000), fuzzy = '', d = d < 0 ? 0 : d,dates = dates == null ? 'min,mins,hr,hrs,day,days,week,weeks,month,months,year,years' : dates, trans = dates.split(','), n = trans[1];
        if(out == 1) {
            return d;
        } else if(out == 0) {
            var chunks = new Array();
                    chunks[0] = [60 * 60 * 24 * 365 , trans[10], trans[11]];
                    chunks[1] = [60 * 60 * 24 * 30 , trans[8], trans[9]];
                    chunks[2] = [60 * 60 * 24 * 7, trans[6], trans[7]];
                    chunks[3] = [60 * 60 * 24 , trans[4], trans[5]];
                    chunks[4] = [60 * 60 , trans[2], trans[3]];
                    chunks[5] = [60 , trans[0], trans[1]];
                    var i = 0, j = chunks.length;
                    for (i = 0; i < j; i++) {
                        s = chunks[i][0];
                        if ((xj = Math.floor(d / s)) != 0)
                        {
                            n = xj == 1 ? chunks[i][1] : chunks[i][2] ;
                            break;
                        }
                    }
                    fuzzy += xj == 1 ? '1 '+n : xj+' '+n ;
                    if (i + 1 < j) {
                        s2 = chunks[i + 1][0];
                        if ( ((xj2 = Math.floor((d - (s * xj)) / s2)) != 0) )
                        {
                            n2 = (xj2 == 1) ? chunks[i + 1][1] : chunks[i + 1][2] ;
                            fuzzy += (xj2 == 1) ? ' + 1 '+n2 : ' + '+xj2+' '+n2 ;
                        }
                    }
					fuzzy += ' ago';
            return fuzzy;
            }
        }

		function num(a){
            var b = a;
            if (a > 999999) b = Math.floor(a / 1E6) + "M";
            else if (a > 9999) b = Math.floor(a / 1E3) + "K";
            else if (a > 999) b = Math.floor(a / 1E3) + "," + a % 1E3;
            return b
        }

		function parseQ(url){
			var v = [], hash, q = url.split('?')[1];
			if(q != undefined){
				q = q.split('&');
				for(var i = 0; i < q.length; i++){
					hash = q[i].split('=');
					v.push(hash[1]);
					v[hash[0]] = hash[1];
				}
			}
			return v;
		}

		function getImg(content){
			var imgArr = new Array(), reg = /<img .*?src=["\']([^ ^"^\']*)["\']/gi, check, image;
			while (check = reg.exec(content)){
				imgArr.push(check[1]);
			}
			if(imgArr.length > 0 && imgArr[0].indexOf('sndcdn.com') === -1){
				var image = imgArr[0];
				if(image.indexOf('instagram.com/profiles') !== -1) { image = imgArr[1]; }
				image = image.replace("_m.jpg", ".jpg");
				if(image.indexOf('fbcdn') == -1) {
					image = image.replace("_b.jpg", "_f.jpg");
					image = image.replace("_b.png", "_f.png");
				} else {
					if(image.indexOf('safe_image.php') == -1) {
						var id = image.split("_"), object_id = id[1];
						image = 'http://graph.facebook.com/'+object_id+'/picture?type=normal';
					}
				}
				image = image.replace("_s.jpg", "_b.jpg");
				image = image.replace("_m.png", ".png");
				image = image.replace("_s.png", "_b.png");
				image = image.replace(/\&amp;/g,'&');
				if(image.indexOf('safe_image.php') != -1){
					image = unescape(image.match(/url=([^&]+)/)[1]);
				}
				if(image.indexOf('app_full_proxy.php') != -1){
					image = unescape(image.match(/src=([^&]+)/)[1]);
				}
				if(this.prefix == 'https://'){
					var image_tmp = image.replace('http://', 'https://');
					image = image_tmp;
				}
			} else {
				return false
			}
			return image;
		}

		function sortstream(obj,d){
			var $l = $('li',obj);
			$l.sort(function(a, b){
				var keyA = parseInt($(a).attr('rel'),10), keyB = parseInt($(b).attr('rel'),10);
				if(d == 'asc'){
					return (keyA > keyB) ? 1 : -1;
				} else {
					return (keyA < keyB) ? 1 : -1;
				}
				return 0;
			});
			$.each($l, function(index, row){
				obj.append(row);
			});
			$('.dcsns-loading').slideUp().remove();
			return;
		}

		function randomish(l){
			var i = 0, out = '';
			while(i < l){
				out += Math.floor((Math.random()*10)+1)+'';
				i++;
			}
			return out;
		}

		function ticker(s,b,speed){
			var $a = $('li:last',s),$b = $('li:first',s),$gx,bh = $b.outerHeight(true);
			if($('li',s).not('.inactive').length > 2){
				if(b == 'next'){
					$gx = $a.clone().hide();
					$b.before($gx);
					$a.remove();
					if($a.hasClass('inactive')){
						ticker(s,b,speed);
					} else {
						$('.inner',$gx).css({opacity: 0});
						$gx.slideDown(speed,'linear',function(){
							$('.inner',this).animate({opacity: 1},speed);
						});
						return;
					}
				} else {
					$gx = $b.clone();
					if($b.hasClass('inactive')){
						$a.after($gx);
						$b.remove();
						ticker(s,b,speed);
					} else {
						$b.animate({marginTop: -bh+'px'},speed,'linear',function(){
							$a.after($gx);
							$b.remove();
						});
						$('.inner',$b).animate({opacity: 0},speed);
					}
				}
			}
		}

		function flickrHrefLink(id,obj){
			jQuery.ajax({
				url: 'http://api.flickr.com/services/feeds/groups_pool.gne?id='+id+'&format=json&jsoncallback=?',
				dataType: 'jsonp',
				success: function(a){
					$('.icon',obj).each(function(){
						$(this).parent().attr('href',a.link);
					});
				}
			});
		}

		function share(st,sq,twitterId){
			var s = '', sq = encodeURIComponent(sq), st = encodeURIComponent(st);
			s = '<a href="http://www.facebook.com/sharer.php?u='+sq+'&t='+st+'" class="share-facebook" target="_blank">Compartir en facebook</a>';
			s += '<a href="https://twitter.com/share?url='+sq+'&text='+st+'&via='+twitterId+'" class="share-twitter" target="_blank">Compartir en twitter</a>';
			//s += '<a href="https://plus.google.com/share?url='+sq+'" class="share-google" target="_blank"></a>';
			s += '<a href="http://www.linkedin.com/shareArticle?mini=true&url='+sq+'&title='+st+'" class="share-linkedin" target="_blank">Compartir en linkedin</a>';
			return s;
        }
})(jQuery);

jQuery(window).load(function(){
	jQuery.getScript("//platform.twitter.com/widgets.js", function(){});
	jQuery('.section-share a').click(function(){
		var u = jQuery(this).attr('href');
		window.open(u,'sharer','toolbar=0,status=0,width=626,height=436');
		return false;
	});
});
;
/*!
 * Isotope PACKAGED v3.0.1
 *
 * Licensed GPLv3 for open source use
 * or Isotope Commercial License for commercial use
 *
 * http://isotope.metafizzy.co
 * Copyright 2016 Metafizzy
 */

!function(t,e){"use strict";"function"==typeof define&&define.amd?define("jquery-bridget/jquery-bridget",["jquery"],function(i){e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("jquery")):t.jQueryBridget=e(t,t.jQuery)}(window,function(t,e){"use strict";function i(i,s,a){function u(t,e,n){var o,s="$()."+i+'("'+e+'")';return t.each(function(t,u){var h=a.data(u,i);if(!h)return void r(i+" not initialized. Cannot call methods, i.e. "+s);var d=h[e];if(!d||"_"==e.charAt(0))return void r(s+" is not a valid method");var l=d.apply(h,n);o=void 0===o?l:o}),void 0!==o?o:t}function h(t,e){t.each(function(t,n){var o=a.data(n,i);o?(o.option(e),o._init()):(o=new s(n,e),a.data(n,i,o))})}a=a||e||t.jQuery,a&&(s.prototype.option||(s.prototype.option=function(t){a.isPlainObject(t)&&(this.options=a.extend(!0,this.options,t))}),a.fn[i]=function(t){if("string"==typeof t){var e=o.call(arguments,1);return u(this,t,e)}return h(this,t),this},n(a))}function n(t){!t||t&&t.bridget||(t.bridget=i)}var o=Array.prototype.slice,s=t.console,r="undefined"==typeof s?function(){}:function(t){s.error(t)};return n(e||t.jQuery),i}),function(t,e){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",e):"object"==typeof module&&module.exports?module.exports=e():t.EvEmitter=e()}("undefined"!=typeof window?window:this,function(){function t(){}var e=t.prototype;return e.on=function(t,e){if(t&&e){var i=this._events=this._events||{},n=i[t]=i[t]||[];return-1==n.indexOf(e)&&n.push(e),this}},e.once=function(t,e){if(t&&e){this.on(t,e);var i=this._onceEvents=this._onceEvents||{},n=i[t]=i[t]||{};return n[e]=!0,this}},e.off=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){var n=i.indexOf(e);return-1!=n&&i.splice(n,1),this}},e.emitEvent=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){var n=0,o=i[n];e=e||[];for(var s=this._onceEvents&&this._onceEvents[t];o;){var r=s&&s[o];r&&(this.off(t,o),delete s[o]),o.apply(this,e),n+=r?0:1,o=i[n]}return this}},t}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("get-size/get-size",[],function(){return e()}):"object"==typeof module&&module.exports?module.exports=e():t.getSize=e()}(window,function(){"use strict";function t(t){var e=parseFloat(t),i=-1==t.indexOf("%")&&!isNaN(e);return i&&e}function e(){}function i(){for(var t={width:0,height:0,innerWidth:0,innerHeight:0,outerWidth:0,outerHeight:0},e=0;h>e;e++){var i=u[e];t[i]=0}return t}function n(t){var e=getComputedStyle(t);return e||a("Style returned "+e+". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"),e}function o(){if(!d){d=!0;var e=document.createElement("div");e.style.width="200px",e.style.padding="1px 2px 3px 4px",e.style.borderStyle="solid",e.style.borderWidth="1px 2px 3px 4px",e.style.boxSizing="border-box";var i=document.body||document.documentElement;i.appendChild(e);var o=n(e);s.isBoxSizeOuter=r=200==t(o.width),i.removeChild(e)}}function s(e){if(o(),"string"==typeof e&&(e=document.querySelector(e)),e&&"object"==typeof e&&e.nodeType){var s=n(e);if("none"==s.display)return i();var a={};a.width=e.offsetWidth,a.height=e.offsetHeight;for(var d=a.isBorderBox="border-box"==s.boxSizing,l=0;h>l;l++){var f=u[l],c=s[f],m=parseFloat(c);a[f]=isNaN(m)?0:m}var p=a.paddingLeft+a.paddingRight,y=a.paddingTop+a.paddingBottom,g=a.marginLeft+a.marginRight,v=a.marginTop+a.marginBottom,_=a.borderLeftWidth+a.borderRightWidth,I=a.borderTopWidth+a.borderBottomWidth,z=d&&r,x=t(s.width);x!==!1&&(a.width=x+(z?0:p+_));var S=t(s.height);return S!==!1&&(a.height=S+(z?0:y+I)),a.innerWidth=a.width-(p+_),a.innerHeight=a.height-(y+I),a.outerWidth=a.width+g,a.outerHeight=a.height+v,a}}var r,a="undefined"==typeof console?e:function(t){console.error(t)},u=["paddingLeft","paddingRight","paddingTop","paddingBottom","marginLeft","marginRight","marginTop","marginBottom","borderLeftWidth","borderRightWidth","borderTopWidth","borderBottomWidth"],h=u.length,d=!1;return s}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("desandro-matches-selector/matches-selector",e):"object"==typeof module&&module.exports?module.exports=e():t.matchesSelector=e()}(window,function(){"use strict";var t=function(){var t=Element.prototype;if(t.matches)return"matches";if(t.matchesSelector)return"matchesSelector";for(var e=["webkit","moz","ms","o"],i=0;i<e.length;i++){var n=e[i],o=n+"MatchesSelector";if(t[o])return o}}();return function(e,i){return e[t](i)}}),function(t,e){"function"==typeof define&&define.amd?define("fizzy-ui-utils/utils",["desandro-matches-selector/matches-selector"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("desandro-matches-selector")):t.fizzyUIUtils=e(t,t.matchesSelector)}(window,function(t,e){var i={};i.extend=function(t,e){for(var i in e)t[i]=e[i];return t},i.modulo=function(t,e){return(t%e+e)%e},i.makeArray=function(t){var e=[];if(Array.isArray(t))e=t;else if(t&&"number"==typeof t.length)for(var i=0;i<t.length;i++)e.push(t[i]);else e.push(t);return e},i.removeFrom=function(t,e){var i=t.indexOf(e);-1!=i&&t.splice(i,1)},i.getParent=function(t,i){for(;t!=document.body;)if(t=t.parentNode,e(t,i))return t},i.getQueryElement=function(t){return"string"==typeof t?document.querySelector(t):t},i.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},i.filterFindElements=function(t,n){t=i.makeArray(t);var o=[];return t.forEach(function(t){if(t instanceof HTMLElement){if(!n)return void o.push(t);e(t,n)&&o.push(t);for(var i=t.querySelectorAll(n),s=0;s<i.length;s++)o.push(i[s])}}),o},i.debounceMethod=function(t,e,i){var n=t.prototype[e],o=e+"Timeout";t.prototype[e]=function(){var t=this[o];t&&clearTimeout(t);var e=arguments,s=this;this[o]=setTimeout(function(){n.apply(s,e),delete s[o]},i||100)}},i.docReady=function(t){var e=document.readyState;"complete"==e||"interactive"==e?t():document.addEventListener("DOMContentLoaded",t)},i.toDashed=function(t){return t.replace(/(.)([A-Z])/g,function(t,e,i){return e+"-"+i}).toLowerCase()};var n=t.console;return i.htmlInit=function(e,o){i.docReady(function(){var s=i.toDashed(o),r="data-"+s,a=document.querySelectorAll("["+r+"]"),u=document.querySelectorAll(".js-"+s),h=i.makeArray(a).concat(i.makeArray(u)),d=r+"-options",l=t.jQuery;h.forEach(function(t){var i,s=t.getAttribute(r)||t.getAttribute(d);try{i=s&&JSON.parse(s)}catch(a){return void(n&&n.error("Error parsing "+r+" on "+t.className+": "+a))}var u=new e(t,i);l&&l.data(t,o,u)})})},i}),function(t,e){"function"==typeof define&&define.amd?define("outlayer/item",["ev-emitter/ev-emitter","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("ev-emitter"),require("get-size")):(t.Outlayer={},t.Outlayer.Item=e(t.EvEmitter,t.getSize))}(window,function(t,e){"use strict";function i(t){for(var e in t)return!1;return e=null,!0}function n(t,e){t&&(this.element=t,this.layout=e,this.position={x:0,y:0},this._create())}function o(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}var s=document.documentElement.style,r="string"==typeof s.transition?"transition":"WebkitTransition",a="string"==typeof s.transform?"transform":"WebkitTransform",u={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[r],h={transform:a,transition:r,transitionDuration:r+"Duration",transitionProperty:r+"Property",transitionDelay:r+"Delay"},d=n.prototype=Object.create(t.prototype);d.constructor=n,d._create=function(){this._transn={ingProperties:{},clean:{},onEnd:{}},this.css({position:"absolute"})},d.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},d.getSize=function(){this.size=e(this.element)},d.css=function(t){var e=this.element.style;for(var i in t){var n=h[i]||i;e[n]=t[i]}},d.getPosition=function(){var t=getComputedStyle(this.element),e=this.layout._getOption("originLeft"),i=this.layout._getOption("originTop"),n=t[e?"left":"right"],o=t[i?"top":"bottom"],s=this.layout.size,r=-1!=n.indexOf("%")?parseFloat(n)/100*s.width:parseInt(n,10),a=-1!=o.indexOf("%")?parseFloat(o)/100*s.height:parseInt(o,10);r=isNaN(r)?0:r,a=isNaN(a)?0:a,r-=e?s.paddingLeft:s.paddingRight,a-=i?s.paddingTop:s.paddingBottom,this.position.x=r,this.position.y=a},d.layoutPosition=function(){var t=this.layout.size,e={},i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop"),o=i?"paddingLeft":"paddingRight",s=i?"left":"right",r=i?"right":"left",a=this.position.x+t[o];e[s]=this.getXValue(a),e[r]="";var u=n?"paddingTop":"paddingBottom",h=n?"top":"bottom",d=n?"bottom":"top",l=this.position.y+t[u];e[h]=this.getYValue(l),e[d]="",this.css(e),this.emitEvent("layout",[this])},d.getXValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&!e?t/this.layout.size.width*100+"%":t+"px"},d.getYValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&e?t/this.layout.size.height*100+"%":t+"px"},d._transitionTo=function(t,e){this.getPosition();var i=this.position.x,n=this.position.y,o=parseInt(t,10),s=parseInt(e,10),r=o===this.position.x&&s===this.position.y;if(this.setPosition(t,e),r&&!this.isTransitioning)return void this.layoutPosition();var a=t-i,u=e-n,h={};h.transform=this.getTranslate(a,u),this.transition({to:h,onTransitionEnd:{transform:this.layoutPosition},isCleaning:!0})},d.getTranslate=function(t,e){var i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop");return t=i?t:-t,e=n?e:-e,"translate3d("+t+"px, "+e+"px, 0)"},d.goTo=function(t,e){this.setPosition(t,e),this.layoutPosition()},d.moveTo=d._transitionTo,d.setPosition=function(t,e){this.position.x=parseInt(t,10),this.position.y=parseInt(e,10)},d._nonTransition=function(t){this.css(t.to),t.isCleaning&&this._removeStyles(t.to);for(var e in t.onTransitionEnd)t.onTransitionEnd[e].call(this)},d.transition=function(t){if(!parseFloat(this.layout.options.transitionDuration))return void this._nonTransition(t);var e=this._transn;for(var i in t.onTransitionEnd)e.onEnd[i]=t.onTransitionEnd[i];for(i in t.to)e.ingProperties[i]=!0,t.isCleaning&&(e.clean[i]=!0);if(t.from){this.css(t.from);var n=this.element.offsetHeight;n=null}this.enableTransition(t.to),this.css(t.to),this.isTransitioning=!0};var l="opacity,"+o(a);d.enableTransition=function(){if(!this.isTransitioning){var t=this.layout.options.transitionDuration;t="number"==typeof t?t+"ms":t,this.css({transitionProperty:l,transitionDuration:t,transitionDelay:this.staggerDelay||0}),this.element.addEventListener(u,this,!1)}},d.onwebkitTransitionEnd=function(t){this.ontransitionend(t)},d.onotransitionend=function(t){this.ontransitionend(t)};var f={"-webkit-transform":"transform"};d.ontransitionend=function(t){if(t.target===this.element){var e=this._transn,n=f[t.propertyName]||t.propertyName;if(delete e.ingProperties[n],i(e.ingProperties)&&this.disableTransition(),n in e.clean&&(this.element.style[t.propertyName]="",delete e.clean[n]),n in e.onEnd){var o=e.onEnd[n];o.call(this),delete e.onEnd[n]}this.emitEvent("transitionEnd",[this])}},d.disableTransition=function(){this.removeTransitionStyles(),this.element.removeEventListener(u,this,!1),this.isTransitioning=!1},d._removeStyles=function(t){var e={};for(var i in t)e[i]="";this.css(e)};var c={transitionProperty:"",transitionDuration:"",transitionDelay:""};return d.removeTransitionStyles=function(){this.css(c)},d.stagger=function(t){t=isNaN(t)?0:t,this.staggerDelay=t+"ms"},d.removeElem=function(){this.element.parentNode.removeChild(this.element),this.css({display:""}),this.emitEvent("remove",[this])},d.remove=function(){return r&&parseFloat(this.layout.options.transitionDuration)?(this.once("transitionEnd",function(){this.removeElem()}),void this.hide()):void this.removeElem()},d.reveal=function(){delete this.isHidden,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("visibleStyle");e[i]=this.onRevealTransitionEnd,this.transition({from:t.hiddenStyle,to:t.visibleStyle,isCleaning:!0,onTransitionEnd:e})},d.onRevealTransitionEnd=function(){this.isHidden||this.emitEvent("reveal")},d.getHideRevealTransitionEndProperty=function(t){var e=this.layout.options[t];if(e.opacity)return"opacity";for(var i in e)return i},d.hide=function(){this.isHidden=!0,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("hiddenStyle");e[i]=this.onHideTransitionEnd,this.transition({from:t.visibleStyle,to:t.hiddenStyle,isCleaning:!0,onTransitionEnd:e})},d.onHideTransitionEnd=function(){this.isHidden&&(this.css({display:"none"}),this.emitEvent("hide"))},d.destroy=function(){this.css({position:"",left:"",right:"",top:"",bottom:"",transition:"",transform:""})},n}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("outlayer/outlayer",["ev-emitter/ev-emitter","get-size/get-size","fizzy-ui-utils/utils","./item"],function(i,n,o,s){return e(t,i,n,o,s)}):"object"==typeof module&&module.exports?module.exports=e(t,require("ev-emitter"),require("get-size"),require("fizzy-ui-utils"),require("./item")):t.Outlayer=e(t,t.EvEmitter,t.getSize,t.fizzyUIUtils,t.Outlayer.Item)}(window,function(t,e,i,n,o){"use strict";function s(t,e){var i=n.getQueryElement(t);if(!i)return void(u&&u.error("Bad element for "+this.constructor.namespace+": "+(i||t)));this.element=i,h&&(this.$element=h(this.element)),this.options=n.extend({},this.constructor.defaults),this.option(e);var o=++l;this.element.outlayerGUID=o,f[o]=this,this._create();var s=this._getOption("initLayout");s&&this.layout()}function r(t){function e(){t.apply(this,arguments)}return e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e}function a(t){if("number"==typeof t)return t;var e=t.match(/(^\d*\.?\d*)(\w*)/),i=e&&e[1],n=e&&e[2];if(!i.length)return 0;i=parseFloat(i);var o=m[n]||1;return i*o}var u=t.console,h=t.jQuery,d=function(){},l=0,f={};s.namespace="outlayer",s.Item=o,s.defaults={containerStyle:{position:"relative"},initLayout:!0,originLeft:!0,originTop:!0,resize:!0,resizeContainer:!0,transitionDuration:"0.4s",hiddenStyle:{opacity:0,transform:"scale(0.001)"},visibleStyle:{opacity:1,transform:"scale(1)"}};var c=s.prototype;n.extend(c,e.prototype),c.option=function(t){n.extend(this.options,t)},c._getOption=function(t){var e=this.constructor.compatOptions[t];return e&&void 0!==this.options[e]?this.options[e]:this.options[t]},s.compatOptions={initLayout:"isInitLayout",horizontal:"isHorizontal",layoutInstant:"isLayoutInstant",originLeft:"isOriginLeft",originTop:"isOriginTop",resize:"isResizeBound",resizeContainer:"isResizingContainer"},c._create=function(){this.reloadItems(),this.stamps=[],this.stamp(this.options.stamp),n.extend(this.element.style,this.options.containerStyle);var t=this._getOption("resize");t&&this.bindResize()},c.reloadItems=function(){this.items=this._itemize(this.element.children)},c._itemize=function(t){for(var e=this._filterFindItemElements(t),i=this.constructor.Item,n=[],o=0;o<e.length;o++){var s=e[o],r=new i(s,this);n.push(r)}return n},c._filterFindItemElements=function(t){return n.filterFindElements(t,this.options.itemSelector)},c.getItemElements=function(){return this.items.map(function(t){return t.element})},c.layout=function(){this._resetLayout(),this._manageStamps();var t=this._getOption("layoutInstant"),e=void 0!==t?t:!this._isLayoutInited;this.layoutItems(this.items,e),this._isLayoutInited=!0},c._init=c.layout,c._resetLayout=function(){this.getSize()},c.getSize=function(){this.size=i(this.element)},c._getMeasurement=function(t,e){var n,o=this.options[t];o?("string"==typeof o?n=this.element.querySelector(o):o instanceof HTMLElement&&(n=o),this[t]=n?i(n)[e]:o):this[t]=0},c.layoutItems=function(t,e){t=this._getItemsForLayout(t),this._layoutItems(t,e),this._postLayout()},c._getItemsForLayout=function(t){return t.filter(function(t){return!t.isIgnored})},c._layoutItems=function(t,e){if(this._emitCompleteOnItems("layout",t),t&&t.length){var i=[];t.forEach(function(t){var n=this._getItemLayoutPosition(t);n.item=t,n.isInstant=e||t.isLayoutInstant,i.push(n)},this),this._processLayoutQueue(i)}},c._getItemLayoutPosition=function(){return{x:0,y:0}},c._processLayoutQueue=function(t){this.updateStagger(),t.forEach(function(t,e){this._positionItem(t.item,t.x,t.y,t.isInstant,e)},this)},c.updateStagger=function(){var t=this.options.stagger;return null===t||void 0===t?void(this.stagger=0):(this.stagger=a(t),this.stagger)},c._positionItem=function(t,e,i,n,o){n?t.goTo(e,i):(t.stagger(o*this.stagger),t.moveTo(e,i))},c._postLayout=function(){this.resizeContainer()},c.resizeContainer=function(){var t=this._getOption("resizeContainer");if(t){var e=this._getContainerSize();e&&(this._setContainerMeasure(e.width,!0),this._setContainerMeasure(e.height,!1))}},c._getContainerSize=d,c._setContainerMeasure=function(t,e){if(void 0!==t){var i=this.size;i.isBorderBox&&(t+=e?i.paddingLeft+i.paddingRight+i.borderLeftWidth+i.borderRightWidth:i.paddingBottom+i.paddingTop+i.borderTopWidth+i.borderBottomWidth),t=Math.max(t,0),this.element.style[e?"width":"height"]=t+"px"}},c._emitCompleteOnItems=function(t,e){function i(){o.dispatchEvent(t+"Complete",null,[e])}function n(){r++,r==s&&i()}var o=this,s=e.length;if(!e||!s)return void i();var r=0;e.forEach(function(e){e.once(t,n)})},c.dispatchEvent=function(t,e,i){var n=e?[e].concat(i):i;if(this.emitEvent(t,n),h)if(this.$element=this.$element||h(this.element),e){var o=h.Event(e);o.type=t,this.$element.trigger(o,i)}else this.$element.trigger(t,i)},c.ignore=function(t){var e=this.getItem(t);e&&(e.isIgnored=!0)},c.unignore=function(t){var e=this.getItem(t);e&&delete e.isIgnored},c.stamp=function(t){t=this._find(t),t&&(this.stamps=this.stamps.concat(t),t.forEach(this.ignore,this))},c.unstamp=function(t){t=this._find(t),t&&t.forEach(function(t){n.removeFrom(this.stamps,t),this.unignore(t)},this)},c._find=function(t){return t?("string"==typeof t&&(t=this.element.querySelectorAll(t)),t=n.makeArray(t)):void 0},c._manageStamps=function(){this.stamps&&this.stamps.length&&(this._getBoundingRect(),this.stamps.forEach(this._manageStamp,this))},c._getBoundingRect=function(){var t=this.element.getBoundingClientRect(),e=this.size;this._boundingRect={left:t.left+e.paddingLeft+e.borderLeftWidth,top:t.top+e.paddingTop+e.borderTopWidth,right:t.right-(e.paddingRight+e.borderRightWidth),bottom:t.bottom-(e.paddingBottom+e.borderBottomWidth)}},c._manageStamp=d,c._getElementOffset=function(t){var e=t.getBoundingClientRect(),n=this._boundingRect,o=i(t),s={left:e.left-n.left-o.marginLeft,top:e.top-n.top-o.marginTop,right:n.right-e.right-o.marginRight,bottom:n.bottom-e.bottom-o.marginBottom};return s},c.handleEvent=n.handleEvent,c.bindResize=function(){t.addEventListener("resize",this),this.isResizeBound=!0},c.unbindResize=function(){t.removeEventListener("resize",this),this.isResizeBound=!1},c.onresize=function(){this.resize()},n.debounceMethod(s,"onresize",100),c.resize=function(){this.isResizeBound&&this.needsResizeLayout()&&this.layout()},c.needsResizeLayout=function(){var t=i(this.element),e=this.size&&t;return e&&t.innerWidth!==this.size.innerWidth},c.addItems=function(t){var e=this._itemize(t);return e.length&&(this.items=this.items.concat(e)),e},c.appended=function(t){var e=this.addItems(t);e.length&&(this.layoutItems(e,!0),this.reveal(e))},c.prepended=function(t){var e=this._itemize(t);if(e.length){var i=this.items.slice(0);this.items=e.concat(i),this._resetLayout(),this._manageStamps(),this.layoutItems(e,!0),this.reveal(e),this.layoutItems(i)}},c.reveal=function(t){if(this._emitCompleteOnItems("reveal",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.reveal()})}},c.hide=function(t){if(this._emitCompleteOnItems("hide",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.hide()})}},c.revealItemElements=function(t){var e=this.getItems(t);this.reveal(e)},c.hideItemElements=function(t){var e=this.getItems(t);this.hide(e)},c.getItem=function(t){for(var e=0;e<this.items.length;e++){var i=this.items[e];if(i.element==t)return i}},c.getItems=function(t){t=n.makeArray(t);var e=[];return t.forEach(function(t){var i=this.getItem(t);i&&e.push(i)},this),e},c.remove=function(t){var e=this.getItems(t);this._emitCompleteOnItems("remove",e),e&&e.length&&e.forEach(function(t){t.remove(),n.removeFrom(this.items,t)},this)},c.destroy=function(){var t=this.element.style;t.height="",t.position="",t.width="",this.items.forEach(function(t){t.destroy()}),this.unbindResize();var e=this.element.outlayerGUID;delete f[e],delete this.element.outlayerGUID,h&&h.removeData(this.element,this.constructor.namespace)},s.data=function(t){t=n.getQueryElement(t);var e=t&&t.outlayerGUID;return e&&f[e]},s.create=function(t,e){var i=r(s);return i.defaults=n.extend({},s.defaults),n.extend(i.defaults,e),i.compatOptions=n.extend({},s.compatOptions),i.namespace=t,i.data=s.data,i.Item=r(o),n.htmlInit(i,t),h&&h.bridget&&h.bridget(t,i),i};var m={ms:1,s:1e3};return s.Item=o,s}),function(t,e){"function"==typeof define&&define.amd?define("isotope/js/item",["outlayer/outlayer"],e):"object"==typeof module&&module.exports?module.exports=e(require("outlayer")):(t.Isotope=t.Isotope||{},t.Isotope.Item=e(t.Outlayer))}(window,function(t){"use strict";function e(){t.Item.apply(this,arguments)}var i=e.prototype=Object.create(t.Item.prototype),n=i._create;i._create=function(){this.id=this.layout.itemGUID++,n.call(this),this.sortData={}},i.updateSortData=function(){if(!this.isIgnored){this.sortData.id=this.id,this.sortData["original-order"]=this.id,this.sortData.random=Math.random();var t=this.layout.options.getSortData,e=this.layout._sorters;for(var i in t){var n=e[i];this.sortData[i]=n(this.element,this)}}};var o=i.destroy;return i.destroy=function(){o.apply(this,arguments),this.css({display:""})},e}),function(t,e){"function"==typeof define&&define.amd?define("isotope/js/layout-mode",["get-size/get-size","outlayer/outlayer"],e):"object"==typeof module&&module.exports?module.exports=e(require("get-size"),require("outlayer")):(t.Isotope=t.Isotope||{},t.Isotope.LayoutMode=e(t.getSize,t.Outlayer))}(window,function(t,e){"use strict";function i(t){this.isotope=t,t&&(this.options=t.options[this.namespace],this.element=t.element,this.items=t.filteredItems,this.size=t.size)}var n=i.prototype,o=["_resetLayout","_getItemLayoutPosition","_manageStamp","_getContainerSize","_getElementOffset","needsResizeLayout","_getOption"];return o.forEach(function(t){n[t]=function(){return e.prototype[t].apply(this.isotope,arguments)}}),n.needsVerticalResizeLayout=function(){var e=t(this.isotope.element),i=this.isotope.size&&e;return i&&e.innerHeight!=this.isotope.size.innerHeight},n._getMeasurement=function(){this.isotope._getMeasurement.apply(this,arguments)},n.getColumnWidth=function(){this.getSegmentSize("column","Width")},n.getRowHeight=function(){this.getSegmentSize("row","Height")},n.getSegmentSize=function(t,e){var i=t+e,n="outer"+e;if(this._getMeasurement(i,n),!this[i]){var o=this.getFirstItemSize();this[i]=o&&o[n]||this.isotope.size["inner"+e]}},n.getFirstItemSize=function(){var e=this.isotope.filteredItems[0];return e&&e.element&&t(e.element)},n.layout=function(){this.isotope.layout.apply(this.isotope,arguments)},n.getSize=function(){this.isotope.getSize(),this.size=this.isotope.size},i.modes={},i.create=function(t,e){function o(){i.apply(this,arguments)}return o.prototype=Object.create(n),o.prototype.constructor=o,e&&(o.options=e),o.prototype.namespace=t,i.modes[t]=o,o},i}),function(t,e){"function"==typeof define&&define.amd?define("masonry/masonry",["outlayer/outlayer","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("outlayer"),require("get-size")):t.Masonry=e(t.Outlayer,t.getSize)}(window,function(t,e){var i=t.create("masonry");return i.compatOptions.fitWidth="isFitWidth",i.prototype._resetLayout=function(){this.getSize(),this._getMeasurement("columnWidth","outerWidth"),this._getMeasurement("gutter","outerWidth"),this.measureColumns(),this.colYs=[];for(var t=0;t<this.cols;t++)this.colYs.push(0);this.maxY=0},i.prototype.measureColumns=function(){if(this.getContainerWidth(),!this.columnWidth){var t=this.items[0],i=t&&t.element;this.columnWidth=i&&e(i).outerWidth||this.containerWidth}var n=this.columnWidth+=this.gutter,o=this.containerWidth+this.gutter,s=o/n,r=n-o%n,a=r&&1>r?"round":"floor";s=Math[a](s),this.cols=Math.max(s,1)},i.prototype.getContainerWidth=function(){var t=this._getOption("fitWidth"),i=t?this.element.parentNode:this.element,n=e(i);this.containerWidth=n&&n.innerWidth},i.prototype._getItemLayoutPosition=function(t){t.getSize();var e=t.size.outerWidth%this.columnWidth,i=e&&1>e?"round":"ceil",n=Math[i](t.size.outerWidth/this.columnWidth);n=Math.min(n,this.cols);for(var o=this._getColGroup(n),s=Math.min.apply(Math,o),r=o.indexOf(s),a={x:this.columnWidth*r,y:s},u=s+t.size.outerHeight,h=this.cols+1-o.length,d=0;h>d;d++)this.colYs[r+d]=u;return a},i.prototype._getColGroup=function(t){if(2>t)return this.colYs;for(var e=[],i=this.cols+1-t,n=0;i>n;n++){var o=this.colYs.slice(n,n+t);e[n]=Math.max.apply(Math,o)}return e},i.prototype._manageStamp=function(t){var i=e(t),n=this._getElementOffset(t),o=this._getOption("originLeft"),s=o?n.left:n.right,r=s+i.outerWidth,a=Math.floor(s/this.columnWidth);a=Math.max(0,a);var u=Math.floor(r/this.columnWidth);u-=r%this.columnWidth?0:1,u=Math.min(this.cols-1,u);for(var h=this._getOption("originTop"),d=(h?n.top:n.bottom)+i.outerHeight,l=a;u>=l;l++)this.colYs[l]=Math.max(d,this.colYs[l])},i.prototype._getContainerSize=function(){this.maxY=Math.max.apply(Math,this.colYs);var t={height:this.maxY};return this._getOption("fitWidth")&&(t.width=this._getContainerFitWidth()),t},i.prototype._getContainerFitWidth=function(){for(var t=0,e=this.cols;--e&&0===this.colYs[e];)t++;return(this.cols-t)*this.columnWidth-this.gutter},i.prototype.needsResizeLayout=function(){var t=this.containerWidth;return this.getContainerWidth(),t!=this.containerWidth},i}),function(t,e){"function"==typeof define&&define.amd?define("isotope/js/layout-modes/masonry",["../layout-mode","masonry/masonry"],e):"object"==typeof module&&module.exports?module.exports=e(require("../layout-mode"),require("masonry-layout")):e(t.Isotope.LayoutMode,t.Masonry)}(window,function(t,e){"use strict";var i=t.create("masonry"),n=i.prototype,o={_getElementOffset:!0,layout:!0,_getMeasurement:!0};for(var s in e.prototype)o[s]||(n[s]=e.prototype[s]);var r=n.measureColumns;n.measureColumns=function(){this.items=this.isotope.filteredItems,r.call(this)};var a=n._getOption;return n._getOption=function(t){return"fitWidth"==t?void 0!==this.options.isFitWidth?this.options.isFitWidth:this.options.fitWidth:a.apply(this.isotope,arguments)},i}),function(t,e){"function"==typeof define&&define.amd?define("isotope/js/layout-modes/fit-rows",["../layout-mode"],e):"object"==typeof exports?module.exports=e(require("../layout-mode")):e(t.Isotope.LayoutMode)}(window,function(t){"use strict";var e=t.create("fitRows"),i=e.prototype;return i._resetLayout=function(){this.x=0,this.y=0,this.maxY=0,this._getMeasurement("gutter","outerWidth")},i._getItemLayoutPosition=function(t){t.getSize();var e=t.size.outerWidth+this.gutter,i=this.isotope.size.innerWidth+this.gutter;0!==this.x&&e+this.x>i&&(this.x=0,this.y=this.maxY);var n={x:this.x,y:this.y};return this.maxY=Math.max(this.maxY,this.y+t.size.outerHeight),this.x+=e,n},i._getContainerSize=function(){return{height:this.maxY}},e}),function(t,e){"function"==typeof define&&define.amd?define("isotope/js/layout-modes/vertical",["../layout-mode"],e):"object"==typeof module&&module.exports?module.exports=e(require("../layout-mode")):e(t.Isotope.LayoutMode)}(window,function(t){"use strict";var e=t.create("vertical",{horizontalAlignment:0}),i=e.prototype;return i._resetLayout=function(){this.y=0},i._getItemLayoutPosition=function(t){t.getSize();var e=(this.isotope.size.innerWidth-t.size.outerWidth)*this.options.horizontalAlignment,i=this.y;return this.y+=t.size.outerHeight,{x:e,y:i}},i._getContainerSize=function(){return{height:this.y}},e}),function(t,e){"function"==typeof define&&define.amd?define(["outlayer/outlayer","get-size/get-size","desandro-matches-selector/matches-selector","fizzy-ui-utils/utils","isotope/js/item","isotope/js/layout-mode","isotope/js/layout-modes/masonry","isotope/js/layout-modes/fit-rows","isotope/js/layout-modes/vertical"],function(i,n,o,s,r,a){return e(t,i,n,o,s,r,a)}):"object"==typeof module&&module.exports?module.exports=e(t,require("outlayer"),require("get-size"),require("desandro-matches-selector"),require("fizzy-ui-utils"),require("isotope/js/item"),require("isotope/js/layout-mode"),require("isotope/js/layout-modes/masonry"),require("isotope/js/layout-modes/fit-rows"),require("isotope/js/layout-modes/vertical")):t.Isotope=e(t,t.Outlayer,t.getSize,t.matchesSelector,t.fizzyUIUtils,t.Isotope.Item,t.Isotope.LayoutMode)}(window,function(t,e,i,n,o,s,r){function a(t,e){return function(i,n){for(var o=0;o<t.length;o++){var s=t[o],r=i.sortData[s],a=n.sortData[s];if(r>a||a>r){var u=void 0!==e[s]?e[s]:e,h=u?1:-1;return(r>a?1:-1)*h}}return 0}}var u=t.jQuery,h=String.prototype.trim?function(t){return t.trim()}:function(t){return t.replace(/^\s+|\s+$/g,"")},d=e.create("isotope",{layoutMode:"masonry",isJQueryFiltering:!0,sortAscending:!0});d.Item=s,d.LayoutMode=r;var l=d.prototype;l._create=function(){this.itemGUID=0,this._sorters={},this._getSorters(),e.prototype._create.call(this),this.modes={},this.filteredItems=this.items,this.sortHistory=["original-order"];for(var t in r.modes)this._initLayoutMode(t)},l.reloadItems=function(){this.itemGUID=0,e.prototype.reloadItems.call(this)},l._itemize=function(){for(var t=e.prototype._itemize.apply(this,arguments),i=0;i<t.length;i++){var n=t[i];n.id=this.itemGUID++}return this._updateItemsSortData(t),t},l._initLayoutMode=function(t){var e=r.modes[t],i=this.options[t]||{};this.options[t]=e.options?o.extend(e.options,i):i,this.modes[t]=new e(this)},l.layout=function(){return!this._isLayoutInited&&this._getOption("initLayout")?void this.arrange():void this._layout()},l._layout=function(){var t=this._getIsInstant();this._resetLayout(),this._manageStamps(),this.layoutItems(this.filteredItems,t),this._isLayoutInited=!0},l.arrange=function(t){this.option(t),this._getIsInstant();var e=this._filter(this.items);this.filteredItems=e.matches,this._bindArrangeComplete(),this._isInstant?this._noTransition(this._hideReveal,[e]):this._hideReveal(e),this._sort(),this._layout()},l._init=l.arrange,l._hideReveal=function(t){this.reveal(t.needReveal),this.hide(t.needHide)},l._getIsInstant=function(){var t=this._getOption("layoutInstant"),e=void 0!==t?t:!this._isLayoutInited;return this._isInstant=e,e},l._bindArrangeComplete=function(){function t(){e&&i&&n&&o.dispatchEvent("arrangeComplete",null,[o.filteredItems])}var e,i,n,o=this;this.once("layoutComplete",function(){e=!0,t()}),this.once("hideComplete",function(){i=!0,t()}),this.once("revealComplete",function(){n=!0,t()})},l._filter=function(t){var e=this.options.filter;e=e||"*";for(var i=[],n=[],o=[],s=this._getFilterTest(e),r=0;r<t.length;r++){var a=t[r];if(!a.isIgnored){var u=s(a);u&&i.push(a),u&&a.isHidden?n.push(a):u||a.isHidden||o.push(a)}}return{matches:i,needReveal:n,needHide:o}},l._getFilterTest=function(t){return u&&this.options.isJQueryFiltering?function(e){return u(e.element).is(t)}:"function"==typeof t?function(e){return t(e.element)}:function(e){return n(e.element,t)}},l.updateSortData=function(t){var e;t?(t=o.makeArray(t),e=this.getItems(t)):e=this.items,this._getSorters(),this._updateItemsSortData(e)},l._getSorters=function(){var t=this.options.getSortData;for(var e in t){var i=t[e];this._sorters[e]=f(i)}},l._updateItemsSortData=function(t){for(var e=t&&t.length,i=0;e&&e>i;i++){var n=t[i];n.updateSortData()}};var f=function(){function t(t){if("string"!=typeof t)return t;var i=h(t).split(" "),n=i[0],o=n.match(/^\[(.+)\]$/),s=o&&o[1],r=e(s,n),a=d.sortDataParsers[i[1]];
return t=a?function(t){return t&&a(r(t))}:function(t){return t&&r(t)}}function e(t,e){return t?function(e){return e.getAttribute(t)}:function(t){var i=t.querySelector(e);return i&&i.textContent}}return t}();d.sortDataParsers={parseInt:function(t){return parseInt(t,10)},parseFloat:function(t){return parseFloat(t)}},l._sort=function(){var t=this.options.sortBy;if(t){var e=[].concat.apply(t,this.sortHistory),i=a(e,this.options.sortAscending);this.filteredItems.sort(i),t!=this.sortHistory[0]&&this.sortHistory.unshift(t)}},l._mode=function(){var t=this.options.layoutMode,e=this.modes[t];if(!e)throw new Error("No layout mode: "+t);return e.options=this.options[t],e},l._resetLayout=function(){e.prototype._resetLayout.call(this),this._mode()._resetLayout()},l._getItemLayoutPosition=function(t){return this._mode()._getItemLayoutPosition(t)},l._manageStamp=function(t){this._mode()._manageStamp(t)},l._getContainerSize=function(){return this._mode()._getContainerSize()},l.needsResizeLayout=function(){return this._mode().needsResizeLayout()},l.appended=function(t){var e=this.addItems(t);if(e.length){var i=this._filterRevealAdded(e);this.filteredItems=this.filteredItems.concat(i)}},l.prepended=function(t){var e=this._itemize(t);if(e.length){this._resetLayout(),this._manageStamps();var i=this._filterRevealAdded(e);this.layoutItems(this.filteredItems),this.filteredItems=i.concat(this.filteredItems),this.items=e.concat(this.items)}},l._filterRevealAdded=function(t){var e=this._filter(t);return this.hide(e.needHide),this.reveal(e.matches),this.layoutItems(e.matches,!0),e.matches},l.insert=function(t){var e=this.addItems(t);if(e.length){var i,n,o=e.length;for(i=0;o>i;i++)n=e[i],this.element.appendChild(n.element);var s=this._filter(e).matches;for(i=0;o>i;i++)e[i].isLayoutInstant=!0;for(this.arrange(),i=0;o>i;i++)delete e[i].isLayoutInstant;this.reveal(s)}};var c=l.remove;return l.remove=function(t){t=o.makeArray(t);var e=this.getItems(t);c.call(this,t);for(var i=e&&e.length,n=0;i&&i>n;n++){var s=e[n];o.removeFrom(this.filteredItems,s)}},l.shuffle=function(){for(var t=0;t<this.items.length;t++){var e=this.items[t];e.sortData.random=Math.random()}this.options.sortBy="random",this._sort(),this._layout()},l._noTransition=function(t,e){var i=this.options.transitionDuration;this.options.transitionDuration=0;var n=t.apply(this,e);return this.options.transitionDuration=i,n},l.getFilteredItemElements=function(){return this.filteredItems.map(function(t){return t.element})},d});

jQuery(window).load(function(){
				
	var filters = {}, $container = jQuery('.stream');

	jQuery('.filter a').click(function(){
      	var $i = jQuery(this), isoFilters = [], prop, selector, $a = $i.parents('.dcsns-toolbar'), $b = $a.next(), $c = jQuery('.stream',$b);
		
		jQuery('.filter a',$a).removeClass('iso-active');
		$i.addClass('iso-active');
      	filters[ $i.data('group') ] = $i.data('filter');
      	for (prop in filters){
        	isoFilters.push(filters[ prop ])
      	}
      	selector = isoFilters.join('');
      	$c.isotope({filter: selector, sortBy : 'postDate'});

      	return false;
    });
	
	jQuery.each($container,function(){
		jQuery('li .section-thumb img, li .section-text img',jQuery(this)).css('opacity',0).show().fadeTo(800,1);
		jQuery(this).isotope('layout');
	});
	
	function sortstream(obj,d){
		var $l = jQuery('li.dcsns-li',obj);
		$l.sort(function(a, b){
			var keyA = parseInt(jQuery(a).attr('rel'),10), keyB = parseInt(jQuery(b).attr('rel'),10);
			if(d == 'asc'){return (keyA > keyB) ? 1 : -1;} 
			else {return (keyA < keyB) ? 1 : -1;}
			return 0;
		});
		jQuery.each($l, function(index, row){
			obj.append(row);
		});
		return;
	}
});;
(function ($) {

  Drupal.behaviors.udg_media = {
    attach: function (context, settings) {
      $('#social-stream').dcSocialStream({
       feeds: {
          /*twitter: {
            id: '/9927875,#designchemical,designchemical',
            thumb: true
          },*/
          twitter: {
            id: 'udg_oficial',
            thumb: true,
          },
          /*rss: {
            id: 'http://feeds.feedburner.com/DesignChemical,http://feeds.feedburner.com/codecondo'
          },*/
          /*stumbleupon: {
            id: 'remix4'
          },*/
          /*facebook: {
            id: '157969574262873,Facebook Timeline/376995711728'
          },*/
          facebook: {
            id: '157969574262873'
          },
          /*google: {
            id: '111470071138275408587'
          },*/
          /*delicious: {
            id: 'designchemical'
          },*/
         /* vimeo: {
            id: 'brad',
            thumb: 'medium'
          },*/
          youtube: {
            id: 'UC8m5IpxWBMTxawT5wdNp7lA',
            out: 'intro,thumb,title,user,share',
            thumb: 'medium',
            api_key: 'AIzaSyBd_-IhST8Ddc3lFUubKBSDoeb8y1JII1A',
          },
          /*pinterest: {
            id: 'jaffrey,designchemical/design-ideas'
          },*/
          /*flickr: {
            id: ''
          },*/
          /*lastfm: {
            id: 'lastfm'
          },*/
          /*dribbble: {
            id: 'frogandcode'
          },*/
          /*deviantart: {
            id: 'isacg'
          },*/
          /*tumblr: {
            id: 'richters',
            thumb: 250
          }*/
        },
        rotate: {
          delay: 0
        },
        twitterId: 'udg_oficial',
        control: false,
        filter: false,
        wall: true,
        max: 'limit',
        limit: 5,
        iconPath: '/libraries/media/images/dcsns-dark/',
        imagePath: '/libraries/media/images/dcsns-dark/'
      });
    }
  }
}(jQuery));
;
(function ($) {
  Drupal.behaviors.ListonBlock = {
    attach: function (context, settings) {
        // Donde queremos cambiar el tamaño de la fuente
      var donde = $('body');
      var state = 0;
      var sizeFuenteOriginal = donde.css('font-size');
       // Resetear Font Size
     $(".resetearFont").once().click(function(){
            donde.css('font-size', sizeFuenteOriginal);
            state = 0;
            $("body").removeClass("accessibility-invert-image");
            $("body").removeClass("accessibility-contrast-image");
            $("body").removeClass("accessibility-sepia-image");
      });
        // Aumentar Font Size
      $(".aumentarFont").once().click(function(){
        if(state <= 2){
            var sizeFuenteActual = donde.css('font-size');
            var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
            var sizeFuenteNuevo = sizeFuenteActualNum*1.2;
            donde.css('font-size', sizeFuenteNuevo);
            state = state + 1;
            return false;

        }

      });
      // Disminuir Font Size
      $(".disminuirFont").once().click(function(){
        if(state >= -1){
            var sizeFuenteActual = donde.css('font-size');
            var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
            var sizeFuenteNuevo = sizeFuenteActualNum*0.8;
            donde.css('font-size', sizeFuenteNuevo);
            state = state - 1;
            return false;
        }
      });

     $("#accessibility-invert").once().click(function(){
        $("body").toggleClass("accessibility-invert-image");
        $("body").removeClass("accessibility-contrast-image");
        $("body").removeClass("accessibility-sepia-image");
      });
     $("#accessibility-contrast").once().click(function(){
        $("body").toggleClass("accessibility-contrast-image");
        $("body").removeClass("accessibility-sepia-image");
        $("body").removeClass("accessibility-invert-image");
      });
     $("#accessibility-sepia").once().click(function(){
        $("body").toggleClass("accessibility-sepia-image");
        $("body").removeClass("accessibility-invert-image");
        $("body").removeClass("accessibility-contrast-image");
      });

     function invertHex(hex) {
       return (Number(`0x1${hex}`) ^ 0xFFFFFF).toString(16).substr(1).toUpperCase()
      }

    }
  }
}(jQuery));
;
(function ($) {

  Drupal.behaviors.udg_liston = {
    attach: function (context, settings) {
      $('#playButtonVSlide').addClass('not-show');

      $('#carousel-udg').carousel({
        interval:10000,
      });

      $('#playButtonVSlide').click(function () {
        $('#carousel-udg').carousel('cycle');
        $('#playButtonVSlide').addClass('not-show');
        $('#pauseButtonVSlide').removeClass('not-show');

      });
      $('#pauseButtonVSlide').click(function () {
        $('#carousel-udg').carousel('pause');
        $('#pauseButtonVSlide').addClass('not-show');
        $('#playButtonVSlide').removeClass('not-show');
      });
    }
  }



}(jQuery));
;
