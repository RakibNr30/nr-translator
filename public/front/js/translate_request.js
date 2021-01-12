"use strict";

function _slicedToArray(t, e) {
	return _arrayWithHoles(t) || _iterableToArrayLimit(t, e) || _unsupportedIterableToArray(t, e) || _nonIterableRest()
}

function _nonIterableRest() {
	throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
}

function _unsupportedIterableToArray(t, e) {
	if (t) {
		if ("string" == typeof t) return _arrayLikeToArray(t, e);
		var a = Object.prototype.toString.call(t).slice(8, -1);
		return "Object" === a && t.constructor && (a = t.constructor.name), "Map" === a || "Set" === a ? Array.from(t) : "Arguments" === a || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a) ? _arrayLikeToArray(t, e) : void 0
	}
}

function _arrayLikeToArray(t, e) {
	(null == e || e > t.length) && (e = t.length);
	for (var a = 0, n = new Array(e); a < e; a++) n[a] = t[a];
	return n
}

function _iterableToArrayLimit(t, e) {
	if ("undefined" != typeof Symbol && Symbol.iterator in Object(t)) {
		var a = [],
			n = !0,
			o = !1,
			l = void 0;
		try {
			for (var s, r = t[Symbol.iterator](); !(n = (s = r.next()).done) && (a.push(s.value), !e || a.length !== e); n = !0);
		} catch (t) {
			o = !0, l = t
		} finally {
			try {
				n || null == r.return || r.return()
			} finally {
				if (o) throw l
			}
		}
		return a
	}
}

function _arrayWithHoles(t) {
	if (Array.isArray(t)) return t
}
var MENU = {
	overlay: $('[data-element="overlay"]'),
	hamburger: $('[data-element="hamburger"]'),
	mobile: $('[data-element="mobile_menu"]')
};
$(document).ready(function() {
	$(".mainMenu").clone().appendTo(".navigation__mobile"), $('[data-element="mobile_menu_close"]').on("click", function() {
		MENU.mobile.removeClass("open"), MENU.overlay.fadeOut()
	}), MENU.hamburger.on("click", function(t) {
		$(this).addClass("opened"), MENU.mobile.addClass("open"), $(window).scrollTop($("body").offset().top), $(this).addClass("opened"), (isMobile() || isTablet()) && MENU.overlay.fadeIn(), $(document).mouseup(function(t) {
			MENU.mobile.is(t.target) || 0 !== MENU.mobile.has(t.target).length || $('[data-element="mobile_menu_close"]').trigger("click")
		})
	}), $(".haveSubmenu").on("mouseover", function() {
		var t = $(this).width(),
			e = $(this).find(".submenuOuter");
		isMobile() || isTablet() || (e.off().addClass("active").on("mouseleave", function(t) {
			e.removeClass("active")
		}), $(this).hasClass("mainMenuItem--lang") || $(this).hasClass("mainMenuItem--userControl") || e.css("transform", "translateX(-".concat($(e).width() / 2 - t / 2, "px)")))
	}).on("mouseleave", function() {
		isMobile() || isTablet() || $(this).find(".submenuOuter").removeClass("active")
	})
});
var HEROAPP = {
	body: $('[data-element="heroapp"]'),
	control: $('[data-element="heroapp_control"]'),
	collapseText: $('[data-element="heroapp_control"]').attr("data-control-collapse"),
	expandText: $('[data-element="heroapp_control"]').attr("data-control-expand")
};
$(document).ready(function() {
	HEROAPP.control.on("click", function() {
		HEROAPP.body.hasClass("heroApp--small") ? (HEROAPP.body.removeClass("heroApp--small"), HEROAPP.control.find(".heroAppControl--desktop").text(HEROAPP.collapseText), gtag("event", "website_header_expand_btn", {
			event_category: "app"
		})) : (HEROAPP.body.addClass("heroApp--small"), HEROAPP.control.find(".heroAppControl--desktop").text(HEROAPP.expandText), gtag("event", "website_header_collapse_btn", {
			event_category: "app"
		}))
	})
});
var DOM = {
		source_language_list: $('[data-element="source_language_list"]'),
		source_language: $('[data-element="source_language"]'),
		target_language_list: $('[data-element="target_language_list"]'),
		target_language: $('[data-element="target_language"]'),
		close_language_list: $('[data-element="close_language_list"]'),
		input_feature: $('[data-element="show_app_notice"]'),
		overlay: $('[data-element="overlay"]'),
		source_text: $('[data-element="source_text"]'),
		translated_text: $('[data-element="translated_text"]'),
		translator: $('[data-element="translator"]'),
		detected_lang: $('[data-element="detected_lang"]'),
		reverse: $('[data-element="reverse"]'),
		copy: $('[data-action="copy"]'),
		languages: {
			source: {
				block: $('[data-language="source"]')
			},
			target: {
				block: $('[data-language="target"]')
			}
		},
		notice: {
			must_login: {
				body: $('[data-element="must_login"]'),
				close: $('[data-element="close_must-login"]')
			},
			limit: {
				body: $('[data-element="limit"]'),
				close: $('[data-element="close_limit"]')
			},
			limit_auth: {
				body: $('[data-element="limit_auth"]'),
				close: $('[data-element="close_limit"]')
			},
			app: {
				body: $('[data-element="app_notice"]'),
				header: $('[data-text="notice_input"]'),
				close: $('[data-element="close_notice-app"]')
			},
			human_translation: {
				body: $('[data-element="ht_notice"]'),
				link: $('[data-element="link_to_ht"]'),
				close: $('[data-element="close_notice-ht"]')
			},
			share: {
				link: $('[data-action="share_link"]'),
				body: $('[data-element="share_notice"]'),
				close: $('[data-element="close_notice-share"]'),
				url: $('[data-element="share_link"]'),
				fb: $('[data-share="fb"]'),
				tw: $('[data-share="tw"]'),
				em: $('[data-share="em"]')
			}
		},
		audio: {
			play: $('[data-element="play_audio"]'),
			pause: $('[data-element="pause_audio"]'),
			stop: $('[data-element="stop_audio"]')
		}
	},
	STATUS = {
		source: {
			lang: "auto",
			text: "",
			prev_text: "",
			auto_detect: "",
			last_change: new Date
		},
		translated: {
			lang: "bn",
			text: ""
		},
		url: ""
	},
	CONFIG = {
		sourceLangTimeout: 2e3,
		timeout: new Date,
		mt_limit: user_id ? "2500" : 200,
		link_to_of: DOM.notice.human_translation.link.attr("data-of_link")
	};
