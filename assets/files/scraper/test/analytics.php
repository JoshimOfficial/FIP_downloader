<!DOCTYPE html>
<html style="font-size: 10px;font-family: Roboto, Arial, sans-serif;" lang="bn-BD" system-icons typography typography-spacing darker-dark-theme darker-dark-theme-deprecate>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="origin-trial" content="AlgsH67ctYlMR3JYAxEnGfvsoFo41AMqAg6wRHHXOpWAfD54ZCfTPBclxnFT4Gc8IUX4pq6Xfo0esDuOt+WH3wIAAABteyJvcmlnaW4iOiJodHRwczovL3lvdXR1YmUuY29tOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2ODA2NTI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ==" />
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      var ytcfg = {
        d: function() {
          return window.yt && yt.config_ || ytcfg.data_ || (ytcfg.data_ = {})
        },
        get: function(k, o) {
          return k in ytcfg.d() ? ytcfg.d()[k] : o
        },
        set: function() {
          var a = arguments;
          if (a.length > 1) ytcfg.d()[a[0]] = a[1];
          else
            for (var k in a[0]) ytcfg.d()[k] = a[0][k]
        }
      };
      window.ytcfg.set('EMERGENCY_BASE_URL', '\/error_204?t\x3djserror\x26level\x3dERROR\x26client.name\x3d1\x26client.version\x3d2.20230206.06.00');
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      (function() {
        window.yterr = window.yterr || true;
        window.unhandledErrorMessages = {};
        window.unhandledErrorCount = 0;
        window.onerror = function(msg, url, line, columnNumber, error) {
          var err;
          if (error) err = error;
          else {
            err = new Error;
            err.stack = "";
            err.message = msg;
            err.fileName = url;
            err.lineNumber = line;
            if (!isNaN(columnNumber)) err["columnNumber"] = columnNumber
          }
          var message = String(err.message);
          if (!err.message || message in window.unhandledErrorMessages || window.unhandledErrorCount >= 5) return;
          window.unhandledErrorCount += 1;
          window.unhandledErrorMessages[message] = true;
          var img = new Image;
          window.emergencyTimeoutImg = img;
          img.onload = img.onerror = function() {
            delete window.emergencyTimeoutImg
          };
          var combinedLineAndColumn = err.lineNumber;
          if (!isNaN(err["columnNumber"])) combinedLineAndColumn += ":" + err["columnNumber"];
          var stack = err.stack || "";
          var values = {
            "msg": message,
            "type": err.name,
            "client.params": "unhandled window error",
            "file": err.fileName,
            "line": combinedLineAndColumn,
            "stack": stack.substr(0, 500)
          };
          var thirdPartyScript = !err.fileName || err.fileName === " < anonymous > "||stack.indexOf("
          extension: //")>=0;var replaced=stack.replace(/https:\/\/www.youtube.com\//g,"");if(replaced.match(/https?:\/\/[^/]+\//))thirdPartyScript=
            true;
          else if (stack.indexOf("trapProp") >= 0 && stack.indexOf("trapChain") >= 0) thirdPartyScript = true;
          else if (message.indexOf("redefine non-configurable") >= 0) thirdPartyScript = true;
          var baseUrl = window["ytcfg"].get("EMERGENCY_BASE_URL", "https://www.youtube.com/error_204?t=jserror&level=ERROR");
          var unsupported = message.indexOf("window.customElements is undefined") >= 0;
          if (thirdPartyScript || unsupported) baseUrl = baseUrl.replace("level=ERROR", "level=WARNING");
          var parts = [baseUrl];
          for (var key in values) {
            var value = values[key];
            if (value) parts.push(key + "=" + encodeURIComponent(value))
          }
          img.src = parts.join("&")
        };
        (function() {
          function _getExtendedNativePrototype(tag) {
            var p = this._nativePrototypes[tag];
            if (!p) {
              p = Object.create(this.getNativePrototype(tag));
              var p$ = Object.getOwnPropertyNames(window["Polymer"].Base);
              for (var i = 0, n = void 0; i < p$.length && (n = p$[i]); i++)
                if (!window["Polymer"].BaseDescriptors[n]) try {
                  p[n] = window["Polymer"].Base[n]
                } catch (e) {
                  throw new Error("Error while copying property: " + n + ". Tag is " + tag);
                }
              try {
                Object.defineProperties(p, window["Polymer"].BaseDescriptors)
              } catch (e$0) {
                throw new Error("Polymer define property failed for " + Object.keys(p));
              }
              this._nativePrototypes[tag] = p
            }
            return p
          }

          function handlePolymerError(msg) {
            window.onerror(msg, window.location.href, 0, 0, new Error(Array.prototype.join.call(arguments, ",")))
          }
          var origPolymer = window["Polymer"];
          var newPolymer = function(config) {
            if (!origPolymer._ytIntercepted && window["Polymer"].Base) {
              origPolymer._ytIntercepted = true;
              window["Polymer"].Base._getExtendedNativePrototype = _getExtendedNativePrototype;
              window["Polymer"].Base._error = handlePolymerError;
              window["Polymer"].Base._warn = handlePolymerError
            }
            return origPolymer.apply(this, arguments)
          };
          var origDescriptor = Object.getOwnPropertyDescriptor(window, "Polymer");
          Object.defineProperty(window, "Polymer", {
            set: function(p) {
              if (origDescriptor && origDescriptor.set && origDescriptor.get) {
                origDescriptor.set(p);
                origPolymer = origDescriptor.get()
              } else origPolymer = p;
              if (typeof origPolymer === "function") Object.defineProperty(window, "Polymer", {
                value: origPolymer,
                configurable: true,
                enumerable: true,
                writable: true
              })
            },
            get: function() {
              return typeof origPolymer === "function" ? newPolymer : origPolymer
            },
            configurable: true,
            enumerable: true
          })
        })();
      }).call(this);
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      window.Polymer = window.Polymer || {};
      window.Polymer.legacyOptimizations = true;
      window.Polymer.setPassiveTouchGestures = true;
      window.ShadyDOM = {
        force: true,
        preferPerformance: true,
        noPatch: true
      };
      window.polymerSkipLoadingFontRoboto = true;
    </script>
    <link rel="shortcut icon" href="https://www.youtube.com/s/desktop/5191a190/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.youtube.com/s/desktop/5191a190/img/favicon_32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.youtube.com/s/desktop/5191a190/img/favicon_48x48.png" sizes="48x48">
    <link rel="icon" href="https://www.youtube.com/s/desktop/5191a190/img/favicon_96x96.png" sizes="96x96">
    <link rel="icon" href="https://www.youtube.com/s/desktop/5191a190/img/favicon_144x144.png" sizes="144x144">
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      var ytcsi = {
        gt: function(n) {
          n = (n || "") + "data_";
          return ytcsi[n] || (ytcsi[n] = {
            tick: {},
            info: {}
          })
        },
        now: window.performance && window.performance.timing && window.performance.now && window.performance.timing.navigationStart ? function() {
          return window.performance.timing.navigationStart + window.performance.now()
        } : function() {
          return (new Date).getTime()
        },
        tick: function(l, t, n) {
          var ticks = ytcsi.gt(n).tick;
          var v = t || ytcsi.now();
          if (ticks[l]) {
            ticks["_" + l] = ticks["_" + l] || [ticks[l]];
            ticks["_" + l].push(v)
          }
          ticks[l] = v
        },
        info: function(k, v, n) {
          ytcsi.gt(n).info[k] = v
        },
        setStart: function(t, n) {
          ytcsi.tick("_start", t, n)
        }
      };
      (function(w, d) {
        ytcsi.setStart(w.performance ? w.performance.timing.responseStart : null);
        var isPrerender = (d.visibilityState || d.webkitVisibilityState) == "prerender";
        var vName = !d.visibilityState && d.webkitVisibilityState ? "webkitvisibilitychange" : "visibilitychange";
        if (isPrerender) {
          var startTick = function() {
            ytcsi.setStart();
            d.removeEventListener(vName, startTick)
          };
          d.addEventListener(vName, startTick, false)
        }
        if (d.addEventListener) d.addEventListener(vName, function() {
          ytcsi.tick("vc")
        }, false);

        function isGecko() {
          if (!w.navigator) return false;
          try {
            if (w.navigator.userAgentData && w.navigator.userAgentData.brands && w.navigator.userAgentData.brands.length) {
              var brands = w.navigator.userAgentData.brands;
              for (var i = 0; i < brands.length; i++)
                if (brands[i] && brands[i].brand === "Firefox") return true;
              return false
            }
          } catch (e) {
            setTimeout(function() {
              throw e;
            })
          }
          if (!w.navigator.userAgent) return false;
          var ua = w.navigator.userAgent;
          return ua.indexOf("Gecko") > 0 && ua.toLowerCase().indexOf("webkit") < 0 && ua.indexOf("Edge") < 0 && ua.indexOf("Trident") < 0 && ua.indexOf("MSIE") < 0
        }
        if (isGecko()) {
          var isHidden = (d.visibilityState || d.webkitVisibilityState) == "hidden";
          if (isHidden) ytcsi.tick("vc")
        }
        var slt = function(el, t) {
          setTimeout(function() {
            var n = ytcsi.now();
            el.loadTime = n;
            if (el.slt) el.slt()
          }, t)
        };
        w.__ytRIL = function(el) {
          if (!el.getAttribute("data-thumb"))
            if (w.requestAnimationFrame) w.requestAnimationFrame(function() {
              slt(el, 0)
            });
            else slt(el, 16)
        }
      })(window, document);
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      (function() {
        var img = new Image().src = "https://i.ytimg.com/generate_204";
      })();
    </script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/web-animations-next-lite.min.vflset/web-animations-next-lite.min.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/webcomponents-all-noPatch.vflset/webcomponents-all-noPatch.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/fetch-polyfill.vflset/fetch-polyfill.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/intersection-observer.min.vflset/intersection-observer.min.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('lpcs', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      (function() {
        window.ytplayer = {};
        ytcfg.set({
          "CLIENT_CANARY_STATE": "none",
          "DEVICE": "ceng\u003dUSER_DEFINED\u0026cplatform\u003dDESKTOP",
          "DISABLE_YT_IMG_DELAY_LOADING": false,
          "ELEMENT_POOL_DEFAULT_CAP": 75,
          "EVENT_ID": "O4njY8OuN8LHjuMP-JqH8Ac",
          "EXPERIMENT_FLAGS": {
            "H5_enable_full_pacf_logging": true,
            "H5_use_async_logging": true,
            "allow_skip_networkless": true,
            "autoescape_tempdata_url": true,
            "background_thread_flush_logs_due_to_batch_limit": true,
            "browse_next_continuations_migration_playlist": true,
            "c3_watch_page_component": true,
            "cache_utc_offset_minutes_in_pref_cookie": true,
            "cancel_pending_navs": true,
            "clear_user_partitioned_ls": true,
            "client_respect_autoplay_switch_button_renderer": true,
            "config_age_report_killswitch": true,
            "csi_on_gel": true,
            "decorate_autoplay_renderer": true,
            "defer_menus": true,
            "defer_overlays": true,
            "defer_rendering_outside_visible_area": true,
            "deprecate_csi_has_info": true,
            "deprecate_pair_servlet_enabled": true,
            "deprecate_two_way_binding_child": true,
            "deprecate_two_way_binding_parent": true,
            "desktop_add_to_playlist_renderer_dialog_popup": true,
            "desktop_adjust_touch_target": true,
            "desktop_animate_miniplayer": true,
            "desktop_client_release": true,
            "desktop_delay_player_resizing": true,
            "desktop_enable_dmpanel_click_drag_scroll": true,
            "desktop_enable_dmpanel_scroll": true,
            "desktop_enable_dmpanel_wheel_scroll": true,
            "desktop_image_cta_no_background": true,
            "desktop_keyboard_capture_keydown_killswitch": true,
            "desktop_log_img_click_location": true,
            "desktop_mix_use_sampled_color_for_bottom_bar": true,
            "desktop_mix_use_sampled_color_for_bottom_bar_search": true,
            "desktop_mix_use_sampled_color_for_bottom_bar_watch_next": true,
            "desktop_notification_high_priority_ignore_push": true,
            "desktop_notification_set_title_bar": true,
            "desktop_persistent_menu": true,
            "desktop_sbox_delete_icon": true,
            "desktop_sbox_delete_icon_hover": true,
            "desktop_search_prominent_thumbs": true,
            "desktop_sparkles_light_cta_button": true,
            "desktop_swipeable_guide": true,
            "desktop_themeable_vulcan": true,
            "desktop_touch_gestures_usage_log": true,
            "desktop_use_new_history_manager": true,
            "disable_child_node_auto_formatted_strings": true,
            "disable_dependency_injection": true,
            "disable_exif_rotation_for_image_posts": true,
            "disable_features_for_supex": true,
            "disable_legacy_desktop_remote_queue": true,
            "disable_open_in_new_window_on_discovery_ads_search_desktop": true,
            "disable_pacf_logging_for_memory_limited_tv": true,
            "disable_simple_mixed_direction_formatted_strings": true,
            "disable_thumbnail_preloading": true,
            "embeds_web_enable_replace_unload_w_pagehide": true,
            "embeds_web_nwl_disable_nocookie": true,
            "enable_audio_pivot_back_nav_button": true,
            "enable_button_behavior_reuse": true,
            "enable_call_to_action_clarification_renderer_bottom_section_conditions": true,
            "enable_client_sli_logging": true,
            "enable_client_streamz_web": true,
            "enable_commerce_action_request_sequencing": true,
            "enable_desktop_amsterdam_info_panels": true,
            "enable_docked_chat_messages": true,
            "enable_gel_log_commands": true,
            "enable_get_account_switcher_endpoint_on_webfe": true,
            "enable_handles_account_menu_switcher": true,
            "enable_handles_in_mention_suggest_posts": true,
            "enable_handoff_location_2fa_on_mweb": true,
            "enable_header_channel_handler_ui": true,
            "enable_hlp_client_icon_pick": true,
            "enable_image_poll_post_creation": true,
            "enable_inline_preview_controls": true,
            "enable_inline_shorts_on_wn": true,
            "enable_madison_search_migration": true,
            "enable_masthead_quartile_ping_fix": true,
            "enable_memberships_and_purchases": true,
            "enable_mentions_in_reposts": true,
            "enable_microformat_data": true,
            "enable_mixed_direction_formatted_strings": true,
            "enable_multi_image_post_creation": true,
            "enable_names_handles_account_switcher": true,
            "enable_offer_suppression": true,
            "enable_on_yt_command_executor_command_to_navigate": true,
            "enable_poll_choice_border_on_web": true,
            "enable_polymer_resin": true,
            "enable_polymer_resin_migration": true,
            "enable_post_cct_links": true,
            "enable_post_scheduling": true,
            "enable_premium_voluntary_pause": true,
            "enable_programmed_playlist_color_sample": true,
            "enable_programmed_playlist_redesign": true,
            "enable_purchase_activity_in_paid_memberships": true,
            "enable_reel_watch_sequence": true,
            "enable_rendererstamper_listener_cleanup": true,
            "enable_seedless_shorts_url": true,
            "enable_server_stitched_dai": true,
            "enable_service_ajax_csn": true,
            "enable_servlet_errors_streamz": true,
            "enable_servlet_streamz": true,
            "enable_sfv_audio_pivot_url": true,
            "enable_shorts_on_library": true,
            "enable_shorts_singleton_channel_web": true,
            "enable_signals": true,
            "enable_skip_ad_guidance_prompt": true,
            "enable_skippable_ads_for_unplugged_ad_pod": true,
            "enable_smearing_expansion_dai": true,
            "enable_squiffle_gif_handles_landing_page": true,
            "enable_streamline_repost_flow": true,
            "enable_structured_description_shorts_web_mweb": true,
            "enable_tectonic_ad_ux_for_halftime": true,
            "enable_third_party_info": true,
            "enable_topsoil_wta_for_halftime_live_infra": true,
            "enable_unavailable_videos_watch_page": true,
            "enable_unified_show_page_web_client": true,
            "enable_watch_next_pause_autoplay_lact": true,
            "enable_web_ketchup_hero_animation": true,
            "enable_web_poster_hover_animation": true,
            "enable_web_shorts_audio_pivot": true,
            "enable_yoodle": true,
            "enable_ypc_spinners": true,
            "enable_ytc_refunds_submit_form_signal_action": true,
            "enable_ytc_self_serve_refunds": true,
            "endpoint_handler_logging_cleanup_killswitch": true,
            "export_networkless_options": true,
            "external_fullscreen": true,
            "external_fullscreen_with_edu": true,
            "fill_single_video_with_notify_to_lasr": true,
            "gcf_config_store_enabled": true,
            "gfeedback_for_signed_out_users_enabled": true,
            "global_spacebar_pause": true,
            "gpa_sparkles_ten_percent_layer": true,
            "h5_companion_enable_adcpn_macro_substitution_for_click_pings": true,
            "h5_inplayer_enable_adcpn_macro_substitution_for_click_pings": true,
            "hide_endpoint_overflow_on_ytd_display_ad_renderer": true,
            "html5_control_flow_include_trigger_logging_in_tmp_logs": true,
            "html5_enable_ads_client_monitoring_log_tv": true,
            "html5_enable_single_video_vod_ivar_on_pacf": true,
            "html5_log_trigger_events_with_debug_data": true,
            "html5_recognize_predict_start_cue_point": true,
            "html5_server_stitched_dai_group": true,
            "html5_web_enable_halftime_preroll": true,
            "il_use_view_model_logging_context": true,
            "include_autoplay_count_in_playlists": true,
            "is_part_of_any_user_engagement_experiment": true,
            "json_condensed_response": true,
            "kevlar_app_shortcuts": true,
            "kevlar_appbehavior_attach_startup_tasks": true,
            "kevlar_append_toggled_engagement_panels_top": true,
            "kevlar_autofocus_menu_on_keyboard_nav": true,
            "kevlar_autonav_popup_filtering": true,
            "kevlar_av_eliminate_polling": true,
            "kevlar_background_color_update": true,
            "kevlar_cache_cold_load_response": true,
            "kevlar_cache_on_ttl_player": true,
            "kevlar_cache_on_ttl_search": true,
            "kevlar_calculate_grid_collapsible": true,
            "kevlar_cancel_scheduled_comment_jobs_on_navigate": true,
            "kevlar_center_search_results": true,
            "kevlar_channel_creation_form_resolver": true,
            "kevlar_channel_trailer_multi_attach": true,
            "kevlar_chapters_list_view_seek_by_chapter": true,
            "kevlar_clear_duplicate_pref_cookie": true,
            "kevlar_clear_non_displayable_url_params": true,
            "kevlar_client_side_screens": true,
            "kevlar_command_handler": true,
            "kevlar_command_handler_clicks": true,
            "kevlar_command_handler_formatted_string": true,
            "kevlar_command_url": true,
            "kevlar_continue_playback_without_player_response": true,
            "kevlar_decorate_endpoint_with_onesie_config": true,
            "kevlar_delay_watch_initial_data": true,
            "kevlar_disable_background_prefetch": true,
            "kevlar_disable_pending_command": true,
            "kevlar_downloads_on_home": true,
            "kevlar_dragdrop_fast_scroll": true,
            "kevlar_dropdown_fix": true,
            "kevlar_droppable_prefetchable_requests": true,
            "kevlar_early_popup_close": true,
            "kevlar_enable_editable_playlists": true,
            "kevlar_enable_em_offlineable_discovery": true,
            "kevlar_enable_reorderable_playlists": true,
            "kevlar_enable_shorts_prefetch_in_sequence": true,
            "kevlar_enable_shorts_response_chunking": true,
            "kevlar_enable_slis": true,
            "kevlar_enable_up_arrow": true,
            "kevlar_enable_ybp_op_for_shoptube": true,
            "kevlar_exit_fullscreen_leaving_watch": true,
            "kevlar_fix_playlist_continuation": true,
            "kevlar_flexible_menu": true,
            "kevlar_fluid_touch_scroll": true,
            "kevlar_frontend_queue_recover": true,
            "kevlar_gel_error_routing": true,
            "kevlar_guide_refresh": true,
            "kevlar_help_use_locale": true,
            "kevlar_hide_playlist_playback_status": true,
            "kevlar_hide_pp_url_param": true,
            "kevlar_hide_time_continue_url_param": true,
            "kevlar_home_shorts_grid_alignment": true,
            "kevlar_home_skeleton": true,
            "kevlar_home_skeleton_hide_later": true,
            "kevlar_js_fixes": true,
            "kevlar_keyboard_button_focus": true,
            "kevlar_larger_three_dot_tap": true,
            "kevlar_lazy_list_resume_for_autofill": true,
            "kevlar_legacy_browsers": true,
            "kevlar_live_report_menu_item": true,
            "kevlar_local_innertube_response": true,
            "kevlar_macro_markers_keyboard_shortcut": true,
            "kevlar_masthead_store": true,
            "kevlar_mealbar_above_player": true,
            "kevlar_miniplayer": true,
            "kevlar_miniplayer_expand_top": true,
            "kevlar_miniplayer_play_pause_on_scrim": true,
            "kevlar_miniplayer_queue_user_activation": true,
            "kevlar_mix_handle_first_endpoint_different": true,
            "kevlar_modern_sd": true,
            "kevlar_network_banner": true,
            "kevlar_next_cold_on_auth_change_detected": true,
            "kevlar_nitrate_driven_tooltips": true,
            "kevlar_no_autoscroll_on_playlist_hover": true,
            "kevlar_op_infra": true,
            "kevlar_op_warm_pages": true,
            "kevlar_pandown_polyfill": true,
            "kevlar_passive_event_listeners": true,
            "kevlar_playback_associated_queue": true,
            "kevlar_player_cached_load_config": true,
            "kevlar_player_check_ad_state_on_stop": true,
            "kevlar_player_load_player_no_op": true,
            "kevlar_player_new_bootstrap_adoption": true,
            "kevlar_player_playlist_use_local_index": true,
            "kevlar_player_watch_endpoint_navigation": true,
            "kevlar_playlist_drag_handles": true,
            "kevlar_playlist_responsive": true,
            "kevlar_playlist_use_x_close_button": true,
            "kevlar_prefetch": true,
            "kevlar_prevent_polymer_dynamic_font_load": true,
            "kevlar_queue_use_update_api": true,
            "kevlar_refresh_gesture": true,
            "kevlar_refresh_on_theme_change": true,
            "kevlar_rendererstamper_event_listener": true,
            "kevlar_replace_short_to_short_history_state": true,
            "kevlar_request_sequencing": true,
            "kevlar_resolve_command_for_confirm_dialog": true,
            "kevlar_resolve_playlist_endpoint_as_watch_endpoint": true,
            "kevlar_response_command_processor_page": true,
            "kevlar_scroll_chips_on_touch": true,
            "kevlar_scrollbar_rework": true,
            "kevlar_service_command_check": true,
            "kevlar_set_internal_player_size": true,
            "kevlar_shell_for_downloads_page": true,
            "kevlar_should_maintain_stable_list": true,
            "kevlar_show_em_dl_btn": true,
            "kevlar_show_em_dl_menu_item": true,
            "kevlar_show_em_dl_settings_tab": true,
            "kevlar_smart_downloads": true,
            "kevlar_smart_downloads_setting": true,
            "kevlar_startup_lifecycle": true,
            "kevlar_structured_description_content_inline": true,
            "kevlar_system_icons": true,
            "kevlar_tabs_gesture": true,
            "kevlar_text_inline_expander_formatted_snippet": true,
            "kevlar_three_dot_ink": true,
            "kevlar_thumbnail_fluid": true,
            "kevlar_toast_manager": true,
            "kevlar_topbar_logo_fallback_home": true,
            "kevlar_touch_feedback": true,
            "kevlar_touch_feedback_lockups": true,
            "kevlar_touch_gesture_ves": true,
            "kevlar_transcript_engagement_panel": true,
            "kevlar_tuner_run_default_comments_delay": true,
            "kevlar_tuner_should_defer_detach": true,
            "kevlar_typography_spacing_update": true,
            "kevlar_typography_update": true,
            "kevlar_unavailable_video_error_ui_client": true,
            "kevlar_unified_errors_init": true,
            "kevlar_use_response_ttl_to_invalidate_cache": true,
            "kevlar_use_vimio_behavior": true,
            "kevlar_use_ytd_player": true,
            "kevlar_variable_youtube_sans": true,
            "kevlar_vimio_use_shared_monitor": true,
            "kevlar_voice_logging_fix": true,
            "kevlar_voice_search": true,
            "kevlar_watch_cinematics": true,
            "kevlar_watch_color_update": true,
            "kevlar_watch_comments_ep_disable_theater": true,
            "kevlar_watch_drag_handles": true,
            "kevlar_watch_flexy_autonav_manager": true,
            "kevlar_watch_flexy_use_controller": true,
            "kevlar_watch_focus_on_engagement_panels": true,
            "kevlar_watch_gesture_pandown": true,
            "kevlar_watch_hide_comments_teaser": true,
            "kevlar_watch_hide_comments_while_panel_open": true,
            "kevlar_watch_js_panel_height": true,
            "kevlar_watch_metadata_refresh": true,
            "kevlar_watch_metadata_refresh_attached_subscribe": true,
            "kevlar_watch_metadata_refresh_clickable_description": true,
            "kevlar_watch_metadata_refresh_compact_view_count": true,
            "kevlar_watch_metadata_refresh_description_info_dedicated_line": true,
            "kevlar_watch_metadata_refresh_description_inline_expander": true,
            "kevlar_watch_metadata_refresh_description_primary_color": true,
            "kevlar_watch_metadata_refresh_for_live_killswitch": true,
            "kevlar_watch_metadata_refresh_full_width_description": true,
            "kevlar_watch_metadata_refresh_left_aligned_video_actions": true,
            "kevlar_watch_metadata_refresh_lower_case_video_actions": true,
            "kevlar_watch_metadata_refresh_narrower_item_wrap": true,
            "kevlar_watch_metadata_refresh_relative_date": true,
            "kevlar_watch_metadata_refresh_top_aligned_actions": true,
            "kevlar_watch_modern_metapanel": true,
            "kevlar_watch_modern_panels": true,
            "kevlar_watch_panel_height_matches_player": true,
            "kevlar_woffle_fallback_image": true,
            "kevlar_ytb_live_badges": true,
            "killswitch_toggle_button_behavior_resolve_command": true,
            "live_chat_banner_expansion_fix": true,
            "live_chat_collapse_merch_banner": true,
            "live_chat_enable_qna_banner_overflow_menu_actions": true,
            "live_chat_enable_qna_channel": true,
            "live_chat_increased_min_height": true,
            "live_chat_over_playlist": true,
            "live_chat_use_new_emoji_picker": true,
            "log_errors_through_nwl_on_retry": true,
            "log_heartbeat_with_lifecycles": true,
            "log_vis_on_tab_change": true,
            "log_web_endpoint_to_layer": true,
            "mdx_enable_privacy_disclosure_ui": true,
            "mdx_load_cast_api_bootstrap_script": true,
            "migrate_events_to_ts": true,
            "music_on_main_handle_playlist_edit_video_added_result_data": true,
            "mweb_actions_command_handler": true,
            "mweb_command_handler": true,
            "mweb_disable_set_autonav_state_in_player": true,
            "mweb_enable_consistency_service": true,
            "mweb_enable_hlp": true,
            "mweb_logo_use_home_page_ve": true,
            "mweb_navigate_to_watch_with_op": true,
            "networkless_gel": true,
            "networkless_logging": true,
            "no_sub_count_on_sub_button": true,
            "nwl_send_fast_on_unload": true,
            "nwl_send_from_memory_when_online": true,
            "offline_error_handling": true,
            "pageid_as_header_web": true,
            "parse_query_data_from_url": true,
            "pause_ad_video_on_desktop_engagement_panel_click": true,
            "pdg_enable_flow_logging_for_super_chat": true,
            "pdg_enable_flow_logging_for_super_stickers": true,
            "player_allow_autonav_after_playlist": true,
            "player_bootstrap_method": true,
            "player_doubletap_to_seek": true,
            "player_enable_playback_playlist_change": true,
            "player_endscreen_ellipsis_fix": true,
            "polymer2_not_shady_build": true,
            "polymer_bad_build_labels": true,
            "polymer_task_manager_proxied_promise": true,
            "polymer_verifiy_app_state": true,
            "polymer_video_renderer_defer_menu": true,
            "polymer_warm_thumbnail_preload": true,
            "polymer_ytdi_enable_global_injector": true,
            "problem_walkthrough_sd": true,
            "qoe_send_and_write": true,
            "record_app_crashed_web": true,
            "reload_without_polymer_innertube": true,
            "remove_web_comment_id_cache": true,
            "remove_yt_simple_endpoint_from_desktop_display_ad_title": true,
            "rich_grid_mini_mode": true,
            "rich_grid_watch_meta_side": true,
            "rich_grid_watch_show_watch_next": true,
            "scheduler_use_raf_by_default": true,
            "search_ui_enable_pve_buy_button": true,
            "search_ui_official_cards_enable_paid_virtual_event_buy_button": true,
            "serve_pdp_at_canonical_url": true,
            "service_worker_enabled": true,
            "service_worker_push_enabled": true,
            "service_worker_push_home_page_prompt": true,
            "service_worker_push_watch_page_prompt": true,
            "service_worker_subscribe_with_vapid_key": true,
            "shorts_desktop_watch_while_p2": true,
            "should_clear_video_data_on_player_cued_unstarted": true,
            "show_civ_reminder_on_web": true,
            "skip_invalid_ytcsi_ticks": true,
            "skip_ls_gel_retry": true,
            "skip_setting_info_in_csi_data_object": true,
            "sponsorships_gifting_enable_announcements": true,
            "sponsorships_gifting_enable_opt_in": true,
            "sponsorships_gifting_enable_purchase": true,
            "start_client_gcf": true,
            "start_client_gcf_for_player": true,
            "super_sticker_emoji_picker_category_button_icon_filled": true,
            "suppress_error_204_logging": true,
            "track_webfe_innertube_auth_mismatch": true,
            "transport_use_scheduler": true,
            "use_ads_engagement_panel_desktop_footer_cta": true,
            "use_better_post_dismissals": true,
            "use_border_and_grid_wrapping_on_desktop_panel_tiles": true,
            "use_new_in_memory_storage": true,
            "use_new_nwl_initialization": true,
            "use_new_nwl_saw": true,
            "use_new_nwl_stw": true,
            "use_new_nwl_wts": true,
            "use_on_click_for_desktop_companion": true,
            "use_player_abuse_bg_library": true,
            "use_profilepage_event_label_in_carousel_playbacks": true,
            "use_request_time_ms_header": true,
            "use_session_based_sampling": true,
            "use_shared_nsm": true,
            "use_shared_nsm_and_keep_yt_online_updated": true,
            "use_source_element_if_present_for_actions": true,
            "use_ts_visibilitylogger": true,
            "use_watch_fragments2": true,
            "verify_ads_itag_early": true,
            "vss_final_ping_send_and_write": true,
            "vss_playback_use_send_and_write": true,
            "warm_load_nav_start_web": true,
            "warm_op_csn_cleanup": true,
            "web_always_load_chat_support": true,
            "web_amsterdam_playlists": true,
            "web_amsterdam_post_mvp_playlists": true,
            "web_animated_like": true,
            "web_animated_like_lazy_load": true,
            "web_api_url": true,
            "web_autonav_allow_off_by_default": true,
            "web_button_rework": true,
            "web_darker_dark_theme": true,
            "web_darker_dark_theme_deprecate": true,
            "web_dedupe_ve_grafting": true,
            "web_defer_shorts_ui": true,
            "web_defer_shorts_ui_phase2": true,
            "web_deprecate_service_ajax_map_dependency": true,
            "web_enable_history_cache_map": true,
            "web_enable_video_preview_migration": true,
            "web_enable_voz_audio_feedback": true,
            "web_engagement_panel_show_description": true,
            "web_ep_chevron_tap_target_size": true,
            "web_filled_subscribed_button": true,
            "web_forward_command_on_pbj": true,
            "web_gel_timeout_cap": true,
            "web_guide_ui_refresh": true,
            "web_hide_autonav_headline": true,
            "web_hide_autonav_keyline": true,
            "web_inline_player_enabled": true,
            "web_kevlar_enable_adaptive_signals": true,
            "web_log_memory_total_kbytes": true,
            "web_log_player_watch_next_ticks": true,
            "web_log_reels_ticks": true,
            "web_modern_ads": true,
            "web_modern_buttons": true,
            "web_modern_buttons_bl_survey": true,
            "web_modern_chips": true,
            "web_modern_dialogs": true,
            "web_modern_playlists": true,
            "web_modern_subscribe": true,
            "web_move_autoplay_video_under_chip": true,
            "web_moved_super_title_link": true,
            "web_one_platform_error_handling": true,
            "web_player_autonav_toggle_always_listen": true,
            "web_player_autonav_use_server_provided_state": true,
            "web_player_decouple_autonav": true,
            "web_player_enable_early_warning_snackbar": true,
            "web_player_enable_ipp": true,
            "web_player_enable_premium_hbr_in_h5_api": true,
            "web_player_enable_premium_hbr_playback_cap": true,
            "web_player_entities_middleware": true,
            "web_player_move_autonav_toggle": true,
            "web_player_mutable_event_label": true,
            "web_player_should_honor_include_asr_setting": true,
            "web_player_small_hbp_settings_menu": true,
            "web_player_touch_mode_improvements": true,
            "web_player_use_new_api_for_quality_pullback": true,
            "web_player_watch_next_response": true,
            "web_prefetch_preload_video": true,
            "web_prs_testing_mode_killswitch": true,
            "web_repeating_chapters": true,
            "web_replace_thumbnail_with_image": true,
            "web_rounded_containers": true,
            "web_rounded_thumbnails": true,
            "web_search_inline_playback_mouse_enter": true,
            "web_segmented_like_dislike_button": true,
            "web_sheets_ui_refresh": true,
            "web_shorts_early_player_load": true,
            "web_shorts_progress_bar": true,
            "web_shorts_shelf_on_search": true,
            "web_shorts_skip_loading_same_index": true,
            "web_snackbar_ui_refresh": true,
            "web_structured_description_show_more": true,
            "web_use_cache_for_image_fallback": true,
            "web_yt_config_context": true,
            "woffle_clean_up_after_entity_migration": true,
            "your_data_entrypoint": true,
            "yt_network_manager_component_to_lib_killswitch": true,
            "ytidb_clear_embedded_player": true,
            "ytidb_fetch_datasync_ids_for_data_cleanup": true,
            "H5_async_logging_delay_ms": 30000.0,
            "addto_ajax_log_warning_fraction": 0.1,
            "autoplay_pause_by_lact_sampling_fraction": 0.0,
            "browse_ajax_log_warning_fraction": 1.0,
            "cinematic_watch_effect_opacity": 0.4,
            "kevlar_tuner_clamp_device_pixel_ratio": 2.0,
            "kevlar_tuner_thumbnail_factor": 1.0,
            "kevlar_unified_player_logging_threshold": 1.0,
            "log_window_onerror_fraction": 0.1,
            "polymer_report_client_url_requested_rate": 0.001,
            "polymer_report_missing_web_navigation_endpoint_rate": 0.001,
            "prefetch_coordinator_error_logging_sampling_rate": 1.0,
            "tv_pacf_logging_sample_rate": 0.01,
            "web_shorts_error_logging_threshold": 0.001,
            "web_shorts_intersection_observer_threshold_override": 0.0,
            "web_system_health_fraction": 0.01,
            "ytidb_transaction_ended_event_rate_limit": 0.02,
            "ytidb_transaction_ended_event_rate_limit_session": 0.2,
            "ytidb_transaction_ended_event_rate_limit_transaction": 0.1,
            "autoplay_pause_by_lact_sec": 0,
            "autoplay_time": 8000,
            "autoplay_time_for_fullscreen": 3000,
            "autoplay_time_for_music_content": 3000,
            "botguard_async_snapshot_timeout_ms": 3000,
            "check_navigator_accuracy_timeout_ms": 0,
            "cinematic_watch_css_filter_blur_strength": 40,
            "cinematic_watch_fade_out_duration": 500,
            "client_streamz_web_flush_count": 100,
            "client_streamz_web_flush_interval_seconds": 60,
            "desktop_search_suggestion_tap_target": 0,
            "external_fullscreen_button_click_threshold": 2,
            "external_fullscreen_button_shown_threshold": 10,
            "get_async_timeout_ms": 60000,
            "high_priority_flyout_frequency": 3,
            "initial_gel_batch_timeout": 2000,
            "kevlar_mini_guide_width_threshold": 791,
            "kevlar_persistent_guide_width_threshold": 1312,
            "kevlar_time_caching_end_threshold": 15,
            "kevlar_time_caching_start_threshold": 15,
            "kevlar_tooltip_impression_cap": 2,
            "kevlar_tuner_default_comments_delay": 1000,
            "kevlar_tuner_scheduler_soft_state_timer_ms": 800,
            "kevlar_tuner_visibility_time_between_jobs_ms": 100,
            "kevlar_watch_flexy_metadata_height": 136,
            "kevlar_watch_metadata_refresh_description_lines": 3,
            "live_chat_chunk_rendering": 0,
            "log_web_meta_interval_ms": 0,
            "max_duration_to_consider_mouseover_as_hover": 600000,
            "max_prefetch_window_sec_for_livestream_optimization": 10,
            "min_mouse_still_duration": 100,
            "min_prefetch_offset_sec_for_livestream_optimization": 20,
            "minimum_duration_to_consider_mouseover_as_hover": 500,
            "mweb_history_manager_cache_size": 100,
            "network_polling_interval": 30000,
            "pbj_navigate_limit": -1,
            "polymer_log_prop_change_observer_percent": 0,
            "post_type_icons_rearrange": 1,
            "prefetch_comments_ms_after_video": 0,
            "prefetch_coordinator_command_timeout_ms": 60000,
            "prefetch_coordinator_max_inflight_requests": 1,
            "rich_grid_watch_open_animation_duration": 0,
            "send_config_hash_timer": 0,
            "service_worker_push_logged_out_prompt_watches": -1,
            "service_worker_push_prompt_cap": -1,
            "service_worker_push_prompt_delay_microseconds": 3888000000000,
            "shorts_inline_player_triggering_delay": 500,
            "user_engagement_experiments_rate_limit_ms": 86400000,
            "user_mention_suggestions_edu_impression_cap": 10,
            "visibility_time_between_jobs_ms": 100,
            "watch_next_pause_autoplay_lact_sec": 4500,
            "web_emulated_idle_callback_delay": 0,
            "web_foreground_heartbeat_interval_ms": 28000,
            "web_gel_debounce_ms": 10000,
            "web_home_feed_reload_delay": 1440,
            "web_inline_player_triggering_delay": 1000,
            "web_logging_max_batch": 150,
            "web_player_caption_language_preference_stickiness_duration": 30,
            "web_search_inline_player_triggering_delay": 500,
            "web_shorts_inline_playback_preview_ms": 0,
            "web_shorts_scrubber_threshold_sec": 0,
            "web_shorts_shelf_fixed_position": 9,
            "web_smoothness_test_duration_ms": 0,
            "web_smoothness_test_method": 0,
            "yoodle_end_time_utc": 0,
            "yoodle_start_time_utc": 0,
            "ytidb_remake_db_retries": 1,
            "ytidb_reopen_db_retries": 0,
            "WebClientReleaseProcessCritical__youtube_web_client_version_override": "",
            "debug_forced_internalcountrycode": "",
            "desktop_search_bigger_thumbs_style": "DEFAULT",
            "desktop_search_prominent_thumbs_style": "DEFAULT",
            "desktop_searchbar_style": "default",
            "embeds_web_synth_ch_headers_banned_urls_regex": "",
            "kevlar_duplicate_pref_cookie_domain_override": "",
            "kevlar_link_capturing_mode": "",
            "live_chat_unicode_emoji_json_url": "https://www.gstatic.com/youtube/img/emojis/emojis-svg-9.json",
            "polymer_task_manager_status": "production",
            "service_worker_push_force_notification_prompt_tag": "1",
            "service_worker_scope": "/",
            "web_client_version_override": "",
            "web_modern_subscribe_style": "filled",
            "web_searchbar_style": "rounded_corner_borders_light_btn",
            "web_shorts_expanded_overlay_type": "DEFAULT",
            "web_shorts_overlay_vertical_orientation": "bottom",
            "yoodle_base_url": "",
            "yoodle_webp_base_url": "",
            "conditional_lab_ids": [],
            "guide_business_info_countries": ["KR"],
            "guide_legal_footer_enabled_countries": ["NL", "ES"],
            "kevlar_command_handler_command_banlist": [],
            "kevlar_page_service_url_prefix_carveouts": [],
            "web_op_signal_type_banlist": []
          },
          "GAPI_HINT_PARAMS": "m;/_/scs/abc-static/_/js/k\u003dgapi.gapi.en.3R2S2iMRC9o.O/d\u003d1/rs\u003dAHpOoo8-ukmJKpOYaCGRb909wNTowBRXFA/m\u003d__features__",
          "GAPI_HOST": "https://apis.google.com",
          "GAPI_LOCALE": "bn_BD",
          "GL": "BD",
          "GOOGLE_FEEDBACK_PRODUCT_ID": "59",
          "GOOGLE_FEEDBACK_PRODUCT_DATA": {
            "polymer": "active",
            "polymer2": "active",
            "accept_language": ""
          },
          "HL": "bn",
          "HTML_DIR": "ltr",
          "HTML_LANG": "bn-BD",
          "INNERTUBE_API_KEY": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
          "INNERTUBE_API_VERSION": "v1",
          "INNERTUBE_CLIENT_NAME": "WEB",
          "INNERTUBE_CLIENT_VERSION": "2.20230206.06.00",
          "INNERTUBE_CONTEXT": {
            "client": {
              "hl": "bn",
              "gl": "BD",
              "remoteHost": "103.69.151.252",
              "deviceMake": "",
              "deviceModel": "",
              "visitorData": "CgtjQWludnVRdGphOCi7ko6fBg%3D%3D",
              "userAgent": "gzip(gfe)",
              "clientName": "WEB",
              "clientVersion": "2.20230206.06.00",
              "osName": "",
              "osVersion": "",
              "originalUrl": "https://www.youtube.com/@BOSTRENDING/about",
              "platform": "DESKTOP",
              "clientFormFactor": "UNKNOWN_FORM_FACTOR",
              "configInfo": {
                "appInstallData": "CLuSjp8GEInorgUQzPWuBRCH3a4FEKLsrgUQuIuuBRDi1K4FEJrqrgUQ2umuBRD7o_4SEIuArwUQ5aD-EhDM364FEILdrgUQuNSuBRCU-K4FELac_hIQ5_euBRDb6K4FEID4rgUQkfj8Eg%3D%3D"
              },
              "deviceExperimentId": "ChxOekU1TnpjME56VXhOalUzTURnNU56WTRNZz09ELuSjp8GGLuSjp8G"
            },
            "user": {
              "lockedSafetyMode": false
            },
            "request": {
              "useSsl": true
            },
            "clickTracking": {
              "clickTrackingParams": "IhMIg7iZ5uqF/QIVwqNjBh14zQF+"
            }
          },
          "INNERTUBE_CONTEXT_CLIENT_NAME": 1,
          "INNERTUBE_CONTEXT_CLIENT_VERSION": "2.20230206.06.00",
          "INNERTUBE_CONTEXT_GL": "BD",
          "INNERTUBE_CONTEXT_HL": "bn",
          "LATEST_ECATCHER_SERVICE_TRACKING_PARAMS": {
            "client.name": "WEB"
          },
          "LOGGED_IN": false,
          "PAGE_BUILD_LABEL": "youtube.desktop.web_20230206_06_RC00",
          "PAGE_CL": 507523800,
          "scheduler": {
            "useRaf": true,
            "timeout": 20
          },
          "SERVER_NAME": "WebFE",
          "SESSION_INDEX": "",
          "SIGNIN_URL": "https://accounts.google.com/ServiceLogin?service\u003dyoutube\u0026uilel\u003d3\u0026passive\u003dtrue\u0026continue\u003dhttps%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26hl%3Dbn%26next%3Dhttps%253A%252F%252Fwww.youtube.com%252F%2540BOSTRENDING%252Fabout%26feature%3D__FEATURE__\u0026hl\u003dbn",
          "VISITOR_DATA": "CgtjQWludnVRdGphOCi7ko6fBg%3D%3D",
          "WEB_PLAYER_CONTEXT_CONFIGS": {
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_WATCH": {
              "transparentBackground": true,
              "showMiniplayerButton": true,
              "externalFullscreen": true,
              "showMiniplayerUiWhenMinimized": true,
              "rootElementId": "movie_player",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_WATCH",
              "eventLabel": "detailpage",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "enableCsiLogging": true,
              "csiPageType": "watch",
              "datasyncId": "V60efa3b8||",
              "allowWoffleManagement": true,
              "cinematicSettingsAvailable": true
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_CHANNEL_TRAILER": {
              "rootElementId": "c4-player",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_CHANNEL_TRAILER",
              "eventLabel": "profilepage",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "enableCsiLogging": true,
              "csiPageType": "channels",
              "datasyncId": "V60efa3b8||"
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_PLAYLIST_OVERVIEW": {
              "rootElementId": "c4-player",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_PLAYLIST_OVERVIEW",
              "eventLabel": "playlistoverview",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "disableSharing": true,
              "hideInfo": true,
              "disableWatchLater": true,
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "enableCsiLogging": true,
              "csiPageType": "playlist_overview",
              "datasyncId": "V60efa3b8||"
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_VERTICAL_LANDING_PAGE_PROMO": {
              "rootElementId": "ytd-default-promo-panel-renderer-inline-playback-renderer",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_VERTICAL_LANDING_PAGE_PROMO",
              "eventLabel": "profilepage",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "controlsType": 0,
              "disableRelatedVideos": true,
              "annotationsLoadPolicy": 3,
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "hideInfo": true,
              "startMuted": true,
              "enableMutedAutoplay": true,
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "enableCsiLogging": true,
              "csiPageType": "channels",
              "datasyncId": "V60efa3b8||"
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_SHORTS": {
              "rootElementId": "shorts-player",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_SHORTS",
              "eventLabel": "shortspage",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "controlsType": 0,
              "disableKeyboardControls": true,
              "disableRelatedVideos": true,
              "annotationsLoadPolicy": 3,
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "hideInfo": true,
              "disableFullscreen": true,
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "enableCsiLogging": true,
              "datasyncId": "V60efa3b8||",
              "storeUserVolume": true,
              "disableSeek": true,
              "disablePaidContentOverlay": true
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_SPONSORSHIPS_OFFER": {
              "rootElementId": "ytd-sponsorships-offer-with-video-renderer",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_SPONSORSHIPS_OFFER",
              "eventLabel": "sponsorshipsoffer",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "disableRelatedVideos": true,
              "annotationsLoadPolicy": 3,
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "disableFullscreen": true,
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "datasyncId": "V60efa3b8||"
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_INLINE_PREVIEW": {
              "rootElementId": "inline-preview-player",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_KEVLAR_INLINE_PREVIEW",
              "eventLabel": "detailpage",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "disableKeyboardControls": true,
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "disableFullscreen": true,
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "enableCsiLogging": true,
              "csiPageType": "watch",
              "disableMdxCast": true,
              "datasyncId": "V60efa3b8||",
              "showInlinePreviewUi": true
            },
            "WEB_PLAYER_CONTEXT_CONFIG_ID_HANDLES_CLAIMING": {
              "rootElementId": "ytd-handles-claiming-video-item-renderer",
              "jsUrl": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
              "cssUrl": "/s/player/97ea7458/www-player.css",
              "contextId": "WEB_PLAYER_CONTEXT_CONFIG_ID_HANDLES_CLAIMING",
              "eventLabel": "handlesclaiming",
              "contentRegion": "BD",
              "hl": "bn_BD",
              "hostLanguage": "bn",
              "playerStyle": "desktop-polymer",
              "innertubeApiKey": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
              "innertubeApiVersion": "v1",
              "innertubeContextClientVersion": "2.20230206.06.00",
              "disableRelatedVideos": true,
              "device": {
                "brand": "",
                "model": "",
                "platform": "DESKTOP",
                "interfaceName": "WEB",
                "interfaceVersion": "2.20230206.06.00"
              },
              "serializedExperimentIds": "23703445,23983296,23986017,24004644,24007246,24080738,24135310,24169501,24255165,24396645,24415864,24416291,24428639,24430382,24433679,24438950,24439361,24441240,24447308,24449113,24450367,24451033,24451437,24454058,24455494,24457884,24463912",
              "serializedExperimentFlags": "H5_async_logging_delay_ms\u003d30000.0\u0026H5_enable_full_pacf_logging\u003dtrue\u0026H5_use_async_logging\u003dtrue\u0026ad_pod_disable_companion_persist_ads_quality\u003dtrue\u0026addto_ajax_log_warning_fraction\u003d0.1\u0026align_ad_to_video_player_lifecycle_for_bulleit\u003dtrue\u0026allow_live_autoplay\u003dtrue\u0026allow_poltergust_autoplay\u003dtrue\u0026allow_skip_networkless\u003dtrue\u0026autoplay_time\u003d8000\u0026autoplay_time_for_fullscreen\u003d3000\u0026autoplay_time_for_music_content\u003d3000\u0026background_thread_flush_logs_due_to_batch_limit\u003dtrue\u0026bg_vm_reinit_threshold\u003d7200000\u0026blocked_packages_for_sps\u003d[]\u0026botguard_async_snapshot_timeout_ms\u003d3000\u0026check_ad_ui_status_for_mweb_safari\u003dtrue\u0026check_navigator_accuracy_timeout_ms\u003d0\u0026clear_user_partitioned_ls\u003dtrue\u0026client_respect_autoplay_switch_button_renderer\u003dtrue\u0026csi_on_gel\u003dtrue\u0026dash_manifest_version\u003d5\u0026debug_bandaid_hostname\u003d\u0026debug_sherlog_username\u003d\u0026delay_ads_gvi_call_on_bulleit_living_room_ms\u003d0\u0026deprecate_csi_has_info\u003dtrue\u0026deprecate_pair_servlet_enabled\u003dtrue\u0026deprecate_two_way_binding_child\u003dtrue\u0026deprecate_two_way_binding_parent\u003dtrue\u0026desktop_image_cta_no_background\u003dtrue\u0026desktop_log_img_click_location\u003dtrue\u0026desktop_player_button_tooltip_with_shortcut\u003dtrue\u0026desktop_sparkles_light_cta_button\u003dtrue\u0026disable_channel_id_check_for_suspended_channels\u003dtrue\u0026disable_child_node_auto_formatted_strings\u003dtrue\u0026disable_defer_admodule_on_advertiser_video\u003dtrue\u0026disable_features_for_supex\u003dtrue\u0026disable_legacy_desktop_remote_queue\u003dtrue\u0026disable_mdx_connection_in_mdx_module_for_music_web\u003dtrue\u0026disable_new_pause_state3\u003dtrue\u0026disable_pacf_logging_for_memory_limited_tv\u003dtrue\u0026disable_rounding_ad_notify\u003dtrue\u0026disable_simple_mixed_direction_formatted_strings\u003dtrue\u0026disable_ssdai_on_errors\u003dtrue\u0026disable_tabbing_before_flyout_ad_elements_appear\u003dtrue\u0026disable_thumbnail_preloading\u003dtrue\u0026embeds_enable_allow_watch_again_endscreen_for_eligible_shorts\u003dtrue\u0026embeds_enable_embed_module\u003dtrue\u0026embeds_enable_shorts_branded_ui\u003dtrue\u0026embeds_enable_shorts_links_for_eligible_shorts\u003dtrue\u0026embeds_web_enable_gws_wh_rel_off\u003dtrue\u0026embeds_web_enable_info_panel_preview\u003dtrue\u0026embeds_web_enable_load_player_from_page_show\u003dtrue\u0026embeds_web_enable_logging_event_handlers\u003dtrue\u0026embeds_web_enable_pem_domain_fix_for_ad_requests\u003dtrue\u0026embeds_web_enable_replace_unload_w_pagehide\u003dtrue\u0026embeds_web_enable_ve_conversion_logging_tracking_no_allow_list\u003dtrue\u0026embeds_web_enable_video_data_refactoring_break_down_and_move_methods\u003dtrue\u0026embeds_web_enable_video_data_refactoring_like_button_renderer\u003dtrue\u0026embeds_web_lite_mode\u003d1\u0026embeds_web_nwl_disable_nocookie\u003dtrue\u0026embeds_web_synth_ch_headers_banned_urls_regex\u003d\u0026enable_ad_cpn_macro_substitution_for_click_pings\u003dtrue\u0026enable_cast_for_web_unplugged\u003dtrue\u0026enable_cast_on_music_web\u003dtrue\u0026enable_client_page_id_header_for_first_party_pings\u003dtrue\u0026enable_client_sli_logging\u003dtrue\u0026enable_discrete_live_precise_embargos\u003dtrue\u0026enable_error_corrections_infocard\u003dtrue\u0026enable_error_corrections_infocard_web_client\u003dtrue\u0026enable_error_corrections_infocard_web_client_check\u003dtrue\u0026enable_error_corrections_infocards_icon_web\u003dtrue\u0026enable_eviction_protection_for_bulleit\u003dtrue\u0026enable_gel_log_commands\u003dtrue\u0026enable_handles_account_menu_switcher\u003dtrue\u0026enable_inline_preview_controls\u003dtrue\u0026enable_live_premiere_web_player_indicator\u003dtrue\u0026enable_lr_home_infeed_ads_inline_playback_progress_pings\u003dtrue\u0026enable_macro_substitution_on_html5\u003dtrue\u0026enable_mixed_direction_formatted_strings\u003dtrue\u0026enable_mweb_livestream_ui_update\u003dtrue\u0026enable_new_paid_product_placement\u003dtrue\u0026enable_post_ad_perception_survey_fix_on_tvhtml5\u003dtrue\u0026enable_post_ad_perception_survey_in_tvhtml5\u003dtrue\u0026enable_precise_embargos\u003dtrue\u0026enable_server_stitched_dai\u003dtrue\u0026enable_shorts_player\u003dtrue\u0026enable_skip_ad_guidance_prompt\u003dtrue\u0026enable_skippable_ads_for_unplugged_ad_pod\u003dtrue\u0026enable_smearing_expansion_dai\u003dtrue\u0026enable_tectonic_ad_ux_for_halftime\u003dtrue\u0026enable_third_party_info\u003dtrue\u0026enable_topsoil_wta_for_halftime_live_infra\u003dtrue\u0026enable_web_media_session_metadata_fix\u003dtrue\u0026error_message_for_gsuite_network_restrictions\u003dtrue\u0026export_networkless_options\u003dtrue\u0026external_fullscreen_with_edu\u003dtrue\u0026fast_autonav_in_background\u003dtrue\u0026fetch_att_independently\u003dtrue\u0026fill_single_video_with_notify_to_lasr\u003dtrue\u0026filter_vp9_for_csdai\u003dtrue\u0026fix_ads_tracking_for_swf_config_deprecation_mweb\u003dtrue\u0026gcf_config_store_enabled\u003dtrue\u0026gpa_sparkles_ten_percent_layer\u003dtrue\u0026gvi_channel_client_screen\u003dtrue\u0026h5_companion_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026h5_enable_unified_csi_preroll\u003dtrue\u0026h5_inplayer_enable_adcpn_macro_substitution_for_click_pings\u003dtrue\u0026hfr_dropped_framerate_fallback_threshold\u003d0\u0026hide_endpoint_overflow_on_ytd_display_ad_renderer\u003dtrue\u0026html5_ad_timeout_ms\u003d0\u0026html5_ads_preroll_lock_timeout_delay_ms\u003d15000\u0026html5_allow_discontiguous_slices\u003dtrue\u0026html5_allow_video_keyframe_without_audio\u003dtrue\u0026html5_append_init_while_paused\u003dtrue\u0026html5_apply_ustreamer_cap_per_video_id\u003dtrue\u0026html5_att_oauth\u003dtrue\u0026html5_attach_num_random_bytes_to_bandaid\u003d0\u0026html5_attach_po_token_to_bandaid\u003dtrue\u0026html5_autonav_cap_idle_secs\u003d0\u0026html5_autonav_quality_cap\u003d720\u0026html5_autoplay_default_quality_cap\u003d0\u0026html5_block_pip_safari_delay\u003d0\u0026html5_bmff_new_fourcc_check\u003dtrue\u0026html5_cap_quality_for_tv_hfr\u003dtrue\u0026html5_change_player_mode_order_for_logging\u003dtrue\u0026html5_clamp_cuepoints_to_min\u003dtrue\u0026html5_cobalt_max_size_for_immed_job\u003d0\u0026html5_cobalt_min_processor_cnt_to_offload_algo\u003d0\u0026html5_cobalt_override_quic\u003d0\u0026html5_consume_media_bytes_slice_infos\u003dtrue\u0026html5_control_flow_include_trigger_logging_in_tmp_logs\u003dtrue\u0026html5_create_manifest_from_protos\u003dtrue\u0026html5_de_dupe_content_video_loads_in_lifecycle_api\u003dtrue\u0026html5_deadzone_multiplier\u003d1.0\u0026html5_debug_data_log_probability\u003d0.1\u0026html5_decode_to_texture_cap\u003dtrue\u0026html5_decoder_freeze_timeout_delay_ms\u003d0\u0026html5_default_ad_gain\u003d0.5\u0026html5_default_quality_cap\u003d0\u0026html5_defer_ad_module_ms\u003d0\u0026html5_defer_fetch_att_ms\u003d1000\u0026html5_defer_modules_delay_time_millis\u003d0\u0026html5_delay_initial_loading\u003dtrue\u0026html5_delay_retries_for_host_timeout\u003dtrue\u0026html5_delayed_retry_count\u003d1\u0026html5_delayed_retry_delay_ms\u003d5000\u0026html5_deprecate_video_tag_pool\u003dtrue\u0026html5_desktop_vr180_allow_panning\u003dtrue\u0026html5_desync_cue_range_threshold\u003d0\u0026html5_df_downgrade_thresh\u003d0.2\u0026html5_disable_connection_issue_event\u003dtrue\u0026html5_disable_csi_for_bulleit\u003dtrue\u0026html5_disable_move_pssh_to_moov\u003dtrue\u0026html5_disable_non_contiguous\u003dtrue\u0026html5_displayed_frame_rate_downgrade_threshold\u003d45\u0026html5_drm_check_all_key_error_states\u003dtrue\u0026html5_drm_cpi_license_key\u003dtrue\u0026html5_early_read_chunk\u003dtrue\u0026html5_enable_ac3\u003dtrue\u0026html5_enable_ads_client_monitoring_log_tv\u003dtrue\u0026html5_enable_atv_offline\u003dtrue\u0026html5_enable_client_hints_override\u003dtrue\u0026html5_enable_eac3\u003dtrue\u0026html5_enable_embedded_player_visibility_signals\u003dtrue\u0026html5_enable_non_notify_composite_vod_lsar_pacf\u003dtrue\u0026html5_enable_single_video_vod_ivar_on_pacf\u003dtrue\u0026html5_enable_tvos_dash\u003dtrue\u0026html5_enable_tvos_encrypted_vp9\u003dtrue\u0026html5_enable_widevine_for_alc\u003dtrue\u0026html5_enable_widevine_for_fast_linear\u003dtrue\u0026html5_encourage_array_coalescing\u003dtrue\u0026html5_exile_on_drm_fatal\u003dtrue\u0026html5_fill_isTypeSupported_capability_cache_earlier\u003dtrue\u0026html5_fludd_suspend\u003dtrue\u0026html5_flush_segment_index_on_error\u003dtrue\u0026html5_flush_vss_with_rti_and_rtn\u003dtrue\u0026html5_gapless_ended_transition_buffer_ms\u003d200\u0026html5_gapless_preloading\u003dtrue\u0026html5_generate_session_po_token\u003dtrue\u0026html5_gl_fps_threshold\u003d0\u0026html5_halt_ssdai_fetch_on_predict_start\u003dtrue\u0026html5_hdcp_probing_stream_url\u003d\u0026html5_heartbeat_set_ended\u003dtrue\u0026html5_hfr_quality_cap\u003d0\u0026html5_high_res_logging_percent\u003d0.01\u0026html5_idle_rate_limit_ms\u003d0\u0026html5_ignore_media_element_event_loadeddata\u003dtrue\u0026html5_innertube_heartbeats_for_fairplay\u003dtrue\u0026html5_innertube_heartbeats_for_playready\u003dtrue\u0026html5_innertube_heartbeats_for_widevine\u003dtrue\u0026html5_ios4_seek_above_zero\u003dtrue\u0026html5_ios7_force_play_on_stall\u003dtrue\u0026html5_ios_force_seek_to_zero_on_stop\u003dtrue\u0026html5_jumbo_mobile_subsegment_readahead_target\u003d3.0\u0026html5_jumbo_ull_nonstreaming_mffa_ms\u003d4000\u0026html5_jumbo_ull_subsegment_readahead_target\u003d1.3\u0026html5_license_constraint_delay\u003d5000\u0026html5_live_abr_head_miss_fraction\u003d0.0\u0026html5_live_abr_repredict_fraction\u003d0.0\u0026html5_live_byterate_factor_for_readahead\u003d1.3\u0026html5_live_low_latency_bandwidth_window\u003d0.0\u0026html5_live_normal_latency_bandwidth_window\u003d0.0\u0026html5_live_partial_response_resumable\u003dtrue\u0026html5_live_quality_cap\u003d0\u0026html5_live_ultra_low_latency_bandwidth_window\u003d0.0\u0026html5_log_audio_abr\u003dtrue\u0026html5_log_experiment_id_from_player_response_to_ctmp\u003d\u0026html5_log_first_ssdai_requests_killswitch\u003dtrue\u0026html5_log_offline_playback_started_event\u003dtrue\u0026html5_log_readahead_on_playback_start\u003dtrue\u0026html5_log_rebuffer_events\u003d5\u0026html5_log_server_url_param\u003dtrue\u0026html5_log_trigger_events_with_debug_data\u003dtrue\u0026html5_long_rebuffer_jiggle_cmt_delay_ms\u003d0\u0026html5_long_rebuffer_new_elem_shorts_delay_ms\u003d0\u0026html5_long_rebuffer_threshold_ms\u003d30000\u0026html5_manifestless_seg_drift_limit_secs\u003d0\u0026html5_manifestless_unplugged\u003dtrue\u0026html5_manifestless_vp9_otf\u003dtrue\u0026html5_max_drift_per_track_secs\u003d0.0\u0026html5_max_headm_for_streaming_xhr\u003d0\u0026html5_max_live_dvr_window_plus_margin_secs\u003d46800.0\u0026html5_max_readbehind_secs\u003d0\u0026html5_max_redirect_response_length\u003d8192\u0026html5_max_selectable_quality_ordinal\u003d0\u0026html5_maximum_readahead_seconds\u003d0.0\u0026html5_media_fullscreen\u003dtrue\u0026html5_mfl_extend_max_request_time\u003dtrue\u0026html5_min_readbehind_cap_secs\u003d60\u0026html5_min_readbehind_secs\u003d0\u0026html5_min_selectable_quality_ordinal\u003d0\u0026html5_min_startup_buffered_ad_media_duration_secs\u003d1.2\u0026html5_min_startup_buffered_media_duration_secs\u003d1.2\u0026html5_minimum_readahead_seconds\u003d0.0\u0026html5_new_min_startup_smooth_logic\u003dtrue\u0026html5_no_placeholder_rollbacks\u003dtrue\u0026html5_non_network_rebuffer_duration_ms\u003d0\u0026html5_non_onesie_attach_po_token\u003dtrue\u0026html5_not_register_disposables_when_core_listens\u003dtrue\u0026html5_offline_failure_retry_limit\u003d6\u0026html5_onesie_cast\u003dtrue\u0026html5_onesie_defer_content_loader_ms\u003d0\u0026html5_onesie_disable_js_cleartext_compression\u003dtrue\u0026html5_onesie_enable_server_side_badwidth_estimation\u003dtrue\u0026html5_onesie_host_racing_cap_ms\u003d0\u0026html5_onesie_ignore_innertube_api_key\u003dtrue\u0026html5_onesie_live_ttl_secs\u003d8\u0026html5_onesie_media_bytes\u003dtrue\u0026html5_onesie_nonzero_playback_start\u003dtrue\u0026html5_onesie_notify_cuepoint_manager_on_completion\u003dtrue\u0026html5_onesie_prefer_trusted_host\u003dtrue\u0026html5_onesie_prewarm_cooldown_ms\u003d0\u0026html5_onesie_prewarm_interval_ms\u003d0\u0026html5_onesie_prewarm_max_lact_ms\u003d0\u0026html5_onesie_redirector_timeout_ms\u003d0\u0026html5_onesie_request_timeout_ms\u003d1000\u0026html5_onesie_sticky_server_side\u003dtrue\u0026html5_pause_on_nonforeground_platform_errors\u003dtrue\u0026html5_peak_shave\u003dtrue\u0026html5_per_format_loudness_fix\u003dtrue\u0026html5_perf_cap_override_sticky\u003dtrue\u0026html5_performance_cap_floor\u003d360\u0026html5_performance_impact_profiling_timer_ms\u003d0\u0026html5_perserve_av1_perf_cap\u003dtrue\u0026html5_photos_use_vp9_otf\u003dtrue\u0026html5_platform_minimum_readahead_seconds\u003d0.0\u0026html5_player_autonav_logging\u003dtrue\u0026html5_player_dynamic_bottom_gradient\u003dtrue\u0026html5_player_min_build_cl\u003d-1\u0026html5_player_preload_ad_fix\u003dtrue\u0026html5_post_interrupt_readahead\u003d20\u0026html5_prefer_server_bwe3\u003dtrue\u0026html5_preload_wait_time_secs\u003d0.0\u0026html5_probe_primary_delay_base_ms\u003d0\u0026html5_process_all_encrypted_events\u003dtrue\u0026html5_query_sw_secure_crypto_for_android\u003dtrue\u0026html5_random_playback_cap\u003d0\u0026html5_readahead_ratelimit\u003d3000\u0026html5_recognize_predict_start_cue_point\u003dtrue\u0026html5_reduce_istypesupported_calls\u003dtrue\u0026html5_remove_command_triggered_companions\u003dtrue\u0026html5_remove_not_servable_check_killswitch\u003dtrue\u0026html5_rename_apbs\u003dtrue\u0026html5_report_fatal_drm_restricted_error_killswitch\u003dtrue\u0026html5_report_slow_ads_as_error\u003dtrue\u0026html5_request_only_hdr_or_sdr_keys\u003dtrue\u0026html5_request_sizing_multiplier\u003d0.8\u0026html5_require_hdr_capability\u003dtrue\u0026html5_reset_media_stream_on_unresumable_slices\u003dtrue\u0026html5_resource_bad_status_delay_scaling\u003d1.5\u0026html5_restrict_streaming_xhr_on_sqless_requests\u003dtrue\u0026html5_safari_desktop_eme_min_version\u003d0\u0026html5_seek_jiggle_cmt_delay_ms\u003d8000\u0026html5_seek_new_elem_delay_ms\u003d12000\u0026html5_seek_new_elem_shorts_delay_ms\u003d0\u0026html5_seek_over_discontinuities_delay_ms\u003d0\u0026html5_seek_set_cmt_delay_ms\u003d2000\u0026html5_seek_timeout_delay_ms\u003d20000\u0026html5_selectable_formats_early_exit\u003dtrue\u0026html5_server_stitched_dai_decorated_url_retry_limit\u003d5\u0026html5_server_stitched_dai_group\u003dtrue\u0026html5_session_po_token_interval_time_ms\u003d900000\u0026html5_set_ended_in_pfx_live\u003dtrue\u0026html5_simplify_streaming_xhr\u003dtrue\u0026html5_skip_oob_start_seconds\u003dtrue\u0026html5_skip_slow_ad_delay_ms\u003d15000\u0026html5_skip_sub_quantum_discontinuity_secs\u003d0.0\u0026html5_slow_start_no_media_source_delay_ms\u003d0\u0026html5_slow_start_timeout_delay_ms\u003d20000\u0026html5_ssdai_adfetch_dynamic_timeout_ms\u003d0\u0026html5_ssdai_enable_new_seek_logic\u003dtrue\u0026html5_ssdai_flush_vss\u003dtrue\u0026html5_ssdai_vss_player_state_change\u003dtrue\u0026html5_start_seconds_reorder\u003dtrue\u0026html5_stateful_audio_min_adjustment_value\u003d0\u0026html5_static_abr_resolution_shelf\u003d0\u0026html5_store_xhr_headers_readable\u003dtrue\u0026html5_stream_metadata\u003dtrue\u0026html5_streaming_init_requests_sizes\u003d0\u0026html5_subsegment_readahead_load_speed_check_interval\u003d0.5\u0026html5_subsegment_readahead_min_buffer_health_secs\u003d0.25\u0026html5_subsegment_readahead_min_buffer_health_secs_on_timeout\u003d0.1\u0026html5_subsegment_readahead_min_load_speed\u003d1.5\u0026html5_subsegment_readahead_seek_latency_fudge\u003d0.5\u0026html5_subsegment_readahead_target_buffer_health_secs\u003d0.5\u0026html5_subsegment_readahead_timeout_secs\u003d2.0\u0026html5_suspend_loader\u003dtrue\u0026html5_track_termination_during_request\u003dtrue\u0026html5_ugc_live_audio_51\u003dtrue\u0026html5_ugc_vod_audio_51\u003dtrue\u0026html5_ultra_high_res_logging_percent\u003d0.0\u0026html5_unreported_seek_reseek_delay_ms\u003d0\u0026html5_unrestricted_layer_high_res_logging_percent\u003d0.0\u0026html5_update_constraint\u003dtrue\u0026html5_use_post_for_media\u003dtrue\u0026html5_varispeed_playback_rate\u003dtrue\u0026html5_video_tbd_min_kb\u003d0\u0026html5_viewport_undersend_maximum\u003d0.0\u0026html5_watchdog_for_zero_seek\u003dtrue\u0026html5_web_enable_halftime_preroll\u003dtrue\u0026html5_webpo_idle_priority_job\u003dtrue\u0026html5_woffle_resume\u003dtrue\u0026html5_workaround_delay_trigger\u003dtrue\u0026html5_xhr_clean_up_multi_slice_facade\u003dtrue\u0026html5_ytvlr_enable_single_select_survey\u003dtrue\u0026il_use_view_model_logging_context\u003dtrue\u0026initial_gel_batch_timeout\u003d2000\u0026injected_license_handler_error_code\u003d0\u0026injected_license_handler_license_status\u003d0\u0026json_condensed_response\u003dtrue\u0026kevlar_command_handler_command_banlist\u003d[]\u0026kevlar_dropdown_fix\u003dtrue\u0026kevlar_gel_error_routing\u003dtrue\u0026kevlar_miniplayer\u003dtrue\u0026kevlar_miniplayer_expand_top\u003dtrue\u0026kevlar_miniplayer_play_pause_on_scrim\u003dtrue\u0026kevlar_playback_associated_queue\u003dtrue\u0026kevlar_queue_use_update_api\u003dtrue\u0026kevlar_smart_downloads\u003dtrue\u0026kevlar_smart_downloads_setting\u003dtrue\u0026kevlar_vimio_use_shared_monitor\u003dtrue\u0026live_chunk_readahead\u003d3\u0026live_fresca_v2\u003dtrue\u0026log_errors_through_nwl_on_retry\u003dtrue\u0026log_heartbeat_with_lifecycles\u003dtrue\u0026log_web_endpoint_to_layer\u003dtrue\u0026log_window_onerror_fraction\u003d0.1\u0026manifestless_post_live\u003dtrue\u0026manifestless_post_live_ufph\u003dtrue\u0026max_prefetch_window_sec_for_livestream_optimization\u003d10\u0026max_resolution_for_white_noise\u003d360\u0026mdx_enable_privacy_disclosure_ui\u003dtrue\u0026mdx_load_cast_api_bootstrap_script\u003dtrue\u0026migrate_events_to_ts\u003dtrue\u0026min_prefetch_offset_sec_for_livestream_optimization\u003d20\u0026music_enable_shared_audio_tier_logic\u003dtrue\u0026mweb_c3_endscreen\u003dtrue\u0026mweb_enable_custom_control_shared\u003dtrue\u0026mweb_enable_skippables_on_jio_phone\u003dtrue\u0026mweb_muted_autoplay_animation\u003dshrink\u0026mweb_native_control_in_faux_fullscreen_shared\u003dtrue\u0026network_polling_interval\u003d30000\u0026networkless_gel\u003dtrue\u0026networkless_logging\u003dtrue\u0026new_codecs_string_api_uses_legacy_style\u003dtrue\u0026nwl_send_fast_on_unload\u003dtrue\u0026nwl_send_from_memory_when_online\u003dtrue\u0026offline_error_handling\u003dtrue\u0026pageid_as_header_web\u003dtrue\u0026parse_query_data_from_url\u003dtrue\u0026player_ads_set_adformat_on_client\u003dtrue\u0026player_allow_autonav_after_playlist\u003dtrue\u0026player_bootstrap_method\u003dtrue\u0026player_defer_caption_display\u003d1000\u0026player_destroy_old_version\u003dtrue\u0026player_doubletap_to_seek\u003dtrue\u0026player_enable_playback_playlist_change\u003dtrue\u0026player_endscreen_ellipsis_fix\u003dtrue\u0026player_underlay_min_player_width\u003d768.0\u0026player_underlay_video_width_fraction\u003d0.6\u0026player_web_canary_stage\u003d0\u0026playready_first_play_expiration\u003d-1\u0026polymer_bad_build_labels\u003dtrue\u0026polymer_log_prop_change_observer_percent\u003d0\u0026polymer_verifiy_app_state\u003dtrue\u0026preskip_button_style_ads_backend\u003dcountdown_next_to_thumbnail\u0026qoe_nwl_downloads\u003dtrue\u0026qoe_send_and_write\u003dtrue\u0026record_app_crashed_web\u003dtrue\u0026replace_playability_retriever_in_watch\u003dtrue\u0026scheduler_use_raf_by_default\u003dtrue\u0026self_podding_header_string_template\u003dself_podding_interstitial_message\u0026self_podding_highlight_non_default_button\u003dtrue\u0026self_podding_midroll_choice_string_template\u003dself_podding_midroll_choice\u0026send_config_hash_timer\u003d0\u0026set_interstitial_advertisers_question_text\u003dtrue\u0026short_start_time_prefer_publish_in_watch_log\u003dtrue\u0026should_clear_video_data_on_player_cued_unstarted\u003dtrue\u0026skip_inline_muted_license_service_check\u003dtrue\u0026skip_invalid_ytcsi_ticks\u003dtrue\u0026skip_ls_gel_retry\u003dtrue\u0026skip_setting_info_in_csi_data_object\u003dtrue\u0026start_client_gcf\u003dtrue\u0026start_client_gcf_for_player\u003dtrue\u0026streaming_data_emergency_itag_blacklist\u003d[]\u0026suppress_error_204_logging\u003dtrue\u0026transport_use_scheduler\u003dtrue\u0026tv_pacf_logging_sample_rate\u003d0.01\u0026tvhtml5_unplugged_preload_cache_size\u003d5\u0026uncover_ad_badge_on_RTL_tiny_window\u003dtrue\u0026unplugged_dai_live_chunk_readahead\u003d3\u0026unplugged_tvhtml5_video_preload_on_focus_delay_ms\u003d0\u0026use_inlined_player_rpc\u003dtrue\u0026use_new_in_memory_storage\u003dtrue\u0026use_new_nwl_initialization\u003dtrue\u0026use_new_nwl_saw\u003dtrue\u0026use_new_nwl_stw\u003dtrue\u0026use_new_nwl_wts\u003dtrue\u0026use_player_abuse_bg_library\u003dtrue\u0026use_profilepage_event_label_in_carousel_playbacks\u003dtrue\u0026use_request_time_ms_header\u003dtrue\u0026use_session_based_sampling\u003dtrue\u0026use_shared_nsm\u003dtrue\u0026use_shared_nsm_and_keep_yt_online_updated\u003dtrue\u0026use_ts_visibilitylogger\u003dtrue\u0026variable_buffer_timeout_ms\u003d0\u0026verify_ads_itag_early\u003dtrue\u0026vp9_drm_live\u003dtrue\u0026vss_final_ping_send_and_write\u003dtrue\u0026vss_pings_using_networkless\u003dtrue\u0026vss_playback_use_send_and_write\u003dtrue\u0026web_api_url\u003dtrue\u0026web_cinematic_watch_settings\u003dtrue\u0026web_client_version_override\u003d\u0026web_dedupe_ve_grafting\u003dtrue\u0026web_deprecate_service_ajax_map_dependency\u003dtrue\u0026web_enable_voz_audio_feedback\u003dtrue\u0026web_foreground_heartbeat_interval_ms\u003d28000\u0026web_forward_command_on_pbj\u003dtrue\u0026web_gel_debounce_ms\u003d10000\u0026web_gel_timeout_cap\u003dtrue\u0026web_key_moments_markers\u003dtrue\u0026web_log_memory_total_kbytes\u003dtrue\u0026web_logging_max_batch\u003d150\u0026web_modern_ads\u003dtrue\u0026web_modern_buttons\u003dtrue\u0026web_modern_buttons_bl_survey\u003dtrue\u0026web_modern_subscribe\u003dtrue\u0026web_modern_subscribe_style\u003dfilled\u0026web_new_autonav_countdown\u003dtrue\u0026web_one_platform_error_handling\u003dtrue\u0026web_op_signal_type_banlist\u003d[]\u0026web_playback_associated_log_ctt\u003dtrue\u0026web_playback_associated_ve\u003dtrue\u0026web_player_api_logging_fraction\u003d0.01\u0026web_player_autonav_toggle_always_listen\u003dtrue\u0026web_player_autonav_use_server_provided_state\u003dtrue\u0026web_player_caption_language_preference_stickiness_duration\u003d30\u0026web_player_decouple_autonav\u003dtrue\u0026web_player_enable_early_warning_snackbar\u003dtrue\u0026web_player_enable_premium_hbr_in_h5_api\u003dtrue\u0026web_player_enable_premium_hbr_playback_cap\u003dtrue\u0026web_player_fine_scrubbing\u003dtrue\u0026web_player_gvi_wexit_adunit\u003dtrue\u0026web_player_gvi_wexit_all_player_styles\u003dtrue\u0026web_player_gvi_wexit_living_room_bedrock\u003dtrue\u0026web_player_gvi_wexit_living_room_kids\u003dtrue\u0026web_player_gvi_wexit_living_room_other\u003dtrue\u0026web_player_gvi_wexit_living_room_pangea\u003dtrue\u0026web_player_gvi_wexit_living_room_simply\u003dtrue\u0026web_player_gvi_wexit_living_room_unplugged\u003dtrue\u0026web_player_innertube_playlist_update\u003dtrue\u0026web_player_ipp_canary_type_for_logging\u003d\u0026web_player_live_monitor_env\u003dtrue\u0026web_player_move_autonav_toggle\u003dtrue\u0026web_player_music_visualizer_treatment\u003dfake\u0026web_player_mutable_event_label\u003dtrue\u0026web_player_nitrate_promo_tooltip\u003dtrue\u0026web_player_no_force_gvi\u003dtrue\u0026web_player_response_playback_tracking_parsing\u003dtrue\u0026web_player_seek_chapters_by_shortcut\u003dtrue\u0026web_player_sentinel_is_uniplayer\u003dtrue\u0026web_player_should_honor_include_asr_setting\u003dtrue\u0026web_player_show_music_in_this_video_graphic\u003dvideo_thumbnail\u0026web_player_small_hbp_settings_menu\u003dtrue\u0026web_player_ss_dai_ad_fetching_timeout_ms\u003d15000\u0026web_player_ss_media_time_offset\u003dtrue\u0026web_player_ss_timeout_skip_ads\u003dtrue\u0026web_player_ssdai_all_acpns_aids_logging_killswitch\u003dtrue\u0026web_player_touch_mode_improvements\u003dtrue\u0026web_player_transfer_timeout_threshold_ms\u003d10800000\u0026web_player_unset_default_csn_killswitch\u003dtrue\u0026web_player_use_new_api_for_quality_pullback\u003dtrue\u0026web_player_vss_pageid_header\u003dtrue\u0026web_player_watch_next_response\u003dtrue\u0026web_player_watch_next_response_parsing\u003dtrue\u0026web_prefetch_preload_video\u003dtrue\u0026web_repeating_chapters\u003dtrue\u0026web_rounded_containers\u003dtrue\u0026web_rounded_thumbnails\u003dtrue\u0026web_settings_menu_icons\u003dtrue\u0026web_smoothness_test_duration_ms\u003d0\u0026web_smoothness_test_method\u003d0\u0026web_yt_config_context\u003dtrue\u0026woffle_clean_up_after_entity_migration\u003dtrue\u0026ytidb_clear_embedded_player\u003dtrue\u0026ytidb_fetch_datasync_ids_for_data_cleanup\u003dtrue\u0026ytidb_remake_db_retries\u003d1\u0026ytidb_reopen_db_retries\u003d0\u0026ytidb_transaction_ended_event_rate_limit\u003d0.02\u0026ytidb_transaction_ended_event_rate_limit_session\u003d0.2\u0026ytidb_transaction_ended_event_rate_limit_transaction\u003d0.1",
              "cspNonce": "bVoe_E1tNY4Eh1lbCZ-0Xw",
              "canaryState": "none",
              "datasyncId": "V60efa3b8||"
            }
          },
          "XSRF_FIELD_NAME": "session_token",
          "XSRF_TOKEN": "QUFFLUhqa01Obk1HZE84QjJyeXl0ZE1PNHB5YkVwUEE4Z3xBQ3Jtc0tudXIydmhFZGsza0dJbFdQRVBqQ3daS3I1TUY4TlVCdHZoeWJCU2JtX3hGcTNoRWduUDFEdklxOGZ6OG5Gdm0tR2s2MjRGbmFNN3JtOXNVLWVKMThqbC1LeTFndDhxeF9BNWpEWW9GdV9rWG1fc1ZuMA\u003d\u003d",
          "YPC_MB_URL": "https://payments.youtube.com/payments/v4/js/integrator.js?ss\u003dmd",
          "YTR_FAMILY_CREATION_URL": "https://families.google.com/webcreation?usegapi\u003d1",
          "SERVER_VERSION": "prod",
          "REUSE_COMPONENTS": true,
          "STAMPER_STABLE_LIST": true,
          "DATASYNC_ID": "V60efa3b8||",
          "SERIALIZED_CLIENT_CONFIG_DATA": "CLuSjp8GEInorgUQzPWuBRCH3a4FEKLsrgUQuIuuBRDi1K4FEJrqrgUQ2umuBRD7o_4SEIuArwUQ5aD-EhDM364FEILdrgUQuNSuBRCU-K4FELac_hIQ5_euBRDb6K4FEID4rgUQkfj8Eg%3D%3D",
          "LIVE_CHAT_BASE_TANGO_CONFIG": {
            "apiKey": "AIzaSyDZNkyC-AtROwMBpLfevIvqYk-Gfi8ZOeo",
            "channelUri": "https://client-channel.google.com/client-channel/client",
            "clientName": "yt-live-comments",
            "requiresAuthToken": true,
            "senderUri": "https://clients4.google.com/invalidation/lcs/client",
            "useNewTango": true
          },
          "FEXP_EXPERIMENTS": [23703445, 23983296, 23986017, 24004644, 24007246, 24080738, 24135310, 24169501, 24255165, 24396645, 24415864, 24416291, 24428639, 24430382, 24433679, 24438950, 24439361, 24441240, 24447308, 24449113, 24450367, 24451033, 24451437, 24454058, 24455494, 24457884, 24463912],
          "LIVE_CHAT_SEND_MESSAGE_ACTION": "live_chat/watch_page/send",
          "ROOT_VE_TYPE": 3611,
          "CLIENT_PROTOCOL": "HTTP/1.1",
          "CLIENT_TRANSPORT": "tcp",
          "TIME_CREATED_MS": 1675856187930,
          "BUTTON_REWORK": true,
          "VALID_SESSION_TEMPDATA_DOMAINS": ["www.youtube.com", "studio.youtube.com", "m.youtube.com"],
          "WORKER_PERFORMANCE_URL": {
            "privateDoNotAccessOrElseTrustedResourceUrlWrappedValue": "/s/desktop/5191a190/jsbin/worker-performance.vflset/worker-performance.js"
          },
          "VISIBILITY_TIME_BETWEEN_JOBS_MS": 100,
          "START_IN_THEATER_MODE": false,
          "START_IN_FULL_WINDOW_MODE": false,
          "SERVICE_WORKER_PROMPT_NOTIFICATIONS": true,
          "SBOX_LABELS": {
            "SUGGESTION_DISMISS_LABEL": "সরান",
            "SUGGESTION_DISMISSED_LABEL": "সাজেশন মুছে দেওয়া হয়েছে"
          },
          "ONE_PICK_URL": "",
          "NO_EMPTY_DATA_IMG": true,
          "MENTIONS_EDU_HELP_LINK": "https://support.google.com/youtube/?p\u003dcreator_community",
          "DEFERRED_DETACH": true,
          "RECAPTCHA_V3_SITEKEY": "6LedoOcUAAAAAHA4CFG9zRpaCNjYj33SYjzQ9cTy",
          "PLAYER_JS_URL": "/s/player/97ea7458/player_ias.vflset/bn_BD/base.js",
          "PLAYER_CSS_URL": "/s/player/97ea7458/www-player.css",
          "LINK_GAL_DOMAIN": "https://accountlinking-pa-clients6.youtube.com",
          "LINK_OIS_DOMAIN": "oauthintegrations-clients6.youtube.com",
          "IS_TABLET": false,
          "LINK_API_KEY": "AIzaSyDophAQuyyiBr8h0nypEwXUKozH-BEswD0",
          "DISABLE_WARM_LOADS": false,
          "RAW_COLD_CONFIG_GROUP": {
            "configData": "CLuSjp8GEOqdrQUQ8bqtBRCM8q0FEJ79rQUQ94iuBRC4i64FEPWWrgUQxZquBRCnna4FEIahrgUQibGuBRCCta4FEIa1rgUQoLmuBRDYvK4FEJm-rgUQ5s2uBRCT0K4FEP3TrgUQuNSuBRDi1K4FEOTWrgUQx9yuBRCC3a4FEIfdrgUQu96uBRDM364FEObgrgUQ5-GuBRCF564FEInorgUQ2-iuBRDa6a4FEJrqrgUQouyuBRDM7a4FEJHurgUQhfGuBRDM9a4FENj2rgUQ5_euBRCA-K4FEJT4rgUQ3PiuBRD3-K4FELT5rgUQ3vquBRDv-q4FEPP6rgUQ9fquBRDO-64FEID8rgUQk_yuBRCs_K4FEJ39rgUQ1f2uBRCX_q4FEIuArwUQ_ICvBRoyQUVULTZxWlozVkJyMnhDUVl5MVFkb3BUZFdwZ2kyd195VEFvbC1YdVVpc0ZKN0Z2bWciMkFFVC02cVpaM1ZCcjJ4Q1FZeTFRZG9wVGRXcGdpMndfeVRBb2wtWHVVaXNGSjdGdm1nKhxDQU1TRVEwQi10U3BBdWNoRlFEQTF0WU1tSkVF",
            "mainAppColdConfig": {
              "iosSsoSafariFsiPromoEnabled": true,
              "iosTodayWidgetEnabled": false,
              "iosEnableDynamicFontSizing": false,
              "enableMobileAutoOffline": false,
              "androidEnablePip": false,
              "postsV2": false,
              "enableDetailedNetworkStatusReporting": false,
              "hourToReportNetworkStatus": 0,
              "networkStatusReportingWindowSecs": 0,
              "iosSearchviewRefactoryEnabled": false,
              "ngwFlexyEnabled": false,
              "iosWatchExpandTransitionWithoutSnapshot": false,
              "androidNgwUiEnabled": false,
              "androidThumbnailMonitorEnabled": false,
              "androidThumbnailMonitorCount": 0,
              "androidThumbnailMonitorMinimumWidth": 0,
              "enableGhostCards": false,
              "enableInlineMuted": false,
              "ngwFlexyMaxCropRatio": 1.0,
              "androidRestoreBrowseContentsFromBackStack": false,
              "searchHintExp": "search_youtube"
            }
          },
          "RAW_HOT_CONFIG_GROUP": {
            "mainAppHotConfig": {
              "iosWatchExpandTransition": false,
              "iosEarlySetWatchTransition": false,
              "exposeConfigRefreshSetting": false,
              "iosEnableSearchButtonOnPlayerOverlay": false,
              "iosMinimumTooltipDurationMsecs": 1000,
              "iosFreshHomeIntervalSecs": 0,
              "iosFreshSubscriptionsIntervalSecs": 0,
              "iosTodayWidgetRefreshIntervalSecs": 28800,
              "iosFreshNotificationsInboxIntervalSecs": 0,
              "signedOutNotificationsIosPrompt": true,
              "iosFreshFullRefresh": false
            },
            "loggingHotConfig": {
              "eventLoggingConfig": {
                "enabled": true,
                "maxAgeHours": 720
              }
            }
          },
          "SERIALIZED_HOT_HASH_DATA": "CLuSjp8GEhQxMDI1OTcwMDcwMzA2Mjc5ODg4OBi7ko6fBiiU5PwSKJH4_BIonv_8Eijck_0SKIWs_RIo4az9EijLrf0SKMay_RIoqrT9EijOwP0SKJnG_RIom8z9Eiil0P0SKPne_RIogPP9EijJ-f0SKKCA_hIo24D-Eijogv4SKMCD_hIoyYT-EijKh_4SKN-I_hIo74n-Eijxif4SKPeL_hIorZD-Eiiekf4SKIOV_hIo25b-EiiMmv4SKP6a_hIouJv-Eii8m_4SKL6b_hIolZz-Eii2nP4SKIue_hIonp_-Eij2n_4SKOKg_hIo5aD-EiiCov4SKK-j_hIo-6P-EijipP4SKJWo_hIon6j-EjIyQUVULTZxWlozVkJyMnhDUVl5MVFkb3BUZFdwZ2kyd195VEFvbC1YdVVpc0ZKN0Z2bWc6MkFFVC02cVpaM1ZCcjJ4Q1FZeTFRZG9wVGRXcGdpMndfeVRBb2wtWHVVaXNGSjdGdm1nQihDQU1TR2cwTm90ZjZGYjRfeWdDcUFSVUwzY19DREtpYkFvREtBWU1i",
          "SERIALIZED_COLD_HASH_DATA": "CLuSjp8GEhQxMzUxNTg5MDY0NzM4NDA0Mzg2MBi7ko6fBjIyQUVULTZxWlozVkJyMnhDUVl5MVFkb3BUZFdwZ2kyd195VEFvbC1YdVVpc0ZKN0Z2bWc6MkFFVC02cVpaM1ZCcjJ4Q1FZeTFRZG9wVGRXcGdpMndfeVRBb2wtWHVVaXNGSjdGdm1nQhxDQU1TRVEwQi10U3BBdWNoRlFEQTF0WU1tSkVF",
          "ZWIEBACK_PING_URLS": ["https://www.google.com/pagead/lvz?evtid\u003dAC6ezLg4JOKisioupeAQf4EszbyBjujUBIRHM6nZnMe39huZEohnBRW42gztMo4WnWvIDtfgnMQTEPhf4271GeuEbPz_7B9KcQ\u0026req_ts\u003d1675856188\u0026pg\u003dMainAppBootstrap%3AUnclassified\u0026az\u003d1\u0026sigh\u003dAJT_CicXjzktKrpo1d8rsle7X6DAoIcLig", "https://www.google.com.bd/pagead/lvz?evtid\u003dAC6ezLg4JOKisioupeAQf4EszbyBjujUBIRHM6nZnMe39huZEohnBRW42gztMo4WnWvIDtfgnMQTEPhf4271GeuEbPz_7B9KcQ\u0026req_ts\u003d1675856188\u0026pg\u003dMainAppBootstrap%3AUnclassified\u0026az\u003d1\u0026sigh\u003dAJT_CicXjzktKrpo1d8rsle7X6DAoIcLig"],
          "VOZ_API_KEY": "AIzaSyBU2xE_JHvB6wag3tMfhxXpg2Q_W8xnM-I",
          "STS": 19389,
          "SBOX_SETTINGS": {
            "HAS_ON_SCREEN_KEYBOARD": false,
            "IS_FUSION": false,
            "IS_POLYMER": true,
            "REQUEST_DOMAIN": "bd",
            "REQUEST_LANGUAGE": "bn",
            "SEND_VISITOR_DATA": true,
            "SEARCHBOX_BEHAVIOR_EXPERIMENT": "zero-prefix",
            "SEARCHBOX_ENABLE_REFINEMENT_SUGGEST": true,
            "SEARCHBOX_TAP_TARGET_EXPERIMENT": 0,
            "SEARCHBOX_ZERO_TYPING_SUGGEST_USE_REGULAR_SUGGEST": "always",
            "VISITOR_DATA": "CgtjQWludnVRdGphOCi7ko6fBg%3D%3D",
            "SEARCHBOX_HOST_OVERRIDE": "suggestqueries-clients6.youtube.com",
            "HIDE_REMOVE_LINK": false
          },
          "SBOX_JS_URL": "https://www.youtube.com/s/desktop/5191a190/jsbin/www-searchbox.vflset/www-searchbox.js"
        });
        window.ytcfg.obfuscatedData_ = [];
        var setMessage = function(msg) {
          if (window.yt && yt.setMsg) yt.setMsg(msg);
          else {
            window.ytcfg = window.ytcfg || {};
            ytcfg.msgs = msg
          }
        };
        setMessage({
          "ADDED_TO_QUEUE": "সারিতে যোগ করা হয়েছে",
          "ADD_TO_DROPDOWN_LABEL": "এতে সেভ করুন...",
          "AD_BADGE_TEXT": "বিজ্ঞাপন",
          "AD_TITLE": "বিজ্ঞাপন: $title",
          "BACK_ALT_LABEL": "ফিরুন",
          "BACK_ONLINE": "আবার অনলাইন হয়েছেন",
          "CANCEL": "বাতিল করুন",
          "CAPTION_OFF_TOAST": "সাবটাইটেল/CC বন্ধ করা আছে",
          "CAPTION_ON_TOAST": "সাবটাইটেল/CC চালু করা আছে",
          "CHECK_CONNECTION_OR_DOWNLOADS": "আপনার কানেকশন চেক করুন অথবা ডাউনলোড করা ভিডিও দেখুন।",
          "CLEAR": "সাফ করুন",
          "CLOSE": "বন্ধ করুন",
          "CLOSED_CAPTIONS_DISABLED": "এই ভিডিওটির কোনও ক্যাপশন উপলভ্য নেই",
          "COMMENT_LABEL": "মন্তব্য",
          "CONNECT_TO_THE_INTERNET": "ইন্টারনেটে কানেক্ট করুন",
          "CONTINUE_WATCHING": "দেখতে থাকুন",
          "DELETE": "মুছুন",
          "DELETED_PLAYLIST": "ডাউনলোড ফোল্ডার থেকে প্লেলিস্ট মুছে ফেলা হয়েছে।",
          "DELETED_VIDEO": "ডাউনলোড ফোল্ডার থেকে ভিডিও মুছে ফেলা হয়েছে।",
          "DELETE_ALL_DOWNLOADS_PROMPT": "ডাউনলোড করা সব ভিডিও মুছবেন?",
          "DELETE_FROM_DOWNLOADS": "ডাউনলোড থেকে সরান",
          "DELETING_ALL": "ডাউনলোড মুছে ফেলা হয়েছে",
          "DISLIKE_LABEL": "ডিসলাইক",
          "DISMISS": "বাতিল করুন",
          "DOWNLOAD": "ডাউনলোড করুন",
          "DOWNLOADED": "ডাউনলোড হয়েছে",
          "DOWNLOADING": "ডাউনলোড হচ্ছে",
          "DOWNLOADING_PERCENT": "$percent% ডাউনলোড হয়েছে...",
          "DOWNLOADS": "ডাউনলোড করা পৃষ্ঠা",
          "DOWNLOADS_AVAILABILITY": "আপনার ডিভাইস প্রতি ৩০ দিনের মধ্যে অন্তত একবার ইন্টারনেটের সাথে কানেক্ট করা হলেই ডাউনলোড করা কন্টেন্ট উপলভ্য থাকবে।",
          "DOWNLOADS_SETTINGS": "ডাউনলোড সেটিংস",
          "DOWNLOAD_EXPIRED": "ডাউনলোডের মেয়াদ শেষ হয়ে গেছে",
          "DOWNLOAD_PAUSED": "ডাউনলোড থামানো পজ করা হয়েছে",
          "DOWNLOAD_QUALITY": "ডাউনলোড কোয়ালিটি",
          "DO_NOT_HAVE_DOWNLOADS": "কোনও ডাউনলোড করা ভিডিও নেই",
          "EDIT_AVATAR_LABEL": "প্রোফাইলের ছবি এডিট করুন",
          "EDU_GOT_IT": "বুঝেছি",
          "END_OF_PLAYLIST": "প্লেলিস্ট শেষ হয়ে গেছে",
          "ENTER_DATE_OR_EARLIER": "$allowed_date বা তার আগের তারিখ লিখুন",
          "ENTER_DATE_OR_LATER": "$allowed_date বা তার পরের তারিখ লিখুন",
          "FREEBIE_JOIN_MEMBERSHIP_EDU_TEXT": "YouTube Premium-এর সাহায্যে এই চ্যানেলের আপনি ফ্রি মেম্বারশিপ পেতে পারেন",
          "GO_TO_DOWNLOADS": "ডাউনলোড ফোল্ডারে যান",
          "GUIDE_ALT_LABEL": "গাইড",
          "HORIZONTAL_LIST_NEXT_LABEL": "পরের",
          "HORIZONTAL_LIST_PREVIOUS_LABEL": "আগের",
          "IMAGE_HORIZONTAL_POSITION_LABEL": "প্রিভিউয়ের কেন্দ্র বাঁদিক থেকে $x_percent% ও ডানদিক থেকে $y_percent% দূরে আছে।",
          "IMAGE_VERTICAL_POSITION_LABEL": "প্রিভিউয়ের কেন্দ্র উপর থেকে $x_percent% ও নিচের থেকে $y_percent% দূরে আছে।",
          "INVALID_DATE_ERROR": "ভুল তারিখ",
          "JOIN_MEMBERSHIP_EDU_TEXT": "এই চ্যানেলের মেম্বারশিপ কিনলে আপনি বিশেষ উপহার পাওয়ার সুযোগ পাবেন।",
          "JOIN_MEMBERSHIP_EDU_TITLE": "মেম্বারশিপ",
          "KEEP_OPEN": "চালিয়ে যেতে এই উইন্ডোকে চালু রাখুন",
          "LIBRARY_GUIDE_ITEM_EDU_TEXT": "আপনার ইতিহাস, প্লেলিস্ট, কেনাকাটা এবং আরও অনেক কিছু খুঁজে পান",
          "LIBRARY_GUIDE_ITEM_EDU_TITLE": "আপনার নতুন লাইব্রেরিটি ব্যবহার করে দেখুন",
          "LIKE_LABEL": "লাইক",
          "LOCAL_TIME_LABEL": "স্থানীয় সময়",
          "LOGO_ALT_LABEL": "YouTube  হোম",
          "MAIN_APP_WEB_COMMENT_TEASER_TOOLTIP": "ভিডিও দেখার সময় কমেন্ট পড়তে এখানে ক্লিক করুন।",
          "MANAGE_MEMBERSHIP_EDU_TEXT": "আপনার সুবিধেগুলি অ্যাক্সেস করুন এবং এখান থেকেই আপনার মেম্বারশিপ ম্যানেজ করুন।",
          "MENTIONS_EDU_TEXT": "YouTube-এ চ্যানেলের উল্লেখ কীভাবে কাজ করে জানতে সহায়তা কেন্দ্র দেখুন।",
          "MENTIONS_EDU_TITLE": "আরও জানুন",
          "MINIPLAYER_CLOSE": "প্লেয়ার বন্ধ করুন",
          "MINIPLAYER_COLLAPSE_LABEL": "আড়াল করুন",
          "MINIPLAYER_EXPAND_LABEL": "বড় করুন",
          "NEXT_VIDEO_LABEL": "পরের ভিডিও",
          "NO_ANGLE_BRACKET_LABEL": "প্লেলিস্টের শীর্ষকে \u003c বা \u003e থাকলে চলবে না",
          "NO_DOWNLOADS": "কোনও কিছু ডাউনলোড করা হয়নি",
          "NO_INTERNET_CONNECTION": "ইন্টারনেট কানেকশন নেই",
          "OFFLINE_CHECK_CONNECTION": "আপনি অফলাইন আছেন। আপনার ইন্টারনেট কানেকশন সঠিকভাবে কাজ করছে কিনা দেখুন।",
          "PAUSE_DOWNLOADING": "ডাউনলোড পজ করুন",
          "PLAYER_LABEL_MUTE": "মিউট করুন (m)",
          "PLAYER_LABEL_PAUSE": "পজ করুন (k)",
          "PLAYER_LABEL_PLAY": "প্লে করুন (k)",
          "PLAYER_LABEL_UNMUTE": "আনমিউট করুন (m)",
          "PLAYLIST_NEXT_VIDEO_TITLE": "পরবর্তী: $video_title",
          "PLAY_ALL": "সবগুলি চালান",
          "PREPARING_TO_DOWNLOAD": "ডাউনলোড করার জন্য প্রস্তুত করা হচ্ছে...",
          "PREVIOUS_VIDEO_LABEL": "পূর্ববর্তী ভিডিও",
          "QUEUE": "সারি",
          "QUEUE_CLEARED": "{count,plural, \u003d1{সারি থেকে ১টি ভিডিও সরিয়ে দেওয়া হয়েছে}one{সারি থেকে #টি ভিডিও সরিয়ে দেওয়া হয়েছে}other{সারি থেকে #টি ভিডিও সরিয়ে দেওয়া হয়েছে}}",
          "QUEUE_CLEARED_UNPLURALIZED": "সারি খালি করে দেওয়া হয়েছে",
          "QUEUE_CLOSE_MINIPLAYER_CONFIRM_BODY_TEXT": "আপনি কি সত্যিই প্লেয়ার বন্ধ করতে চান?",
          "QUEUE_CLOSE_MINIPLAYER_CONFIRM_TITLE": "সারি খালি করে দেওয়া হবে",
          "QUEUE_RECOVER_BUTTON": "ফিরিয়ে আনুন",
          "QUEUE_RECOVER_MESSAGE": "সারি ফিরিয়ে আনুন",
          "REACH_BOTTOM_OF_IMAGE_TEXT": "আপনি ছবির শেষে পৌঁছে গেছেন",
          "REACH_LEFT_OF_IMAGE_TEXT": "আপনি ছবির বাঁদিকের প্রান্তে পৌঁছে গেছেন",
          "REACH_RIGHT_OF_IMAGE_TEXT": "আপনি ছবির ডানদিকের প্রান্তে পৌঁছে গেছেন",
          "REACH_TOP_OF_IMAGE_TEXT": "আপনি ছবির উপরে পৌঁছে গেছেন",
          "REMEMBER_MY_SETTINGS": "আমার সেটিংস মনে রাখুন",
          "REMEMBER_MY_SETTINGS_N_DAYS": "$days_till_expired দিনের জন্য আমার সেটিংস এমনই রাখতে চাই।",
          "REPOSITION_IMAGE_HORIZONTALLY_LABEL": "প্রিভিউটি ঠিক জায়গায় রাখতে বাঁ ও ডানদিকের তীরচিহ্নের বোতাম টিপুন",
          "REPOSITION_IMAGE_VERTICALLY_LABEL": "প্রিভিউটি ঠিক জায়গায় রাখতে উপর ও নিচের তীরচিহ্নের বোতাম টিপুন",
          "REQUIRED_LABEL": "আবশ্যক",
          "RESUME_DOWNLOAD": "ডাউনলোড আবার চালু করুন",
          "RETRY": "আবার চেষ্টা করুন",
          "SBOX_INAPPROPRIATE_ADDITIONAL": "আরও বিবরণ দিন (ঐচ্ছিক)",
          "SBOX_INAPPROPRIATE_CANCEL": "বাতিল করুন",
          "SBOX_INAPPROPRIATE_CATEGORY": "প্রস্তাবনাগুলি:",
          "SBOX_INAPPROPRIATE_DANGEROUS": "বিপজ্জনক এবং ক্ষতিকর অ্যাক্টিভিটি জড়িত",
          "SBOX_INAPPROPRIATE_EXPLICIT": "যৌনতাপূর্ণ",
          "SBOX_INAPPROPRIATE_HATEFUL": "ঘৃণার উদ্রেক করে",
          "SBOX_INAPPROPRIATE_OTHER": "অন্যান্য",
          "SBOX_INAPPROPRIATE_PROMPT": "সার্চের প্রস্তাবনার বিষয়ে অভিযোগ করুন",
          "SBOX_INAPPROPRIATE_REASON": "কারণ (প্রয়োজন)",
          "SBOX_INAPPROPRIATE_REPORT": "অভিযোগ জানান",
          "SBOX_INAPPROPRIATE_SUBMIT": "জমা দিন",
          "SBOX_INAPPROPRIATE_SUGGESTIONS": "যে প্রস্তাবনাগুলির বিষয়ে অভিযোগ করতে চান সেগুলি বেছে নিন:",
          "SBOX_INAPPROPRIATE_TITLE": "সার্চের প্রস্তাবনার বিষয়ে অভিযোগ করুন",
          "SBOX_INAPPROPRIATE_TOAST": "আপনার মতামতের জন্য ধন্যবাদ!",
          "SBOX_INAPPROPRIATE_VIOLENT": "হিংসাত্মক",
          "SBOX_PLACEHOLDER": "সার্চ করুন",
          "SBOX_VOICE_OVERLAY_PLACEHOLDER": "শুনছি…",
          "SHARE_LABEL": "শেয়ার করুন",
          "SHARE_POST_EDU_TEXT": "আপনি এখন YouTube-এ পোস্ট শেয়ার করতে পারেন",
          "SHOW_LESS": "কম দেখুন",
          "SHOW_MORE": "আরও দেখুন",
          "SIGN_IN_LABEL": "সাইন-ইন করুন",
          "SMART_DOWNLOADS": "স্মার্ট ডাউনলোড",
          "STORAGE_FULL": "স্টোরেজ স্পেস নেই",
          "SUBSCRIBE_LABEL": "সাবস্ক্রাইব করুন",
          "SUBS_FILTER_EDU_CHANNEL_TEXT": "এখন এই চ্যানেল থেকে নতুন ভিডিও দেখানো হচ্ছে।",
          "SUBS_FILTER_EDU_TEXT": "প্রতিটি চ্যানেল থেকে নতুন ভিডিওগুলি দেখুন",
          "SUBS_GUIDE_ITEM_EDU_TEXT": "আপনার সব সাবস্ক্রিপশন থেকে নতুন ভিডিওগুলি দেখুন",
          "TIMEZONE_FORMAT": "($utc_offset_text) $city_name",
          "TRANSFER_FAILED": "ডাউনলোড করা যায়নি",
          "TRY_AGAIN_LATER": "কিছু সমস্যা হয়েছে। পরে আবার চেষ্টা করুন।",
          "TURN_OFF": "বন্ধ করুন",
          "TURN_ON": "চালু করুন",
          "UNAVAILABLE_OFFLINE": "অফলাইনে উপলভ্য নেই",
          "UNDO": "পূর্বাবস্থায় ফিরুন",
          "UNDO_ACTION": "আগের অবস্থায় ফিরুন",
          "UPDATED_TIME": "$relative_time আপডেট করা হয়েছে",
          "UPDATE_SMART_DOWNLOADS_NOW": "এখনই আপডেট করুন",
          "UPDATING": "আপডেট করা হচ্ছে...",
          "UTC_OFFSET_FORMAT": "GMT$utc_offset",
          "VIDEOS_DOWNLOADING": {
            "case1": "১টি ভিডিও ডাউনলোড করা হচ্ছে...",
            "one": "#টি ভিডিও ডাউনলোড করা হচ্ছে...",
            "other": "#টি ভিডিও ডাউনলোড করা হচ্ছে..."
          },
          "VIDEOS_DOWNLOADING_RATIO": "ডাউনলোড করা হচ্ছে… $downloaded/$total",
          "VIDEO_ACTION_MENU": "অ্যাকশন মেনু",
          "VIEW_DOWNLOADS": "দেখুন",
          "VIEW_FULL_PLAYLIST": "সম্পূর্ণ প্লেলিস্ট দেখুন",
          "WAITING_FOR_INTERNET": "ইন্টারনেট কানেকশনের জন্য অপেক্ষা করা হচ্ছে...",
          "WAITING_TO_DOWNLOAD": "ডাউনলোড করার সারিতে রয়েছে…",
          "YOU_ARE_OFFLINE": "আপনি অফলাইন আছেন",
          "__lang__": "bn"
        });
      })();
      ytcfg.set("initialInnerWidth", window.innerWidth);
      ytcfg.set("initialInnerHeight", window.innerHeight);
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('lpcf', null, '');
      }
    </script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/scheduler.vflset/scheduler.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/www-i18n-constants-bn_BD.vflset/www-i18n-constants.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/www-tampering.vflset/www-tampering.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/spf.vflset/spf.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window["_spf_state"]) window["_spf_state"].config = {
        "assume-all-json-requests-chunked": true
      };
    </script>
    <script src="https://www.youtube.com/s/desktop/5191a190/jsbin/network.vflset/network.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('csl', null, '');
      }
    </script>
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=YouTube+Sans:wght@300..900&display=swap" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
    <script name="www-roboto" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (document.fonts && document.fonts.load) {
        document.fonts.load("400 10pt Roboto", "");
        document.fonts.load("500 10pt Roboto", "");
      }
    </script>
    <link rel="stylesheet" href="https://www.youtube.com/s/desktop/5191a190/cssbin/www-onepick.css" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
    <link rel="stylesheet" href="https://www.youtube.com/s/_/ytmainappweb/_/ss/k=ytmainappweb.kevlar_base.jhi6f5EF75w.L.X.O/am=AAU/d=0/rs=AGKMywHehyBthAkKDyrgX1euBS9-fxiOMA" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
    <style class="global_styles" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
      body {
        padding: 0;
        margin: 0;
        overflow-y: scroll
      }

      body.autoscroll {
        overflow-y: auto
      }

      body.no-scroll {
        overflow: hidden
      }

      body.no-y-scroll {
        overflow-y: hidden
      }

      .hidden {
        display: none
      }

      textarea {
        --paper-input-container-input_-_white-space: pre-wrap
      }

      .grecaptcha-badge {
        visibility: hidden
      }
    </style>
    <style class="masthead_shell" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
      ytd-masthead.shell {
        background: hsla(0, 0%, 100%, .98);
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        display: -ms-flex;
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        height: 56px;
        -ms-flex-align: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -moz-box-align: center;
        align-items: center
      }

      html[darker-dark-theme] ytd-masthead.shell {
        background-color: #fff !important
      }

      ytd-masthead.shell #menu-icon {
        margin-left: 16px
      }

      ytd-app>ytd-masthead.chunked {
        position: fixed;
        top: 0;
        width: 100%
      }

      ytd-masthead.shell.dark,
      ytd-masthead.shell.theater {
        background: rgba(40, 40, 40, .98)
      }

      ytd-masthead.shell.full-window-mode {
        background: rgba(40, 40, 40, .98);
        opacity: 0;
        -webkit-transform: translateY(calc(-100% - 5px));
        transform: translateY(calc(-100% - 5px))
      }

      html[darker-dark-theme] ytd-masthead.shell.dark,
      html[darker-dark-theme] ytd-masthead.shell.theater {
        background-color: #0f0f0f !important
      }

      html[darker-dark-theme] ytd-masthead.shell.full-window-mode {
        background-color: #0f0f0f !important
      }

      ytd-masthead.shell>:first-child {
        padding-left: 16px
      }

      ytd-masthead.shell>:last-child {
        padding-right: 16px
      }

      ytd-masthead #masthead-logo {
        display: -ms-flex;
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex
      }

      ytd-masthead #masthead-logo #country-code {
        margin-right: 2px
      }

      ytd-masthead.shell #yt-logo-red-svg,
      ytd-masthead.shell #yt-logo-red-updated-svg,
      ytd-masthead.shell #yt-logo-svg,
      ytd-masthead.shell #yt-logo-updated-svg {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        margin-left: 8px;
        padding: 0;
        color: #000
      }

      ytd-masthead.shell #a11y-skip-nav {
        display: none
      }

      ytd-masthead.shell svg {
        width: 40px;
        height: 40px;
        padding: 8px;
        margin-right: 8px;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        color: #606060;
        fill: currentColor
      }

      ytd-masthead .external-icon {
        width: 24px;
        height: 24px
      }

      ytd-masthead .yt-icons-ext {
        fill: currentColor;
        color: #606060
      }

      ytd-masthead.shell.dark .yt-icons-ext ytd-masthead.shell.theater .yt-icons-ext {
        fill: #fff
      }

      ytd-masthead svg#yt-logo-svg {
        width: 80px
      }

      ytd-masthead svg#yt-logo-red-svg {
        width: 106.4px
      }

      ytd-masthead svg#yt-logo-updated-svg {
        width: 90px
      }

      ytd-masthead svg#yt-logo-red-updated-svg {
        width: 97px
      }

      @media (max-width:656px) {
        ytd-masthead.shell>:first-child {
          padding-left: 8px
        }

        ytd-masthead.shell>:last-child {
          padding-right: 8px
        }

        ytd-masthead.shell svg {
          margin-right: 0
        }

        ytd-masthead #masthead-logo {
          -ms-flex: 1 1 0.000000001px;
          -webkit-flex: 1;
          -webkit-box-flex: 1;
          -moz-box-flex: 1;
          flex: 1;
          -webkit-flex-basis: 0.000000001px;
          -ms-flex-preferred-size: 0.000000001px;
          flex-basis: 0.000000001px
        }

        ytd-masthead.shell #yt-logo-red-svg,
        ytd-masthead.shell #yt-logo-svg {
          margin-left: 4px
        }
      }

      @media (min-width:876px) {
        ytd-masthead #masthead-logo {
          width: 129px
        }
      }

      #masthead-skeleton-icons {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -moz-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -moz-box-orient: horizontal;
        -moz-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -moz-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
      }

      ytd-masthead.masthead-finish #masthead-skeleton-icons {
        display: none
      }

      .masthead-skeleton-icon {
        border-radius: 50%;
        height: 32px;
        width: 32px;
        margin: 0 8px;
        background-color: #e3e3e3
      }

      ytd-masthead.dark .masthead-skeleton-icon {
        background-color: #292929
      }
    </style>
    <style class="masthead_custom_styles" is="custom-style" id="ext-styles" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
      ytd-masthead .yt-icons-ext {
        color: var(--yt-spec-icon-active-other)
      }

      ytd-masthead svg#yt-logo-red-svg #youtube-red-paths path,
      ytd-masthead svg#yt-logo-red-updated-svg #youtube-red-paths path,
      ytd-masthead svg#yt-logo-svg #youtube-paths path,
      ytd-masthead svg#yt-logo-updated-svg #youtube-paths path {
        fill: #282828
      }

      ytd-masthead.dark svg#yt-logo-red-svg #youtube-red-paths path,
      ytd-masthead.dark svg#yt-logo-red-updated-svg #youtube-red-paths path,
      ytd-masthead.dark svg#yt-logo-svg #youtube-paths path,
      ytd-masthead.dark svg#yt-logo-updated-svg #youtube-paths path,
      ytd-masthead.theater svg#yt-logo-red-svg #youtube-red-paths path,
      ytd-masthead.theater svg#yt-logo-svg #youtube-paths path {
        fill: #fff
      }
    </style>
    <style class="searchbox" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
      #search-input.ytd-searchbox-spt input {
        -webkit-appearance: none;
        -webkit-font-smoothing: antialiased;
        background-color: transparent;
        border: none;
        box-shadow: none;
        color: inherit;
        font-family: Roboto, Noto, sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        margin-left: 4px;
        max-width: 100%;
        outline: none;
        text-align: inherit;
        width: 100%;
        -ms-flex: 1 1 0.000000001px;
        -webkit-flex: 1;
        -webkit-box-flex: 1;
        -moz-box-flex: 1;
        flex: 1;
        -webkit-flex-basis: 0.000000001px;
        -ms-flex-preferred-size: 0.000000001px;
        flex-basis: 0.000000001px
      }

      #search-container.ytd-searchbox-spt {
        pointer-events: none;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
      }

      #search-input.ytd-searchbox-spt #search::-webkit-input-placeholder {
        color: #888
      }

      #search-input.ytd-searchbox-spt #search::-moz-input-placeholder {
        color: #888
      }

      #search-input.ytd-searchbox-spt #search:-ms-input-placeholder {
        color: #888
      }
    </style>
    <style class="kevlar_global_styles" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
      html {
        background-color: #f9f9f9 !important;
        -webkit-text-size-adjust: none
      }

      html[darker-dark-theme] {
        background-color: #fff !important
      }

      html[dark] {
        background-color: #181818 !important
      }

      html[darker-dark-theme][dark] {
        background-color: #0f0f0f !important
      }

      #logo-red-icon-container.ytd-topbar-logo-renderer {
        width: 86px
      }
    </style>
    <meta name="theme-color" content="rgba(255, 255, 255, 0.98)">
    <link rel="search" type="application/opensearchdescription+xml" href="https://www.youtube.com/opensearch?locale=bn_BD" title="YouTube">
    <link rel="manifest" href="/manifest.webmanifest" crossorigin="use-credentials">
  </head>
  <body dir="ltr">
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('bs', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      ytcfg.set('initialBodyClientWidth', document.body.clientWidth);
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('ai', null, '');
      }
    </script>
    <iframe name="passive_signin" src="https://accounts.google.com/ServiceLogin?service=youtube&amp;uilel=3&amp;passive=true&amp;continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26hl%3Dbn%26next%3D%252Fsignin_passive%26feature%3Dpassive&amp;hl=bn" style="display: none"></iframe>
    <ytd-app>
      <ytd-masthead id="masthead" logo-type="YOUTUBE_LOGO" slot="masthead" class="shell ">
        <div id="search-container" class="ytd-searchbox-spt" slot="search-container"></div>
        <div id="search-input" class="ytd-searchbox-spt" slot="search-input">
          <input id="search" autocapitalize="none" autocomplete="off" autocorrect="off" hidden name="search_query" tabindex="0" type="text" spellcheck="false">
        </div>
        <svg id="menu-icon" class="external-icon" preserveAspectRatio="xMidYMid meet">
          <g id="menu" class="yt-icons-ext" viewBox="0 0 24 24">
            <path d="M21,6H3V5h18V6z M21,11H3v1h18V11z M21,17H3v1h18V17z" />
          </g>
        </svg>
        <div id="masthead-logo" slot="masthead-logo">
          <a style="display: none;" href="/" title="YouTube">
            <svg id="yt-logo-updated-svg" class="external-icon" viewBox="0 0 90 20">
              <g id="yt-logo-updated" viewBox="0 0 90 20" preserveAspectRatio="xMidYMid meet">
                <g>
                  <path d="M27.9727 3.12324C27.6435 1.89323 26.6768 0.926623 25.4468 0.597366C23.2197 2.24288e-07 14.285 0 14.285 0C14.285 0 5.35042 2.24288e-07 3.12323 0.597366C1.89323 0.926623 0.926623 1.89323 0.597366 3.12324C2.24288e-07 5.35042 0 10 0 10C0 10 2.24288e-07 14.6496 0.597366 16.8768C0.926623 18.1068 1.89323 19.0734 3.12323 19.4026C5.35042 20 14.285 20 14.285 20C14.285 20 23.2197 20 25.4468 19.4026C26.6768 19.0734 27.6435 18.1068 27.9727 16.8768C28.5701 14.6496 28.5701 10 28.5701 10C28.5701 10 28.5677 5.35042 27.9727 3.12324Z" fill="#FF0000" />
                  <path d="M11.4253 14.2854L18.8477 10.0004L11.4253 5.71533V14.2854Z" fill="white" />
                </g>
                <g>
                  <g id="youtube-paths">
                    <path d="M34.6024 13.0036L31.3945 1.41846H34.1932L35.3174 6.6701C35.6043 7.96361 35.8136 9.06662 35.95 9.97913H36.0323C36.1264 9.32532 36.3381 8.22937 36.665 6.68892L37.8291 1.41846H40.6278L37.3799 13.0036V18.561H34.6001V13.0036H34.6024Z" />
                    <path d="M41.4697 18.1937C40.9053 17.8127 40.5031 17.22 40.2632 16.4157C40.0257 15.6114 39.9058 14.5437 39.9058 13.2078V11.3898C39.9058 10.0422 40.0422 8.95805 40.315 8.14196C40.5878 7.32588 41.0135 6.72851 41.592 6.35457C42.1706 5.98063 42.9302 5.79248 43.871 5.79248C44.7976 5.79248 45.5384 5.98298 46.0981 6.36398C46.6555 6.74497 47.0647 7.34234 47.3234 8.15137C47.5821 8.96275 47.7115 10.0422 47.7115 11.3898V13.2078C47.7115 14.5437 47.5845 15.6161 47.3329 16.4251C47.0812 17.2365 46.672 17.8292 46.1075 18.2031C45.5431 18.5771 44.7764 18.7652 43.8098 18.7652C42.8126 18.7675 42.0342 18.5747 41.4697 18.1937ZM44.6353 16.2323C44.7905 15.8231 44.8705 15.1575 44.8705 14.2309V10.3292C44.8705 9.43077 44.7929 8.77225 44.6353 8.35833C44.4777 7.94206 44.2026 7.7351 43.8074 7.7351C43.4265 7.7351 43.156 7.94206 43.0008 8.35833C42.8432 8.77461 42.7656 9.43077 42.7656 10.3292V14.2309C42.7656 15.1575 42.8408 15.8254 42.9914 16.2323C43.1419 16.6415 43.4123 16.8461 43.8074 16.8461C44.2026 16.8461 44.4777 16.6415 44.6353 16.2323Z" />
                    <path d="M56.8154 18.5634H54.6094L54.3648 17.03H54.3037C53.7039 18.1871 52.8055 18.7656 51.6061 18.7656C50.7759 18.7656 50.1621 18.4928 49.767 17.9496C49.3719 17.4039 49.1743 16.5526 49.1743 15.3955V6.03751H51.9942V15.2308C51.9942 15.7906 52.0553 16.188 52.1776 16.4256C52.2999 16.6631 52.5045 16.783 52.7914 16.783C53.036 16.783 53.2712 16.7078 53.497 16.5573C53.7228 16.4067 53.8874 16.2162 53.9979 15.9858V6.03516H56.8154V18.5634Z" />
                    <path d="M64.4755 3.68758H61.6768V18.5629H58.9181V3.68758H56.1194V1.42041H64.4755V3.68758Z" />
                    <path d="M71.2768 18.5634H69.0708L68.8262 17.03H68.7651C68.1654 18.1871 67.267 18.7656 66.0675 18.7656C65.2373 18.7656 64.6235 18.4928 64.2284 17.9496C63.8333 17.4039 63.6357 16.5526 63.6357 15.3955V6.03751H66.4556V15.2308C66.4556 15.7906 66.5167 16.188 66.639 16.4256C66.7613 16.6631 66.9659 16.783 67.2529 16.783C67.4974 16.783 67.7326 16.7078 67.9584 16.5573C68.1842 16.4067 68.3488 16.2162 68.4593 15.9858V6.03516H71.2768V18.5634Z" />
                    <path d="M80.609 8.0387C80.4373 7.24849 80.1621 6.67699 79.7812 6.32186C79.4002 5.96674 78.8757 5.79035 78.2078 5.79035C77.6904 5.79035 77.2059 5.93616 76.7567 6.23014C76.3075 6.52412 75.9594 6.90747 75.7148 7.38489H75.6937V0.785645H72.9773V18.5608H75.3056L75.5925 17.3755H75.6537C75.8724 17.7988 76.1993 18.1304 76.6344 18.3774C77.0695 18.622 77.554 18.7443 78.0855 18.7443C79.038 18.7443 79.7412 18.3045 80.1904 17.4272C80.6396 16.5476 80.8653 15.1765 80.8653 13.3092V11.3266C80.8653 9.92722 80.7783 8.82892 80.609 8.0387ZM78.0243 13.1492C78.0243 14.0617 77.9867 14.7767 77.9114 15.2941C77.8362 15.8115 77.7115 16.1808 77.5328 16.3971C77.3564 16.6158 77.1165 16.724 76.8178 16.724C76.585 16.724 76.371 16.6699 76.1734 16.5594C75.9759 16.4512 75.816 16.2866 75.6937 16.0702V8.96062C75.7877 8.6196 75.9524 8.34209 76.1852 8.12337C76.4157 7.90465 76.6697 7.79646 76.9401 7.79646C77.2271 7.79646 77.4481 7.90935 77.6034 8.13278C77.7609 8.35855 77.8691 8.73485 77.9303 9.26636C77.9914 9.79787 78.022 10.5528 78.022 11.5335V13.1492H78.0243Z" />
                    <path d="M84.8657 13.8712C84.8657 14.6755 84.8892 15.2776 84.9363 15.6798C84.9833 16.0819 85.0821 16.3736 85.2326 16.5594C85.3831 16.7428 85.6136 16.8345 85.9264 16.8345C86.3474 16.8345 86.639 16.6699 86.7942 16.343C86.9518 16.0161 87.0365 15.4705 87.0506 14.7085L89.4824 14.8519C89.4965 14.9601 89.5035 15.1106 89.5035 15.3011C89.5035 16.4582 89.186 17.3237 88.5534 17.8952C87.9208 18.4667 87.0247 18.7536 85.8676 18.7536C84.4777 18.7536 83.504 18.3185 82.9466 17.446C82.3869 16.5735 82.1094 15.2259 82.1094 13.4008V11.2136C82.1094 9.33452 82.3987 7.96105 82.9772 7.09558C83.5558 6.2301 84.5459 5.79736 85.9499 5.79736C86.9165 5.79736 87.6597 5.97375 88.1771 6.32888C88.6945 6.684 89.059 7.23433 89.2707 7.98457C89.4824 8.7348 89.5882 9.76961 89.5882 11.0913V13.2362H84.8657V13.8712ZM85.2232 7.96811C85.0797 8.14449 84.9857 8.43377 84.9363 8.83593C84.8892 9.2381 84.8657 9.84722 84.8657 10.6657V11.5641H86.9283V10.6657C86.9283 9.86133 86.9001 9.25221 86.846 8.83593C86.7919 8.41966 86.6931 8.12803 86.5496 7.95635C86.4062 7.78702 86.1851 7.7 85.8864 7.7C85.5854 7.70235 85.3643 7.79172 85.2232 7.96811Z" />
                  </g>
                </g>
              </g>
            </svg>
          </a>
          <a style="display: none;" href="/" title="YouTube">
            <svg id="yt-logo-red-updated-svg" class="external-icon" viewBox="0 0 97 20" style="width: 97px;">
              <g id="yt-logo-red-updated" viewBox="0 0 97 20" preserveAspectRatio="xMidYMid meet">
                <g>
                  <path d="M27.9704 3.12324C27.6411 1.89323 26.6745 0.926623 25.4445 0.597366C23.2173 2.24288e-07 14.2827 0 14.2827 0C14.2827 0 5.34807 2.24288e-07 3.12088 0.597366C1.89323 0.926623 0.924271 1.89323 0.595014 3.12324C-2.8036e-07 5.35042 0 10 0 10C0 10 -1.57002e-06 14.6496 0.597364 16.8768C0.926621 18.1068 1.89323 19.0734 3.12324 19.4026C5.35042 20 14.285 20 14.285 20C14.285 20 23.2197 20 25.4468 19.4026C26.6769 19.0734 27.6435 18.1068 27.9727 16.8768C28.5701 14.6496 28.5701 10 28.5701 10C28.5701 10 28.5677 5.35042 27.9704 3.12324Z" fill="#FF0000" />
                  <path d="M11.4275 14.2854L18.8475 10.0004L11.4275 5.71533V14.2854Z" fill="white" />
                </g>
                <g id="youtube-red-paths">
                  <path d="M40.0566 6.34524V7.03668C40.0566 10.4915 38.5255 12.5118 35.1742 12.5118H34.6638V18.5583H31.9263V1.42285H35.414C38.6078 1.42285 40.0566 2.7728 40.0566 6.34524ZM37.1779 6.59218C37.1779 4.09924 36.7287 3.50658 35.1765 3.50658H34.6662V10.4727H35.1365C36.6064 10.4727 37.1803 9.40968 37.1803 7.10253L37.1779 6.59218Z" />
                  <path d="M46.5336 5.8345L46.3901 9.08238C45.2259 8.83779 44.264 9.02123 43.836 9.77382V18.5579H41.1196V6.0391H43.2857L43.5303 8.75312H43.6337C43.9183 6.77288 44.8379 5.771 46.0232 5.771C46.1949 5.7757 46.3666 5.79687 46.5336 5.8345Z" />
                  <path d="M49.6567 13.2456V13.8782C49.6567 16.0842 49.779 16.8415 50.7198 16.8415C51.6182 16.8415 51.8228 16.1501 51.8439 14.7178L54.2734 14.8613C54.4568 17.5565 53.0481 18.763 50.6586 18.763C47.7588 18.763 46.9004 16.8627 46.9004 13.4126V11.223C46.9004 7.58707 47.8599 5.80908 50.7409 5.80908C53.6407 5.80908 54.3769 7.32131 54.3769 11.0984V13.2456H49.6567ZM49.6567 10.6703V11.5687H51.7193V10.675C51.7193 8.37258 51.5547 7.71172 50.6821 7.71172C49.8096 7.71172 49.6567 8.38669 49.6567 10.675V10.6703Z" />
                  <path d="M68.4103 9.09902V18.5557H65.5928V9.30834C65.5928 8.28764 65.327 7.77729 64.7132 7.77729C64.2216 7.77729 63.7724 8.06186 63.4667 8.59338C63.4832 8.76271 63.4902 8.93439 63.4879 9.10373V18.5605H60.668V9.30834C60.668 8.28764 60.4022 7.77729 59.7884 7.77729C59.2969 7.77729 58.8665 8.06186 58.5631 8.57456V18.5628H55.7456V6.03929H57.9728L58.2221 7.63383H58.2621C58.8947 6.42969 59.9178 5.77588 61.1219 5.77588C62.3072 5.77588 62.9799 6.36854 63.288 7.43157C63.9418 6.34973 64.9225 5.77588 66.0443 5.77588C67.7564 5.77588 68.4103 7.00119 68.4103 9.09902Z" />
                  <path d="M69.8191 2.8338C69.8191 1.4862 70.3106 1.09814 71.3501 1.09814C72.4132 1.09814 72.8812 1.54734 72.8812 2.8338C72.8812 4.22373 72.4108 4.57181 71.3501 4.57181C70.3106 4.56945 69.8191 4.22138 69.8191 2.8338ZM69.9837 6.03935H72.6789V18.5629H69.9837V6.03935Z" />
                  <path d="M81.891 6.03955V18.5631H79.6849L79.4403 17.032H79.3792C78.7466 18.2573 77.827 18.7677 76.684 18.7677C75.0095 18.7677 74.2522 17.7046 74.2522 15.3975V6.0419H77.0697V15.2352C77.0697 16.3382 77.3002 16.7874 77.867 16.7874C78.3844 16.7663 78.8477 16.4582 79.0688 15.9902V6.0419H81.891V6.03955Z" />
                  <path d="M96.1901 9.09893V18.5557H93.3726V9.30825C93.3726 8.28755 93.1068 7.7772 92.493 7.7772C92.0015 7.7772 91.5523 8.06177 91.2465 8.59329C91.263 8.76027 91.2701 8.9296 91.2677 9.09893V18.5557H88.4502V9.30825C88.4502 8.28755 88.1845 7.7772 87.5706 7.7772C87.0791 7.7772 86.6487 8.06177 86.3453 8.57447V18.5627H83.5278V6.0392H85.7527L85.9973 7.63139H86.0372C86.6699 6.42725 87.6929 5.77344 88.8971 5.77344C90.0824 5.77344 90.755 6.3661 91.0631 7.42913C91.7169 6.34729 92.6976 5.77344 93.8194 5.77344C95.541 5.77579 96.1901 7.0011 96.1901 9.09893Z" />
                  <path d="M40.0566 6.34524V7.03668C40.0566 10.4915 38.5255 12.5118 35.1742 12.5118H34.6638V18.5583H31.9263V1.42285H35.414C38.6078 1.42285 40.0566 2.7728 40.0566 6.34524ZM37.1779 6.59218C37.1779 4.09924 36.7287 3.50658 35.1765 3.50658H34.6662V10.4727H35.1365C36.6064 10.4727 37.1803 9.40968 37.1803 7.10253L37.1779 6.59218Z" />
                </g>
              </g>
            </svg>
          </a>
          <span id="country-code"></span>
        </div>
        <div id="masthead-skeleton-icons" slot="masthead-skeleton">
          <div class="masthead-skeleton-icon"></div>
          <div class="masthead-skeleton-icon"></div>
          <div class="masthead-skeleton-icon"></div>
          <div class="masthead-skeleton-icon"></div>
        </div>
      </ytd-masthead>
      <a slot="guide-links-primary" href="https://www.youtube.com/about/" style="display: none;">সম্পর্কে</a>
      <a slot="guide-links-primary" href="https://www.youtube.com/about/press/" style="display: none;">প্রেস</a>
      <a slot="guide-links-primary" href="https://www.youtube.com/about/copyright/" style="display: none;">কপিরাইট</a>
      <a slot="guide-links-primary" href="/t/contact_us/" style="display: none;">আমাদের সাথে যোগাযোগ করুন</a>
      <a slot="guide-links-primary" href="https://www.youtube.com/creators/" style="display: none;">ক্রিয়েটর</a>
      <a slot="guide-links-primary" href="https://www.youtube.com/ads/" style="display: none;">বিজ্ঞাপন</a>
      <a slot="guide-links-primary" href="https://developers.google.com/youtube" style="display: none;">ডেভেলপার</a>
      <a slot="guide-links-secondary" href="/t/terms" style="display: none;">শর্তাবলী</a>
      <a slot="guide-links-secondary" href="/t/privacy" style="display: none;">গোপনীয়তা</a>
      <a slot="guide-links-secondary" href="https://www.youtube.com/about/policies/" style="display: none;">নীতি এবং নিরাপত্তা</a>
      <a slot="guide-links-secondary" href="https://www.youtube.com/howyoutubeworks?utm_campaign=ytgen&amp;utm_source=ythp&amp;utm_medium=LeftNav&amp;utm_content=txt&amp;u=https%3A%2F%2Fwww.youtube.com%2Fhowyoutubeworks%3Futm_source%3Dythp%26utm_medium%3DLeftNav%26utm_campaign%3Dytgen" style="display: none;">YouTube কীভাবে কাজ করে</a>
      <a slot="guide-links-secondary" href="/new" style="display: none;">নতুন ফিচার ব্যবহার করে দেখুন</a>
      <div id="copyright" slot="copyright" style="display: none;">
        <div dir="ltr" style="display:inline">&copy; 2023 Google LLC</div>
      </div>
    </ytd-app>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('nc_pj', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('rsbe_dpj', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('js_ld', null, '');
      }
    </script>
    <script id="base-js" src="https://www.youtube.com/s/desktop/5191a190/jsbin/desktop_polymer_legacy_browsers.vflset/desktop_polymer_legacy_browsers.js" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw"></script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('rsef_dpj', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('rsae_dpj', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('js_r', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('ac', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      var onPolymerReady = function(e) {
        window.removeEventListener('script-load-dpj', onPolymerReady);
        if (window.ytcsi) {
          window.ytcsi.tick('apr', null, '');
        }
      };
      if (window.Polymer && Polymer.RenderStatus) {
        onPolymerReady();
      } else {
        window.addEventListener('script-load-dpj', onPolymerReady);
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('pdc', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      var ytInitialData = {
        "responseContext": {
          "serviceTrackingParams": [{
            "service": "GFEEDBACK",
            "params": [{
              "key": "route",
              "value": "channel.about"
            }, {
              "key": "is_casual",
              "value": "false"
            }, {
              "key": "is_owner",
              "value": "false"
            }, {
              "key": "is_monetization_enabled",
              "value": "false"
            }, {
              "key": "num_shelves",
              "value": "0"
            }, {
              "key": "is_alc_surface",
              "value": "false"
            }, {
              "key": "browse_id",
              "value": "UCY1tcLXO3mvPn7CPzujcRPA"
            }, {
              "key": "browse_id_prefix",
              "value": ""
            }, {
              "key": "logged_in",
              "value": "0"
            }, {
              "key": "country-type",
              "value": "B"
            }, {
              "key": "e",
              "value": "1714256,23703445,23804281,23918597,23946420,23966208,23983296,23986017,23998056,24004644,24007246,24034168,24036947,24077241,24080738,24120820,24135310,24140247,24147968,24161116,24162919,24164186,24166867,24169501,24181174,24187043,24187377,24211178,24219713,24241378,24255165,24255543,24255545,24262346,24263796,24267564,24268142,24281897,24283015,24283093,24287604,24288043,24288664,24290971,24291857,24294555,24390674,24391537,24396645,24404640,24407191,24407446,24415864,24415866,24416291,24418142,24419278,24420728,24426636,24428639,24428900,24429094,24430382,24433679,24436009,24436205,24436595,24438950,24439361,24439483,24440132,24441240,24446866,24447183,24447308,24449113,24450200,24450367,24451033,24451434,24451437,24453129,24454058,24455362,24455494,24457195,24457200,24457884,24457967,24458839,24463856,24463912,24465097,24465710,24466462,24470280,24470665,45686551"
            }]
          }, {
            "service": "GOOGLE_HELP",
            "params": [{
              "key": "browse_id",
              "value": "UCY1tcLXO3mvPn7CPzujcRPA"
            }, {
              "key": "browse_id_prefix",
              "value": ""
            }]
          }, {
            "service": "CSI",
            "params": [{
              "key": "c",
              "value": "WEB"
            }, {
              "key": "cver",
              "value": "2.20230206.06.00"
            }, {
              "key": "yt_li",
              "value": "0"
            }, {
              "key": "GetChannelPage_rid",
              "value": "0x03775f0f2399197e"
            }]
          }, {
            "service": "GUIDED_HELP",
            "params": [{
              "key": "logged_in",
              "value": "0"
            }]
          }, {
            "service": "ECATCHER",
            "params": [{
              "key": "client.version",
              "value": "2.20230206"
            }, {
              "key": "client.name",
              "value": "WEB"
            }, {
              "key": "client.fexp",
              "value": "24255165,24004644,24466462,24447183,24283093,24404640,24457967,24436009,24418142,24162919,24415866,24440132,24416291,24294555,1714256,24450200,24457195,24262346,24455362,24036947,24187377,24450367,24426636,24164186,24446866,23918597,24080738,24135310,24396645,24219713,24263796,24267564,24283015,24291857,24429094,24454058,24455494,23804281,24463912,23946420,24255543,24465710,24436205,24470665,24463856,23983296,23998056,24140247,24007246,24436595,24077241,24287604,24430382,24407191,24161116,24288043,24290971,24457200,24034168,23966208,23986017,24288664,24451434,24181174,24419278,24428900,24438950,24433679,24447308,24439361,24449113,24268142,24420728,24120820,24441240,24281897,24391537,24470280,24457884,24453129,24458839,24241378,24169501,24166867,24415864,24439483,24187043,23703445,24407446,45686551,24428639,24451033,24211178,24147968,24255545,24465097,24390674,24451437"
            }]
          }],
          "maxAgeSeconds": 300,
          "mainAppWebResponseContext": {
            "loggedOut": true
          },
          "webResponseContextExtensionData": {
            "ytConfigData": {
              "visitorData": "CgtjQWludnVRdGphOCi7ko6fBg%3D%3D",
              "rootVisualElementType": 3611
            },
            "hasDecorated": true
          }
        },
        "contents": {
          "twoColumnBrowseResultsRenderer": {
            "tabs": [{
              "tabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CBoQ8JMBGAUiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/featured",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "EghmZWF0dXJlZPIGBAoCMgA%3D",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "হোম",
                "trackingParams": "CBoQ8JMBGAUiEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            }, {
              "tabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CBkQ8JMBGAYiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/videos",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "EgZ2aWRlb3PyBgQKAjoA",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "ভিডিও",
                "trackingParams": "CBkQ8JMBGAYiEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            }, {
              "tabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CBgQ8JMBGAciEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/playlists",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "EglwbGF5bGlzdHPyBgQKAkIA",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "প্লেলিস্ট",
                "trackingParams": "CBgQ8JMBGAciEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            }, {
              "tabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CBcQ8JMBGAgiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/community",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "Egljb21tdW5pdHnyBgQKAkoA",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "কমিউনিটি",
                "trackingParams": "CBcQ8JMBGAgiEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            }, {
              "tabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CBYQ8JMBGAkiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/channels",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "EghjaGFubmVsc_IGBAoCUgA%3D",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "চ্যানেলগুলি",
                "trackingParams": "CBYQ8JMBGAkiEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            }, {
              "tabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CBMQ8JMBGAoiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/about",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "EgVhYm91dPIGBAoCEgA%3D",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "সম্পর্কে",
                "selected": true,
                "content": {
                  "sectionListRenderer": {
                    "contents": [{
                      "itemSectionRenderer": {
                        "contents": [{
                          "channelAboutFullMetadataRenderer": {
                            "description": {
                              "simpleText": "Selamat datang di Channel BOS TRENDING\n\nChannel pengembangan musik DJ se ASIA...\nSemoga isi dari channel DJ ini bisa menghibur kalian semua\n\nTerimakasih buat yang sudah SUBSCRIBE karena kalian adalah semangat saya hari ini .\n\nSalam Santuy Terhormat\nBOS TRENDING 😁✌\n\nFB : febrii s\nIG  : @pebrisaputra156"
                            },
                            "viewCountText": {
                              "simpleText": "12,26,028টি ভিউ"
                            },
                            "joinedDateText": {
                              "runs": [{
                                "text": "যোগ দিয়েছেন "
                              }, {
                                "text": "2 মে, 2013"
                              }]
                            },
                            "canonicalChannelUrl": "http://www.youtube.com/@BOSTRENDING",
                            "bypassBusinessEmailCaptcha": false,
                            "title": {
                              "simpleText": "BOS TRENDING"
                            },
                            "avatar": {
                              "thumbnails": [{
                                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s48-c-k-c0x00ffffff-no-rj",
                                "width": 48,
                                "height": 48
                              }, {
                                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s88-c-k-c0x00ffffff-no-rj",
                                "width": 88,
                                "height": 88
                              }, {
                                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s176-c-k-c0x00ffffff-no-rj",
                                "width": 176,
                                "height": 176
                              }]
                            },
                            "country": {
                              "simpleText": "ইন্দোনেশিয়া"
                            },
                            "showDescription": true,
                            "descriptionLabel": {
                              "runs": [{
                                "text": "বর্ণনা"
                              }]
                            },
                            "detailsLabel": {
                              "runs": [{
                                "text": "বিবরণ"
                              }]
                            },
                            "primaryLinksLabel": {
                              "runs": [{
                                "text": "লিঙ্কগুলি"
                              }]
                            },
                            "statsLabel": {
                              "runs": [{
                                "text": "পরিসংখ্যান"
                              }]
                            },
                            "countryLabel": {
                              "runs": [{
                                "text": "\nলোকেশন:\n  ",
                                "deemphasize": true
                              }]
                            },
                            "channelId": "UCY1tcLXO3mvPn7CPzujcRPA",
                            "onBusinessEmailRevealClickCommand": {
                              "clickTrackingParams": "CBUQuy8YACITCO6am-bqhf0CFf76OAYdT0EIIg==",
                              "commandMetadata": {
                                "webCommandMetadata": {
                                  "sendPost": true,
                                  "apiUrl": "/youtubei/v1/channel/reveal_business_email"
                                }
                              },
                              "revealBusinessEmailCommand": {}
                            }
                          }
                        }],
                        "trackingParams": "CBUQuy8YACITCO6am-bqhf0CFf76OAYdT0EIIg=="
                      }
                    }],
                    "trackingParams": "CBQQui8iEwjumpvm6oX9AhX--jgGHU9BCCI=",
                    "disablePullToRefresh": true
                  }
                },
                "trackingParams": "CBMQ8JMBGAoiEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            }, {
              "expandableTabRenderer": {
                "endpoint": {
                  "clickTrackingParams": "CAAQhGciEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/@BOSTRENDING/search",
                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                      "rootVe": 3611,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                    "params": "EgZzZWFyY2jyBgQKAloA",
                    "canonicalBaseUrl": "/@BOSTRENDING"
                  }
                },
                "title": "সার্চ করুন",
                "selected": false
              }
            }]
          }
        },
        "header": {
          "c4TabbedHeaderRenderer": {
            "channelId": "UCY1tcLXO3mvPn7CPzujcRPA",
            "title": "BOS TRENDING",
            "navigationEndpoint": {
              "clickTrackingParams": "CBAQ8DsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
              "commandMetadata": {
                "webCommandMetadata": {
                  "url": "/@BOSTRENDING",
                  "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                  "rootVe": 3611,
                  "apiUrl": "/youtubei/v1/browse"
                }
              },
              "browseEndpoint": {
                "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                "canonicalBaseUrl": "/@BOSTRENDING"
              }
            },
            "avatar": {
              "thumbnails": [{
                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s48-c-k-c0x00ffffff-no-rj",
                "width": 48,
                "height": 48
              }, {
                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s88-c-k-c0x00ffffff-no-rj",
                "width": 88,
                "height": 88
              }, {
                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s176-c-k-c0x00ffffff-no-rj",
                "width": 176,
                "height": 176
              }]
            },
            "banner": {
              "thumbnails": [{
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1060-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj",
                "width": 1060,
                "height": 175
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1138-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj",
                "width": 1138,
                "height": 188
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1707-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj",
                "width": 1707,
                "height": 283
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w2120-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj",
                "width": 2120,
                "height": 351
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w2276-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj",
                "width": 2276,
                "height": 377
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w2560-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj",
                "width": 2560,
                "height": 424
              }]
            },
            "subscribeButton": {
              "buttonRenderer": {
                "style": "STYLE_DESTRUCTIVE",
                "size": "SIZE_DEFAULT",
                "isDisabled": false,
                "text": {
                  "runs": [{
                    "text": "সদস্যতা নিন"
                  }]
                },
                "navigationEndpoint": {
                  "clickTrackingParams": "CBEQ8FsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "ignoreNavigation": true
                    }
                  },
                  "modalEndpoint": {
                    "modal": {
                      "modalWithTitleAndButtonRenderer": {
                        "title": {
                          "simpleText": "এই চ্যানেলটিতে সদস্যতা নিতে চান?"
                        },
                        "content": {
                          "simpleText": "এই চ্যানেলে সদস্যতা নিতে প্রবেশ করুন।"
                        },
                        "button": {
                          "buttonRenderer": {
                            "style": "STYLE_BLUE_TEXT",
                            "size": "SIZE_DEFAULT",
                            "isDisabled": false,
                            "text": {
                              "simpleText": "সাইন-ইন করুন"
                            },
                            "navigationEndpoint": {
                              "clickTrackingParams": "CBIQ_YYEIhMI7pqb5uqF_QIV_vo4Bh1PQQgiMglzdWJzY3JpYmU=",
                              "commandMetadata": {
                                "webCommandMetadata": {
                                  "url": "https://accounts.google.com/ServiceLogin?service=youtube\u0026uilel=3\u0026passive=true\u0026continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26hl%3Dbn%26next%3D%252F%2540BOSTRENDING%252Fabout%26continue_action%3DQUFFLUhqa1ExMk1nWXR6NXhQZWMyaVBYX2lLYTVjdy05QXxBQ3Jtc0trYWttNGtmUmRMWS0zeGQ5YTU3bGlUbHBkbXlZejgtNVllR0s0N1ZmSmxRQlRQR2JyclV2dlNXc0tOODg3SWVYbEhSZlprWFI1QTV3VGNmOHVETUhPdXFGdC03Q0o2amxLdnRFUkh2bHU3VWhpNHQwVV9EdlBNMUhxeGtwOEdrNk5pb2p5S1Z2dkV3Z29RWUk4ckVheThYUktLQ1E3emxVSi0wdk1CeGl6MEdjQzNJcV9ZSC1Bb1pQWG1FREM1cHpQY1NxRDdzTGlVZFM5bEROamh6M0kwQndjblh3\u0026hl=bn\u0026ec=66429",
                                  "webPageType": "WEB_PAGE_TYPE_UNKNOWN",
                                  "rootVe": 83769
                                }
                              },
                              "signInEndpoint": {
                                "nextEndpoint": {
                                  "clickTrackingParams": "CBIQ_YYEIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                                  "commandMetadata": {
                                    "webCommandMetadata": {
                                      "url": "/@BOSTRENDING/about",
                                      "webPageType": "WEB_PAGE_TYPE_CHANNEL",
                                      "rootVe": 3611,
                                      "apiUrl": "/youtubei/v1/browse"
                                    }
                                  },
                                  "browseEndpoint": {
                                    "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
                                    "params": "EgVhYm91dA%3D%3D",
                                    "canonicalBaseUrl": "/@BOSTRENDING"
                                  }
                                },
                                "continueAction": "QUFFLUhqa1ExMk1nWXR6NXhQZWMyaVBYX2lLYTVjdy05QXxBQ3Jtc0trYWttNGtmUmRMWS0zeGQ5YTU3bGlUbHBkbXlZejgtNVllR0s0N1ZmSmxRQlRQR2JyclV2dlNXc0tOODg3SWVYbEhSZlprWFI1QTV3VGNmOHVETUhPdXFGdC03Q0o2amxLdnRFUkh2bHU3VWhpNHQwVV9EdlBNMUhxeGtwOEdrNk5pb2p5S1Z2dkV3Z29RWUk4ckVheThYUktLQ1E3emxVSi0wdk1CeGl6MEdjQzNJcV9ZSC1Bb1pQWG1FREM1cHpQY1NxRDdzTGlVZFM5bEROamh6M0kwQndjblh3",
                                "idamTag": "66429"
                              }
                            },
                            "trackingParams": "CBIQ_YYEIhMI7pqb5uqF_QIV_vo4Bh1PQQgi"
                          }
                        }
                      }
                    }
                  }
                },
                "trackingParams": "CBEQ8FsiEwjumpvm6oX9AhX--jgGHU9BCCI="
              }
            },
            "subscriberCountText": {
              "accessibility": {
                "accessibilityData": {
                  "label": "11.9 হাজার জন সদস্য"
                }
              },
              "simpleText": "11.9 হা জন সদস্য"
            },
            "tvBanner": {
              "thumbnails": [{
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w320-fcrop64=1,00000000ffffffff-k-c0xffffffff-no-nd-rj",
                "width": 320,
                "height": 180
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w854-fcrop64=1,00000000ffffffff-k-c0xffffffff-no-nd-rj",
                "width": 854,
                "height": 480
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1280-fcrop64=1,00000000ffffffff-k-c0xffffffff-no-nd-rj",
                "width": 1280,
                "height": 720
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1920-fcrop64=1,00000000ffffffff-k-c0xffffffff-no-nd-rj",
                "width": 1920,
                "height": 1080
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w2120-fcrop64=1,00000000ffffffff-k-c0xffffffff-no-nd-rj",
                "width": 2120,
                "height": 1192
              }]
            },
            "mobileBanner": {
              "thumbnails": [{
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w320-fcrop64=1,32b75a57cd48a5a8-k-c0xffffffff-no-nd-rj",
                "width": 320,
                "height": 88
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w640-fcrop64=1,32b75a57cd48a5a8-k-c0xffffffff-no-nd-rj",
                "width": 640,
                "height": 175
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w960-fcrop64=1,32b75a57cd48a5a8-k-c0xffffffff-no-nd-rj",
                "width": 960,
                "height": 263
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1280-fcrop64=1,32b75a57cd48a5a8-k-c0xffffffff-no-nd-rj",
                "width": 1280,
                "height": 351
              }, {
                "url": "https://yt3.googleusercontent.com/lgUKccDs0cWkKNMEAAzNf9yidk2dqyy8PdyOrViR0dEceTR1VjXMTiyUO-2ej0mGllzf7uyiRQc=w1440-fcrop64=1,32b75a57cd48a5a8-k-c0xffffffff-no-nd-rj",
                "width": 1440,
                "height": 395
              }]
            },
            "trackingParams": "CBAQ8DsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
            "channelHandleText": {
              "runs": [{
                "text": "@BOSTRENDING"
              }]
            },
            "videosCountText": {
              "runs": [{
                "text": "102"
              }, {
                "text": "টি ভিডিও"
              }]
            }
          }
        },
        "metadata": {
          "channelMetadataRenderer": {
            "title": "BOS TRENDING",
            "description": "Selamat datang di Channel BOS TRENDING\n\nChannel pengembangan musik DJ se ASIA...\nSemoga isi dari channel DJ ini bisa menghibur kalian semua\n\nTerimakasih buat yang sudah SUBSCRIBE karena kalian adalah semangat saya hari ini .\n\nSalam Santuy Terhormat\nBOS TRENDING 😁✌\n\nFB : febrii s\nIG  : @pebrisaputra156",
            "rssUrl": "https://www.youtube.com/feeds/videos.xml?channel_id=UCY1tcLXO3mvPn7CPzujcRPA",
            "externalId": "UCY1tcLXO3mvPn7CPzujcRPA",
            "keywords": "\"Template keren\" \"Bos Trending\" \"Musik DJ\" \"Lagu Tiktok\" \"DJ Tiktok\" \"Musik DJ Indonesia\" \"Musik Indonesia\" \"DJ Full Bass\" \"Nofin Asia\" \"Trap Nation\" \"Musik 2020\" \"avee player\" DJ FULL BASS. TERBARU",
            "ownerUrls": ["http://www.youtube.com/@BOSTRENDING"],
            "avatar": {
              "thumbnails": [{
                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s900-c-k-c0x00ffffff-no-rj",
                "width": 900,
                "height": 900
              }]
            },
            "channelUrl": "https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA",
            "isFamilySafe": true,
            "availableCountryCodes": ["AQ", "AS", "MO", "BL", "CG", "CH", "TM", "IN", "DM", "MW", "CR", "IQ", "CM", "GE", "PT", "ER", "UM", "IR", "GM", "EC", "MA", "QA", "LC", "FM", "GW", "NO", "TF", "CC", "AO", "FI", "GU", "GL", "NR", "ZA", "NL", "DZ", "GF", "AE", "ES", "BT", "IS", "TK", "CX", "VN", "MR", "SY", "SR", "CL", "CU", "IM", "CV", "MM", "SD", "PE", "JP", "SC", "SJ", "SV", "GA", "GD", "SL", "MN", "SZ", "MQ", "GN", "GG", "SX", "PR", "EE", "HK", "KM", "SI", "AF", "AZ", "BS", "ST", "GB", "AG", "PF", "KZ", "BM", "LK", "TH", "EH", "VG", "BE", "MX", "DO", "AW", "AT", "GH", "MD", "TC", "IO", "UG", "GT", "BW", "MP", "MT", "OM", "FR", "NG", "RW", "SK", "BD", "KI", "AM", "MF", "PH", "BR", "MG", "LT", "ME", "TW", "MH", "KP", "AU", "RS", "IT", "ML", "BN", "KE", "BZ", "LI", "HT", "NI", "IL", "CY", "CF", "JM", "MC", "RU", "VI", "VU", "SO", "FK", "LY", "PA", "MZ", "NE", "VC", "IE", "BG", "TR", "CZ", "BA", "BV", "FJ", "HR", "CI", "BQ", "HN", "MV", "EG", "VA", "BI", "NA", "AI", "GR", "KG", "TZ", "MU", "YT", "CA", "TD", "SA", "AX", "RE", "RO", "ET", "AL", "KH", "FO", "UZ", "PL", "TG", "HM", "SS", "LB", "LS", "GS", "VE", "TJ", "BJ", "TN", "TO", "LR", "KN", "YE", "NC", "LV", "JO", "BY", "TV", "LA", "SN", "WF", "SB", "MK", "NZ", "SH", "ID", "PY", "WS", "SG", "CN", "BF", "US", "CO", "GQ", "GI", "CD", "KR", "PG", "KY", "DK", "TL", "GP", "ZM", "LU", "CW", "DJ", "NF", "CK", "GY", "ZW", "PS", "HU", "SE", "PN", "MS", "AD", "JE", "UA", "PK", "BB", "BH", "BO", "MY", "UY", "SM", "DE", "TT", "NU", "AR", "KW", "PM", "NP", "PW"],
            "androidDeepLink": "android-app://com.google.android.youtube/http/www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA",
            "androidAppindexingLink": "android-app://com.google.android.youtube/http/www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA",
            "iosAppindexingLink": "ios-app://544007664/vnd.youtube/www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA",
            "vanityChannelUrl": "http://www.youtube.com/@BOSTRENDING"
          }
        },
        "trackingParams": "CAAQhGciEwjumpvm6oX9AhX--jgGHU9BCCI=",
        "topbar": {
          "desktopTopbarRenderer": {
            "logo": {
              "topbarLogoRenderer": {
                "iconImage": {
                  "iconType": "YOUTUBE_LOGO"
                },
                "tooltipText": {
                  "runs": [{
                    "text": "YouTube হোম"
                  }]
                },
                "endpoint": {
                  "clickTrackingParams": "CA8QsV4iEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/",
                      "webPageType": "WEB_PAGE_TYPE_BROWSE",
                      "rootVe": 3854,
                      "apiUrl": "/youtubei/v1/browse"
                    }
                  },
                  "browseEndpoint": {
                    "browseId": "FEwhat_to_watch"
                  }
                },
                "trackingParams": "CA8QsV4iEwjumpvm6oX9AhX--jgGHU9BCCI=",
                "overrideEntityKey": "EgZ0b3BiYXIg9QEoAQ%3D%3D"
              }
            },
            "searchbox": {
              "fusionSearchboxRenderer": {
                "icon": {
                  "iconType": "SEARCH"
                },
                "placeholderText": {
                  "runs": [{
                    "text": "সার্চ করুন"
                  }]
                },
                "config": {
                  "webSearchboxConfig": {
                    "requestLanguage": "bn",
                    "requestDomain": "bd",
                    "hasOnscreenKeyboard": false,
                    "focusSearchbox": true
                  }
                },
                "trackingParams": "CA0Q7VAiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                "searchEndpoint": {
                  "clickTrackingParams": "CA0Q7VAiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "/results?search_query=",
                      "webPageType": "WEB_PAGE_TYPE_SEARCH",
                      "rootVe": 4724
                    }
                  },
                  "searchEndpoint": {
                    "query": ""
                  }
                },
                "clearButton": {
                  "buttonRenderer": {
                    "style": "STYLE_DEFAULT",
                    "size": "SIZE_DEFAULT",
                    "isDisabled": false,
                    "icon": {
                      "iconType": "CLOSE"
                    },
                    "trackingParams": "CA4Q8FsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                    "accessibilityData": {
                      "accessibilityData": {
                        "label": "সার্চ কুয়েরি সাফ করুন"
                      }
                    }
                  }
                }
              }
            },
            "trackingParams": "CAEQq6wBIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
            "countryCode": "BD",
            "topbarButtons": [{
              "topbarMenuButtonRenderer": {
                "icon": {
                  "iconType": "MORE_VERT"
                },
                "menuRequest": {
                  "clickTrackingParams": "CAsQ_qsBGAAiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "sendPost": true,
                      "apiUrl": "/youtubei/v1/account/account_menu"
                    }
                  },
                  "signalServiceEndpoint": {
                    "signal": "GET_ACCOUNT_MENU",
                    "actions": [{
                      "clickTrackingParams": "CAsQ_qsBGAAiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                      "openPopupAction": {
                        "popup": {
                          "multiPageMenuRenderer": {
                            "trackingParams": "CAwQ_6sBIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                            "style": "MULTI_PAGE_MENU_STYLE_TYPE_SYSTEM",
                            "showLoadingSpinner": true
                          }
                        },
                        "popupType": "DROPDOWN",
                        "beReused": true
                      }
                    }]
                  }
                },
                "trackingParams": "CAsQ_qsBGAAiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                "accessibility": {
                  "accessibilityData": {
                    "label": "সেটিংস"
                  }
                },
                "tooltip": "সেটিংস",
                "style": "STYLE_DEFAULT"
              }
            }, {
              "buttonRenderer": {
                "style": "STYLE_SUGGESTIVE",
                "size": "SIZE_SMALL",
                "text": {
                  "runs": [{
                    "text": "সাইন-ইন করুন"
                  }]
                },
                "icon": {
                  "iconType": "AVATAR_LOGGED_OUT"
                },
                "navigationEndpoint": {
                  "clickTrackingParams": "CAoQ1IAEGAEiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "url": "https://accounts.google.com/ServiceLogin?service=youtube\u0026uilel=3\u0026passive=true\u0026continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26hl%3Dbn%26next%3Dhttps%253A%252F%252Fwww.youtube.com%252F%2540BOSTRENDING%252Fabout\u0026hl=bn\u0026ec=65620",
                      "webPageType": "WEB_PAGE_TYPE_UNKNOWN",
                      "rootVe": 83769
                    }
                  },
                  "signInEndpoint": {
                    "idamTag": "65620"
                  }
                },
                "trackingParams": "CAoQ1IAEGAEiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                "targetId": "topbar-signin"
              }
            }],
            "hotkeyDialog": {
              "hotkeyDialogRenderer": {
                "title": {
                  "runs": [{
                    "text": "কীবোর্ড শর্টকাট"
                  }]
                },
                "sections": [{
                  "hotkeyDialogSectionRenderer": {
                    "title": {
                      "runs": [{
                        "text": "প্লেব্যাক"
                      }]
                    },
                    "options": [{
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "প্লে/পজ টগল করুন"
                          }]
                        },
                        "hotkey": "k"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "১০ সেকেন্ড রিওয়াইন্ড করুন"
                          }]
                        },
                        "hotkey": "j"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "১০ সেকেন্ড ফাস্ট ফরওয়ার্ড করুন"
                          }]
                        },
                        "hotkey": "l"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "আগের ভিডিও"
                          }]
                        },
                        "hotkey": "P (SHIFT+p)"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "পরের ভিডিও"
                          }]
                        },
                        "hotkey": "N (SHIFT+n)"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "আগের ফ্রেম (পজ থাকাকালীন)"
                          }]
                        },
                        "hotkey": ",",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "',' বোতাম"
                          }
                        }
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "পরের ফ্রেম (পজ থাকাকালীন)"
                          }]
                        },
                        "hotkey": ".",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "'.' বোতাম"
                          }
                        }
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "প্লেব্যাকের হার কমান"
                          }]
                        },
                        "hotkey": "\u003c (SHIFT+,)",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "'\u003c' বোতাম অথবা SHIFT + ',' বোতাম"
                          }
                        }
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "প্লেব্যাকের হার বাড়ান"
                          }]
                        },
                        "hotkey": "\u003e (SHIFT+.)",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "'\u003e' বোতাম অথবা SHIFT বোতাম + '.' বোতাম"
                          }
                        }
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "ভিডিওর নির্দিষ্ট কোনও মুহূর্তে যান (৭ বার এগোলে ভিডিওটি যতক্ষণের, তার ৭০% এ পৌঁছাবেন)"
                          }]
                        },
                        "hotkey": "0..9"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "আগের চ্যাপ্টারে যান"
                          }]
                        },
                        "hotkey": "CONTROL + ←"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "পরবর্তী চ্যাপ্টারে যান"
                          }]
                        },
                        "hotkey": "CONTROL + →"
                      }
                    }]
                  }
                }, {
                  "hotkeyDialogSectionRenderer": {
                    "title": {
                      "runs": [{
                        "text": "সাধারণ"
                      }]
                    },
                    "options": [{
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "পূর্ণ স্ক্রিন টগল করুন"
                          }]
                        },
                        "hotkey": "f"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "থিয়েটার মোড চালু অথবা বন্ধ করুন"
                          }]
                        },
                        "hotkey": "t"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "মিনিপ্লেয়ার চালু বা বন্ধ করুন"
                          }]
                        },
                        "hotkey": "i"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "মিনিপ্লেয়ার অথবা এই ডায়ালগটি বন্ধ করুন"
                          }]
                        },
                        "hotkey": "ESCAPE"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "মিউট বোতামটি টগল করুন"
                          }]
                        },
                        "hotkey": "m"
                      }
                    }]
                  }
                }, {
                  "hotkeyDialogSectionRenderer": {
                    "title": {
                      "runs": [{
                        "text": "সাবটাইটেল এবং ক্লোজড ক্যাপশন"
                      }]
                    },
                    "options": [{
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "ভিডিওতে ক্যাপশন থাকলে ক্যাপশন চালু/বন্ধ টগল করুন"
                          }]
                        },
                        "hotkey": "c"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "টেক্সটের অস্বচ্ছতার বিভিন্ন স্তর পরপর দেখুন"
                          }]
                        },
                        "hotkey": "o"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "উইন্ডোর অস্বচ্ছতার বিভিন্ন স্তর পরপর দেখুন"
                          }]
                        },
                        "hotkey": "w"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "হরফের মাপ পরপর দেখুন (ছোট থেকে বড়)"
                          }]
                        },
                        "hotkey": "+"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "হরফের মাপ পরপর দেখুন (বড় থেকে ছোট)"
                          }]
                        },
                        "hotkey": "-",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "'-' বোতাম"
                          }
                        }
                      }
                    }]
                  }
                }, {
                  "hotkeyDialogSectionRenderer": {
                    "title": {
                      "runs": [{
                        "text": "স্ফেরিক্যাল ভিডিও"
                      }]
                    },
                    "options": [{
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "উপরের দিকে প্যান করুন"
                          }]
                        },
                        "hotkey": "w"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "বাঁ দিকে প্যান করুন"
                          }]
                        },
                        "hotkey": "a"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "নিচের দিকে প্যান করুন"
                          }]
                        },
                        "hotkey": "s"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "ডান দিকে প্যান করুন"
                          }]
                        },
                        "hotkey": "d"
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "বড় করুন"
                          }]
                        },
                        "hotkey": "নামপ্যাডের উপর + বা ]",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "নম্বর প্যাডের '+' বোতাম অথবা ')' বোতাম"
                          }
                        }
                      }
                    }, {
                      "hotkeyDialogSectionOptionRenderer": {
                        "label": {
                          "runs": [{
                            "text": "ছোট করুন"
                          }]
                        },
                        "hotkey": "নামপ্যাডের উপর - বা [",
                        "hotkeyAccessibilityLabel": {
                          "accessibilityData": {
                            "label": "নম্বর প্যাডের '-' বোতাম অথবা '(' বোতাম"
                          }
                        }
                      }
                    }]
                  }
                }],
                "dismissButton": {
                  "buttonRenderer": {
                    "style": "STYLE_BLUE_TEXT",
                    "size": "SIZE_DEFAULT",
                    "isDisabled": false,
                    "text": {
                      "runs": [{
                        "text": "খারিজ করুন"
                      }]
                    },
                    "trackingParams": "CAkQ8FsiEwjumpvm6oX9AhX--jgGHU9BCCI="
                  }
                },
                "trackingParams": "CAgQteYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi"
              }
            },
            "backButton": {
              "buttonRenderer": {
                "trackingParams": "CAcQvIYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                "command": {
                  "clickTrackingParams": "CAcQvIYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "sendPost": true
                    }
                  },
                  "signalServiceEndpoint": {
                    "signal": "CLIENT_SIGNAL",
                    "actions": [{
                      "clickTrackingParams": "CAcQvIYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                      "signalAction": {
                        "signal": "HISTORY_BACK"
                      }
                    }]
                  }
                }
              }
            },
            "forwardButton": {
              "buttonRenderer": {
                "trackingParams": "CAYQvYYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                "command": {
                  "clickTrackingParams": "CAYQvYYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "sendPost": true
                    }
                  },
                  "signalServiceEndpoint": {
                    "signal": "CLIENT_SIGNAL",
                    "actions": [{
                      "clickTrackingParams": "CAYQvYYDIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                      "signalAction": {
                        "signal": "HISTORY_FORWARD"
                      }
                    }]
                  }
                }
              }
            },
            "a11ySkipNavigationButton": {
              "buttonRenderer": {
                "style": "STYLE_DEFAULT",
                "size": "SIZE_DEFAULT",
                "isDisabled": false,
                "text": {
                  "runs": [{
                    "text": "নেভিগেশান এড়িয়ে যান"
                  }]
                },
                "trackingParams": "CAUQ8FsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                "command": {
                  "clickTrackingParams": "CAUQ8FsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "sendPost": true
                    }
                  },
                  "signalServiceEndpoint": {
                    "signal": "CLIENT_SIGNAL",
                    "actions": [{
                      "clickTrackingParams": "CAUQ8FsiEwjumpvm6oX9AhX--jgGHU9BCCI=",
                      "signalAction": {
                        "signal": "SKIP_NAVIGATION"
                      }
                    }]
                  }
                }
              }
            },
            "voiceSearchButton": {
              "buttonRenderer": {
                "style": "STYLE_DEFAULT",
                "size": "SIZE_DEFAULT",
                "isDisabled": false,
                "serviceEndpoint": {
                  "clickTrackingParams": "CAIQ7a8FIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                  "commandMetadata": {
                    "webCommandMetadata": {
                      "sendPost": true
                    }
                  },
                  "signalServiceEndpoint": {
                    "signal": "CLIENT_SIGNAL",
                    "actions": [{
                      "clickTrackingParams": "CAIQ7a8FIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                      "openPopupAction": {
                        "popup": {
                          "voiceSearchDialogRenderer": {
                            "placeholderHeader": {
                              "runs": [{
                                "text": "শুনছি…"
                              }]
                            },
                            "promptHeader": {
                              "runs": [{
                                "text": "শুনতে পাওয়া যায়নি। আবার চেষ্টা করুন।"
                              }]
                            },
                            "exampleQuery1": {
                              "runs": [{
                                "text": "\"সুচিত্রা মিত্রের গান চালাও\""
                              }]
                            },
                            "exampleQuery2": {
                              "runs": [{
                                "text": "\"আমার সাবস্ক্রিপশনগুলি দেখাও\""
                              }]
                            },
                            "promptMicrophoneLabel": {
                              "runs": [{
                                "text": "আবার চেষ্টা করতে মাইক্রোফোন ট্যাপ করুন"
                              }]
                            },
                            "loadingHeader": {
                              "runs": [{
                                "text": "প্রসেস করা হচ্ছে…"
                              }]
                            },
                            "connectionErrorHeader": {
                              "runs": [{
                                "text": "কানেকশন নেই"
                              }]
                            },
                            "connectionErrorMicrophoneLabel": {
                              "runs": [{
                                "text": "কানেকশন চেক করে আবার চেষ্টা করুন"
                              }]
                            },
                            "permissionsHeader": {
                              "runs": [{
                                "text": "অনুমতির জন্য অপেক্ষা করা হচ্ছে"
                              }]
                            },
                            "permissionsSubtext": {
                              "runs": [{
                                "text": "ভয়েসের মাধ্যমে সার্চ করার জন্য মাইক্রোফোনে অ্যাক্সেস করার অনুমতি দিন"
                              }]
                            },
                            "disabledHeader": {
                              "runs": [{
                                "text": "আপনার ভয়েসের মাধ্যমে সার্চ করুন"
                              }]
                            },
                            "disabledSubtext": {
                              "runs": [{
                                "text": "ভয়েস ব্যবহার করে সার্চ করতে, আপনার ব্রাউজার সেটিংসে যান এবং মাইক্রোফোন অ্যাক্সেস করার অনুমতি দিন"
                              }]
                            },
                            "microphoneButtonAriaLabel": {
                              "runs": [{
                                "text": "বাতিল করুন"
                              }]
                            },
                            "exitButton": {
                              "buttonRenderer": {
                                "style": "STYLE_DEFAULT",
                                "size": "SIZE_DEFAULT",
                                "isDisabled": false,
                                "icon": {
                                  "iconType": "CLOSE"
                                },
                                "trackingParams": "CAQQ0LEFIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                                "accessibilityData": {
                                  "accessibilityData": {
                                    "label": "বাতিল করুন"
                                  }
                                }
                              }
                            },
                            "trackingParams": "CAMQ7q8FIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                            "microphoneOffPromptHeader": {
                              "runs": [{
                                "text": "মাইক্রোফোন বন্ধ করা আছে। আবার চেষ্টা করুন।"
                              }]
                            }
                          }
                        },
                        "popupType": "TOP_ALIGNED_DIALOG"
                      }
                    }]
                  }
                },
                "icon": {
                  "iconType": "MICROPHONE_ON"
                },
                "tooltip": "আপনার ভয়েসের মাধ্যমে সার্চ করুন",
                "trackingParams": "CAIQ7a8FIhMI7pqb5uqF_QIV_vo4Bh1PQQgi",
                "accessibilityData": {
                  "accessibilityData": {
                    "label": "আপনার ভয়েসের মাধ্যমে সার্চ করুন"
                  }
                }
              }
            }
          }
        },
        "microformat": {
          "microformatDataRenderer": {
            "urlCanonical": "https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA",
            "title": "BOS TRENDING",
            "description": "Selamat datang di Channel BOS TRENDING Channel pengembangan musik DJ se ASIA... Semoga isi dari channel DJ ini bisa menghibur kalian semua Terimakasih buat y...",
            "thumbnail": {
              "thumbnails": [{
                "url": "https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s200-c-k-c0x00ffffff-no-rj?days_since_epoch=19396",
                "width": 200,
                "height": 200
              }]
            },
            "siteName": "YouTube",
            "appName": "YouTube",
            "androidPackage": "com.google.android.youtube",
            "iosAppStoreId": "544007664",
            "iosAppArguments": "https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA",
            "ogType": "yt-fb-app:channel",
            "urlApplinksWeb": "https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=applinks",
            "urlApplinksIos": "vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=applinks",
            "urlApplinksAndroid": "vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=applinks",
            "urlTwitterIos": "vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=twitter-deep-link",
            "urlTwitterAndroid": "vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=twitter-deep-link",
            "twitterCardType": "summary",
            "twitterSiteHandle": "@YouTube",
            "schemaDotOrgType": "http://schema.org/http://schema.org/YoutubeChannelV2",
            "noindex": false,
            "unlisted": false,
            "familySafe": true,
            "tags": ["Template keren", "Bos Trending", "Musik DJ", "Lagu Tiktok", "DJ Tiktok", "Musik DJ Indonesia", "Musik Indonesia", "DJ Full Bass", "Nofin Asia", "Trap Nation", "Musik 2020", "avee player", "DJ", "FULL", "BASS.", "TERBARU"],
            "availableCountries": ["AQ", "AS", "MO", "BL", "CG", "CH", "TM", "IN", "DM", "MW", "CR", "IQ", "CM", "GE", "PT", "ER", "UM", "IR", "GM", "EC", "MA", "QA", "LC", "FM", "GW", "NO", "TF", "CC", "AO", "FI", "GU", "GL", "NR", "ZA", "NL", "DZ", "GF", "AE", "ES", "BT", "IS", "TK", "CX", "VN", "MR", "SY", "SR", "CL", "CU", "IM", "CV", "MM", "SD", "PE", "JP", "SC", "SJ", "SV", "GA", "GD", "SL", "MN", "SZ", "MQ", "GN", "GG", "SX", "PR", "EE", "HK", "KM", "SI", "AF", "AZ", "BS", "ST", "GB", "AG", "PF", "KZ", "BM", "LK", "TH", "EH", "VG", "BE", "MX", "DO", "AW", "AT", "GH", "MD", "TC", "IO", "UG", "GT", "BW", "MP", "MT", "OM", "FR", "NG", "RW", "SK", "BD", "KI", "AM", "MF", "PH", "BR", "MG", "LT", "ME", "TW", "MH", "KP", "AU", "RS", "IT", "ML", "BN", "KE", "BZ", "LI", "HT", "NI", "IL", "CY", "CF", "JM", "MC", "RU", "VI", "VU", "SO", "FK", "LY", "PA", "MZ", "NE", "VC", "IE", "BG", "TR", "CZ", "BA", "BV", "FJ", "HR", "CI", "BQ", "HN", "MV", "EG", "VA", "BI", "NA", "AI", "GR", "KG", "TZ", "MU", "YT", "CA", "TD", "SA", "AX", "RE", "RO", "ET", "AL", "KH", "FO", "UZ", "PL", "TG", "HM", "SS", "LB", "LS", "GS", "VE", "TJ", "BJ", "TN", "TO", "LR", "KN", "YE", "NC", "LV", "JO", "BY", "TV", "LA", "SN", "WF", "SB", "MK", "NZ", "SH", "ID", "PY", "WS", "SG", "CN", "BF", "US", "CO", "GQ", "GI", "CD", "KR", "PG", "KY", "DK", "TL", "GP", "ZM", "LU", "CW", "DJ", "NF", "CK", "GY", "ZW", "PS", "HU", "SE", "PN", "MS", "AD", "JE", "UA", "PK", "BB", "BH", "BO", "MY", "UY", "SM", "DE", "TT", "NU", "AR", "KW", "PM", "NP", "PW"],
            "linkAlternates": [{
              "hrefUrl": "https://m.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA"
            }, {
              "hrefUrl": "android-app://com.google.android.youtube/http/youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA"
            }, {
              "hrefUrl": "ios-app://544007664/http/youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA"
            }]
          }
        }
      };
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('pdr', null, '');
      }
    </script>
    <link rel="canonical" href="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <link rel="alternate" media="handheld" href="https://m.youtube.com/@BOSTRENDING/about">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.youtube.com/@BOSTRENDING/about">
    <title>BOS TRENDING - YouTube</title>
    <meta name="description" content="Selamat datang di Channel BOS TRENDINGChannel pengembangan musik DJ se ASIA...Semoga isi dari channel DJ ini bisa menghibur kalian semuaTerimakasih buat yang...">
    <meta name="keywords" content="&quot;Template keren&quot; &quot;Bos Trending&quot; &quot;Musik DJ&quot; &quot;Lagu Tiktok&quot; &quot;DJ Tiktok&quot; &quot;Musik DJ Indonesia&quot; &quot;Musik Indonesia&quot; &quot;DJ Full Bass&quot; &quot;Nofin Asia&quot; &quot;Trap Nation&quot; &quot;Musik ...">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.youtube.com/feeds/videos.xml?channel_id=UCY1tcLXO3mvPn7CPzujcRPA">
    <meta property="og:title" content="BOS TRENDING">
    <link rel="image_src" href="https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s900-c-k-c0x00ffffff-no-rj">
    <meta property="og:site_name" content="YouTube">
    <meta property="og:url" content="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <meta property="og:image" content="https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s900-c-k-c0x00ffffff-no-rj">
    <meta property="og:image:width" content="900">
    <meta property="og:image:height" content="900">
    <meta property="og:description" content="Selamat datang di Channel BOS TRENDING

