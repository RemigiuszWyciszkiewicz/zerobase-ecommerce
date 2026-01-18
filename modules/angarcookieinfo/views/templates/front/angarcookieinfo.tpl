<div id="cookie-banner" class="{$angarcookieinfo_text3}">
	<div class="cookie-container">

		<div class="cookie-text">

			{if $angarcookieinfo_text3 != "position_bottom"}
			<header>
			{/if}

				{if $angarcookieinfo_text14 == "display-icon"}
					<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 11.39 21.94 10.79 21.82 10.21C21.17 10.69 20.39 11 19.5 11C17.29 11 15.5 9.21 15.5 7C15.5 6.11 15.81 5.33 16.29 4.68C15.71 4.56 15.11 4.5 14.5 4.5C14.5 3.12 13.38 2 12 2Z" fill="#1f2937"/>
						<circle cx="8.5" cy="10.5" r="1.5" fill="#d1d5db"/>
						<circle cx="10.5" cy="15.5" r="1.5" fill="#d1d5db"/>
						<circle cx="15" cy="14" r="1" fill="#d1d5db"/>
						<circle cx="7" cy="14" r="1" fill="#d1d5db"/>
						<circle cx="12" cy="8" r="1" fill="#d1d5db"/>
						<circle cx="19.5" cy="7" r="2.5" fill="#f59e0b"/>
					</svg>
				{/if}

			{if $angarcookieinfo_text3 != "position_bottom"}
			{$angarcookieinfo_textlang3}
			</header>
			{/if}

			{$angarcookieinfo_html nofilter}
		</div>

		<div class="cookie-buttons">
			<button class="button button-settings" id="cookie-settings">{l s='Ustawienia' mod='angarcookieinfo'}</button>
			<button class="button button-accept" id="cookie-accept-all">{l s='Akceptuj wszystkie' mod='angarcookieinfo'}</button>
		</div>

	</div>
</div>

<!-- Modal ustawień cookies -->
<div id="cookie-settings-modal" class="cookie-modal">
	<div class="cookie-modal-overlay"></div>
	<div class="cookie-modal-content">
		<div class="cookie-modal-header">
			<h3>{l s='Ustawienia plików cookie' mod='angarcookieinfo'}</h3>
			<button class="cookie-modal-close" id="cookie-modal-close">&times;</button>
		</div>
		<div class="cookie-modal-body">
			<p class="cookie-modal-description">{l s='Wybierz, które pliki cookie chcesz zaakceptować. Możesz zmienić te ustawienia w dowolnym momencie.' mod='angarcookieinfo'}</p>

			<!-- Niezbędne - accordion -->
			<div class="cookie-option cookie-accordion">
				<div class="cookie-option-header">
					<div class="cookie-option-title">
						<span class="cookie-accordion-icon"></span>
						<label class="cookie-option-label">{l s='Niezbędne' mod='angarcookieinfo'}</label>
					</div>
					<div class="cookie-option-toggle">
						<span class="cookie-always-on">{l s='Zawsze aktywne' mod='angarcookieinfo'}</span>
						<label class="cookie-switch">
							<input type="checkbox" id="cookie-necessary" checked disabled>
							<span class="cookie-slider"></span>
						</label>
					</div>
				</div>
				<div class="cookie-option-content">
					<p class="cookie-option-desc">{l s='Te pliki cookie są wymagane do prawidłowego działania strony i nie można ich wyłączyć. Obejmują cookies sesji, koszyka zakupowego oraz podstawowych funkcji bezpieczeństwa.' mod='angarcookieinfo'}</p>
				</div>
			</div>

			<!-- Analityczne - accordion -->
			<div class="cookie-option cookie-accordion">
				<div class="cookie-option-header">
					<div class="cookie-option-title">
						<span class="cookie-accordion-icon"></span>
						<label class="cookie-option-label">{l s='Analityczne' mod='angarcookieinfo'}</label>
					</div>
					<div class="cookie-option-toggle">
						<label class="cookie-switch">
							<input type="checkbox" id="cookie-analytics">
							<span class="cookie-slider"></span>
						</label>
					</div>
				</div>
				<div class="cookie-option-content">
					<p class="cookie-option-desc">{l s='Pomagają nam zrozumieć, jak użytkownicy korzystają ze strony. Zbierają anonimowe informacje o odwiedzanych stronach, czasie spędzonym na stronie i ewentualnych błędach. Używamy Google Analytics do analizy ruchu.' mod='angarcookieinfo'}</p>
				</div>
			</div>

			<!-- Marketingowe - accordion -->
			<div class="cookie-option cookie-accordion">
				<div class="cookie-option-header">
					<div class="cookie-option-title">
						<span class="cookie-accordion-icon"></span>
						<label class="cookie-option-label">{l s='Marketingowe' mod='angarcookieinfo'}</label>
					</div>
					<div class="cookie-option-toggle">
						<label class="cookie-switch">
							<input type="checkbox" id="cookie-marketing">
							<span class="cookie-slider"></span>
						</label>
					</div>
				</div>
				<div class="cookie-option-content">
					<p class="cookie-option-desc">{l s='Używane do wyświetlania spersonalizowanych reklam i śledzenia skuteczności kampanii reklamowych. Mogą być wykorzystywane przez partnerów reklamowych do budowania profilu Twoich zainteresowań.' mod='angarcookieinfo'}</p>
				</div>
			</div>

			<!-- Bezpieczeństwo - accordion -->
			<div class="cookie-option cookie-accordion">
				<div class="cookie-option-header">
					<div class="cookie-option-title">
						<span class="cookie-accordion-icon"></span>
						<label class="cookie-option-label">{l s='Bezpieczeństwo' mod='angarcookieinfo'}</label>
					</div>
					<div class="cookie-option-toggle">
						<label class="cookie-switch">
							<input type="checkbox" id="cookie-security">
							<span class="cookie-slider"></span>
						</label>
					</div>
				</div>
				<div class="cookie-option-content">
					<p class="cookie-option-desc">{l s='Wybierając tę opcję, akceptujesz używanie plików cookie i danych niezbędnych do zapewnienia bezpieczeństwa strony i ochrony przed działaniami oszukańczymi. Te pliki cookie pomagają w autentykacji użytkowników, zapobiegają nieautoryzowanemu dostępowi do kont użytkowników i zapewniają integralność strony.' mod='angarcookieinfo'}</p>
				</div>
			</div>
		</div>
		<div class="cookie-modal-footer">
			<button class="button button-reject" id="cookie-reject-all">{l s='Odrzuć wszystkie' mod='angarcookieinfo'}</button>
			<button class="button button-save" id="cookie-save-settings">{l s='Zapisz wybrane' mod='angarcookieinfo'}</button>
			<button class="button button-accept-all" id="cookie-accept-all-modal">{l s='Zezwól na wszystkie' mod='angarcookieinfo'}</button>
		</div>
	</div>