isMobile();
var hash, API_URL = {
	detect_language: "/translate",
	translate: "/translate",
	get_audio: "/translate",
	get_languages: "/translate"
};
groupLanguageSelectors(), window.onresize = function() {
	groupLanguageSelectors()
}, window.location.hash && 3 == window.location.hash.substring(1).split("/").length && (hash = window.location.hash.substring(1).split("/"), STATUS.source.lang = hash[0], STATUS.translated.lang = hash[1], STATUS.source.text = decodeURI(hash[2]));
var pathname = window.location.pathname.replace("/", ""),
	pathnameContainsLanguageCode = JSON.parse(JSON.stringify(language_mapping)).filter(function(t) {
		return t.code == pathname
	}).length;

function hideAllNotices() {
	DOM.notice.human_translation.close.trigger("click"), DOM.notice.share.close.trigger("click"), DOM.notice.must_login.close.trigger("click")
}

function setShareCopyStatus() {
	STATUS.translated.text.length ? (DOM.notice.share.link.addClass("active"), DOM.copy.addClass("active")) : (DOM.notice.share.link.removeClass("active"), DOM.copy.removeClass("active"))
}

function groupLanguageSelectors() {
	isMobile() || isTablet() ? DOM.languages.target.block.appendTo($(".translator__from")) : (DOM.translated_text.css("height", DOM.source_text.innerHeight() + "px"), DOM.languages.target.block.appendTo($(".translator__to")))
}

function showStopIcon() {
	DOM.audio.play.addClass("hidden"), DOM.audio.stop.removeClass("hidden")
}

function showPlayIcon() {
	DOM.audio.play.removeClass("hidden"), DOM.audio.stop.addClass("hidden")
}

function openLanguageList(t) {
	DOM[t].attr("data-status", "active"), DOM[t + "_list"].fadeIn(), isMobile() && DOM.overlay.fadeIn()
}

function closeLanguageList(t) {
	DOM[t].attr("data-status", ""), DOM[t + "_list"].fadeOut(), isMobile() && DOM.overlay.fadeOut()
}

function debounce(n, o, l) {
	var s;
	return function() {
		var t = this,
			e = arguments,
			a = l && !s;
		clearTimeout(s), s = setTimeout(function() {
			s = null, l || n.apply(t, e)
		}, o), a && n.apply(t, e)
	}
}