Channel pengembangan musik DJ se ASIA...
Semoga isi dari channel DJ ini bisa menghibur kalian semua

Terimakasih buat yang sudah SUBSCRIBE karena kalian adalah semangat saya hari ini .

Salam Santuy Terhormat
BOS TRENDING 😁✌

FB : febrii s
IG  : @pebrisaputra156">
    <meta property="al:ios:app_store_id" content="544007664">
    <meta property="al:ios:app_name" content="YouTube">
    <meta property="al:ios:url" content="vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <meta property="al:android:url" content="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=applinks">
    <meta property="al:android:app_name" content="YouTube">
    <meta property="al:android:package" content="com.google.android.youtube">
    <meta property="al:web:url" content="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA?feature=applinks">
    <meta property="og:type" content="profile">
    <meta property="og:video:tag" content="Template keren">
    <meta property="og:video:tag" content="Bos Trending">
    <meta property="og:video:tag" content="Musik DJ">
    <meta property="og:video:tag" content="Lagu Tiktok">
    <meta property="og:video:tag" content="DJ Tiktok">
    <meta property="og:video:tag" content="Musik DJ Indonesia">
    <meta property="og:video:tag" content="Musik Indonesia">
    <meta property="og:video:tag" content="DJ Full Bass">
    <meta property="og:video:tag" content="Nofin Asia">
    <meta property="og:video:tag" content="Trap Nation">
    <meta property="og:video:tag" content="Musik 2020">
    <meta property="og:video:tag" content="avee player">
    <meta property="og:video:tag" content="DJ">
    <meta property="og:video:tag" content="FULL">
    <meta property="og:video:tag" content="BASS.">
    <meta property="og:video:tag" content="TERBARU">
    <meta property="fb:app_id" content="87741124305">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@youtube">
    <meta name="twitter:url" content="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <meta name="twitter:title" content="BOS TRENDING">
    <meta name="twitter:description" content="Selamat datang di Channel BOS TRENDING