</div>

<style>
	#cookie-banner {if $angarcookieinfo_text3 == "position_popup"}.cookie-container{/if} {
	background: {$angarcookieinfo_text1};
	max-width: {$angarcookieinfo_text15}px;
	}

	#cookie-banner * {
	color: {$angarcookieinfo_text2};
	}

	#cookie-banner svg g {
	fill: {$angarcookieinfo_text2};
	}

	#cookie-accept-all {
	background: {$angarcookieinfo_text4};
	border-color: {$angarcookieinfo_text16};
	color: {$angarcookieinfo_text5};
	}

	#cookie-accept-all:hover {
	background: {$angarcookieinfo_text6};
	border-color: {$angarcookieinfo_text17};
	color: {$angarcookieinfo_text7};
	}

	#cookie-settings {
	background: {$angarcookieinfo_text9};
	border-color: {$angarcookieinfo_text18};
	color: {$angarcookieinfo_text10};
	}

	#cookie-settings:hover {
	background: {$angarcookieinfo_text11};
	border-color: {$angarcookieinfo_text19};
	color: {$angarcookieinfo_text12};
	}
</style>

<script>
(function() {
	// Cookie consent state
	var cookieConsent = {
		necessary: true,
		analytics: false,
		marketing: false,
		security: false
	};

	// Get saved consent from cookie
	function getSavedConsent() {
		var consent = getCookie('cookieConsent');
		if (consent) {
			try {
				return JSON.parse(consent);
			} catch (e) {
				return null;
			}
		}
		return null;
	}

	// Set cookie
	function setCookie(name, value, days) {
		var expires = "";
		if (days) {
			var date = new Date();
			date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + value + expires + "; path=/; SameSite=Lax";
	}

	// Get cookie
	function getCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		}
		return null;
	}

	// Save consent and apply settings
	function saveConsent(consent) {
		setCookie('cookieConsent', JSON.stringify(consent), 365);
		setCookie('cookieConsentDate', new Date().toISOString(), 365);
		applyConsent(consent);
		hideBanner();
		hideModal();
	}

	// Apply consent settings (integrate with Google Consent Mode v2)
	function applyConsent(consent) {
		// Google Consent Mode v2
		if (typeof gtag === 'function') {
			gtag('consent', 'update', {
				'analytics_storage': consent.analytics ? 'granted' : 'denied',
				'ad_storage': consent.marketing ? 'granted' : 'denied',
				'ad_user_data': consent.marketing ? 'granted' : 'denied',
				'ad_personalization': consent.marketing ? 'granted' : 'denied'
			});
		}

		// Dispatch custom event for other scripts
		window.dispatchEvent(new CustomEvent('cookieConsentUpdated', { detail: consent }));
	}

	// Hide banner
	function hideBanner() {
		var banner = document.getElementById('cookie-banner');
		if (banner) {
			banner.classList.add('cookies_hidden');
		}
	}

	// Show banner
	function showBanner() {
		var banner = document.getElementById('cookie-banner');
		if (banner) {
			banner.classList.remove('cookies_hidden');
		}
	}

	// Show modal
	function showModal() {
		var modal = document.getElementById('cookie-settings-modal');
		if (modal) {
			modal.classList.add('active');
			document.body.style.overflow = 'hidden';

			// Load saved settings into checkboxes
			var saved = getSavedConsent();
			if (saved) {
				document.getElementById('cookie-analytics').checked = saved.analytics;
				document.getElementById('cookie-marketing').checked = saved.marketing;
				document.getElementById('cookie-security').checked = saved.security;
			}
		}
	}

	// Hide modal
	function hideModal() {
		var modal = document.getElementById('cookie-settings-modal');
		if (modal) {
			modal.classList.remove('active');
			document.body.style.overflow = '';
		}
	}

	// Initialize
	function init() {
		var saved = getSavedConsent();

		// Set default consent (denied) for Google Consent Mode v2
		if (typeof gtag === 'function') {
			gtag('consent', 'default', {
				'analytics_storage': 'denied',
				'ad_storage': 'denied',
				'ad_user_data': 'denied',
				'ad_personalization': 'denied',
				'wait_for_update': 500
			});
		}

		if (saved) {
			// User already made a choice
			hideBanner();
			applyConsent(saved);
		} else {
			// Show banner for new users
			showBanner();
		}

		// Event listeners
		var acceptAllBtn = document.getElementById('cookie-accept-all');
		var settingsBtn = document.getElementById('cookie-settings');
		var modalCloseBtn = document.getElementById('cookie-modal-close');
		var modalOverlay = document.querySelector('.cookie-modal-overlay');
		var rejectAllBtn = document.getElementById('cookie-reject-all');
		var saveSettingsBtn = document.getElementById('cookie-save-settings');
		var acceptAllModalBtn = document.getElementById('cookie-accept-all-modal');

		if (acceptAllBtn) {
			acceptAllBtn.addEventListener('click', function() {
				saveConsent({ necessary: true, analytics: true, marketing: true, security: true });
			});
		}

		if (acceptAllModalBtn) {
			acceptAllModalBtn.addEventListener('click', function() {
				saveConsent({ necessary: true, analytics: true, marketing: true, security: true });
			});
		}

		if (settingsBtn) {
			settingsBtn.addEventListener('click', function() {
				showModal();
			});
		}

		if (modalCloseBtn) {
			modalCloseBtn.addEventListener('click', function() {
				hideModal();
			});
		}

		if (modalOverlay) {
			modalOverlay.addEventListener('click', function() {
				hideModal();
			});
		}

		if (rejectAllBtn) {
			rejectAllBtn.addEventListener('click', function() {
				saveConsent({ necessary: true, analytics: false, marketing: false, security: false });
			});
		}

		if (saveSettingsBtn) {
			saveSettingsBtn.addEventListener('click', function() {
				var consent = {
					necessary: true,
					analytics: document.getElementById('cookie-analytics').checked,
					marketing: document.getElementById('cookie-marketing').checked,
					security: document.getElementById('cookie-security').checked
				};
				saveConsent(consent);
			});
		}

		// Accordion functionality
		var accordionHeaders = document.querySelectorAll('.cookie-accordion .cookie-option-header');
		accordionHeaders.forEach(function(header) {
			header.addEventListener('click', function(e) {
				// Don't toggle if clicking on the switch
				if (e.target.closest('.cookie-switch')) return;

				var accordion = header.closest('.cookie-accordion');
				accordion.classList.toggle('active');
			});
		});
	}

	// Run on DOM ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}

	// Expose function to reopen settings
	window.openCookieSettings = function() {
		showBanner();
		showModal();
	};
})();
</script>