function getLanguageFromText(t) {
	$.ajax({
		url: API_URL.detect_language,
		type: "POST",
		data: {
			text_to_translate: t
		},
		success: function(t) {
			var e, a = $.parseJSON(t);
			"success" == a.result && (STATUS.source.auto_detect = a.language, e = JSON.parse(JSON.stringify(language_mapping)).filter(function(t) {
				return t.code == STATUS.source.auto_detect
			}), DOM.detected_lang.text(e[0].name + "?").attr("data-set-lang", STATUS.source.auto_detect).fadeIn())
		}
	})
}

function openLanguagesOnArrow() {
	$(".translator__language__selector").on("click", function() {
		openLanguageList($(this).find("span").attr("data-element"))
	})
}
function getTranslation(l, t, e, a) {
	let _token = $('meta[name="csrf-token"]').attr('content');
	var n = {
		text_to_translate: l,
		source_lang: t,
		translated_lang: e,
		use_cache_only: !1,
	};
	STATUS.source.prev_text;
	("force" == a ? "auto_detect" !== t && l.length : "auto_detect" !== t && l.length && STATUS.source.prev_text !== l) && (DOM.reverse.addClass("loader"), $.ajax({
		url: API_URL.translate,
		type: "POST",
		data: {
			n: n,
			_token: _token
		},
		success:function(response) {
			if(response) {
				//$('#translated_text').text(response.result);
				setTranslation(response.result);
				if (response.lang_detect) {
					$('#translator__detected').text(languages[response.lang_detect]).css('display', 'block');
				}
				else {
					$('#translator__detected').text('').css('display', 'none');
				}
			}
		},
		/*success: function(t) {
			//var e, a, n, o = JSON.parse(t);
			"success" == o.result ? (STATUS.source.prev_text = l.slice(0), setTranslation(o.translated_text), e = "source_language=" + STATUS.source.lang, a = "&translation_language=" + STATUS.translated.lang, n = "&source_text=" + STATUS.source.text, DOM.notice.human_translation.body.fadeIn(), DOM.notice.human_translation.link.attr("href", "".concat(CONFIG.link_to_of + e + a + encodeURI(n))), DOM.audio.play.attr("data-translation-id", o.translation_id), STATUS.url = "".concat(window.location.href, "#").concat(STATUS.source.lang, "/").concat(STATUS.translated.lang, "/").concat(encodeURI(STATUS.source.text)), setShareCopyStatus(), blinkTranslatedBox(), gtag("event", "machine", {
				event_category: "translation",
				event_label: "".concat(STATUS.source.lang, "_to_").concat(STATUS.translated.lang)
			})) : "error" == o.result && (gtag("event", "error", {
				event_category: "translation",
				event_label: o.message
			}), "must_log_in" == o.message ? (hideAllNotices(), DOM.notice.must_login.body.fadeIn()) : (hideAllNotices(), user_id ? DOM.notice.limit_auth.body.fadeIn() : DOM.notice.limit.body.fadeIn()))
		},*/
		complete: function() {
			DOM.reverse.removeClass("loader")
		},
		statusCode: {
			500: function() {
				setTimeout(function() {
					getTranslation(l, t, e)
				}, 2e3)
			}
		}
	})), l.length || (DOM.notice.human_translation.body.fadeOut(), DOM.translated_text.val(""), STATUS.translated.text = "", STATUS.url = "".concat(window.location.href), setShareCopyStatus())
}

function blinkTranslatedBox() {
	DOM.translated_text.addClass("blink"), setTimeout(function() {
		DOM.translated_text.removeClass("blink")
	}, 1e3)
}

function getAudio(t) {
	$.ajax({
		url: API_URL.get_audio,
		type: "POST",
		data: {
			translation_id: t,
			translation_type: "machine"
		},
		success: function(t) {
			var e, n, a = JSON.parse(t);
			"success" == a.result && (e = a.audio_file_base_url + a.audio_files[0].file_name, n = e, new Promise(function(t, e) {
				var a = new Audio;
				a.preload = "auto", a.autoplay = !0, a.onerror = e, a.onended = t, a.src = n, DOM.audio.stop.on("click", function() {
					a.pause(), a.currentTime = 0
				})
			}).then(function() {
				showPlayIcon()
			}))
		},
		complete: function() {
			DOM.audio.stop.removeClass("loading")
		}
	})
}

function setTranslation(t) {
	STATUS.translated.text = t, DOM.translated_text.val(t)
}

