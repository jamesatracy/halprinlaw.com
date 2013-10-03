$(document).ready(function () {

	var banners = [],
		current = 0,
		last = 0,
		animating = false,
		onTimeout,
		timer;

	$("#home-banner").hover(function () {
		clearTimeout(timer);
		timer = null;
	}, function () {
		if (!timer) {
			timer = setTimeout(onTimeout, "5000");
		}
	});
	$(".home-banner-slide").each(function () {
		banners.push($(this));
	});
	if ($("#home-banner-link1").length) {
		$("#home-banner-link1").addClass("selected");
	}
	
	last = banners.length - 1;
	
	onTimeout = function () {
		if (!animating) {
			if (current == last) {
				slide(current, 0);
				current = 0;
			} else {
				slide(current, current + 1);
				current++;
			}
		}
	};
	timer = setTimeout(onTimeout, "5000");
	
	// click handlers for links
	$(".home-banner-link").click(function () {
		var index = parseInt($(this).attr("index"), 10);
		if (index != current && !animating) {
			clearTimeout(timer);
			timer = null;
			slide(current, index, true);
			current = index;
		}
	});
	
	// slide the banners
	function slide(first, second, fromLink) {
		var $first, 
			$second;
			
		first = parseInt(first, 10);
		second = parseInt(second, 10);
		if (first == second) {
			return;
		}
		
		$first = banners[first];
		$second = banners[second];
		
		if (first < second || (second == 0 && !fromLink)) {
			// slide left
			animating = true;
			$second.css({left: "981px"}).show();
			$first.animate({left: "-981px"}, "slow", function () {
				$first.hide();
				if ($("#home-banner-link" + (first + 1)).length) {
					$("#home-banner-link" + (first + 1)).removeClass("selected");
				}
				if ($("#home-banner-link" + (second + 1)).length) {
					$("#home-banner-link" + (second + 1)).addClass("selected");
				}
				animating = false;
				timer = setTimeout(onTimeout, "5000");
			});
			$second.animate({left: "0px"}, "slow");
		} else {
			// slide right
			animating = true;
			$second.css({left: "-981px"}).show();
			$first.animate({left: "981px"}, "slow", function () {
				$first.hide();
				if ($("#home-banner-link" + (first + 1)).length) {
					$("#home-banner-link" + (first + 1)).removeClass("selected");
				}
				if ($("#home-banner-link" + (second + 1)).length) {
					$("#home-banner-link" + (second + 1)).addClass("selected");
				}
				animating = false;
				timer = setTimeout(onTimeout, "5000");
			});
			$second.animate({left: "0px"}, "slow");
		}
	}
});