Channel pengembangan musik DJ se ASIA...
Semoga isi dari channel DJ ini bisa menghibur kalian semua

Terimakasih buat yang sudah SUBSCRIBE karena kalian adalah semangat saya hari ini .

Salam Santuy Terhormat
BOS TRENDING 😁✌

FB : febrii s
IG  : @pebrisaputra156">
    <meta name="twitter:image" content="https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s900-c-k-c0x00ffffff-no-rj">
    <meta name="twitter:app:name:iphone" content="YouTube">
    <meta name="twitter:app:id:iphone" content="544007664">
    <meta name="twitter:app:name:ipad" content="YouTube">
    <meta name="twitter:app:id:ipad" content="544007664">
    <meta name="twitter:app:url:iphone" content="vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <meta name="twitter:app:url:ipad" content="vnd.youtube://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <meta name="twitter:app:name:googleplay" content="YouTube">
    <meta name="twitter:app:id:googleplay" content="com.google.android.youtube">
    <meta name="twitter:app:url:googleplay" content="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <link itemprop="url" href="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <meta itemprop="name" content="BOS TRENDING">
    <meta itemprop="description" content="Selamat datang di Channel BOS TRENDING

Channel pengembangan musik DJ se ASIA...
Semoga isi dari channel DJ ini bisa menghibur kalian semua