function createLanguagesInSelector() {
	var t = JSON.parse(JSON.stringify(language_mapping));
	["source_lang", "translated_lang"].forEach(function(o) {
		var l = $('[data-element="'.concat(o, '"] ul'));
		l.empty(), Object.entries(t).forEach(function(t) {
			var e = _slicedToArray(t, 2),
				a = (e[0], e[1]),
				n = "";
			"translated_lang" == o && "auto_detect" == a.code || (a.code == STATUS[o.replace("_lang", "")].lang && (n += "selected"), l.append('<li class="'.concat(n, '"><span data-type="').concat(a.code, '" data-lang="').concat(a.code, '">').concat(a.name, "</span></li>")))
		})
	})
}

function setSourceLang(t) {
	STATUS.source.lang = t, DOM.source_language.text(languages[t])
}

function setTranslatedLang(t) {
	var e = STATUS.translated.lang.split(0),
		a = t.split(0);
	STATUS.translated.lang = t, DOM.target_language.text(languages[t]), STATUS.translated.text = "", e !== a && setTimeout(getTranslation(STATUS.source.text, STATUS.source.lang, STATUS.translated.lang, "force"), 1e3)
}
pathnameContainsLanguageCode && "en" !== pathnameContainsLanguageCode && (STATUS.source.lang = pathname, STATUS.translated.lang = "en"), console.log(JSON.parse(JSON.stringify(language_mapping))), "undefined" != typeof LANG_PAIR && (console.log("LANG_PAIR", LANG_PAIR), STATUS.source.lang = LANG_PAIR.source_code, STATUS.translated.lang = LANG_PAIR.translation_code), $(document).ready(function() {
	["source_language", "target_language"].map(function(t) {
		DOM[t].click(function() {
			["source_language", "target_language"].map(function(t) {
				closeLanguageList(t)
			}), (null == $(this).attr("data-status") || "" == $(this).attr("data-status") ? openLanguageList : closeLanguageList)(t)
		})
	}), $(document).mouseup(function(t) {
		var e = "source_language" == $(t.target).attr("data-element") || "target_language" == $(t.target).attr("data-element");
		DOM.target_language_list.is(t.target) || DOM.source_language_list.is(t.target) || 0 !== DOM.source_language_list.has(t.target).length || 0 !== DOM.target_language_list.has(t.target).length || e || (closeLanguageList("source_language"), closeLanguageList("target_language"))
	}), DOM.close_language_list.click(function() {
		closeLanguageList($(this).data("target"))
	}), DOM.notice.app.close.click(function() {
		DOM.notice.app.body.fadeOut(), DOM.notice.app.body.attr("data-status", null)
	}), DOM.notice.human_translation.close.click(function() {
		DOM.notice.human_translation.body.fadeOut()
	}), DOM.notice.share.close.click(function() {
		DOM.notice.share.body.fadeOut()
	}), DOM.notice.must_login.close.click(function() {
		DOM.notice.must_login.body.fadeOut()
	}), DOM.notice.limit.close.click(function() {
		DOM.notice.limit.body.fadeOut()
	}), DOM.notice.limit_auth.close.click(function() {
		DOM.notice.limit_auth.body.fadeOut()
	}), DOM.notice.share.link.click("on", function() {
		hideAllNotices(), $(this).hasClass("active") && (DOM.notice.share.url.val(STATUS.url), DOM.notice.share.body.fadeIn(), DOM.notice.share.tw.click("on", function() {
			window.location.href = "https://twitter.com/intent/tweet?text=".concat(STATUS.translated.text, "&url=").concat(STATUS.url)
		}), DOM.notice.share.fb.click("on", function() {
			window.location.href = "https://www.facebook.com/sharer/sharer.php?u=".concat(STATUS.url)
		}), DOM.notice.share.em.click("on", function() {
			window.location.href = "mailto:?subject=".concat("Translation with Translate.com", "&body=").concat(STATUS.translated.text + " - translated with Translate.com", " (").concat(STATUS.url, ")")
		}))
	}), DOM.input_feature.click(function() {
		var t = $(this).data("target");
		switch (t) {
			case "photo":
			case "voice":
			case "draw":
				DOM.notice.app.body.attr("data-notice", t)
		}
		"active" !== DOM.notice.app.body.attr("data-status") && (hideAllNotices(), DOM.notice.app.body.fadeIn(), DOM.notice.app.body.attr("data-status", "active"))
	}), DOM.source_text.on("change keyup", function() {
		150 <= $(this).val().length ? (DOM.translator.addClass("translator__with-large-text"), DOM.source_text.autogrow()) : DOM.translator.removeClass("translator__with-large-text"), DOM.translated_text.css("height", DOM.source_text.innerHeight() + "px")
	}), setSourceLang(STATUS.source.lang), setTranslatedLang(STATUS.translated.lang), createLanguagesInSelector(), openLanguagesOnArrow(), DOM.source_language_list.on("click", function(t) {
		var e = t.target.getAttribute("data-lang");
		closeLanguageList("source_language"), e !== STATUS.translated.lang && (setSourceLang(e), createLanguagesInSelector())
	}), DOM.target_language_list.on("click", function(t) {
		var e = t.target.getAttribute("data-lang");
		closeLanguageList("target_language"), e !== STATUS.source.lang && (setTranslatedLang(e), createLanguagesInSelector())
	}), DOM.source_text.on("keyup change", debounce(function(t) {
		STATUS.source.text = $.trim($(this).val()).replace(/\n/g, " ");
		var e = STATUS.source.text.split(" ").length;
		console.log(e), "auto_detect" == STATUS.source.lang ? getLanguageFromText(STATUS.source.text) : e < CONFIG.mt_limit ? getTranslation(STATUS.source.text, STATUS.source.lang, STATUS.translated.lang) : user_id ? DOM.notice.limit_auth.body.fadeIn() : DOM.notice.limit.body.fadeIn()
	}, 1500)), DOM.detected_lang.on("click", function() {
		$(this).fadeOut(), STATUS.translated.lang == STATUS.source.auto_detect && DOM.target_language_list.find("[data-lang='en']").trigger("click"), DOM.source_language_list.find("[data-lang='".concat(STATUS.source.auto_detect, "']")).trigger("click"), setTimeout(getTranslation(STATUS.source.text, STATUS.source.lang, STATUS.translated.lang), 1e3)
	}), DOM.reverse.on("click", function() {
		var t = STATUS.source.lang,
			e = STATUS.translated.lang,
			a = STATUS.source.text,
			n = STATUS.translated.text;
		"auto_detect" !== t && (STATUS.source.lang = e.slice(0), STATUS.translated.lang = t.slice(0), STATUS.source.text = n.slice(0), STATUS.translated.text = a.slice(0), DOM.source_text.val(STATUS.source.text), DOM.translated_text.val(""), DOM.source_language_list.find("[data-lang='".concat(STATUS.source.lang, "']")).trigger("click"), DOM.target_language_list.find("[data-lang='".concat(STATUS.translated.lang, "']")).trigger("click"), setTimeout(getTranslation(STATUS.source.text, STATUS.source.lang, STATUS.translated.lang), 1e3))
	}), DOM.audio.stop.on("click", function() {
		showPlayIcon()
	}), DOM.audio.play.on("click", function(t) {
		showStopIcon(), null !== t.target.getAttribute("data-translation-id") && (DOM.audio.stop.addClass("loading"), getAudio(t.target.getAttribute("data-translation-id")))
	}), window.location.hash && (DOM.source_text.val(STATUS.source.text), setTimeout(getTranslation(STATUS.source.text, STATUS.source.lang, STATUS.translated.lang), 1e3)), $(".translation-section").hide(), new ClipboardJS('[data-action="copy"]').on("success", function(t) {
		STATUS.translated.text && (DOM.copy.addClass("done"), setTimeout(function() {
			DOM.copy.removeClass("done")
		}, 1e3)), $(t.trigger).hasClass("notice__copy") && (t.trigger.innerText = "Copied!", setTimeout(function() {
			t.trigger.innerText = "Copy"
		}, 1e3))
	}), 767 < window.innerWidth && setInterval(function() {
		DOM.translated_text.css("height", DOM.source_text.innerHeight() + "px")
	}, 200), DOM.source_text.autogrow(), setShareCopyStatus()
});
var FAQ = {
	container: $('[data-el="faq"]'),
	question: $(".qaQuestion"),
	answer: $(".qaAnswer")
};

function isMobile() {
	return window.innerWidth < 479
}

function isTablet() {
	return window.innerWidth < 767 && 480 < window.innerWidth
}
$(document).ready(function() {
	FAQ.question.on("click", function() {
		FAQ.container.find(".qa").not($(this).parents(".qa")).removeClass("open"), $(this).parents(".qa").toggleClass("open"), $(this).hasClass("open") || gtag("event", "question_click_homepage", {
			event_category: "faq",
			event_label: $(this).text()
		})
	})
}), isMobile(), setInterval(function() {
	$("[adleave-slot]").css("z-index", 5)
}, 200);


/* --------------------------------------------------------------------------------------------- */