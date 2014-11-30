var i18n = jQuery.extend({}, i18n || {}, {
    dcmvcal: {
        dateformat: {
            "fulldaykey": "ddMMyyyy",
            "fulldayshow": "d L yyyy",
            "fulldayvalue": "d/M/yyyy", 
            "Md": "W d/M",
            "nDaysView": "d/M",
            "listViewDate": "d L yyyy",
            "Md3": "d L",
            "separator": "/",
            "year_index": 2,
            "month_index": 1,
            "day_index": 0,
            "day": "d",
            "sun2": "Ne",
            "mon2": "Po",
            "tue2": "Út",
            "wed2": "St",
            "thu2": "Čt",
            "fri2": "Pá",
            "sat2": "So",
            "sun": "Ned",
            "mon": "Pon",
            "tue": "Úte",
            "wed": "Stř",
            "thu": "Čtv",
            "fri": "Pát",
            "sat": "Sob",
            "sunday": "Sunday",
            "monday": "Monday",
            "tuesday": "Tuesday",
            "wednesday": "Wednesday",
            "thursday": "Thursday",
            "friday": "Friday",
            "saturday": "Saturday",
            "jan": "Led",
            "feb": "Úno",
            "mar": "Bře",
            "apr": "Dub",
            "may": "Kvě",
            "jun": "Čer",
            "jul": "Čvec",
            "aug": "Srp",
            "sep": "Zář",
            "oct": "Říj",
            "nov": "Lis",
            "dec": "Pro",
            "l_jan": "Leden",
            "l_feb": "Únor",
            "l_mar": "Březen",
            "l_apr": "Duben",
            "l_may": "Květen",
            "l_jun": "Červen",
            "l_jul": "Červenec",
            "l_aug": "Srpen",
            "l_sep": "Září",
            "l_oct": "Říjen",
            "l_nov": "Listopad",
            "l_dec": "Prosinec"
        },
        "no_implemented": "Neprovedeno",
        "to_date_view": "Klikněte pro zobrazení aktuálního datumu",
        "i_undefined": "Nedefinováno",
        "allday_event": "Na celé dny",
        "repeat_event": "Zopakovat",
        "time": "Čas",
        "event": "Rezervace",
        "location": "Místo",
        "participant": "Spoluúčastník",
        "get_data_exception": "Výjimka pro data",
        "new_event": "Nová rezervace",
        "confirm_delete_event": "Chcete smazat rezervaci ? ",
        "confrim_delete_event_or_all": "Chcete smazat celou opakovanou rezervaci nebo jen tuto ? \r\nKlikněte [OK] pro smazání této rezervace, klikněte [Cancel] pro smazání celé opakované rezervace",
        "data_format_error": "Chybný formát ! ",
        "invalid_title": "Popisek rezervace je prázdný nebo obsahuje ($<>)",
        "view_no_ready": "Výpis není připraven",
        "example": "například, dovolená Novákovi",
        "content": "Co",
        "create_event": "Vytvořit rezervaci",
        "update_detail": "Upravit detaily",
        "click_to_detail": "Prohlédnout detaily",
        "i_delete": "Smazat",
        "i_save": "Uložit",
        "i_close": "Zavřít",
        "day_plural": "dny",
        "others": "Ostatní",
        "item": "",
        "loading_data":"Načítání dat ...",
        "request_processed":"Požadavek se zpracovává ...",
        "success":"Hotovo !",
        "are_you_sure_delete":"Určitě smazat? ",
        "ok":"Ok",
        "cancel":"NEmazat",
        "manage_the_calendar":"Upravit kalendář",
        "error_occurs":"Došlo k chybě",
        "color":"Barva",
        "invalid_date_format":"Chybný formát datumu",
        "invalid_time_format":"Chybný formát času",
        "_simbol_not_allowed":"$<> nelze upravovat",
        "subject":"Subjekt",
        "time":"Čas",
        "to":"Do",
        "all_day_event":"Na celé dny",
        "location":"Místo",
        "remark":"Popisek",
        "click_to_create_new_event":"Vytvořit novou rezervaci",
        "new_event":"Nová rezervace",
        "click_to_back_to_today":"Klikni pro návrat k dnešku",
        "today":"Dnešek",
        "sday":"Den",
        "week":"Týden",
        "month":"Měsíc",
        "ndays":"Dny",
        "list":"List",
        "nmonth":"nMěsíců",
        "refresh_view":"Obnovit zobrazení",
        "refresh":"Obnovit",
        "prev":"Zpět",
        "next":"Další",
        "loading":"Načítání",
        "error_overlapping":"This event is overlapping another event",
        "sorry_could_not_load_your_data":"Zkuste načít data znovu",
        "first":"First",
        "second":"Second",
        "third":"Third",
        "fourth":"Fourth",
        "last":"last",
        "repeat":"Repeat: ",
        "edit":"Edit",
        "edit_recurring_event":"Edit recurring event",
        "would_you_like_to_change_only_this_event_all_events_in_the_series_or_this_and_all_following_events_in_the_series":"Would you like to change only this event, all events in the series, or this and all following events in the series?",
        "only_this_event":"Only this event",
        "all_other_events_in_the_series_will_remain_the_same":"All other events in the series will remain the same.",
        "following_events":"Following events",
        "this_and_all_the_following_events_will_be_changed":"This and all the following events will be changed.",
        "any_changes_to_future_events_will_be_lost":"Any changes to future events will be lost.",
        "all_events":"All events",
        "all_events_in_the_series_will_be_changed":"All events in the series will be changed.",
        "any_changes_made_to_other_events_will_be_kept":"Any changes made to other events will be kept.",
        "cancel_this_change":"Cancel this change",
        "delete_recurring_event":"Delete recurring event",
        "would_you_like_to_delete_only_this_event_all_events_in_the_series_or_this_and_all_future_events_in_the_series":"Would you like to delete only this event, all events in the series, or this and all future events in the series?",
        "only_this_instance":"Only this instance",
        "all_other_events_in_the_series_will_remain":"All other events in the series will remain.",
        "all_following":"All following",
        "this_and_all_the_following_events_will_be_deleted":"This and all the following events will be deleted.",
        "all_events_in_the_series":"All events in the series",
        "all_events_in_the_series_will_be_deleted":"All events in the series will be deleted.",
        "repeats":"Repeats",
        "daily":"Daily",
        "every_weekday_monday_to_friday":"Every weekday (Monday to Friday)",
        "every_monday_wednesday_and_friday":"Every Monday, Wednesday, and Friday",
        "every_tuesday_and_thursday":"Every Tuesday, and Thursday",
        "weekly":"Weekly",
        "monthly":"Monthly",
        "yearly":"Yearly",
        "repeat_every":"Repeat every:",
        "weeks":"weeks",
        "repeat_on":"Repeat on:",
        "repeat_by":"Repeat by:",
        "day_of_the_month":"day of the month",
        "day_of_the_week":"day of the week",
        "starts_on":"Starts on:",
        "ends":"Ends:",
        "never":" Never",
        "after":"After",
        "occurrences":"occurrences",
        "summary":"Summary:",
        "every":"Every",
        "weekly_on_weekdays":"Weekly on weekdays",
        "weekly_on_monday_wednesday_friday":"Weekly on Monday, Wednesday, Friday",
        "weekly_on_tuesday_thursday":"Weekly on Tuesday, Thursday",
        "on":"on",
        "on_day":"on day",
        "on_the":"on the",
        "months":"months",
        "annually":"Annually",
        "years":"years",
        "once":"Once",
        "times":"times",
        "readmore":"read more",
        "readmore_less":"less",
        "readmore":"read more",
        "readmore_less":"less",
        "until":"until"
    }
});