Terimakasih buat yang sudah SUBSCRIBE karena kalian adalah semangat saya hari ini .

Salam Santuy Terhormat
BOS TRENDING 😁✌

FB : febrii s
IG  : @pebrisaputra156">
    <meta itemprop="paid" content="false">
    <meta itemprop="channelId" content="UCY1tcLXO3mvPn7CPzujcRPA">
    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
      <link itemprop="url" href="https://www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
      <link itemprop="name" content="BOS TRENDING">
    </span>
    <script type="application/ld+json" nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https:\/\/www.youtube.com\/channel\/UCY1tcLXO3mvPn7CPzujcRPA",
            "name": "BOS TRENDING"
          }
        }]
      }
    </script>
    <link itemprop="thumbnailUrl" href="https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s900-c-k-c0x00ffffff-no-rj">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="https://yt3.googleusercontent.com/ytc/AL5GRJW92d3Mj5zXiaugvWa0iVZeinKyoHyiNdxdD2x3zg=s900-c-k-c0x00ffffff-no-rj">
      <meta itemprop="width" content="900">
      <meta itemprop="height" content="900">
    </span>
    <meta itemprop="isFamilyFriendly" content="true">
    <meta itemprop="regionsAllowed" content="AQ,AS,MO,BL,CG,CH,TM,IN,DM,MW,CR,IQ,CM,GE,PT,ER,UM,IR,GM,EC,MA,QA,LC,FM,GW,NO,TF,CC,AO,FI,GU,GL,NR,ZA,NL,DZ,GF,AE,ES,BT,IS,TK,CX,VN,MR,SY,SR,CL,CU,IM,CV,MM,SD,PE,JP,SC,SJ,SV,GA,GD,SL,MN,SZ,MQ,GN,GG,SX,PR,EE,HK,KM,SI,AF,AZ,BS,ST,GB,AG,PF,KZ,BM,LK,TH,EH,VG,BE,MX,DO,AW,AT,GH,MD,TC,IO,UG,GT,BW,MP,MT,OM,FR,NG,RW,SK,BD,KI,AM,MF,PH,BR,MG,LT,ME,TW,MH,KP,AU,RS,IT,ML,BN,KE,BZ,LI,HT,NI,IL,CY,CF,JM,MC,RU,VI,VU,SO,FK,LY,PA,MZ,NE,VC,IE,BG,TR,CZ,BA,BV,FJ,HR,CI,BQ,HN,MV,EG,VA,BI,NA,AI,GR,KG,TZ,MU,YT,CA,TD,SA,AX,RE,RO,ET,AL,KH,FO,UZ,PL,TG,HM,SS,LB,LS,GS,VE,TJ,BJ,TN,TO,LR,KN,YE,NC,LV,JO,BY,TV,LA,SN,WF,SB,MK,NZ,SH,ID,PY,WS,SG,CN,BF,US,CO,GQ,GI,CD,KR,PG,KY,DK,TL,GP,ZM,LU,CW,DJ,NF,CK,GY,ZW,PS,HU,SE,PN,MS,AD,JE,UA,PK,BB,BH,BO,MY,UY,SM,DE,TT,NU,AR,KW,PM,NP,PW">
    <link rel="alternate" href="android-app://com.google.android.youtube/http/www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <link rel="alternate" href="ios-app://544007664/vnd.youtube/www.youtube.com/channel/UCY1tcLXO3mvPn7CPzujcRPA">
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      (function serverContract() {
        window['ytPageType'] = "channel";
        window['ytCommand'] = {
          "clickTrackingParams": "IhMIs5Ga5uqF_QIVFrpjBh1rDAGMMghleHRlcm5hbA==",
          "commandMetadata": {
            "webCommandMetadata": {
              "url": "/@BOSTRENDING/about",
              "webPageType": "WEB_PAGE_TYPE_CHANNEL",
              "rootVe": 3611,
              "apiUrl": "/youtubei/v1/browse"
            },
            "resolveUrlCommandMetadata": {
              "isVanityUrl": true
            }
          },
          "browseEndpoint": {
            "browseId": "UCY1tcLXO3mvPn7CPzujcRPA",
            "params": "EgVhYm91dLgBAPIGBAoCEgA%3D"
          }
        };
        window['ytUrl'] = '\/@BOSTRENDING\/about';
        var a = window;
        (function(e) {
          var c = window;
          c.getInitialCommand = function() {
            return e
          };
          c.loadInitialCommand && c.loadInitialCommand(c.getInitialCommand())
        })(a.ytCommand);
        (function(e, c, l, f, g, h, k) {
          var d = window;
          d.getInitialData = function() {
            var b = window;
            b.ytcsi && b.ytcsi.tick("pr", null, "");
            b = {
              page: e,
              endpoint: c,
              response: l
            };
            f && (b.playerResponse = f);
            g && (b.reelWatchSequenceResponse = g);
            k && (b.url = k);
            h && (b.previousCsn = h);
            return b
          };
          d.loadInitialData && d.loadInitialData(d.getInitialData())
        })(a.ytPageType, a.ytCommand, a.ytInitialData, a.ytInitialPlayerResponse, a.ytInitialReelWatchSequenceResponse, a.ytPreviousCsn, a.ytUrl);
      })();
    </script>
    <link rel="stylesheet" href="https://www.youtube.com/s/desktop/5191a190/cssbin/www-main-desktop-watch-page-skeleton.css" name="www-main-desktop-watch-page-skeleton" nonce="FZXT8KxmgeDUcD6KMQCz7Q">
    <div id="watch-page-skeleton" rounded-container class="watch-skeletonhidden">
      <div id="container">
        <div id="related">
          <div class="autoplay skeleton-light-border-bottom">
            <div id="upnext" class="skeleton-bg-color"></div>
            <div class="video-skeleton">
              <div class="video-details">
                <div class="thumbnail skeleton-bg-color"></div>
                <div class="details flex-1">
                  <div class="video-title text-shell skeleton-bg-color"></div>
                  <div class="video-meta text-shell skeleton-bg-color"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div class="video-skeleton">
            <div class="video-details">
              <div class="thumbnail skeleton-bg-color"></div>
              <div class="details flex-1">
                <div class="video-title text-shell skeleton-bg-color"></div>
                <div class="video-meta text-shell skeleton-bg-color"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="info-container">
          <div id="primary-info" class="skeleton-light-border-bottom">
            <div id="title" class="text-shell skeleton-bg-color"></div>
            <div id="info">
              <div id="count" class="text-shell skeleton-bg-color"></div>
              <div class="flex-1"></div>
              <div id="menu">
                <div class="menu-button skeleton-bg-color"></div>
                <div class="menu-button skeleton-bg-color"></div>
                <div class="menu-button skeleton-bg-color"></div>
                <div class="menu-button skeleton-bg-color"></div>
                <div class="menu-button skeleton-bg-color"></div>
              </div>
            </div>
          </div>
          <div id="secondary-info" class="skeleton-light-border-bottom">
            <div id="top-row">
              <div id="video-owner" class="flex-1">
                <div id="channel-icon" class="skeleton-bg-color"></div>
                <div id="upload-info" class="flex-1">
                  <div id="owner-name" class="text-shell skeleton-bg-color"></div>
                  <div id="published-date" class="text-shell skeleton-bg-color"></div>
                </div>
              </div>
              <div id="subscribe-button" class="skeleton-bg-color"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.tick('gcc', null, '');
      }
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      ytcfg.set({
        "CSI_SERVICE_NAME": 'youtube',
        "TIMING_INFO": {}
      })
    </script>
    <script nonce="bVoe_E1tNY4Eh1lbCZ-0Xw">
      if (window.ytcsi) {
        window.ytcsi.info('st', 67.0, '');
      }
    </script>
  </body>
</html>