(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter45362778 = new Ya.Metrika({
						id:45362778,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
})(document, window, "yandex_metrika_callbacks");
(function ($) {
			$(document).ready(function(){


				$('.portfolio-list__wrap .testimonial:not(:first-child)').removeClass('testimonial_big');

				

				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(1)').addClass('col-xs-2');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(2)').addClass('col-xs-3');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(3)').addClass('col-xs-3');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(4)').addClass('col-xs-2');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(5)').addClass('col-xs-2');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(6)').addClass('col-xs-3');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(7)').addClass('col-xs-3');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(8)').addClass('col-xs-2');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(9)').addClass('col-xs-2');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(10)').addClass('col-xs-3');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(11)').addClass('col-xs-3');
				$('.portfolio-list__wrap .portfolio-content .mix:nth-child(12)').addClass('col-xs-2');



				$('.nametest input').focus(function(){

					$('.nametest label').hide();

				});
				$('.emailtest input').focus(function(){

					$('.emailtest label').hide();

				});
				$('.texttest textarea').focus(function(){

					$('.texttest label').hide();

				});


				mixitup(jQuery('.portfolio-content'));


			});
})(jQuery);