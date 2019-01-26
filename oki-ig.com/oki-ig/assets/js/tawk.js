(function(global) {
    global.$_Tawk_AccountKey = '5b06731210b99c7b36d441b9';
    global.$_Tawk_WidgetId = 'default';
    global.$_Tawk_Unstable = false;
    global.$_Tawk = global.$_Tawk || {};
    (function(global) {
        global.$_Tawk.widgetSettings = {
            "t": "inline",
            "h": 0,
            "w": 0,
            "minh": 40,
            "minw": 260,
            "pos": "br",
            "woc": "max",
            "dsw": false,
            "lc": "en",
            "hwol": false,
            "hwof": false,
            "hab": false,
            "dws": false,
            "hwt": true,
            "thm": {
                "hbg": "#76b51b",
                "htx": "#ffffff",
                "topc": 5,
                "btmc": 0,
                "aBblBg": "#6aa318",
                "aBblTx": "#ffffff",
                "vBblBg": "#e5e5e5",
                "vBblTx": "#333333"
            },
            "bbl": {
                "name": "42",
                "type": "gallery",
                "width": 142,
                "height": 70,
                "zIndex": 1,
                "rightOffset": 69,
                "bottomOffset": 44,
                "topOffset": 0,
                "leftOffset": 0,
                "rotate": 0
            },
            "mw": "round",
            "dw": "full",
            "wv": 0,
            "ws": null,
            "offlineForm": null,
            "prechatForm": null,
            "onlineGreeting": {
                "actionMessage": "Type here and press enter..",
                "shortMessage": "Online",
                "longMessage": "We are live and ready to chat with you now. Say something to start a live chat."
            },
            "awayGreeting": {
                "shortMessage": "Away",
                "longMessage": ""
            }
        };
    })(global);
    (function(b) {
        var a = {
            pluralFormFunction: function(a) {
                return 1 === a ? "one" : "other"
            },
            form: {}
        };
        a.form.SaveButton = {
            message: "Save"
        };
        a.form.SubmitButton = {
            message: "Submit"
        };
        a.form.StartChatButton = {
            message: "Start Chat"
        };
        a.form.CancelButton = {
            message: "Cancel"
        };
        a.form.CloseButton = {
            message: "Close"
        };
        a.form.SendButton = {
            message: "Send"
        };
        a.form.NamePlaceholder = {
            message: "your name.."
        };
        a.form.EmailPlaceholder = {
            message: "your email.."
        };
        a.form.QuestionPlaceholder = {
            message: "your query.."
        };
        a.form.DepartmentsPlaceholder = {
            message: "select department.."
        };
        a.form.MessagePlaceholder = {
            message: "your message.."
        };
        a.form.NameErrorMessage = {
            message: "Name must be provided."
        };
        a.form.EmailErrorMessage = {
            message: "Invalid email address."
        };
        a.form.DepartmentsErrorMessage = {
            message: "Department is required."
        };
        a.form.QuestionErrorMessage = {
            message: "Question is required and must not be longer then 500 characters."
        };
        a.form.MessageErrorMessage = {
            message: "Message is required and must not be longer then 500 characters."
        };
        a.form.NameFormMessage = {
            message: "Please change your name so we can recognize you the next time."
        };
        a.form.EmailTranscriptFormMessage = {
            message: "Please fill out the form below to have this conversation sent to your email address."
        };
        a.form.PreChatFormMessage = {
            message: "Please fill out the form below to start chatting with the next available agent."
        };
        a.form.OfflineFormMessage = {
            message: "Please fill out the form below and we will get back to you as soon as possible."
        };
        a.form.PreChatFormMessageProfile = {
            message: "Please fill out the form below to start chatting with me."
        };
        a.form.OfflineMessageSent = {
            message: "Your message was sent successfully!"
        };
        a.form.OfflineMessageNotSent = {
            message: "Your message was not delivered, please retry"
        };
        a.form.EndChatTitle = {
            message: "Are you sure you want to end this chat?"
        };
        a.form.RequiredErrorMessage = {
            message: "This field is required"
        };
        a.form.PhoneErrorMessage = {
            message: "Invalid phone number"
        };
        a.form.saved = {
            message: "Saved"
        };
        a.form.errorSaving = {
            message: "Unable to save. Please try again"
        };
        a.form.visitButton = {
            message: "Visit tawk.to"
        };
        a.form.SubmittingProcess = {
            message: "Submitting"
        };
        a.form.EndingProcess = {
            message: "Ending"
        };
        a.form.SendingProcess = {
            message: "Sending"
        };
        a.form.SavingProcess = {
            message: "Saving"
        };
        a.form.EmailTranscriptTo = {
            message: "Email transcript to"
        };
        a.form.name = {
            message: "Name"
        };
        a.form.email = {
            message: "Email"
        };
        a.form.department = {
            message: "Department"
        };
        a.form.message = {
            message: "Message"
        };
        a.form.any = {
            message: "Any"
        };
        a.form.phone = {
            message: "Phone"
        };
        a.form.question = {
            message: "Question"
        };
        a.form.saving = {
            message: "Saving.."
        };
        a.form.SubmittedFrom = {
            message: "Submitted From"
        };
        a.form.sendAgain = {
            message: "Send Again"
        };
        a.rollover = {};
        a.rollover.popOut = {
            message: "Pop out"
        };
        a.rollover.minimize = {
            message: "Minimize"
        };
        a.rollover.resize = {
            message: "Resize"
        };
        a.rollover.resendMessage = {
            message: "Resend message"
        };
        a.rollover.emailTranscriptOption = {
            message: "Email Transcript"
        };
        a.rollover.positiveRating = {
            message: "Rate this conversation with +1"
        };
        a.rollover.negativeRating = {
            message: "Rate this conversation with -1"
        };
        a.rollover.maximize = {
            message: "Maximize"
        };
        a.rollover.end = {
            message: "End Chat"
        };
        a.rollover.uploadFile = {
            message: "Upload File"
        };
        a.rollover.videoCall = {
            message: "Video Call"
        };
        a.rollover.voiceCall = {
            message: "Voice Call"
        };
        a.rollover.screenShare = {
            message: "Screen Share"
        };
        a.transcript = {};
        a.transcript.transcriptSubject = {
            message: "Chat email transcript on #host started on #startedOn",
            vars: ["host", "startedOn"]
        };
        a.transcript.transcriptStartedOn = {
            message: "#dateString, at #time",
            vars: ["dateString", "time"]
        };
        a.transcript.me = {
            message: "Me"
        };
        a.transcript.CONVERSATION_STARTED_ON = {
            message: "Conversation started on"
        };
        a.overlay = {};
        a.overlay.inactive = {
            message: "Click here to reinitiate the chat"
        };
        a.overlay.maintenance = {
            message: "Chat is in maintenance"
        };
        a.overlay.cookiesOff = {
            message: "You can't use this chat because your browser's cookie functionality is turned off. Please turn it on and refresh your browser."
        };
        a.overlay.tawkContent = {
            message: "This widget is powered by tawk.to - a free messaging application that lets you monitor and engage with the visitors on your website."
        };
        a.chat = {};
        a.chat.visitor_name = {
            message: "Visitor name"
        };
        a.chat.like = {
            message: "You liked this conversation"
        };
        a.chat.dislike = {
            message: "You disliked this conversation"
        };
        a.chat.remove_rate = {
            message: "You removed your rating for this conversation"
        };
        a.chat.sayButton = {
            message: "Say"
        };
        a.chat.hideButton = {
            message: "Hide Chat"
        };
        a.chat.send_mail = {
            message: "Send Mail"
        };
        a.chat.AGENT_JOIN_CONVERSATION = {
            message: "#n has joined the conversation",
            vars: ["n"]
        };
        a.chat.AGENT_LEFT_CONVERSATION = {
            message: "#n has left the conversation",
            vars: ["n"]
        };
        a.chat.agentIsTyping = {
            message: "#strongStart #n #strongEnd is typing",
            vars: ["n", "strongStart", "strongEnd"]
        };
        a.chat.mobileAgentIsTyping = {
            message: "#n is typing..",
            vars: ["n"]
        };
        a.chat.defaultName = {
            message: "You (change name)"
        };
        a.chat.mobileEnterText = {
            message: "Say something..."
        };
        a.chat.messageQueuedTitile = {
            message: "message queued"
        };
        a.chat.live_chat = {
            message: "Live Chat"
        };
        a.chat.notificationTitle = {
            message: "notification"
        };
        a.chat.departmentIsOffline = {
            message: "Department #strongStart #departmentName #strongEnd is currently offline. You might be served by another department.",
            vars: ["departmentName", "strongStart", "strongEnd"]
        };
        a.chat.departmentIsAway = {
            message: "Department #strongStart #departmentName #strongEnd is currently away.",
            vars: ["departmentName", "strongStart", "strongEnd"]
        };
        a.chat.mobileName = {
            message: "You"
        };
        a.chat.chatEnded = {
            message: "Your chat has ended"
        };
        a.chat.newChat = {
            message: "Start New Chat"
        };
        a.chat.newMessages = {
            message: "New messages"
        };
        a.chat.say_something = {
            message: "Type here and press enter.."
        };
        a.chat.downloadFile = {
            message: "Download File"
        };
        a.chat.limit50 = {
            message: "The maximum file size is 50MB, please upload a smaller file."
        };
        a.chat.limit2 = {
            message: "The maximum file size is 2MB for mobile browsers, please upload a smaller file."
        };
        a.chat.generalUploadError = {
            message: 'Unable to upload file "#fileName", please try again.',
            vars: ["fileName"]
        };
        a.chat.retry = {
            message: "Retry."
        };
        a.chat.dragDropText = {
            message: "Drop files here to upload"
        };
        a.chat.pasted_image_title = {
            message: "Pasted image at #dateTime",
            vars: ["dateTime"]
        };
        a.chat.chat_qm = {
            message: "Chat?"
        };
        a.chat.we_are_live = {
            message: "We are live and ready to chat with you now. Say something to start a live chat."
        };
        a.chat.profile_prechat_text = {
            message: "Please fill out the form below to start chatting with me."
        };
        a.chat.incoming_call_message = {
            message: "Incoming Call"
        };
        a.chat.accept_call = {
            message: "Accept"
        };
        a.chat.decline_call = {
            message: "Decline"
        };
        a.chat.video_call_error = {
            message: "Video call is not available."
        };
        a.chat.voice_call_error = {
            message: "Voice call is not available."
        };
        a.chat.screen_share_error = {
            message: "Screen share is not available."
        };
        a.chat.message_too_long = {
            message: "Message cannot exceed 5000 characters"
        };
        a.chat.message_not_delivered = {
            message: "Message not delivered, click here to resend."
        };
        a.chat.visitor_ringing = {
            message: "Calling..."
        };
        a.chat.agent_ringing = {
            message: "Incoming Call"
        };
        a.chat.ongoing_call = {
            message: "Ongoing Call"
        };
        a.chat.completed_call = {
            message: "Call ended"
        };
        a.chat.missed_agent = {
            message: "Your call was missed"
        };
        a.chat.missed_visitor = {
            message: "You missed a call"
        };
        a.chat.rejected_call = {
            message: "You rejected this call"
        };
        a.chat.call_end_details = {
            message: "Started at #startedOn and lasted #duration",
            vars: ["startedOn", "duration"]
        };
        a.chat.call_started_on = {
            message: "Started at #startedOn",
            vars: ["startedOn"]
        };
        a.chat.error_title = {
            message: "Error"
        };
        a.chat.call_error_load = {
            message: "Unable to load call details."
        };
        a.status = {};
        a.status.online = {
            message: "Online"
        };
        a.status.away = {
            message: "Away"
        };
        a.status.offline = {
            message: "Offline"
        };
        a.months = {};
        a.months["0"] = {
            message: "January"
        };
        a.months["1"] = {
            message: "February"
        };
        a.months["2"] = {
            message: "March"
        };
        a.months["3"] = {
            message: "April"
        };
        a.months["4"] = {
            message: "May"
        };
        a.months["5"] = {
            message: "June"
        };
        a.months["6"] = {
            message: "July"
        };
        a.months["7"] = {
            message: "August"
        };
        a.months["8"] = {
            message: "September"
        };
        a.months["9"] = {
            message: "October"
        };
        a.months["10"] = {
            message: "November"
        };
        a.months["11"] = {
            message: "December"
        };
        a.days = {};
        a.days["0"] = {
            message: "Sunday"
        };
        a.days["1"] = {
            message: "Monday"
        };
        a.days["2"] = {
            message: "Tuesday"
        };
        a.days["3"] = {
            message: "Wednesday"
        };
        a.days["4"] = {
            message: "Thursday"
        };
        a.days["5"] = {
            message: "Friday"
        };
        a.days["6"] = {
            message: "Saturday"
        };
        a.menu = {};
        a.menu.change_name = {
            message: "Change Name"
        };
        a.menu.sound_on = {
            message: "Sound On"
        };
        a.menu.sound_off = {
            message: "Sound Off"
        };
        a.menu.about_tawk = {
            message: "About this app"
        };
        a.menu.print_transcript = {
            message: "Print Transcript"
        };
        a.menu.Options = {
            message: "Options"
        };
        a.menu.CloseMenu = {
            message: "Close menu"
        };
        a.menu.AgentList = {
            message: "Agent List"
        };
        a.notifications = {};
        a.notifications.maximum_file_upload_warning = {
            message: "#strongStartWarning :#strongEnd Sorry, file transfer is limited to #strongStart#limitFileNumber#strongEnd files at a time. Please try the following file(s) again :",
            vars: ["strongStart", "strongEnd", "limitFileNumber"]
        };
        a.notifications.maximum_size_upload_warning = {
            message: "#strongStartWarning :#strongEnd Sorry, file transfer is limited to #strongStart#limitFileSize#strongEnd per file. Please compress the following file(s) and try again.",
            vars: ["strongStart", "strongEnd", "limitFileSize"]
        };
        a.notifications.retry = {
            message: "Retry"
        };
        a.chat = a.chat || {};
        a.chat.messageQueuedText = {
            vars: ["strongStart", "strongEnd"],
            pluralVars: ["t"],
            message: {
                one: "Estimated wait time is #strongStart #t minute #strongEnd",
                other: "Estimated wait time is #strongStart #t minutes #strongEnd"
            }
        };
        a.chat.newMessage = {
            vars: [],
            pluralVars: ["num"],
            message: {
                one: "#num new message",
                other: "#num new messages"
            }
        };
        a.chat.seconds = {
            vars: [],
            pluralVars: ["num"],
            message: {
                one: "#num second",
                other: "#num seconds"
            }
        };
        a.chat.minutes = {
            vars: [],
            pluralVars: ["num"],
            message: {
                one: "#num minute",
                other: "#num minutes"
            }
        };
        a.chat.hours = {
            vars: [],
            pluralVars: ["num"],
            message: {
                one: "#num hour",
                other: "#num hours"
            }
        };
        b.$_Tawk.language = a;
        b.$_Tawk.languageUpdater && b.$_Tawk.languageUpdater()
    })("undefined" ===
        typeof global ? window : global);

    (function() {
        ! function(v) {
            var k;
            "undefined" != typeof window ? k = window : "undefined" != typeof global ? k = global : "undefined" != typeof self && (k = self);
            k.$__TawkEngine = v()
        }(function() {
            return function k(p, s, c) {
                function g(e, n) {
                    if (!s[e]) {
                        if (!p[e]) {
                            var w = "function" == typeof require && require;
                            if (!n && w) return w(e, !0);
                            if (q) return q(e, !0);
                            throw Error("Cannot find module '" + e + "'");
                        }
                        w = s[e] = {
                            exports: {}
                        };
                        p[e][0].call(w.exports, function(b) {
                            var c = p[e][1][b];
                            return g(c ? c : b)
                        }, w, w.exports, k, p, s, c)
                    }
                    return s[e].exports
                }
                for (var q = "function" ==
                        typeof require && require, n = 0; n < c.length; n++) g(c[n]);
                return g
            }({
                debug: [function(k, p, s) {
                    p.exports = k("n9i2g6")
                }, {}],
                n9i2g6: [function(k, p, s) {
                    p.exports = function() {
                        return function() {}
                    }
                }, {}],
                3: [function(k, p, s) {
                    function c() {}
                    p.exports = function(g, q, n) {
                        function e(c, b) {
                            if (0 >= e.count) throw Error("after called too many times");
                            --e.count;
                            c ? (k = !0, q(c), q = n) : 0 !== e.count || k || q(null, b)
                        }
                        var k = !1;
                        n = n || c;
                        e.count = g;
                        return 0 === g ? q() : e
                    }
                }, {}],
                4: [function(k, p, s) {
                    p.exports = function(c, g, q) {
                        var n = c.byteLength;
                        g = g || 0;
                        q = q || n;
                        if (c.slice) return c.slice(g,
                            q);
                        0 > g && (g += n);
                        0 > q && (q += n);
                        q > n && (q = n);
                        if (g >= n || g >= q || 0 === n) return new ArrayBuffer(0);
                        c = new Uint8Array(c);
                        for (var n = new Uint8Array(q - g), e = 0; g < q; g++, e++) n[e] = c[g];
                        return n.buffer
                    }
                }, {}],
                5: [function(k, p, s) {
                    (function(c) {
                        s.encode = function(g) {
                            g = new Uint8Array(g);
                            var q, n = g.length,
                                e = "";
                            for (q = 0; q < n; q += 3) e += c[g[q] >> 2], e += c[(g[q] & 3) << 4 | g[q + 1] >> 4], e += c[(g[q + 1] & 15) << 2 | g[q + 2] >> 6], e += c[g[q + 2] & 63];
                            2 === n % 3 ? e = e.substring(0, e.length - 1) + "=" : 1 === n % 3 && (e = e.substring(0, e.length - 2) + "==");
                            return e
                        };
                        s.decode = function(g) {
                            var q =
                                0.75 * g.length,
                                n = g.length,
                                e = 0,
                                k, p, b, u;
                            "=" === g[g.length - 1] && (q--, "=" === g[g.length - 2] && q--);
                            for (var s = new ArrayBuffer(q), x = new Uint8Array(s), q = 0; q < n; q += 4) k = c.indexOf(g[q]), p = c.indexOf(g[q + 1]), b = c.indexOf(g[q + 2]), u = c.indexOf(g[q + 3]), x[e++] = k << 2 | p >> 4, x[e++] = (p & 15) << 4 | b >> 2, x[e++] = (b & 3) << 6 | u & 63;
                            return s
                        }
                    })("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/")
                }, {}],
                6: [function(k, p, s) {
                    (function(c) {
                        function g(b) {
                            for (var c = 0; c < b.length; c++) {
                                var e = b[c];
                                if (e.buffer instanceof ArrayBuffer) {
                                    var g =
                                        e.buffer;
                                    if (e.byteLength !== g.byteLength) {
                                        var q = new Uint8Array(e.byteLength);
                                        q.set(new Uint8Array(g, e.byteOffset, e.byteLength));
                                        g = q.buffer
                                    }
                                    b[c] = g
                                }
                            }
                        }

                        function q(b, c) {
                            c = c || {};
                            var q = new e;
                            g(b);
                            for (var n = 0; n < b.length; n++) q.append(b[n]);
                            return c.type ? q.getBlob(c.type) : q.getBlob()
                        }

                        function n(b, c) {
                            g(b);
                            return new Blob(b, c || {})
                        }
                        var e = c.BlobBuilder || c.WebKitBlobBuilder || c.MSBlobBuilder || c.MozBlobBuilder,
                            k;
                        try {
                            k = 2 === (new Blob(["hi"])).size
                        } catch (s) {
                            k = !1
                        }
                        var b;
                        if (b = k) try {
                            b = 2 === (new Blob([new Uint8Array([1, 2])])).size
                        } catch (u) {
                            b = !1
                        }
                        var L = e && e.prototype.append && e.prototype.getBlob;
                        c = k ? b ? c.Blob : n : L ? q : void 0;
                        p.exports = c
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {}],
                7: [function(k, p, s) {}, {}],
                8: [function(k, p, s) {
                    function c(g) {
                        if (g) {
                            for (var q in c.prototype) g[q] = c.prototype[q];
                            return g
                        }
                    }
                    p.exports = c;
                    c.prototype.on = c.prototype.addEventListener = function(c, q) {
                        this._callbacks = this._callbacks || {};
                        (this._callbacks[c] = this._callbacks[c] || []).push(q);
                        return this
                    };
                    c.prototype.once = function(c, q) {
                        function n() {
                            e.off(c,
                                n);
                            q.apply(this, arguments)
                        }
                        var e = this;
                        this._callbacks = this._callbacks || {};
                        n.fn = q;
                        this.on(c, n);
                        return this
                    };
                    c.prototype.off = c.prototype.removeListener = c.prototype.removeAllListeners = c.prototype.removeEventListener = function(c, q) {
                        this._callbacks = this._callbacks || {};
                        if (0 == arguments.length) return this._callbacks = {}, this;
                        var n = this._callbacks[c];
                        if (!n) return this;
                        if (1 == arguments.length) return delete this._callbacks[c], this;
                        for (var e, k = 0; k < n.length; k++)
                            if (e = n[k], e === q || e.fn === q) {
                                n.splice(k, 1);
                                break
                            }
                        return this
                    };
                    c.prototype.emit = function(c) {
                        this._callbacks = this._callbacks || {};
                        var q = [].slice.call(arguments, 1),
                            n = this._callbacks[c];
                        if (n)
                            for (var n = n.slice(0), e = 0, k = n.length; e < k; ++e) n[e].apply(this, q);
                        return this
                    };
                    c.prototype.listeners = function(c) {
                        this._callbacks = this._callbacks || {};
                        return this._callbacks[c] || []
                    };
                    c.prototype.hasListeners = function(c) {
                        return !!this.listeners(c).length
                    }
                }, {}],
                9: [function(k, p, s) {
                    p.exports = function(c, g) {
                        var q = function() {};
                        q.prototype = g.prototype;
                        c.prototype = new q;
                        c.prototype.constructor =
                            c
                    }
                }, {}],
                10: [function(k, p, s) {
                    p.exports = k("./lib/")
                }, {
                    "./lib/": 11
                }],
                11: [function(k, p, s) {
                    p.exports = k("./socket");
                    p.exports.parser = k("engine.io-parser")
                }, {
                    "./socket": 12,
                    "engine.io-parser": 20
                }],
                12: [function(k, p, s) {
                    (function(c) {
                        function g(x, e) {
                            if (!(this instanceof g)) return new g(x, e);
                            e = e || {};
                            x && "object" == typeof x && (e = x, x = null);
                            x ? (x = b(x), e.hostname = x.host, e.secure = "https" == x.protocol || "wss" == x.protocol, e.port = x.port, x.query && (e.query = x.query)) : e.host && (e.hostname = b(e.host).host);
                            this.secure = null != e.secure ?
                                e.secure : c.location && "https:" == location.protocol;
                            e.hostname && !e.port && (e.port = this.secure ? "443" : "80");
                            this.agent = e.agent || !1;
                            this.hostname = e.hostname || (c.location ? location.hostname : "localhost");
                            this.port = e.port || (c.location && location.port ? location.port : this.secure ? 443 : 80);
                            this.query = e.query || {};
                            "string" == typeof this.query && (this.query = L.decode(this.query));
                            this.upgrade = !1 !== e.upgrade;
                            this.path = (e.path || "/engine.io").replace(/\/$/, "") + "/";
                            this.forceJSONP = !!e.forceJSONP;
                            this.jsonp = !1 !== e.jsonp;
                            this.forceBase64 = !!e.forceBase64;
                            this.enablesXDR = !!e.enablesXDR;
                            this.timestampParam = e.timestampParam || "t";
                            this.timestampRequests = e.timestampRequests;
                            this.transports = e.transports || ["polling", "websocket"];
                            this.readyState = "";
                            this.writeBuffer = [];
                            this.policyPort = e.policyPort || 843;
                            this.rememberUpgrade = e.rememberUpgrade || !1;
                            this.binaryType = null;
                            this.onlyBinaryUpgrades = e.onlyBinaryUpgrades;
                            this.perMessageDeflate = !1 !== e.perMessageDeflate ? e.perMessageDeflate || {} : !1;
                            !0 === this.perMessageDeflate && (this.perMessageDeflate = {});
                            this.perMessageDeflate &&
                                null == this.perMessageDeflate.threshold && (this.perMessageDeflate.threshold = 1024);
                            this.pfx = e.pfx || null;
                            this.key = e.key || null;
                            this.passphrase = e.passphrase || null;
                            this.cert = e.cert || null;
                            this.ca = e.ca || null;
                            this.ciphers = e.ciphers || null;
                            this.rejectUnauthorized = void 0 === e.rejectUnauthorized ? !0 : e.rejectUnauthorized;
                            var q = "object" == typeof c && c;
                            q.global === q && (e.extraHeaders && 0 < Object.keys(e.extraHeaders).length) && (this.extraHeaders = e.extraHeaders);
                            this.open()
                        }
                        var q = k("./transports"),
                            n = k("component-emitter"),
                            e =
                            k("debug")("engine.io-client:socket"),
                            s = k("indexof"),
                            w = k("engine.io-parser"),
                            b = k("parseuri"),
                            u = k("parsejson"),
                            L = k("parseqs");
                        p.exports = g;
                        g.priorWebsocketSuccess = !1;
                        n(g.prototype);
                        g.protocol = w.protocol;
                        g.Socket = g;
                        g.Transport = k("./transport");
                        g.transports = k("./transports");
                        g.parser = k("engine.io-parser");
                        g.prototype.createTransport = function(b) {
                            e('creating transport "%s"', b);
                            var c = this.query,
                                g = {},
                                n;
                            for (n in c) c.hasOwnProperty(n) && (g[n] = c[n]);
                            g.EIO = w.protocol;
                            g.transport = b;
                            this.id && (g.sid = this.id);
                            return new q[b]({
                                agent: this.agent,
                                hostname: this.hostname,
                                port: this.port,
                                secure: this.secure,
                                path: this.path,
                                query: g,
                                forceJSONP: this.forceJSONP,
                                jsonp: this.jsonp,
                                forceBase64: this.forceBase64,
                                enablesXDR: this.enablesXDR,
                                timestampRequests: this.timestampRequests,
                                timestampParam: this.timestampParam,
                                policyPort: this.policyPort,
                                socket: this,
                                pfx: this.pfx,
                                key: this.key,
                                passphrase: this.passphrase,
                                cert: this.cert,
                                ca: this.ca,
                                ciphers: this.ciphers,
                                rejectUnauthorized: this.rejectUnauthorized,
                                perMessageDeflate: this.perMessageDeflate,
                                extraHeaders: this.extraHeaders
                            })
                        };
                        g.prototype.open = function() {
                            var b;
                            if (this.rememberUpgrade && g.priorWebsocketSuccess && -1 != this.transports.indexOf("websocket")) b = "websocket";
                            else {
                                if (0 === this.transports.length) {
                                    var e = this;
                                    setTimeout(function() {
                                        e.emit("error", "No transports available")
                                    }, 0);
                                    return
                                }
                                b = this.transports[0]
                            }
                            this.readyState = "opening";
                            try {
                                b = this.createTransport(b)
                            } catch (c) {
                                this.transports.shift();
                                this.open();
                                return
                            }
                            b.open();
                            this.setTransport(b)
                        };
                        g.prototype.setTransport = function(b) {
                            e("setting transport %s", b.name);
                            var c = this;
                            this.transport && (e("clearing existing transport %s", this.transport.name), this.transport.removeAllListeners());
                            this.transport = b;
                            b.on("drain", function() {
                                c.onDrain()
                            }).on("packet", function(b) {
                                c.onPacket(b)
                            }).on("error", function(b) {
                                c.onError(b)
                            }).on("close", function() {
                                c.onClose("transport close")
                            })
                        };
                        g.prototype.probe = function(b) {
                            function c() {
                                if (w.onlyBinaryUpgrades) {
                                    var q = !this.supportsBinary && w.transport.supportsBinary;
                                    A = A || q
                                }
                                A || (e('probe transport "%s" opened', b), F.send([{
                                        type: "ping",
                                        data: "probe"
                                    }]),
                                    F.once("packet", function(c) {
                                        A || ("pong" == c.type && "probe" == c.data ? (e('probe transport "%s" pong', b), w.upgrading = !0, w.emit("upgrading", F), F && (g.priorWebsocketSuccess = "websocket" == F.name, e('pausing current transport "%s"', w.transport.name), w.transport.pause(function() {
                                            A || "closed" == w.readyState || (e("changing transport and sending upgrade packet"), s(), w.setTransport(F), F.send([{
                                                type: "upgrade"
                                            }]), w.emit("upgrade", F), F = null, w.upgrading = !1, w.flush())
                                        }))) : (e('probe transport "%s" failed', b), c = Error("probe error"),
                                            c.transport = F.name, w.emit("upgradeError", c)))
                                    }))
                            }

                            function q() {
                                A || (A = !0, s(), F.close(), F = null)
                            }

                            function n(c) {
                                var g = Error("probe error: " + c);
                                g.transport = F.name;
                                q();
                                e('probe transport "%s" failed because of error: %s', b, c);
                                w.emit("upgradeError", g)
                            }

                            function k() {
                                n("transport closed")
                            }

                            function u() {
                                n("socket closed")
                            }

                            function p(b) {
                                F && b.name != F.name && (e('"%s" works - aborting "%s"', b.name, F.name), q())
                            }

                            function s() {
                                F.removeListener("open", c);
                                F.removeListener("error", n);
                                F.removeListener("close", k);
                                w.removeListener("close",
                                    u);
                                w.removeListener("upgrading", p)
                            }
                            e('probing transport "%s"', b);
                            var F = this.createTransport(b, {
                                    probe: 1
                                }),
                                A = !1,
                                w = this;
                            g.priorWebsocketSuccess = !1;
                            F.once("open", c);
                            F.once("error", n);
                            F.once("close", k);
                            this.once("close", u);
                            this.once("upgrading", p);
                            F.open()
                        };
                        g.prototype.onOpen = function() {
                            e("socket open");
                            this.readyState = "open";
                            g.priorWebsocketSuccess = "websocket" == this.transport.name;
                            this.emit("open");
                            this.flush();
                            if ("open" == this.readyState && this.upgrade && this.transport.pause) {
                                e("starting upgrade probes");
                                for (var b = 0, c = this.upgrades.length; b < c; b++) this.probe(this.upgrades[b])
                            }
                        };
                        g.prototype.onPacket = function(b) {
                            if ("opening" == this.readyState || "open" == this.readyState) switch (e('socket receive: type "%s", data "%s"', b.type, b.data), this.emit("packet", b), this.emit("heartbeat"), b.type) {
                                case "open":
                                    this.onHandshake(u(b.data));
                                    break;
                                case "pong":
                                    this.setPing();
                                    this.emit("pong");
                                    break;
                                case "error":
                                    var c = Error("server error");
                                    c.code = b.data;
                                    this.onError(c);
                                    break;
                                case "message":
                                    this.emit("data", b.data), this.emit("message",
                                        b.data)
                            } else e('packet received with socket readyState "%s"', this.readyState)
                        };
                        g.prototype.onHandshake = function(b) {
                            this.emit("handshake", b);
                            this.id = b.sid;
                            this.transport.query.sid = b.sid;
                            this.upgrades = this.filterUpgrades(b.upgrades);
                            this.pingInterval = b.pingInterval;
                            this.pingTimeout = b.pingTimeout;
                            this.onOpen();
                            "closed" != this.readyState && (this.setPing(), this.removeListener("heartbeat", this.onHeartbeat), this.on("heartbeat", this.onHeartbeat))
                        };
                        g.prototype.onHeartbeat = function(b) {
                            clearTimeout(this.pingTimeoutTimer);
                            var c = this;
                            c.pingTimeoutTimer = setTimeout(function() {
                                if ("closed" != c.readyState) c.onClose("ping timeout")
                            }, b || c.pingInterval + c.pingTimeout)
                        };
                        g.prototype.setPing = function() {
                            var b = this;
                            clearTimeout(b.pingIntervalTimer);
                            b.pingIntervalTimer = setTimeout(function() {
                                e("writing ping packet - expecting pong within %sms", b.pingTimeout);
                                b.ping();
                                b.onHeartbeat(b.pingTimeout)
                            }, b.pingInterval)
                        };
                        g.prototype.ping = function() {
                            var b = this;
                            this.sendPacket("ping", function() {
                                b.emit("ping")
                            })
                        };
                        g.prototype.onDrain = function() {
                            this.writeBuffer.splice(0,
                                this.prevBufferLen);
                            this.prevBufferLen = 0;
                            0 === this.writeBuffer.length ? this.emit("drain") : this.flush()
                        };
                        g.prototype.flush = function() {
                            "closed" != this.readyState && (this.transport.writable && !this.upgrading && this.writeBuffer.length) && (e("flushing %d packets in socket", this.writeBuffer.length), this.transport.send(this.writeBuffer), this.prevBufferLen = this.writeBuffer.length, this.emit("flush"))
                        };
                        g.prototype.write = g.prototype.send = function(b, c, e) {
                            this.sendPacket("message", b, c, e);
                            return this
                        };
                        g.prototype.sendPacket =
                            function(b, c, e, g) {
                                "function" == typeof c && (g = c, c = void 0);
                                "function" == typeof e && (g = e, e = null);
                                if ("closing" != this.readyState && "closed" != this.readyState) {
                                    e = e || {};
                                    e.compress = !1 !== e.compress;
                                    b = {
                                        type: b,
                                        data: c,
                                        options: e
                                    };
                                    this.emit("packetCreate", b);
                                    this.writeBuffer.push(b);
                                    if (g) this.once("flush", g);
                                    this.flush()
                                }
                            };
                        g.prototype.close = function() {
                            function b() {
                                q.onClose("forced close");
                                e("socket closing - telling transport to close");
                                q.transport.close()
                            }

                            function c() {
                                q.removeListener("upgrade", c);
                                q.removeListener("upgradeError",
                                    c);
                                b()
                            }

                            function g() {
                                q.once("upgrade", c);
                                q.once("upgradeError", c)
                            }
                            if ("opening" == this.readyState || "open" == this.readyState) {
                                this.readyState = "closing";
                                var q = this;
                                if (this.writeBuffer.length) this.once("drain", function() {
                                    this.upgrading ? g() : b()
                                });
                                else this.upgrading ? g() : b()
                            }
                            return this
                        };
                        g.prototype.onError = function(b) {
                            e("socket error %j", b);
                            g.priorWebsocketSuccess = !1;
                            this.emit("error", b);
                            this.onClose("transport error", b)
                        };
                        g.prototype.onClose = function(b, c) {
                            if ("opening" == this.readyState || "open" == this.readyState ||
                                "closing" == this.readyState) e('socket close with reason: "%s"', b), clearTimeout(this.pingIntervalTimer), clearTimeout(this.pingTimeoutTimer), this.transport.removeAllListeners("close"), this.transport.close(), this.transport.removeAllListeners(), this.readyState = "closed", this.id = null, this.emit("close", b, c), this.writeBuffer = [], this.prevBufferLen = 0
                        };
                        g.prototype.filterUpgrades = function(b) {
                            for (var c = [], e = 0, g = b.length; e < g; e++) ~s(this.transports, b[e]) && c.push(b[e]);
                            return c
                        }
                    }).call(this, "undefined" !== typeof self ?
                        self : "undefined" !== typeof window ? window : {})
                }, {
                    "./transport": 13,
                    "./transports": 14,
                    "component-emitter": 8,
                    debug: "n9i2g6",
                    "engine.io-parser": 20,
                    indexof: 24,
                    parsejson: 26,
                    parseqs: 27,
                    parseuri: 28
                }],
                13: [function(k, p, s) {
                    function c(c) {
                        this.path = c.path;
                        this.hostname = c.hostname;
                        this.port = c.port;
                        this.secure = c.secure;
                        this.query = c.query;
                        this.timestampParam = c.timestampParam;
                        this.timestampRequests = c.timestampRequests;
                        this.readyState = "";
                        this.agent = c.agent || !1;
                        this.socket = c.socket;
                        this.enablesXDR = c.enablesXDR;
                        this.pfx =
                            c.pfx;
                        this.key = c.key;
                        this.passphrase = c.passphrase;
                        this.cert = c.cert;
                        this.ca = c.ca;
                        this.ciphers = c.ciphers;
                        this.rejectUnauthorized = c.rejectUnauthorized;
                        this.extraHeaders = c.extraHeaders
                    }
                    var g = k("engine.io-parser");
                    k = k("component-emitter");
                    p.exports = c;
                    k(c.prototype);
                    c.prototype.onError = function(c, g) {
                        var e = Error(c);
                        e.type = "TransportError";
                        e.description = g;
                        this.emit("error", e);
                        return this
                    };
                    c.prototype.open = function() {
                        if ("closed" == this.readyState || "" == this.readyState) this.readyState = "opening", this.doOpen();
                        return this
                    };
                    c.prototype.close = function() {
                        if ("opening" == this.readyState || "open" == this.readyState) this.doClose(), this.onClose();
                        return this
                    };
                    c.prototype.send = function(c) {
                        if ("open" == this.readyState) this.write(c);
                        else throw Error("Transport not open");
                    };
                    c.prototype.onOpen = function() {
                        this.readyState = "open";
                        this.writable = !0;
                        this.emit("open")
                    };
                    c.prototype.onData = function(c) {
                        c = g.decodePacket(c, this.socket.binaryType);
                        this.onPacket(c)
                    };
                    c.prototype.onPacket = function(c) {
                        this.emit("packet", c)
                    };
                    c.prototype.onClose =
                        function() {
                            this.readyState = "closed";
                            this.emit("close")
                        }
                }, {
                    "component-emitter": 8,
                    "engine.io-parser": 20
                }],
                14: [function(k, p, s) {
                    (function(c) {
                        var g = k("xmlhttprequest-ssl"),
                            q = k("./polling-xhr"),
                            n = k("./polling-jsonp"),
                            e = k("./websocket");
                        s.polling = function(e) {
                            var k = !1,
                                b = !1,
                                u = !1 !== e.jsonp;
                            c.location && (b = "https:" == location.protocol, (k = location.port) || (k = b ? 443 : 80), k = e.hostname != location.hostname || k != e.port, b = e.secure != b);
                            e.xdomain = k;
                            e.xscheme = b;
                            if ("open" in new g(e) && !e.forceJSONP) return new q(e);
                            if (!u) throw Error("JSONP disabled");
                            return new n(e)
                        };
                        s.websocket = e
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {
                    "./polling-jsonp": 15,
                    "./polling-xhr": 16,
                    "./websocket": 18,
                    "xmlhttprequest-ssl": 19
                }],
                15: [function(k, p, s) {
                    (function(c) {
                        function g() {}

                        function q(e) {
                            n.call(this, e);
                            this.query = this.query || {};
                            b || (c.___eio || (c.___eio = []), b = c.___eio);
                            this.index = b.length;
                            var k = this;
                            b.push(function(b) {
                                k.onData(b)
                            });
                            this.query.j = this.index;
                            c.document && c.addEventListener && c.addEventListener("beforeunload", function() {
                                k.script &&
                                    (k.script.onerror = g)
                            }, !1)
                        }
                        var n = k("./polling"),
                            e = k("component-inherit");
                        p.exports = q;
                        var s = /\n/g,
                            w = /\\n/g,
                            b;
                        e(q, n);
                        q.prototype.supportsBinary = !1;
                        q.prototype.doClose = function() {
                            this.script && (this.script.parentNode.removeChild(this.script), this.script = null);
                            this.form && (this.form.parentNode.removeChild(this.form), this.iframe = this.form = null);
                            n.prototype.doClose.call(this)
                        };
                        q.prototype.doPoll = function() {
                            var b = this,
                                c = document.createElement("script");
                            this.script && (this.script.parentNode.removeChild(this.script),
                                this.script = null);
                            c.async = !0;
                            c.src = this.uri();
                            c.onerror = function(c) {
                                b.onError("jsonp poll error", c)
                            };
                            var e = document.getElementsByTagName("script")[0];
                            e ? e.parentNode.insertBefore(c, e) : (document.head || document.body).appendChild(c);
                            this.script = c;
                            "undefined" != typeof navigator && /gecko/i.test(navigator.userAgent) && setTimeout(function() {
                                var b = document.createElement("iframe");
                                document.body.appendChild(b);
                                document.body.removeChild(b)
                            }, 100)
                        };
                        q.prototype.doWrite = function(b, c) {
                            function e() {
                                g();
                                c()
                            }

                            function g() {
                                if (n.iframe) try {
                                    n.form.removeChild(n.iframe)
                                } catch (b) {
                                    n.onError("jsonp polling iframe removal error",
                                        b)
                                }
                                try {
                                    X = document.createElement('<iframe src="javascript:0" name="' + n.iframeId + '">')
                                } catch (c) {
                                    X = document.createElement("iframe"), X.name = n.iframeId, X.src = "javascript:0"
                                }
                                X.id = n.iframeId;
                                n.form.appendChild(X);
                                n.iframe = X
                            }
                            var n = this;
                            if (!this.form) {
                                var k = document.createElement("form"),
                                    q = document.createElement("textarea"),
                                    p = this.iframeId = "eio_iframe_" + this.index,
                                    X;
                                k.className = "socketio";
                                k.style.position = "absolute";
                                k.style.top = "-1000px";
                                k.style.left = "-1000px";
                                k.target = p;
                                k.method = "POST";
                                k.setAttribute("accept-charset",
                                    "utf-8");
                                q.name = "d";
                                k.appendChild(q);
                                document.body.appendChild(k);
                                this.form = k;
                                this.area = q
                            }
                            this.form.action = this.uri();
                            g();
                            b = b.replace(w, "\\\n");
                            this.area.value = b.replace(s, "\\n");
                            try {
                                this.form.submit()
                            } catch (R) {}
                            this.iframe.attachEvent ? this.iframe.onreadystatechange = function() {
                                "complete" == n.iframe.readyState && e()
                            } : this.iframe.onload = e
                        }
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {
                    "./polling": 17,
                    "component-inherit": 9
                }],
                16: [function(k, p, s) {
                    (function(c) {
                        function g() {}

                        function q(b) {
                            w.call(this, b);
                            if (c.location) {
                                var e = "https:" == location.protocol,
                                    g = location.port;
                                g || (g = e ? 443 : 80);
                                this.xd = b.hostname != c.location.hostname || g != b.port;
                                this.xs = b.secure != e
                            } else this.extraHeaders = b.extraHeaders
                        }

                        function n(b) {
                            this.method = b.method || "GET";
                            this.uri = b.uri;
                            this.xd = !!b.xd;
                            this.xs = !!b.xs;
                            this.async = !1 !== b.async;
                            this.data = void 0 != b.data ? b.data : null;
                            this.agent = b.agent;
                            this.isBinary = b.isBinary;
                            this.supportsBinary = b.supportsBinary;
                            this.enablesXDR = b.enablesXDR;
                            this.pfx = b.pfx;
                            this.key =
                                b.key;
                            this.passphrase = b.passphrase;
                            this.cert = b.cert;
                            this.ca = b.ca;
                            this.ciphers = b.ciphers;
                            this.rejectUnauthorized = b.rejectUnauthorized;
                            this.extraHeaders = b.extraHeaders;
                            this.create()
                        }

                        function e() {
                            for (var b in n.requests) n.requests.hasOwnProperty(b) && n.requests[b].abort()
                        }
                        var s = k("xmlhttprequest-ssl"),
                            w = k("./polling"),
                            b = k("component-emitter"),
                            u = k("component-inherit"),
                            L = k("debug")("engine.io-client:polling-xhr");
                        p.exports = q;
                        p.exports.Request = n;
                        u(q, w);
                        q.prototype.supportsBinary = !0;
                        q.prototype.request = function(b) {
                            b =
                                b || {};
                            b.uri = this.uri();
                            b.xd = this.xd;
                            b.xs = this.xs;
                            b.agent = this.agent || !1;
                            b.supportsBinary = this.supportsBinary;
                            b.enablesXDR = this.enablesXDR;
                            b.pfx = this.pfx;
                            b.key = this.key;
                            b.passphrase = this.passphrase;
                            b.cert = this.cert;
                            b.ca = this.ca;
                            b.ciphers = this.ciphers;
                            b.rejectUnauthorized = this.rejectUnauthorized;
                            b.extraHeaders = this.extraHeaders;
                            return new n(b)
                        };
                        q.prototype.doWrite = function(b, c) {
                            var e = this.request({
                                    method: "POST",
                                    data: b,
                                    isBinary: "string" !== typeof b && void 0 !== b
                                }),
                                g = this;
                            e.on("success", c);
                            e.on("error",
                                function(b) {
                                    g.onError("xhr post error", b)
                                });
                            this.sendXhr = e
                        };
                        q.prototype.doPoll = function() {
                            L("xhr poll");
                            var b = this.request(),
                                c = this;
                            b.on("data", function(b) {
                                c.onData(b)
                            });
                            b.on("error", function(b) {
                                c.onError("xhr poll error", b)
                            });
                            this.pollXhr = b
                        };
                        b(n.prototype);
                        n.prototype.create = function() {
                            var b = {
                                agent: this.agent,
                                xdomain: this.xd,
                                xscheme: this.xs,
                                enablesXDR: this.enablesXDR
                            };
                            b.pfx = this.pfx;
                            b.key = this.key;
                            b.passphrase = this.passphrase;
                            b.cert = this.cert;
                            b.ca = this.ca;
                            b.ciphers = this.ciphers;
                            b.rejectUnauthorized =
                                this.rejectUnauthorized;
                            var e = this.xhr = new s(b),
                                g = this;
                            try {
                                L("xhr open %s: %s", this.method, this.uri);
                                e.open(this.method, this.uri, this.async);
                                try {
                                    if (this.extraHeaders) {
                                        e.setDisableHeaderCheck(!0);
                                        for (var k in this.extraHeaders) this.extraHeaders.hasOwnProperty(k) && e.setRequestHeader(k, this.extraHeaders[k])
                                    }
                                } catch (q) {}
                                this.supportsBinary && (e.responseType = "arraybuffer");
                                if ("POST" == this.method) try {
                                    this.isBinary ? e.setRequestHeader("Content-type", "application/octet-stream") : e.setRequestHeader("Content-type",
                                        "text/plain;charset=UTF-8")
                                } catch (p) {}
                                "withCredentials" in e && (e.withCredentials = !0);
                                this.hasXDR() ? (e.onload = function() {
                                    g.onLoad()
                                }, e.onerror = function() {
                                    g.onError(e.responseText)
                                }) : e.onreadystatechange = function() {
                                    if (4 == e.readyState)
                                        if (200 == e.status || 1223 == e.status) g.onLoad();
                                        else setTimeout(function() {
                                            g.onError(e.status)
                                        }, 0)
                                };
                                L("xhr data %s", this.data);
                                e.send(this.data)
                            } catch (u) {
                                setTimeout(function() {
                                    g.onError(u)
                                }, 0);
                                return
                            }
                            c.document && (this.index = n.requestsCount++, n.requests[this.index] = this)
                        };
                        n.prototype.onSuccess =
                            function() {
                                this.emit("success");
                                this.cleanup()
                            };
                        n.prototype.onData = function(b) {
                            this.emit("data", b);
                            this.onSuccess()
                        };
                        n.prototype.onError = function(b) {
                            this.emit("error", b);
                            this.cleanup(!0)
                        };
                        n.prototype.cleanup = function(b) {
                            if ("undefined" != typeof this.xhr && null !== this.xhr) {
                                this.hasXDR() ? this.xhr.onload = this.xhr.onerror = g : this.xhr.onreadystatechange = g;
                                if (b) try {
                                    this.xhr.abort()
                                } catch (e) {}
                                c.document && delete n.requests[this.index];
                                this.xhr = null
                            }
                        };
                        n.prototype.onLoad = function() {
                            var b;
                            try {
                                var c;
                                try {
                                    c = this.xhr.getResponseHeader("Content-Type").split(";")[0]
                                } catch (e) {}
                                if ("application/octet-stream" ===
                                    c) b = this.xhr.response;
                                else if (this.supportsBinary) try {
                                    b = String.fromCharCode.apply(null, new Uint8Array(this.xhr.response))
                                } catch (g) {
                                    var n = new Uint8Array(this.xhr.response);
                                    c = [];
                                    for (var k = 0, q = n.length; k < q; k++) c.push(n[k]);
                                    b = String.fromCharCode.apply(null, c)
                                } else b = this.xhr.responseText
                            } catch (p) {
                                this.onError(p)
                            }
                            if (null != b) this.onData(b)
                        };
                        n.prototype.hasXDR = function() {
                            return "undefined" !== typeof c.XDomainRequest && !this.xs && this.enablesXDR
                        };
                        n.prototype.abort = function() {
                            this.cleanup()
                        };
                        c.document && (n.requestsCount =
                            0, n.requests = {}, c.attachEvent ? c.attachEvent("onunload", e) : c.addEventListener && c.addEventListener("beforeunload", e, !1))
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {
                    "./polling": 17,
                    "component-emitter": 8,
                    "component-inherit": 9,
                    debug: "n9i2g6",
                    "xmlhttprequest-ssl": 19
                }],
                17: [function(k, p, s) {
                    function c(b) {
                        var c = b && b.forceBase64;
                        if (!w || c) this.supportsBinary = !1;
                        g.call(this, b)
                    }
                    var g = k("../transport"),
                        q = k("parseqs"),
                        n = k("engine.io-parser");
                    s = k("component-inherit");
                    var e =
                        k("yeast"),
                        M = k("debug")("engine.io-client:polling");
                    p.exports = c;
                    var w = null != (new(k("xmlhttprequest-ssl"))({
                        xdomain: !1
                    })).responseType;
                    s(c, g);
                    c.prototype.name = "polling";
                    c.prototype.doOpen = function() {
                        this.poll()
                    };
                    c.prototype.pause = function(b) {
                        function c() {
                            M("paused");
                            e.readyState = "paused";
                            b()
                        }
                        var e = this;
                        this.readyState = "pausing";
                        if (this.polling || !this.writable) {
                            var g = 0;
                            this.polling && (M("we are currently polling - waiting to pause"), g++, this.once("pollComplete", function() {
                                M("pre-pause polling complete");
                                --g || c()
                            }));
                            this.writable || (M("we are currently writing - waiting to pause"), g++, this.once("drain", function() {
                                M("pre-pause writing complete");
                                --g || c()
                            }))
                        } else c()
                    };
                    c.prototype.poll = function() {
                        M("polling");
                        this.polling = !0;
                        this.doPoll();
                        this.emit("poll")
                    };
                    c.prototype.onData = function(b) {
                        var c = this;
                        M("polling got data %s", b);
                        n.decodePayload(b, this.socket.binaryType, function(b, e, g) {
                            if ("opening" == c.readyState) c.onOpen();
                            if ("close" == b.type) return c.onClose(), !1;
                            c.onPacket(b)
                        });
                        "closed" != this.readyState &&
                            (this.polling = !1, this.emit("pollComplete"), "open" == this.readyState ? this.poll() : M('ignoring poll - transport state "%s"', this.readyState))
                    };
                    c.prototype.doClose = function() {
                        function b() {
                            M("writing close packet");
                            c.write([{
                                type: "close"
                            }])
                        }
                        var c = this;
                        "open" == this.readyState ? (M("transport open - closing"), b()) : (M("transport not open - deferring close"), this.once("open", b))
                    };
                    c.prototype.write = function(b) {
                        var c = this;
                        this.writable = !1;
                        var e = function() {
                                c.writable = !0;
                                c.emit("drain")
                            },
                            c = this;
                        n.encodePayload(b,
                            this.supportsBinary,
                            function(b) {
                                c.doWrite(b, e)
                            })
                    };
                    c.prototype.uri = function() {
                        var b = this.query || {},
                            c = this.secure ? "https" : "http",
                            g = "";
                        !1 !== this.timestampRequests && (b[this.timestampParam] = e());
                        this.supportsBinary || b.sid || (b.b64 = 1);
                        b = q.encode(b);
                        this.port && ("https" == c && 443 != this.port || "http" == c && 80 != this.port) && (g = ":" + this.port);
                        b.length && (b = "?" + b);
                        var n = -1 !== this.hostname.indexOf(":");
                        return c + "://" + (n ? "[" + this.hostname + "]" : this.hostname) + g + this.path + b
                    }
                }, {
                    "../transport": 13,
                    "component-inherit": 9,
                    debug: "n9i2g6",
                    "engine.io-parser": 20,
                    parseqs: 27,
                    "xmlhttprequest-ssl": 19,
                    yeast: 30
                }],
                18: [function(k, p, s) {
                    (function(c) {
                        function g(b) {
                            b && b.forceBase64 && (this.supportsBinary = !1);
                            this.perMessageDeflate = b.perMessageDeflate;
                            q.call(this, b)
                        }
                        var q = k("../transport"),
                            n = k("engine.io-parser"),
                            e = k("parseqs"),
                            s = k("component-inherit"),
                            w = k("yeast"),
                            b = k("debug")("engine.io-client:websocket"),
                            u = c.WebSocket || c.MozWebSocket,
                            L = u;
                        if (!L && "undefined" === typeof window) try {
                            L = k("ws")
                        } catch (x) {}
                        p.exports = g;
                        s(g, q);
                        g.prototype.name = "websocket";
                        g.prototype.supportsBinary = !0;
                        g.prototype.doOpen = function() {
                            if (this.check()) {
                                var b = this.uri(),
                                    c = {
                                        agent: this.agent,
                                        perMessageDeflate: this.perMessageDeflate
                                    };
                                c.pfx = this.pfx;
                                c.key = this.key;
                                c.passphrase = this.passphrase;
                                c.cert = this.cert;
                                c.ca = this.ca;
                                c.ciphers = this.ciphers;
                                c.rejectUnauthorized = this.rejectUnauthorized;
                                this.extraHeaders && (c.headers = this.extraHeaders);
                                this.ws = u ? new L(b) : new L(b, void 0, c);
                                void 0 === this.ws.binaryType && (this.supportsBinary = !1);
                                this.ws.supports && this.ws.supports.binary ? (this.supportsBinary = !0, this.ws.binaryType = "buffer") : this.ws.binaryType = "arraybuffer";
                                this.addEventListeners()
                            }
                        };
                        g.prototype.addEventListeners = function() {
                            var b = this;
                            this.ws.onopen = function() {
                                b.onOpen()
                            };
                            this.ws.onclose = function() {
                                b.onClose()
                            };
                            this.ws.onmessage = function(c) {
                                b.onData(c.data)
                            };
                            this.ws.onerror = function(c) {
                                b.onError("websocket error", c)
                            }
                        };
                        "undefined" != typeof navigator && /iPad|iPhone|iPod/i.test(navigator.userAgent) && (g.prototype.onData = function(b) {
                            var c = this;
                            setTimeout(function() {
                                    q.prototype.onData.call(c, b)
                                },
                                0)
                        });
                        g.prototype.write = function(e) {
                            function g() {
                                k.emit("flush");
                                setTimeout(function() {
                                    k.writable = !0;
                                    k.emit("drain")
                                }, 0)
                            }
                            var k = this;
                            this.writable = !1;
                            for (var q = e.length, p = 0, s = q; p < s; p++)(function(e) {
                                n.encodePacket(e, k.supportsBinary, function(n) {
                                    if (!u) {
                                        var p = {};
                                        e.options && (p.compress = e.options.compress);
                                        k.perMessageDeflate && ("string" == typeof n ? c.Buffer.byteLength(n) : n.length) < k.perMessageDeflate.threshold && (p.compress = !1)
                                    }
                                    try {
                                        u ? k.ws.send(n) : k.ws.send(n, p)
                                    } catch (s) {
                                        b("websocket closed before onclose event")
                                    }--q ||
                                        g()
                                })
                            })(e[p])
                        };
                        g.prototype.onClose = function() {
                            q.prototype.onClose.call(this)
                        };
                        g.prototype.doClose = function() {
                            "undefined" !== typeof this.ws && this.ws.close()
                        };
                        g.prototype.uri = function() {
                            var b = this.query || {},
                                c = this.secure ? "wss" : "ws",
                                g = "";
                            this.port && ("wss" == c && 443 != this.port || "ws" == c && 80 != this.port) && (g = ":" + this.port);
                            this.timestampRequests && (b[this.timestampParam] = w());
                            this.supportsBinary || (b.b64 = 1);
                            b = e.encode(b);
                            b.length && (b = "?" + b);
                            var n = -1 !== this.hostname.indexOf(":");
                            return c + "://" + (n ? "[" + this.hostname +
                                "]" : this.hostname) + g + this.path + b
                        };
                        g.prototype.check = function() {
                            return !!L && !("__initialize" in L && this.name === g.prototype.name)
                        }
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {
                    "../transport": 13,
                    "component-inherit": 9,
                    debug: "n9i2g6",
                    "engine.io-parser": 20,
                    parseqs: 27,
                    ws: 7,
                    yeast: 30
                }],
                19: [function(k, p, s) {
                    var c = k("has-cors");
                    p.exports = function(g) {
                        var k = g.xdomain,
                            n = g.xscheme;
                        g = g.enablesXDR;
                        try {
                            if ("undefined" != typeof XMLHttpRequest && (!k || c)) return new XMLHttpRequest
                        } catch (e) {}
                        try {
                            if ("undefined" !=
                                typeof XDomainRequest && !n && g) return new XDomainRequest
                        } catch (p) {}
                        if (!k) try {
                            return new ActiveXObject("Microsoft.XMLHTTP")
                        } catch (s) {}
                    }
                }, {
                    "has-cors": 23
                }],
                20: [function(k, p, s) {
                    (function(c) {
                        function g(b, c, e) {
                            if (!c) return s.encodeBase64Packet(b, e);
                            var g = new FileReader;
                            g.onload = function() {
                                b.data = g.result;
                                s.encodePacket(b, c, !0, e)
                            };
                            return g.readAsArrayBuffer(b.data)
                        }

                        function q(c, e, g) {
                            var n = Array(c.length);
                            g = b(c.length, g);
                            for (var k = function(b, c, g) {
                                    e(c, function(c, f) {
                                        n[b] = f;
                                        g(c, n)
                                    })
                                }, q = 0; q < c.length; q++) k(q, c[q],
                                g)
                        }
                        var n = k("./keys"),
                            e = k("has-binary"),
                            p = k("arraybuffer.slice"),
                            w = k("base64-arraybuffer"),
                            b = k("after"),
                            u = k("utf8"),
                            L = navigator.userAgent.match(/Android/i),
                            x = /PhantomJS/i.test(navigator.userAgent),
                            fa = L || x;
                        s.protocol = 3;
                        var T = s.packets = {
                                open: 0,
                                close: 1,
                                ping: 2,
                                pong: 3,
                                message: 4,
                                upgrade: 5,
                                noop: 6
                            },
                            K = n(T),
                            H = {
                                type: "error",
                                data: "parser error"
                            },
                            N = k("blob");
                        s.encodePacket = function(b, e, n, k) {
                            "function" == typeof e && (k = e, e = !1);
                            "function" == typeof n && (k = n, n = null);
                            var q = void 0 === b.data ? void 0 : b.data.buffer || b.data;
                            if (c.ArrayBuffer &&
                                q instanceof ArrayBuffer) {
                                if (e) {
                                    n = b.data;
                                    e = new Uint8Array(n);
                                    n = new Uint8Array(1 + n.byteLength);
                                    n[0] = T[b.type];
                                    for (b = 0; b < e.length; b++) n[b + 1] = e[b];
                                    b = k(n.buffer)
                                } else b = s.encodeBase64Packet(b, k);
                                return b
                            }
                            if (N && q instanceof c.Blob) return e ? fa ? b = g(b, e, k) : (e = new Uint8Array(1), e[0] = T[b.type], b = new N([e.buffer, b.data]), b = k(b)) : b = s.encodeBase64Packet(b, k), b;
                            if (q && q.base64) return k("b" + s.packets[b.type] + b.data.data);
                            e = T[b.type];
                            void 0 !== b.data && (e += n ? u.encode(String(b.data)) : String(b.data));
                            return k("" + e)
                        };
                        s.encodeBase64Packet = function(b, e) {
                            var g = "b" + s.packets[b.type];
                            if (N && b.data instanceof c.Blob) {
                                var n = new FileReader;
                                n.onload = function() {
                                    var b = n.result.split(",")[1];
                                    e(g + b)
                                };
                                return n.readAsDataURL(b.data)
                            }
                            var k;
                            try {
                                k = String.fromCharCode.apply(null, new Uint8Array(b.data))
                            } catch (q) {
                                k = new Uint8Array(b.data);
                                for (var p = Array(k.length), u = 0; u < k.length; u++) p[u] = k[u];
                                k = String.fromCharCode.apply(null, p)
                            }
                            g += c.btoa(k);
                            return e(g)
                        };
                        s.decodePacket = function(b, c, e) {
                            if ("string" == typeof b || void 0 === b) {
                                if ("b" == b.charAt(0)) return s.decodeBase64Packet(b.substr(1),
                                    c);
                                if (e) try {
                                    b = u.decode(b)
                                } catch (g) {
                                    return H
                                }
                                e = b.charAt(0);
                                return Number(e) == e && K[e] ? 1 < b.length ? {
                                    type: K[e],
                                    data: b.substring(1)
                                } : {
                                    type: K[e]
                                } : H
                            }
                            e = (new Uint8Array(b))[0];
                            b = p(b, 1);
                            N && "blob" === c && (b = new N([b]));
                            return {
                                type: K[e],
                                data: b
                            }
                        };
                        s.decodeBase64Packet = function(b, e) {
                            var g = K[b.charAt(0)];
                            if (!c.ArrayBuffer) return {
                                type: g,
                                data: {
                                    base64: !0,
                                    data: b.substr(1)
                                }
                            };
                            var n = w.decode(b.substr(1));
                            "blob" === e && N && (n = new N([n]));
                            return {
                                type: g,
                                data: n
                            }
                        };
                        s.encodePayload = function(b, c, g) {
                            "function" == typeof c && (g = c, c = null);
                            var n = e(b);
                            if (c && n) return N && !fa ? s.encodePayloadAsBlob(b, g) : s.encodePayloadAsArrayBuffer(b, g);
                            if (!b.length) return g("0:");
                            q(b, function(b, e) {
                                s.encodePacket(b, n ? c : !1, !0, function(b) {
                                    e(null, b.length + ":" + b)
                                })
                            }, function(b, c) {
                                return g(c.join(""))
                            })
                        };
                        s.decodePayload = function(b, c, e) {
                            if ("string" != typeof b) return s.decodePayloadAsBinary(b, c, e);
                            "function" === typeof c && (e = c, c = null);
                            var g;
                            if ("" == b) return e(H, 0, 1);
                            g = "";
                            for (var n, k, q = 0, p = b.length; q < p; q++)
                                if (k = b.charAt(q), ":" != k) g += k;
                                else {
                                    if ("" == g || g != (n = Number(g))) return e(H,
                                        0, 1);
                                    k = b.substr(q + 1, n);
                                    if (g != k.length) return e(H, 0, 1);
                                    if (k.length) {
                                        g = s.decodePacket(k, c, !0);
                                        if (H.type == g.type && H.data == g.data) return e(H, 0, 1);
                                        if (!1 === e(g, q + n, p)) return
                                    }
                                    q += n;
                                    g = ""
                                }
                            if ("" != g) return e(H, 0, 1)
                        };
                        s.encodePayloadAsArrayBuffer = function(b, c) {
                            if (!b.length) return c(new ArrayBuffer(0));
                            q(b, function(b, c) {
                                s.encodePacket(b, !0, !0, function(b) {
                                    return c(null, b)
                                })
                            }, function(b, e) {
                                var g = e.reduce(function(b, c) {
                                        var e;
                                        e = "string" === typeof c ? c.length : c.byteLength;
                                        return b + e.toString().length + e + 2
                                    }, 0),
                                    n = new Uint8Array(g),
                                    k = 0;
                                e.forEach(function(b) {
                                    var c = "string" === typeof b,
                                        e = b;
                                    if (c) {
                                        for (var e = new Uint8Array(b.length), f = 0; f < b.length; f++) e[f] = b.charCodeAt(f);
                                        e = e.buffer
                                    }
                                    c ? n[k++] = 0 : n[k++] = 1;
                                    b = e.byteLength.toString();
                                    for (f = 0; f < b.length; f++) n[k++] = parseInt(b[f]);
                                    n[k++] = 255;
                                    e = new Uint8Array(e);
                                    for (f = 0; f < e.length; f++) n[k++] = e[f]
                                });
                                return c(n.buffer)
                            })
                        };
                        s.encodePayloadAsBlob = function(b, c) {
                            q(b, function(b, c) {
                                s.encodePacket(b, !0, !0, function(b) {
                                    var e = new Uint8Array(1);
                                    e[0] = 1;
                                    if ("string" === typeof b) {
                                        for (var g = new Uint8Array(b.length),
                                                n = 0; n < b.length; n++) g[n] = b.charCodeAt(n);
                                        b = g.buffer;
                                        e[0] = 0
                                    }
                                    for (var g = (b instanceof ArrayBuffer ? b.byteLength : b.size).toString(), k = new Uint8Array(g.length + 1), n = 0; n < g.length; n++) k[n] = parseInt(g[n]);
                                    k[g.length] = 255;
                                    N && (b = new N([e.buffer, k.buffer, b]), c(null, b))
                                })
                            }, function(b, e) {
                                return c(new N(e))
                            })
                        };
                        s.decodePayloadAsBinary = function(b, c, e) {
                            "function" === typeof c && (e = c, c = null);
                            for (var g = [], n = !1; 0 < b.byteLength;) {
                                for (var k = new Uint8Array(b), q = 0 === k[0], u = "", w = 1; 255 != k[w]; w++) {
                                    if (310 < u.length) {
                                        n = !0;
                                        break
                                    }
                                    u += k[w]
                                }
                                if (n) return e(H,
                                    0, 1);
                                b = p(b, 2 + u.length);
                                u = parseInt(u);
                                k = p(b, 0, u);
                                if (q) try {
                                    k = String.fromCharCode.apply(null, new Uint8Array(k))
                                } catch (x) {
                                    for (q = new Uint8Array(k), k = "", w = 0; w < q.length; w++) k += String.fromCharCode(q[w])
                                }
                                g.push(k);
                                b = p(b, u)
                            }
                            var f = g.length;
                            g.forEach(function(b, g) {
                                e(s.decodePacket(b, c, !0), g, f)
                            })
                        }
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {
                    "./keys": 21,
                    after: 3,
                    "arraybuffer.slice": 4,
                    "base64-arraybuffer": 5,
                    blob: 6,
                    "has-binary": 22,
                    utf8: 29
                }],
                21: [function(k, p, s) {
                    p.exports = Object.keys ||
                        function(c) {
                            var g = [],
                                k = Object.prototype.hasOwnProperty,
                                n;
                            for (n in c) k.call(c, n) && g.push(n);
                            return g
                        }
                }, {}],
                22: [function(k, p, s) {
                    (function(c) {
                        var g = k("isarray");
                        p.exports = function(k) {
                            function n(e) {
                                if (!e) return !1;
                                if (c.Buffer && c.Buffer.isBuffer(e) || c.ArrayBuffer && e instanceof ArrayBuffer || c.Blob && e instanceof Blob || c.File && e instanceof File) return !0;
                                if (g(e))
                                    for (var k = 0; k < e.length; k++) {
                                        if (n(e[k])) return !0
                                    } else if (e && "object" == typeof e)
                                        for (k in e.toJSON && (e = e.toJSON()), e)
                                            if (Object.prototype.hasOwnProperty.call(e,
                                                    k) && n(e[k])) return !0;
                                return !1
                            }
                            return n(k)
                        }
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {
                    isarray: 25
                }],
                23: [function(k, p, s) {
                    try {
                        p.exports = "undefined" !== typeof XMLHttpRequest && "withCredentials" in new XMLHttpRequest
                    } catch (c) {
                        p.exports = !1
                    }
                }, {}],
                24: [function(k, p, s) {
                    var c = [].indexOf;
                    p.exports = function(g, k) {
                        if (c) return g.indexOf(k);
                        for (var n = 0; n < g.length; ++n)
                            if (g[n] === k) return n;
                        return -1
                    }
                }, {}],
                25: [function(k, p, s) {
                    p.exports = Array.isArray || function(c) {
                        return "[object Array]" ==
                            Object.prototype.toString.call(c)
                    }
                }, {}],
                26: [function(k, p, s) {
                    (function(c) {
                        var g = /^[\],:{}\s]*$/,
                            k = /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
                            n = /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                            e = /(?:^|:|,)(?:\s*\[)+/g,
                            s = /^\s+/,
                            w = /\s+$/;
                        p.exports = function(b) {
                            if ("string" != typeof b || !b) return null;
                            b = b.replace(s, "").replace(w, "");
                            if (c.JSON && JSON.parse) return JSON.parse(b);
                            if (g.test(b.replace(k, "@").replace(n, "]").replace(e, ""))) return (new Function("return " + b))()
                        }
                    }).call(this, "undefined" !==
                        typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {}],
                27: [function(k, p, s) {
                    s.encode = function(c) {
                        var g = "",
                            k;
                        for (k in c) c.hasOwnProperty(k) && (g.length && (g += "&"), g += encodeURIComponent(k) + "=" + encodeURIComponent(c[k]));
                        return g
                    };
                    s.decode = function(c) {
                        var g = {};
                        c = c.split("&");
                        for (var k = 0, n = c.length; k < n; k++) {
                            var e = c[k].split("=");
                            g[decodeURIComponent(e[0])] = decodeURIComponent(e[1])
                        }
                        return g
                    }
                }, {}],
                28: [function(k, p, s) {
                    var c = /^(?:(?![^:@]+:[^:@\/]*@)(http|https|ws|wss):\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?((?:[a-f0-9]{0,4}:){2,7}[a-f0-9]{0,4}|[^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/,
                        g = "source protocol authority userInfo user password host port relative path directory file query anchor".split(" ");
                    p.exports = function(k) {
                        var n = k,
                            e = k.indexOf("["),
                            p = k.indexOf("]"); - 1 != e && -1 != p && (k = k.substring(0, e) + k.substring(e, p).replace(/:/g, ";") + k.substring(p, k.length));
                        k = c.exec(k || "");
                        for (var s = {}, b = 14; b--;) s[g[b]] = k[b] || ""; - 1 != e && -1 != p && (s.source = n, s.host = s.host.substring(1, s.host.length - 1).replace(/;/g, ":"), s.authority = s.authority.replace("[", "").replace("]", "").replace(/;/g, ":"), s.ipv6uri = !0);
                        return s
                    }
                }, {}],
                29: [function(k, p, s) {
                    (function(c) {
                        (function(g) {
                            function k(b) {
                                for (var c = [], e = 0, g = b.length, n, p; e < g;) n = b.charCodeAt(e++), 55296 <= n && 56319 >= n && e < g ? (p = b.charCodeAt(e++), 56320 == (p & 64512) ? c.push(((n & 1023) << 10) + (p & 1023) + 65536) : (c.push(n), e--)) : c.push(n);
                                return c
                            }

                            function n(b) {
                                if (55296 <= b && 57343 >= b) throw Error("Lone surrogate U+" + b.toString(16).toUpperCase() + " is not a scalar value");
                            }

                            function e() {
                                if (T >= fa) throw Error("Invalid byte index");
                                var b = x[T] & 255;
                                T++;
                                if (128 == (b & 192)) return b & 63;
                                throw Error("Invalid continuation byte");
                            }

                            function M() {
                                var b, c, g, k;
                                if (T > fa) throw Error("Invalid byte index");
                                if (T == fa) return !1;
                                b = x[T] & 255;
                                T++;
                                if (0 == (b & 128)) return b;
                                if (192 == (b & 224)) {
                                    c = e();
                                    b = (b & 31) << 6 | c;
                                    if (128 <= b) return b;
                                    throw Error("Invalid continuation byte");
                                }
                                if (224 == (b & 240)) {
                                    c = e();
                                    g = e();
                                    b = (b & 15) << 12 | c << 6 | g;
                                    if (2048 <= b) return n(b), b;
                                    throw Error("Invalid continuation byte");
                                }
                                if (240 == (b & 248) && (c = e(), g = e(), k = e(), b = (b & 15) << 18 | c << 12 | g << 6 | k, 65536 <= b && 1114111 >= b)) return b;
                                throw Error("Invalid UTF-8 detected");
                            }
                            var w = "object" == typeof s && s,
                                b = "object" ==
                                typeof p && p && p.exports == w && p,
                                u = "object" == typeof c && c;
                            if (u.global === u || u.window === u) g = u;
                            var L = String.fromCharCode,
                                x, fa, T, u = {
                                    version: "2.0.0",
                                    encode: function(b) {
                                        b = k(b);
                                        for (var c = b.length, e = -1, g, p = ""; ++e < c;) {
                                            g = b[e];
                                            if (0 == (g & 4294967168)) g = L(g);
                                            else {
                                                var s = "";
                                                0 == (g & 4294965248) ? s = L(g >> 6 & 31 | 192) : 0 == (g & 4294901760) ? (n(g), s = L(g >> 12 & 15 | 224), s += L(g >> 6 & 63 | 128)) : 0 == (g & 4292870144) && (s = L(g >> 18 & 7 | 240), s += L(g >> 12 & 63 | 128), s += L(g >> 6 & 63 | 128));
                                                g = s += L(g & 63 | 128)
                                            }
                                            p += g
                                        }
                                        return p
                                    },
                                    decode: function(b) {
                                        x = k(b);
                                        fa = x.length;
                                        T = 0;
                                        b = [];
                                        for (var c; !1 !== (c = M());) b.push(c);
                                        c = b.length;
                                        for (var e = -1, g, n = ""; ++e < c;) g = b[e], 65535 < g && (g -= 65536, n += L(g >>> 10 & 1023 | 55296), g = 56320 | g & 1023), n += L(g);
                                        return n
                                    }
                                };
                            if (w && !w.nodeType)
                                if (b) b.exports = u;
                                else {
                                    g = {}.hasOwnProperty;
                                    for (var K in u) g.call(u, K) && (w[K] = u[K])
                                }
                            else g.utf8 = u
                        })(this)
                    }).call(this, "undefined" !== typeof self ? self : "undefined" !== typeof window ? window : {})
                }, {}],
                30: [function(k, p, s) {
                    function c(b) {
                        var c = "";
                        do c = q[b % n] + c, b = Math.floor(b / n); while (0 < b);
                        return c
                    }

                    function g() {
                        var e = c(+new Date);
                        return e !==
                            b ? (M = 0, b = e) : e + "." + c(M++)
                    }
                    for (var q = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_".split(""), n = 64, e = {}, M = 0, w = 0, b; w < n; w++) e[q[w]] = w;
                    g.encode = c;
                    g.decode = function(b) {
                        var c = 0;
                        for (w = 0; w < b.length; w++) c = c * n + e[b.charAt(w)];
                        return c
                    };
                    p.exports = g
                }, {}]
            }, {}, [10])(10)
        })
    })();
    $_TAWK_JSON = {};
    (function() {
        function v(e, b) {
            function g(c) {
                if (g[c] !== Z) return g[c];
                var e;
                if ("bug-string-char-index" == c) e = "a" != "a" [0];
                else if ("json" == c) e = g("json-stringify") && g("json-parse");
                else {
                    var f;
                    if ("json-stringify" == c) {
                        e = b.stringify;
                        var m = "function" == typeof e && aa;
                        if (m) {
                            (f = function() {
                                return 1
                            }).toJSON = f;
                            try {
                                m = "0" === e(0) && "0" === e(new k) && '""' == e(new n) && e(R) === Z && e(Z) === Z && e() === Z && "1" === e(f) && "[1]" == e([f]) && "[null]" == e([Z]) && "null" == e(null) && "[null,null,null]" == e([Z, R, null]) && '{"a":[1,true,false,null,"\\u0000\\b\\n\\f\\r\\t"]}' ==
                                    e({
                                        a: [f, !0, !1, null, "\x00\b\n\f\r\t"]
                                    }) && "1" === e(null, f) && "[\n 1,\n 2\n]" == e([1, 2], null, 1) && '"-271821-04-20T00:00:00.000Z"' == e(new s(-864E13)) && '"+275760-09-13T00:00:00.000Z"' == e(new s(864E13)) && '"-000001-01-01T00:00:00.000Z"' == e(new s(-621987552E5)) && '"1969-12-31T23:59:59.999Z"' == e(new s(-1))
                            } catch (p) {
                                m = !1
                            }
                        }
                        e = m
                    }
                    if ("json-parse" == c) {
                        e = b.parse;
                        if ("function" == typeof e) try {
                            if (0 === e("0") && !e(!1)) {
                                f = e('{"a":[1,true,false,null,"\\u0000\\b\\n\\f\\r\\t"]}');
                                var q = 5 == f.a.length && 1 === f.a[0];
                                if (q) {
                                    try {
                                        q = !e('"\t"')
                                    } catch (t) {}
                                    if (q) try {
                                        q =
                                            1 !== e("01")
                                    } catch (w) {}
                                    if (q) try {
                                        q = 1 !== e("1.")
                                    } catch (v) {}
                                }
                            }
                        } catch (y) {
                            q = !1
                        }
                        e = q
                    }
                }
                return g[c] = !!e
            }
            e || (e = c.Object());
            b || (b = c.Object());
            var k = e.Number || c.Number,
                n = e.String || c.String,
                q = e.Object || c.Object,
                s = e.Date || c.Date,
                K = e.SyntaxError || c.SyntaxError,
                H = e.TypeError || c.TypeError,
                N = e.Math || c.Math,
                M = e.JSON || c.JSON;
            "object" == typeof M && M && (b.stringify = M.stringify, b.parse = M.parse);
            var q = q.prototype,
                R = q.toString,
                F, A, Z, aa = new s(-0xc782b5b800cec);
            try {
                aa = -109252 == aa.getUTCFullYear() && 0 === aa.getUTCMonth() && 1 === aa.getUTCDate() &&
                    10 == aa.getUTCHours() && 37 == aa.getUTCMinutes() && 6 == aa.getUTCSeconds() && 708 == aa.getUTCMilliseconds()
            } catch (Na) {}
            if (!g("json")) {
                var ka = g("bug-string-char-index");
                if (!aa) var ca = N.floor,
                    la = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334],
                    f = function(b, c) {
                        return la[c] + 365 * (b - 1970) + ca((b - 1969 + (c = +(1 < c))) / 4) - ca((b - 1901 + c) / 100) + ca((b - 1601 + c) / 400)
                    };
                (F = q.hasOwnProperty) || (F = function(b) {
                    var c = {},
                        e;
                    (c.__proto__ = null, c.__proto__ = {
                        toString: 1
                    }, c).toString != R ? F = function(b) {
                        var c = this.__proto__;
                        b = b in (this.__proto__ = null,
                            this);
                        this.__proto__ = c;
                        return b
                    } : (e = c.constructor, F = function(b) {
                        var c = (this.constructor || e).prototype;
                        return b in this && !(b in c && this[b] === c[b])
                    });
                    c = null;
                    return F.call(this, b)
                });
                A = function(b, c) {
                    var e = 0,
                        f, g, k;
                    (f = function() {
                        this.valueOf = 0
                    }).prototype.valueOf = 0;
                    g = new f;
                    for (k in g) F.call(g, k) && e++;
                    f = g = null;
                    e ? A = 2 == e ? function(b, c) {
                        var e = {},
                            f = "[object Function]" == R.call(b),
                            g;
                        for (g in b) f && "prototype" == g || (F.call(e, g) || !(e[g] = 1) || !F.call(b, g)) || c(g)
                    } : function(b, c) {
                        var e = "[object Function]" == R.call(b),
                            f,
                            g;
                        for (f in b) e && "prototype" == f || (!F.call(b, f) || (g = "constructor" === f)) || c(f);
                        (g || F.call(b, f = "constructor")) && c(f)
                    } : (g = "valueOf toString toLocaleString propertyIsEnumerable isPrototypeOf hasOwnProperty constructor".split(" "), A = function(b, c) {
                        var e = "[object Function]" == R.call(b),
                            f, k = !e && "function" != typeof b.constructor && p[typeof b.hasOwnProperty] && b.hasOwnProperty || F;
                        for (f in b) e && "prototype" == f || !k.call(b, f) || c(f);
                        for (e = g.length; f = g[--e]; k.call(b, f) && c(f));
                    });
                    return A(b, c)
                };
                if (!g("json-stringify")) {
                    var E = {
                            92: "\\\\",
                            34: '\\"',
                            8: "\\b",
                            12: "\\f",
                            10: "\\n",
                            13: "\\r",
                            9: "\\t"
                        },
                        I = function(b, c) {
                            return ("000000" + (c || 0)).slice(-b)
                        },
                        y = function(b) {
                            for (var c = '"', e = 0, f = b.length, g = !ka || 10 < f, k = g && (ka ? b.split("") : b); e < f; e++) {
                                var m = b.charCodeAt(e);
                                switch (m) {
                                    case 8:
                                    case 9:
                                    case 10:
                                    case 12:
                                    case 13:
                                    case 34:
                                    case 92:
                                        c += E[m];
                                        break;
                                    default:
                                        if (32 > m) {
                                            c += "\\u00" + I(2, m.toString(16));
                                            break
                                        }
                                        c += g ? k[e] : b.charAt(e)
                                }
                            }
                            return c + '"'
                        },
                        t = function(b, c, e, g, k, m, n) {
                            var p, q, s, u, w, x, v, z, B;
                            try {
                                p = c[b]
                            } catch (E) {}
                            if ("object" == typeof p && p)
                                if (q = R.call(p),
                                    "[object Date]" != q || F.call(p, "toJSON")) "function" == typeof p.toJSON && ("[object Number]" != q && "[object String]" != q && "[object Array]" != q || F.call(p, "toJSON")) && (p = p.toJSON(b));
                                else if (p > -1 / 0 && p < 1 / 0) {
                                if (f) {
                                    u = ca(p / 864E5);
                                    for (q = ca(u / 365.2425) + 1970 - 1; f(q + 1, 0) <= u; q++);
                                    for (s = ca((u - f(q, 0)) / 30.42); f(q, s + 1) <= u; s++);
                                    u = 1 + u - f(q, s);
                                    w = (p % 864E5 + 864E5) % 864E5;
                                    x = ca(w / 36E5) % 24;
                                    v = ca(w / 6E4) % 60;
                                    z = ca(w / 1E3) % 60;
                                    w %= 1E3
                                } else q = p.getUTCFullYear(), s = p.getUTCMonth(), u = p.getUTCDate(), x = p.getUTCHours(), v = p.getUTCMinutes(), z = p.getUTCSeconds(),
                                    w = p.getUTCMilliseconds();
                                p = (0 >= q || 1E4 <= q ? (0 > q ? "-" : "+") + I(6, 0 > q ? -q : q) : I(4, q)) + "-" + I(2, s + 1) + "-" + I(2, u) + "T" + I(2, x) + ":" + I(2, v) + ":" + I(2, z) + "." + I(3, w) + "Z"
                            } else p = null;
                            e && (p = e.call(c, b, p));
                            if (null === p) return "null";
                            q = R.call(p);
                            if ("[object Boolean]" == q) return "" + p;
                            if ("[object Number]" == q) return p > -1 / 0 && p < 1 / 0 ? "" + p : "null";
                            if ("[object String]" == q) return y("" + p);
                            if ("object" == typeof p) {
                                for (b = n.length; b--;)
                                    if (n[b] === p) throw H();
                                n.push(p);
                                B = [];
                                c = m;
                                m += k;
                                if ("[object Array]" == q) {
                                    s = 0;
                                    for (b = p.length; s < b; s++) q = t(s, p, e,
                                        g, k, m, n), B.push(q === Z ? "null" : q);
                                    b = B.length ? k ? "[\n" + m + B.join(",\n" + m) + "\n" + c + "]" : "[" + B.join(",") + "]" : "[]"
                                } else A(g || p, function(b) {
                                    var c = t(b, p, e, g, k, m, n);
                                    c !== Z && B.push(y(b) + ":" + (k ? " " : "") + c)
                                }), b = B.length ? k ? "{\n" + m + B.join(",\n" + m) + "\n" + c + "}" : "{" + B.join(",") + "}" : "{}";
                                n.pop();
                                return b
                            }
                        };
                    b.stringify = function(b, c, e) {
                        var f, g, k, m;
                        if (p[typeof c] && c)
                            if ("[object Function]" == (m = R.call(c))) g = c;
                            else if ("[object Array]" == m) {
                            k = {};
                            for (var n = 0, q = c.length, s; n < q; s = c[n++], (m = R.call(s), "[object String]" == m || "[object Number]" ==
                                    m) && (k[s] = 1));
                        }
                        if (e)
                            if ("[object Number]" == (m = R.call(e))) {
                                if (0 < (e -= e % 1))
                                    for (f = "", 10 < e && (e = 10); f.length < e; f += " ");
                            } else "[object String]" == m && (f = 10 >= e.length ? e : e.slice(0, 10));
                        return t("", (s = {}, s[""] = b, s), g, k, f, "", [])
                    }
                }
                if (!g("json-parse")) {
                    var ab = n.fromCharCode,
                        bb = {
                            92: "\\",
                            34: '"',
                            47: "/",
                            98: "\b",
                            116: "\t",
                            110: "\n",
                            102: "\f",
                            114: "\r"
                        },
                        B, ya, z = function() {
                            B = ya = null;
                            throw K();
                        },
                        m = function() {
                            for (var b = ya, c = b.length, e, f, g, k, m; B < c;) switch (m = b.charCodeAt(B), m) {
                                case 9:
                                case 10:
                                case 13:
                                case 32:
                                    B++;
                                    break;
                                case 123:
                                case 125:
                                case 91:
                                case 93:
                                case 58:
                                case 44:
                                    return e =
                                        ka ? b.charAt(B) : b[B], B++, e;
                                case 34:
                                    e = "@";
                                    for (B++; B < c;)
                                        if (m = b.charCodeAt(B), 32 > m) z();
                                        else if (92 == m) switch (m = b.charCodeAt(++B), m) {
                                        case 92:
                                        case 34:
                                        case 47:
                                        case 98:
                                        case 116:
                                        case 110:
                                        case 102:
                                        case 114:
                                            e += bb[m];
                                            B++;
                                            break;
                                        case 117:
                                            f = ++B;
                                            for (g = B + 4; B < g; B++) m = b.charCodeAt(B), 48 <= m && 57 >= m || (97 <= m && 102 >= m || 65 <= m && 70 >= m) || z();
                                            e += ab("0x" + b.slice(f, B));
                                            break;
                                        default:
                                            z()
                                    } else {
                                        if (34 == m) break;
                                        m = b.charCodeAt(B);
                                        for (f = B; 32 <= m && 92 != m && 34 != m;) m = b.charCodeAt(++B);
                                        e += b.slice(f, B)
                                    }
                                    if (34 == b.charCodeAt(B)) return B++, e;
                                    z();
                                default:
                                    f =
                                        B;
                                    45 == m && (k = !0, m = b.charCodeAt(++B));
                                    if (48 <= m && 57 >= m) {
                                        for (48 == m && (m = b.charCodeAt(B + 1), 48 <= m && 57 >= m) && z(); B < c && (m = b.charCodeAt(B), 48 <= m && 57 >= m); B++);
                                        if (46 == b.charCodeAt(B)) {
                                            for (g = ++B; g < c && (m = b.charCodeAt(g), 48 <= m && 57 >= m); g++);
                                            g == B && z();
                                            B = g
                                        }
                                        m = b.charCodeAt(B);
                                        if (101 == m || 69 == m) {
                                            m = b.charCodeAt(++B);
                                            43 != m && 45 != m || B++;
                                            for (g = B; g < c && (m = b.charCodeAt(g), 48 <= m && 57 >= m); g++);
                                            g == B && z();
                                            B = g
                                        }
                                        return +b.slice(f, B)
                                    }
                                    k && z();
                                    if ("true" == b.slice(B, B + 4)) return B += 4, !0;
                                    if ("false" == b.slice(B, B + 5)) return B += 5, !1;
                                    if ("null" == b.slice(B,
                                            B + 4)) return B += 4, null;
                                    z()
                            }
                            return "$"
                        },
                        Ha = function(b) {
                            var c, e;
                            "$" == b && z();
                            if ("string" == typeof b) {
                                if ("@" == (ka ? b.charAt(0) : b[0])) return b.slice(1);
                                if ("[" == b) {
                                    for (c = [];; e || (e = !0)) {
                                        b = m();
                                        if ("]" == b) break;
                                        e && ("," == b ? (b = m(), "]" == b && z()) : z());
                                        "," == b && z();
                                        c.push(Ha(b))
                                    }
                                    return c
                                }
                                if ("{" == b) {
                                    for (c = {};; e || (e = !0)) {
                                        b = m();
                                        if ("}" == b) break;
                                        e && ("," == b ? (b = m(), "}" == b && z()) : z());
                                        "," != b && "string" == typeof b && "@" == (ka ? b.charAt(0) : b[0]) && ":" == m() || z();
                                        c[b.slice(1)] = Ha(m())
                                    }
                                    return c
                                }
                                z()
                            }
                            return b
                        },
                        Pa = function(b, c, e) {
                            e = Ia(b, c,
                                e);
                            e === Z ? delete b[c] : b[c] = e
                        },
                        Ia = function(b, c, e) {
                            var f = b[c],
                                g;
                            if ("object" == typeof f && f)
                                if ("[object Array]" == R.call(f))
                                    for (g = f.length; g--;) Pa(f, g, e);
                                else A(f, function(b) {
                                    Pa(f, b, e)
                                });
                            return e.call(b, c, f)
                        };
                    b.parse = function(b, c) {
                        var e, f;
                        B = 0;
                        ya = "" + b;
                        e = Ha(m());
                        "$" != m() && z();
                        B = ya = null;
                        return c && "[object Function]" == R.call(c) ? Ia((f = {}, f[""] = e, f), "", c) : e
                    }
                }
            }
            b.runInContext = v;
            return b
        }
        var k = "function" === typeof define && define.amd,
            p = {
                "function": !0,
                object: !0
            },
            s = p[typeof exports] && exports && !exports.nodeType && exports,
            c = p[typeof window] && window || this,
            g = s && p[typeof module] && module && !module.nodeType && "object" == typeof global && global;
        !g || g.global !== g && g.window !== g && g.self !== g || (c = g);
        if (s && !k) var q = v(c, s);
        else var n = c.JSON,
            e = c.JSON3,
            M = !1,
            q = v(c, c.JSON3 = {
                noConflict: function() {
                    M || (M = !0, c.JSON = n, c.JSON3 = e, n = e = null);
                    return q
                }
            });
        $_TAWK_JSON = {
            parse: q.parse,
            stringify: q.stringify
        }
    }).call(this);
    (function(v) {
        "function" !== typeof Array.isArray && (Array.isArray = function(k) {
            return "[object Array]" === Object.prototype.toString.call(k)
        });
        Array.prototype.indexOf || (Array.prototype.indexOf = function(k) {
            for (var s = 0, c = this.length; s < c; s++)
                if (this[s] === k) return s;
            return -1
        });
        v = v.EventEmitter = function() {};
        var k = Array.isArray;
        v.prototype.emit = function(p) {
            var s;
            if ("error" === p && (!this._events || !this._events.error || k(this._events.error) && !this._events.error.length)) {
                if (arguments[1] instanceof Error) throw arguments[1];
                throw Error("Uncaught, unspecified 'error' event.");
            }
            if (!this._events) return !1;
            var c = this._events[p];
            if (!c) return !1;
            if ("function" == typeof c) {
                switch (arguments.length) {
                    case 1:
                        c.call(this);
                        break;
                    case 2:
                        c.call(this, arguments[1]);
                        break;
                    case 3:
                        c.call(this, arguments[1], arguments[2]);
                        break;
                    default:
                        s = Array.prototype.slice.call(arguments, 1), c.apply(this, s)
                }
                return !0
            }
            if (k(c)) {
                s = Array.prototype.slice.call(arguments, 1);
                for (var c = c.slice(), g = 0, q = c.length; g < q; g++) c[g].apply(this, s);
                return !0
            }
            return !1
        };
        v.prototype.addListener =
            function(p, s) {
                if ("function" !== typeof s) throw Error("addListener only takes instances of Function");
                this._events || (this._events = {});
                this._events[p] ? k(this._events[p]) ? this._events[p].push(s) : this._events[p] = [this._events[p], s] : this._events[p] = s;
                return this
            };
        v.prototype.on = v.prototype.addListener;
        v.prototype.once = function(k, s) {
            var c = this;
            c.on(k, function q() {
                c.removeListener(k, q);
                s.apply(this, arguments)
            })
        };
        v.prototype.removeListener = function(p, s) {
            if ("function" !== typeof s) throw Error("removeListener only takes instances of Function");
            if (!this._events || !this._events[p]) return this;
            var c = this._events[p];
            if (k(c)) {
                var g = c.indexOf(s);
                if (0 > g) return this;
                c.splice(g, 1);
                0 === c.length && delete this._events[p]
            } else this._events[p] === s && delete this._events[p];
            return this
        };
        v.prototype.removeAllListeners = function(k) {
            k ? k && (this._events && this._events[k]) && (this._events[k] = null) : this._events = {};
            return this
        };
        v.prototype.listeners = function(p) {
            this._events || (this._events = {});
            this._events[p] || (this._events[p] = []);
            k(this._events[p]) || (this._events[p] = [this._events[p]]);
            return this._events[p]
        }
    })(window);
    (function(v) {
        function k(c, g) {
            if (!g.engineIo) throw Error("You must specify engineIo");
            g.timestampRequests = !0;
            g.timestampParam = "__t";
            this.__callbackIndex = 0;
            this.__callbacks = {};
            this.state = s.OPENING;
            this.socket = new g.engineIo(c, g);
            this.debug = !1;
            if (document.getElementById("tawk__dmz")) {
                var k = this;
                v.getSocketTransport = function() {
                    if (k.socket.transport) return k.socket.transport.name
                }
            }
            document.location && "#!tawk-debug" === document.location.hash && (this.debug = !0);
            EventEmitter.call(this);
            this.attachListeners()
        }
        var p, s = {
            OPENING: "opening",
            OPEN: "open",
            CLOSING: "closing",
            CLOSED: "closed"
        };
        for (p in EventEmitter.prototype) "function" === typeof EventEmitter.prototype[p] && Object.prototype.hasOwnProperty.call(EventEmitter.prototype, p) && (k.prototype[p] = EventEmitter.prototype[p]);
        k.prototype.attachListeners = function() {
            var c = this;
            this.socket.on("open", function() {
                c.state = s.OPEN;
                c.emit("connect")
            });
            this.socket.on("close", function(g, k) {
                c.emit("disconnect", g, k);
                c.doClose()
            });
            this.socket.on("error", function(g) {
                c.emit("error",
                    g)
            });
            this.socket.on("message", function(g) {
                c.onMessage(g)
            })
        };
        k.prototype.close = k.prototype.disconnect = function() {
            var c = this;
            this.state === s.OPENING && setTimeout(function() {
                c.close()
            }, 1E3);
            this.state === s.OPEN && (this.state = s.CLOSING, this.clearCallbacks(), this.socket.close())
        };
        k.prototype.doClose = function() {
            this.clearCallbacks();
            this.state = s.CLOSED;
            this.socket.removeAllListeners();
            this.removeAllListeners();
            this.socket = null
        };
        k.prototype.clearCallbacks = function() {
            this.__callbacks = {}
        };
        k.prototype.onMessage =
            function(c) {
                (c = this.decode(c)) && ("__callback__" === c.c ? this.executeCallback(c) : this.emit.apply(this, [c.c].concat(c.p)))
            };
        k.prototype.executeCallback = function(c) {
            var g = this.__callbacks[c.cb];
            delete this.__callbacks[c.cb];
            g.apply(null, c.p)
        };
        k.prototype.decode = function(c) {
            var g;
            this.debug && (console && console.log) && (data = new Date, console.log("received " + data.toUTCString() + " : " + c));
            try {
                g = $_TAWK_JSON.parse(c)
            } catch (k) {
                this.emit("error", k);
                return
            }
            if (g.c)
                if ("error" === g.c || "connect" === g.c || "disconnect" === g.c) this.emit("error",
                    Error("server returned reserved command : `" + g.cmd + "`"));
                else if (g.p && "[object Array]" !== Object.prototype.toString.call(g.p)) this.emit("error", Error("data is expected to be an array"));
            else {
                if ("__callback__" !== g.c) return g;
                c = parseInt(g.cb, 10);
                if (isNaN(c)) this.emit("error", Error("received callback command but there was no valid callback id(`" + c + "`"));
                else {
                    if (this.__callbacks[c]) return g.cb = c, g;
                    this.emit("error", Error("received callback command but callback isnt present (`" + g.cb + "`)"))
                }
            } else this.emit("error",
                Error("no command was sent by the server"))
        };
        k.prototype.send = function() {
            var c = this.encode(arguments);
            this.debug && (console && console.log) && (data = new Date, console.log("send " + data.toUTCString() + " : " + c));
            this.state !== s.OPEN ? this.emit("error", Error("Socket isnt open its state is `" + this.state + "` tried to send `" + c + "`")) : c && this.socket.send(c)
        };
        k.prototype.encode = function(c) {
            var g = {};
            c = Array.prototype.slice.call(c);
            if (c[0]) {
                g.c = c[0];
                "function" === typeof c[c.length - 1] && (g.cb = this.enqueuCallback(c.pop()));
                g.p = c.slice(1);
                var k;
                try {
                    k = $_TAWK_JSON.stringify(g)
                } catch (n) {
                    this.emit("error", n);
                    return
                }
                return k
            }
            this.emit("error", Error("now command specified"))
        };
        k.prototype.enqueuCallback = function(c) {
            this.__callbacks[this.__callbackIndex] = c;
            return this.__callbackIndex++
        };
        v.$__TawkSocket = k
    })(window);
    (function(v) {
        var k, p, s, c, g, q, n = {},
            e = this,
            M = (new Date).getTime(),
            w = e.navigator,
            b = {
                viewHandler: null
            };
        v.startTime = M.toString();
        v.loaded = !1;
        v.connected = !1;
        v.ready = !1;
        "undefined" !== typeof Tawk_LoadStart && ($_Tawk_LoadStart = Tawk_LoadStart);
        try {
            b.ResetStyle = "html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}html,body{height:100%;width:100%}body{background:transparent;height:100%;width:100%;font:13px Helvetica,Arial,sans-serif;position:relative}.clear{clear:both}.clearfix:after{content:'';display:block;height:0;clear:both;visibility:hidden}";
            b.MaximizedStyle = ".rtl-direction{direction:rtl !important}#tawkchat-maximized-wrapper{width:100%;height:100%;position:relative}#borderWrapper{position:absolute;top:0;bottom:0;z-index:-10;background-color:#e1e1e1;width:100%;height:100%}.noCookies #borderWrapper{background-color:transparent}#innerWrapper{background:#fff;left:2px;position:absolute;right:2px;top:2px;bottom:0;*height:expression(this.parentNode.offsetHeight - 4+'px');*width:expression(this.parentNode.offsetWidth - 4+'px');-webkit-box-shadow:rgba(0,0,0,0.0980392) 0 0 1px 2px;-moz-box-shadow:rgba(0,0,0,0.0980392) 0 0 1px 2px;box-shadow:rgba(0,0,0,0.0980392) 0 0 1px 2px}.embedded #innerWrapper{left:0 !important;right:0 !important;top:0 !important;bottom:0 !important}#headerBoxWrapper{height:45px}#expandableLink{height:5px;width:100%;font-size:0;cursor:s-resize;visibility:hidden;position:absolute;top:56px;z-index:30}#expandableIcon{width:30px;height:4px;margin:0 auto;background:#a1a1a1}#expandableLink.expanded{cursor:n-resize}#headerBox{height:45px;position:relative;z-index:30}.noCookies #headerBox{-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box;border-radius:8px 8px 0 0 !important;-moz-border-radius:8px 8px 0 0 !important;-webkit-border-radius:8px 8px 0 0 !important}.noCookies.embed #headerBox{border-radius:0 !important;-moz-border-radius:0 !important;-webkit-border-radius:0 !important}#agentBar{position:absolute;bottom:32px;top:70px;width:100%;background-color:#eee;display:none;overflow:auto;z-index:10003}.noCookies #headerBoxControlsContainer{float:right;margin-left:0;width:28px}#headerBoxControlsContainer{height:45px;float:left;width:83px;margin-left:-83px}.embedded #headerBoxControlsContainer{display:none;width:30px;margin-left:-30px}.embedded #headerAccountState{margin-right:28px;margin-left:0}.embedded.rtl-direction #headerAccountState{margin-right:0;margin-left:28px}.rtl-direction #headerBoxControlsContainer{margin-left:-100%}#popupLink{float:right;display:inline;margin:15px 6px 0 0;background:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-repeat:no-repeat;background-position:-213px 0;width:20px;height:20px;cursor:pointer}.noCookies #minimizeChat{width:15px;margin:20px 0;cursor:pointer}.noCookies.white #minimizeChat{background-position:-95px 0}.noCookies.black #minimizeChat{background-position:-32px 0}#minimizeLink{display:inline;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-188px 0;width:20px;height:20px;background-repeat:no-repeat;float:right;margin:15px 6px 0 0;cursor:pointer}#headerAccountStateContainer{float:left;width:100%;height:45px}#headerAccountState{vertical-align:baseline;font-size:17px;padding:0 15px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;margin-right:80px;margin-left:0;line-height:45px}.rtl-direction #headerAccountState{margin-right:0;margin-left:80px}#chatContainerWrapper{position:absolute;bottom:109px;top:3px;width:100%;background-color:#fcfcfc}#chatContainerWrapper.chat-ended{bottom:118px;*height:expression(this.parentNode.offsetHeight - 200+'px')}#chatContainer{overflow:auto;position:absolute;font-size:14px;font-family:Arial;color:#6c6c6c;min-width:270px;left:3px;right:3px;height:auto;overflow-x:hidden;top:0;bottom:0}#maxFileNotificationContainer,#maxSizeNotificationContainer{color:#8a6d3b;background-color:#fcf8e3;border:#faebcc 1px solid;margin:5px 10px;padding:5px 10px;border-radius:6px;font-size:13px}.closeButtonContainer{margin:10px auto auto auto;text-align:right}.closeNotification{cursor:pointer;text-transform:uppercase}#maxFileSizeList,#maxFileNumberList{margin:10px}#maxFileSizeList li,#maxFileNumberList li{word-wrap:break-word}#maxFileSizeList a,#maxFileNumberList a{color:#00E}#chatContainer .hidden{display:none}.actionRetry{cursor:pointer;float:right}#actionsContainer{z-index:99998;height:107px;background-color:#fff;border-top:2px solid #e1e1e1;position:absolute;bottom:0;width:100%}#status-message{font-weight:bold;font-style:normal}#resizeBox{width:52px;height:52px;position:absolute;top:0;background-color:#000;z-index:5}body.right #resizeBox{left:0;float:left;-webkit-border-top-left-radius:3px;-moz-border-radius-topleft:3px;border-top-left-radius:3px}body.left #resizeBox{right:0;float:right;-webkit-border-top-right-radius:3px;-moz-border-radius-topright:3px;border-top-right-radius:3px}#resizeInnerBox{background-color:#fefefe;width:47px;height:47px}body.right #resizeInnerBox{-webkit-border-top-left-radius:3px;-moz-border-radius-topleft:3px;border-top-left-radius:3px;margin:5px 0 0 5px}body.left #resizeInnerBox{-webkit-border-top-right-radius:3px;-moz-border-radius-topright:3px;border-top-right-radius:3px;margin:5px 5px 0 0}#pluginsBar{height:23px;background-color:#c2c2c2;min-width:278px}#ratingContainer{position:absolute;width:38px;margin:0;right:30px;top:10px}.rtl-direction #ratingContainer{right:auto;left:30px;-ms-transform:rotateY(180deg);-webkit-transform:rotateY(180deg);-moz-transform:rotateY(180deg);-o-transform:rotateY(180deg);transform:rotateY(180deg);filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)}#ratingContainer a{float:left;margin:0 5px 0 0;width:14px;height:13px;cursor:pointer;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-repeat:no-repeat}.rtl-direction #ratingContainer a{margin:0 0 0 5px}#ratingContainer a:active,#ratingContainer a:focus{outline:0}#ratePositive{background-position:-145px 0}#rateNegative{background-position:-126px 0}#ratePositive:hover,#ratePositive.selected{background-position:-164px 0}#ratePositive:hover,#rateNegative:hover{transform:scale(1.5,1.5);// This is the enlarged size scale of the image. transition-duration:500ms;transition-timing-function:ease-out;-webkit-transform:scale(1.5,1.5);// This is the enlarged size scale of the image. -webkit-transition-duration:500ms;-webkit-transition-timing-function:ease-out;-moz-transform:scale(1.5,1.5);// This is the enlarged size scale of the image. -moz-transition-duration:500ms;-moz-transition-timing-function:ease-out;-ms-transform:scale(1.5,1.5);// This is the enlarged size scale of the image. -ms-transition-duration:500ms;-ms-transition-timing-function:ease-out;-o-transform:scale(1.5,1.5);// This is the enlarged size scale of the image. -o-transition-duration:500ms;-o-transition-timing-function:ease-out}#rateNegative:hover,#rateNegative.selected{background-position:-183px 0}.activeSound{background-position:0 0;background-repeat:no-repeat}.disabledSound{background-position:-21px 0;background-repeat:no-repeat}#textareaWrapper{display:block;background-color:#fff;position:relative}#textareaContainer{height:52px;padding:10px;padding-right:30px}.rtl-direction #textareaContainer{padding:10px;padding-left:30px}#chatTextarea{padding:0;margin:0;height:100%;width:100%;overflow:hidden;resize:none;border:0;vertical-align:top;font-size:14px !important;background-color:#fff;color:#000}#chatTextarea:active,#chatTextarea:focus{outline:0}#textareaContainer textarea::-webkit-input-placeholder{color:#b3b3b3;font-style:italic;font-family:Arial}#textareaContainer textarea::-moz-placeholder{color:#b3b3b3;font-style:italic;font-family:Arial}#textareaContainer textarea:-ms-input-placeholder{color:#b3b3b3;font-style:italic;font-family:Arial}#greetingsContainer{margin:7px 45px 0 45px;padding:5px;text-align:center;white-space:pre-wrap;word-wrap:break-word;color:black;font-size:15px !important}#formContainer #greetingsContainer{margin:0 !important}.embedded{width:100%;height:100%}.embedded #headerBox{-webkit-border-top-left-radius:0 !important;-moz-border-radius-topleft:0 !important;border-top-left-radius:0 !important;-webkit-border-top-right-radius:0 !important;-moz-border-radius-topright:0 !important;border-top-right-radius:0 !important}#agentBar.expanded{height:auto;overflow-y:auto;display:block;max-height:153px}#agentList{padding:0 5px}#agentList .agentWrapper{border-radius:0;margin:10px 0}#profileDetail .agentContainer{margin-left:50px}.agentContainer{height:50px}.rtl-direction #profileDetail .agentContainer{margin-right:50px;margin-left:0}#agentBar .agentContainer{height:50px;width:100%;float:left}.agentContainerNoImage{height:45px}.agentWrapper{width:100%;min-width:280px;clear:both;position:relative;-webkit-border-top-left-radius:10px;-webkit-border-top-right-radius:10px;-moz-border-radius-topleft:10px;-moz-border-radius-topright:10px;border-top-left-radius:10px;border-top-right-radius:10px}#headerBox .agentInformationContainer{padding:10px 0}#agentBar .agentInformationContainer{padding:10px 0;margin-left:50px;margin-right:0}.rtl-direction #agentBar .agentInformationContainer{margin-right:50px;margin-left:0}.agentInformationContainerNoImage{padding-top:13px;padding-bottom:13px;font-size:16px}.agentInformationContainer{font-size:14px}.position-label{font-size:12px}.agentNameCentered{margin-top:8px;font-weight:bold}.noImageAgentProfileDetail{padding-left:5px}.rtl-direction .noImageAgentProfileDetail{padding:0 5px 0 0}.agentInformationContainer p{height:16px;white-space:nowrap;overflow:hidden;box-sizing:border-box;text-overflow:ellipsis}.agentInformationContainer .agentName{font-weight:bold}#headerBox .alias-image{-moz-animation:profileShow .5 ease-in;-webkit-animation:profileShow .5s ease-in;-o-animation:profileShow .5 ease-in;-ms-animation:profileShow .5 ease-in;animation:profileShow .5s ease-in}@-ms-keyframes profileShow{0%{-ms-transform:scale(0)}6.25%{-ms-transform:scale(0.1)}12.5%{-ms-transform:scale(0.2)}18.75%{-ms-transform:scale(0.3)}25%{-ms-transform:scale(0.4)}31.25%{-ms-transform:scale(0.5)}37.5%{-ms-transform:scale(0.6)}43.75%{-ms-transform:scale(0.7)}50%{-ms-transform:scale(0.8)}56.25%{-ms-transform:scale(0.9)}62.5%{-ms-transform:scale(1)}68.75%{-ms-transform:scale(1.1)}75%{-ms-transform:scale(1.2)}81.25%{-ms-transform:scale(1.3)}87.5%{-ms-transform:scale(1.2)}93.75%{-ms-transform:scale(1.1)}100%{-ms-transform:scale(1)}}@-webkit-keyframes profileShow{0%{-webkit-transform:scale(0)}6.25%{-webkit-transform:scale(0.1)}12.5%{-webkit-transform:scale(0.2)}18.75%{-webkit-transform:scale(0.3)}25%{-webkit-transform:scale(0.4)}31.25%{-webkit-transform:scale(0.5)}37.5%{-webkit-transform:scale(0.6)}43.75%{-webkit-transform:scale(0.7)}50%{-webkit-transform:scale(0.8)}56.25%{-webkit-transform:scale(0.9)}62.5%{-webkit-transform:scale(1)}68.75%{-webkit-transform:scale(1.1)}75%{-webkit-transform:scale(1.2)}81.25%{-webkit-transform:scale(1.3)}87.5%{-webkit-transform:scale(1.2)}93.75%{-webkit-transform:scale(1.1)}100%{-webkit-transform:scale(1)}}@-moz-keyframes profileShow{0%{-moz-transform:scale(0)}6.25%{-moz-transform:scale(0.1)}12.5%{-moz-transform:scale(0.2)}18.75%{-moz-transform:scale(0.3)}25%{-moz-transform:scale(0.4)}31.25%{-moz-transform:scale(0.5)}37.5%{-moz-transform:scale(0.6)}43.75%{-moz-transform:scale(0.7)}50%{-moz-transform:scale(0.8)}56.25%{-moz-transform:scale(0.9)}62.5%{-moz-transform:scale(1)}68.75%{-moz-transform:scale(1.1)}75%{-moz-transform:scale(1.2)}81.25%{-moz-transform:scale(1.3)}87.5%{-moz-transform:scale(1.2)}93.75%{-moz-transform:scale(1.1)}100%{-moz-transform:scale(1)}}@-o-keyframes profileShow{0%{-o-transform:scale(0)}6.25%{-o-transform:scale(0.1)}12.5%{-o-transform:scale(0.2)}18.75%{-o-transform:scale(0.3)}25%{-o-transform:scale(0.4)}31.25%{-o-transform:scale(0.5)}37.5%{-o-transform:scale(0.6)}43.75%{-o-transform:scale(0.7)}50%{-o-transform:scale(0.8)}56.25%{-o-transform:scale(0.9)}62.5%{-o-transform:scale(1)}68.75%{-o-transform:scale(1.1)}75%{-o-transform:scale(1.2)}81.25%{-o-transform:scale(1.3)}87.5%{-o-transform:scale(1.2)}93.75%{-o-transform:scale(1.1)}100%{-o-transform:scale(1)}}@keyframes profileShow{0%{transform:scale(0)}6.25%{transform:scale(0.1)}12.5%{transform:scale(0.2)}18.75%{transform:scale(0.3)}25%{transform:scale(0.4)}31.25%{transform:scale(0.5)}37.5%{transform:scale(0.6)}43.75%{transform:scale(0.7)}50%{transform:scale(0.8)}56.25%{transform:scale(0.9)}62.5%{transform:scale(1)}68.75%{transform:scale(1.1)}75%{transform:scale(1.2)}81.25%{transform:scale(1.3)}87.5%{transform:scale(1.2)}93.75%{transform:scale(1.1)}100%{transform:scale(1)}}#agentBar .alias-image,#headerBox .alias-image{width:40px;height:40px;margin:0;background-repeat:no-repeat;border-radius:20px;margin:5px 0;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-624px 0;float:left;margin-left:-100%}.rtl-direction #agentBar .alias-image,.rtl-direction #headerBox .alias-image{float:right}.agentChatContainer .messageBody{margin:-12px 0 0 0;max-width:100%}.rtl-direction .agentChatContainer .messageBody{float:right;margin:-12px 00px 0 0}.agentChatContainer .message{background:#eee;color:#333;margin-right:40px;margin-left:0;padding:5px 10px;border-radius:0 15px 15px 15px}.rtl-direction .agentChatContainer .message{margin:0 0 0 40px;border-radius:15px 0 15px 15px}.ie9.rtl-direction .agentChatContainer .message{border-radius:0 15px 15px 15px !important}.agentChatContainer .messageStatusContainer{margin-left:-40px;position:absolute;top:5px;left:100%}.rtl-direction .agentChatContainer .messageStatusContainer{margin:0 -40px 0 0;left:auto;right:100%}.messageContainer.agentChatContainer{margin:10px 0 10px 12px}.rtl-direction .messageContainer.agentChatContainer{margin:10px 8px 10px 0}.messageContainer.visitorChatContainer{margin:10px 12px 10px 0}.rtl-direction .messageContainer.visitorChatContainer{margin:10px 0 10px 12px}.visitorChatContainer .messageBody{margin:2px 0 0 0;float:right;max-width:100%}.rtl-direction .visitorChatContainer .messageBody{float:left}.visitorChatContainer .messageWrapper .message{color:#333;text-align:left;border-radius:15px 0 15px 15px;background:#e5e5e5;margin-left:40px}.rtl-direction .visitorChatContainer .messageWrapper .message{text-align:right;margin:0 30px 0 0;border-radius:0 15px 15px 15px}.ie9.rtl-direction .visitorChatContainer .messageWrapper .message{border-radius:15px 0 15px 15px !important}.visitorChatContainer .messageStatusContainer.errorInMessage{width:100%;position:relative;right:auto}.visitorChatContainer .messageStatusContainer.errorInMessage a{float:right;font-size:11px;text-decoration:none;color:#ec6368;width:100%;background:0;text-align:right;top:0;margin:0;line-height:10px}.rtl-direction .visitorChatContainer .messageStatusContainer.errorInMessage a{float:left;text-align:left}.visitorChatContainer .messageStatusContainer{position:absolute;right:100%;top:5px;margin-right:-40px}.rtl-direction .visitorChatContainer .messageStatusContainer.errorInMessage{left:auto;margin:0}.rtl-direction .visitorChatContainer .messageStatusContainer{right:auto;left:100%;margin:0 0 0 -40px}.messageHead{position:absolute;z-index:10001}.messageHeadLine{position:relative;top:10px;z-index:1}.messageContainer .messageHead .messageTitle{text-align:center;width:100%}.messageBody{line-height:1.5em;margin:5px 0 0 42px;float:left;position:relative}.notification{margin-left:0;width:100%}.ownerNameContainer,.notificationContainer{float:left}.rtl-direction .notificationContainer{direction:rtl !important;float:right}.notificationContainer .message{margin-right:40px;font-size:14px !important;font-style:italic}.rtl-direction .notificationContainer .message{margin:0 0 0 40px}.message{white-space:pre-wrap;word-wrap:break-word}.messageContainer .messageHead.agent .messageTime,.notificationTime{color:#b3b3b3}.notificationTime{width:40px;float:left;margin-left:-40px;text-align:right;font-size:12px !important}.rtl-direction .notificationTime{float:right;margin:0 -40px 0 0;text-align:left}.messageStatusContainer{position:relative;z-index:2;width:40px;float:left}.messageTime{padding:0 2px 0 8px;font-size:11px !important;color:#777;display:none}.rtl-direction .messageTime{padding:0 8px 0 2px}.messageTime.visitor{padding:0 8px 0 2px}.rtl-direction .messageTime.visitor{padding:0 2px 0 8px}.show-time .messageTime{display:block}.messageWrapper{background:0;position:relative;width:100%;float:left}.messageStatus{width:16px;height:16px}.messageStatus:active,.messageStatus:focus{outline:0}.messageStatusContainer.pending .messageStatus{background-image:url('https://static-v.tawk.to/a-v3-39/images/ajax-loader.gif');background-position:0 0;background-repeat:no-repeat;float:right;margin-top:5px;width:13px;height:13px;margin-right:5px}.messageWrapper.pending{font-style:italic}.messageWrapper.error{font-style:italic;color:red;cursor:pointer;float:right;width:auto}.rtl-direction .messageWrapper.error{max-width:100%;float:left}.messageWrapper.error .message{background-color:#ec6368 !important;color:#fff !important}.messageWrapper .message{font-size:14px !important;padding:5px 10px}.longFormContainer::-webkit-scrollbar-thumb,#chatContainer::-webkit-scrollbar-thumb{-webkit-border-radius:10px;border-radius:10px;background-color:#d4d4d4}.longFormContainer::-webkit-scrollbar,#chatContainer::-webkit-scrollbar{width:10px}.messageTitle span{text-transform:uppercase;font-weight:bold;padding:0 10px;color:#ccc;background-color:#fff;z-index:1;position:relative}#formContainer{position:absolute;z-index:20;display:none;left:0;right:0;bottom:32px;top:70px;overflow:hidden;background-color:#fcfcfc;*width:expression(this.parentNode.offsetWidth+'px');*height:expression(this.parentNode.offsetHeight - 102+'px');z-index:99999}.noCookies #formContainer{top:45px}.formMessageField{padding:10px 20px;line-height:1.2em;color:#616161;font-size:15px;text-align:center;word-wrap:break-word}.form{margin:0 20px;font-size:13px;color:#a1a1a1;height:100%}.form fieldset{padding:0}.longFormContainer{position:absolute;left:5px;right:5px;bottom:50px;top:0;overflow-y:auto;padding-bottom:10px}.longFormBottomContainer{position:absolute;bottom:0;left:0;right:0}.form .textareaFieldset{padding:0 33px 0 0;margin:0 0 7px 0;position:relative;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;background-color:#fff;border:1px solid #ccc}.rtl-direction .form .textareaFieldset{padding:0 0 0 33px}.form textarea{resize:none;display:block;height:40px;width:100%;overflow:auto;padding:0 15px;color:#707070;font-size:13px;font-weight:bold;border:0;background-color:#fff;font-family:Arial;margin:13px 0}.form textarea:active,.form textarea:focus,.inputContainer select:active,.inputContainer select:focus{outline:0}.inputContainer{padding:0 15px;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;background-color:#fff;margin:0 0 7px 0;position:relative}.inputContainer input,.inputContainer select{width:100%;margin:0;border:0;display:block;line-height:1.2em;padding:10px 0;color:#707070;font-family:Arial;font-size:13px;font-weight:bold}.inputContainer input{padding:11px 0}.inputContainer.other-fix{padding:0}.inputContainer select{background-color:#fff;outline:0}#departmentFieldFieldset.safari-fix .inputContainer select{-webkit-appearance:none}#departmentFieldFieldset.safari-fix .inputContainer{position:relative}#departmentFieldFieldset.safari-fix .inputContainer:after{position:absolute;right:24px;top:12px;cursor:pointer;width:10px;height:10px;font-size:10px;padding:0;background:#fff;color:#000;content:'\u25bc';pointer-events:none;cursor:pointer}.inputContainer.error,.form .textareaFieldset.error{border-color:#ef5656;color:#ef5656}.inputContainer.error input,.form .textareaFieldset.error textarea,.inputContainer.error select,.error .form-field-label{color:#ef5656}.inputContainer.error input::-webkit-input-placeholder,.form .textareaFieldset.error textarea::-webkit-input-placeholder{color:#ef5656}.inputContainer.valid,.form .textareaFieldset.valid{border-color:#92ed9d}.inputContainer.valid{padding-right:30px}.inputContainer.selection.valid{padding:0}.inputContainer input:active,.inputContainer input:focus{margin:0;border:0;outline:0}.inputContainer input:active+.form-field-label,.inputContainer input:focus+.form-field-label,.textareaFieldset textarea:active+.form-field-label,.textareaFieldset textarea:focus+.form-field-label{display:block}.inputContainer input:active::-webkit-input-placeholder,.inputContainer input:focus::-webkit-input-placeholder,.textareaFieldset textarea:active::-webkit-input-placeholder,.textareaFieldset textarea:focus::-webkit-input-placeholder{color:transparent !important}.inputContainer input:focus::-moz-placeholder,.inputContainer input:active::-moz-placeholder,.textareaFieldset textarea:focus::-moz-placeholder,.textareaFieldset textarea:active::-moz-placeholder{color:transparent !important;opacity:0 !important}.formErrorContainer{display:none;margin:0 0 7px 15px;color:#ef5656}.rtl-direction .formErrorContainer{margin:0 15px 7px 0}#preChatForm .formErrorContainer,#offlineForm .formErrorContainer{margin:-6px 15px 7px 0}.rtl-direction #preChatForm .formErrorContainer,.rtl-direction #offlineForm .formErrorContainer{margin:-6px 0 7px 15px}#formSavingStatus.errorMessage{color:#ef5656;border:0;visibility:visible}#formSavingStatus{font-size:13px;visibility:hidden;margin:0 auto;max-width:260px}#formSavingStatus img{margin:0 0 0 5px}.formButtonContainer{margin:20px 0 0 0}button{display:inline;zoom:1;vertical-align:baseline;outline:0 none;cursor:pointer;text-align:center;text-decoration:none;overflow:visible;margin:0;padding:7px 15px 8px 15px;font:bold 14px/100% Arial,sans-serif;background-color:#c1c1c1;color:#3d3d3d;border:0;float:left}button::-moz-focus-inner{border:0}button:focus{outline:0}button:active{background-color:#ddd}button:hover{background-color:#a9a9a9}.formButton{width:100%;height:50px}#agentTypingContainer .messageBody{font-size:16px !important;font-weight:bold;min-width:auto;line-height:normal}#offlineOverlay,#inactivityOverlay,#maintenanceOverlay{text-align:center;margin-top:100px;font-size:40px;font-weight:bold;height:auto}#greetingsOverlay{width:100%;height:100%}#greetingsOverlay #greetingsContainer{font-size:14px;color:#777;font-weight:bold}#greetingsWrapper{transform:translate(0%,-50%);-webkit-transform:translate(0%,-50%);-moz-transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);-o-transform:translate(0%,-50%);top:50%;position:absolute;left:0;right:0;*position:static;*margin-top:expression(this.offsetHeight < this.parentNode.offsetHeight ? parseInt((this.parentNode.offsetHeight - this.offsetHeight) / 2)+'px':'0')}#embedArrow{background-position:-318px 0;width:22px;height:26px;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-repeat:no-repeat;margin:5px auto}.cookieOff #formContainer{display:block;width:100%;height:100%;left:0;right:0;top:0}#formInnerHeight{margin:0 auto;max-width:260px}#tawktoLink{color:#000;font-size:15px;text-decoration:none;line-height:24px}#tawktoLink .thin{font-size:11px;font-weight:100}#bottomContainer{text-align:right;left:157px;position:absolute;bottom:0;height:30px;right:6px;background:#fff;z-index:100001;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;line-height:30px}.noCookies #bottomContainer{position:absolute;bottom:0;text-align:right;height:32px;line-height:32px;background-color:#fcfcfc;right:0;left:0;padding:0 6px;margin:auto;font-weight:700}.noCookies #shortMessage{display:inline-block;padding-left:15px;font-size:17px;line-height:45px}.noCookies #tawktoLink{color:#000;font-weight:700}.rtl-direction #bottomContainer{left:6px;right:157px;text-align:left}#headerBoxControlsContainer .icon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');display:block}#endChat,#minimizeChat,#popoutChat{width:16px;height:16px;margin:14px 5px 15px 5px;display:inline-block}#endChat{margin-right:10px;margin-left:5px}.embedded #endChat{margin-right:6px;margin-left:6px}.rtl-direction #endChat{margin-right:5px;margin-left:10px}#endChat .icon{width:11px;height:11px;float:right;margin:2.5px}.black #endChat .icon{background-position:0 0}.white #endChat .icon{background-position:-63px 0}#minimizeChat .icon{width:11px;height:7px;margin:4.5px 2.5px}.black #minimizeChat .icon{background-position:-32px 0}.white #minimizeChat .icon{background-position:-95px 0}#popoutChat .icon{width:10px;height:10px;margin:3px}.black #popoutChat .icon{background-position:-48px 0}.white #popoutChat .icon{background-position:-111px 0}#openMenu{position:absolute;left:10px;bottom:0;color:#bdbdbd;font-size:13px;font-weight:700;text-decoration:none;line-height:28px;z-index:100001;cursor:pointer;*bottom:7px;text-transform:lowercase}.rtl-direction #openMenu{right:10px;left:auto}#options{height:32px;margin-left:110px;text-overflow:ellipsis}.rtl-direction #options{margin:0 110px 0 0}#closeMenu{position:absolute;left:10px;bottom:8px;display:none;cursor:pointer}.rtl-direction #closeMenu{right:10px;left:auto}#closeMenu span{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:0 0;width:11px;height:11px;float:right;margin:2px 5px}.rtl-direction #closeMenu span{float:left}.profileImageContainer .agentProfileImage{width:28px;height:28px;background-repeat:no-repeat;border-radius:14px;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-566px 0;position:absolute;left:0;right:0}.profileImageContainer .visitorProfileImage{width:28px;height:28px;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-202px 0;float:left;margin-left:-100%}#tawkToContent{display:none;position:absolute;top:45px;bottom:0;width:100%;background:#fcfcfc;z-index:100001}#tawkToContent .contentContainer{position:absolute;top:0;bottom:43px;width:auto;left:10%;right:10%;*bottom:100px}#tawkToContent .buttonContainer{position:absolute;height:50px;bottom:0;width:100%}#tawkToContent .buttonContainer button{width:50%;height:50px}#tawkHeader{font-size:22px;font-weight:bold;text-align:center;padding:20px 0 12px 0;color:#343434;border-bottom:2px solid #ddd;width:150px;margin:0 auto}#tawkContent{font-size:15px;text-align:center;color:#6c6c6c;margin:12px 30px 0 30px}#tawkImage{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-235px 0;width:78px;height:83px;margin:0 auto}#tawkToContent .wrapper{position:absolute;width:100%;margin:5px 0}#optionsContainer{position:absolute;left:0;width:155px;bottom:0;z-index:1000001;padding:3px;text-align:left}.rtl-direction #optionsContainer{left:auto;right:0}#optionsContainer .item{padding:0 3px;color:#696969;cursor:pointer;font-size:12px;font-weight:bold;line-height:30px;display:inline-block;vertical-align:middle;position:relative;height:30px}.rtl-direction #optionsContainer .item{float:right}#optionsContainer .tooltip{position:absolute;top:0;left:0;background:#333;color:#fff;padding:2px;transform:translate(-50%,-100%);min-width:100px;border-radius:3px;display:none;line-height:20px;position:absolute;left:50%;text-align:center}#soundOption .tooltip{left:0;transform:translate(0%,-100%)}#emailTranscriptOption .tooltip{left:-26px;transform:translate(0%,-100%)}#optionsContainer .item:hover .tooltip{display:block}#emailTranscriptForm,#changeNameForm,#endChatForm{position:absolute;width:100%;bottom:0;height:164px;margin:0}#endChatForm{height:109px}#emailTranscriptForm #formInnerHeight,#changeNameForm #formInnerHeight,#endChatForm #formInnerHeight{max-width:100%;width:100%;height:100%;background:#fff}#emailTranscriptForm .longFormBottomContainer,#changeNameForm .longFormBottomContainer,#endChatForm .longFormBottomContainer{bottom:0}#emailTranscriptForm .formButton,#changeNameForm .formButton,#endChatForm .formButton{width:50%}#emailTranscriptForm .inputContainer,#changeNameForm .inputContainer,#endChatForm .inputContainer{border:0;margin:0}#offlineForm #messageField{height:85px}#formContainer.success #offlineForm #overlayOfflineForm{display:block}#formContainer #offlineForm #overlayOfflineForm{position:absolute;top:0;bottom:0;left:0;right:0;display:none;z-index:1;background-color:#fff;color:#000;text-align:center;padding:30px 15px;font-size:15px}#formContainer #offlineForm #overlayOfflineForm #resendButton{margin-top:15px;padding:7px 12px;display:inline-block;font-weight:700;cursor:pointer}#emailTranscriptFormMessageContainer,#changeNameFormMessageContainer{background:#ddd;margin:0;padding:10px;text-align:left}.rtl-direction #emailTranscriptFormMessageContainer,.rtl-direction #changeNameFormMessageContainer{text-align:right}.rtl-direction .longFormBottomContainer #formCancel{float:right}.rtl-direction .longFormBottomContainer #formSubmit{float:left}#submitWrapper{position:absolute;bottom:50px;height:0;width:auto;right:0;background:#000;border-radius:4px 4px 0 0;color:#fff;-webkit-transition:height .25s ease;-moz-transition:height .25s ease;-ms-transition:height .25s ease;-o-transition:height .25s ease;transition:height .25s ease;*height:30px;*display:none}#submitWrapper.visible{height:30px;*display:block}#submitWrapper p{line-height:30px;padding:0 10px;float:left}.rtl-direction #submitWrapper p{float:right}#submitWrapper div{background-image:url('https://static-v.tawk.to/a-v3-39/images/ajax-loader-3.gif');width:16px;height:16px;float:right;margin:7px}#printIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-418px 0;width:18px;height:17px;margin-top:4px}#emailIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-418px 0;width:20px;height:14px;margin-top:9px}#soundOnIcon{background-repeat:no-repeat;background-position:0 0;width:20px;height:20px;margin-top:6px;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png')}.activeSound #soundOnIcon{background-position:-370px 0}.disabledSound #soundOnIcon{background-position:-345px 0;height:18px;margin-top:7px}#videoCallIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-820px 0;width:24px;height:12px;margin-top:8.5px}#voiceCallIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');width:13px;height:21px;background-position:-849px 0;margin-top:4px}#screenShareIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');width:22px;height:20px;background-position:-867px 0;margin-top:4px}.optionTitle{margin-left:35px}.rtl-direction .optionTitle{margin:0 35px 0 0}#agentProfileContainer{height:50px !important;cursor:pointer;position:relative;margin-right:80px;margin-left:0;padding-left:5px}.rtl-direction #agentProfileContainer,.rtl-direction #agentListBack{margin-left:80px;margin-right:0;padding:0 5px 0 0}#stickyIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-459px 0;width:15px;height:16px;margin:4px}#waitTimeContainer{margin:20px 7px}#stickyContainer{position:absolute;margin-left:-14px;margin-top:-12px;background-color:#fcfcfc;width:23px;height:24px;padding:2px;top:50%}.rtl-direction #stickyContainer{margin-left:0;margin-right:-14px}#waitTimeContainer .messageWrapper{border:1px solid;border-radius:5px;text-align:center;margin:0 auto;float:none}#waitTimeContainer .message{margin:0;padding:12px 10px 12px 14px;font-size:15px !important;color:#7b7a7a;font-weight:bold}#waitTimeContainer .messageBody{width:100%;position:relative;margin:0;line-height:100%;float:none}#profileDetail{height:50px;position:static;width:100%;float:left}#profileDetailNoImage{height:45px;position:static;margin-left:0}#agentWrapper{height:0;display:none;float:left;width:100%;height:45px}#agentListBack{display:none;cursor:pointer;height:70px}#listBack{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-479px 0;width:7px;height:11px;margin-top:29px;float:left;margin-left:20px;margin-right:20px}.black #listBack{background-position:-491px 0}#agentListBack p{font-size:16px;font-weight:bold;margin-top:25px;float:left;height:20px;line-height:20px}.rtl-direction #listBack,.rtl-direction #agentListBack p{float:right}.rtl-direction #listBack{transform:rotate(180deg);-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)}.message-success{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-503px 0;width:16px;height:15px;padding:0 8px}.messageStatusContainer.pending .message-success,.messageStatusContainer.pending .messageTime{display:none}.errorInMessage .messageStatus{display:block;float:right;margin-right:5px}#chatPanel{position:absolute;top:45px;bottom:0;width:100%;z-index:0}#chatEnded{position:absolute;left:0;bottom:32px;height:87px;width:100%;background:#fff;display:none;z-index:10}#chatEnded .title{text-align:center;font-size:14px;margin:10px 0}#chatEnded .buttonContainer{width:100%;height:50px}#newChat{width:50%;height:50px;padding:0;float:left;margin-left:-1px}.rtl-direction #newChat{float:right;margin:0 -1px 0 0}#emailTranscript{width:50%;height:50px;padding:0;float:right;margin-right:-1px}.rtl-direction #emailTranscript{float:left;margin:0 0 0 -1px}.validInputIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-545px 0;width:16px;height:15px;display:none;position:absolute;right:10px;top:50%;margin-top:-7.5px}.rtl-direction .validInputIcon{right:auto;left:10px}#prechatButtonContainer{top:auto}.additionalPadding{padding-right:75px !important}.rtl-direction .additionalPadding{padding-right:10px !important;padding-left:50px !important}#newMessageDivider{margin-top:4px;font-size:.7rem;line-height:.6rem}#newMessageDividerLine{border-top:2px solid #e4c0b6;border-bottom:0;margin:0 0 -1px}#newMessageDividerLabel{background:#fcfcfc;margin:-0.3rem 0;float:right;padding:0 .5rem;color:#e4c0b6}.offlineMessageSuccess{color:#6db626}#newMessageContainer{position:relative;left:-50%;cursor:pointer;display:none}#newMessagesBar{position:absolute;bottom:33px;height:0;width:auto;left:50%;color:#fff;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease;visibility:hidden;cursor:pointer;z-index:0}#newMessagesBar.theme-background-color{background-color:transparent !important}#notificationMessageText{font-weight:700}#newMessageArrowDown{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-778px 0;width:16px;height:6px;margin:-1px auto}#newMessagesNotificationLink{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-757px 0;width:16px;height:16px;float:left;margin:7px 7px auto auto}.rtl-direction #newMessagesNotificationLink{float:right;-ms-transform:rotateY(180deg);-webkit-transform:rotateY(180deg);transform:rotateY(180deg);margin:7px auto auto 7px}#newMessagesBar.visible{height:27px;z-index:99997;bottom:118px;visibility:visible}#newMessagesBar.visible #newMessageContainer{display:block}#newMessagesBar p{line-height:27px;padding:0 10px;text-align:center;background-color:#81bd1d;border-radius:5px}.uploaded-image{max-width:100%;max-height:220px;display:block}.download-file{color:#3276b1;text-decoration:none;margin-top:3px;display:block}.download-image{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-669px 0;width:16px;height:18px;padding:1px 8px;vertical-align:middle}.progress{height:14px;position:relative;background:#eee;box-shadow:0 1px 0 transparent,0 0 0 1px #e3e3e3 inset;width:200px;margin:5px 0;display:inline-block;vertical-align:middle}.progress-bar{display:block;height:100%;background-color:#71a06a;box-shadow:inset 0 2px 9px rgba(255,255,255,0.3),inset 0 -2px 6px rgba(0,0,0,0.4);position:relative;overflow:hidden;box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.upload-data{margin:7px 12px 0 20px;min-width:250px}.upload-data span{font-style:italic;margin-right:3px}#uploadFileIcon{background:url('https://static-v.tawk.to/a-v3-39/images/icons.png') no-repeat top left;background-position:-709px 0;vertical-align:middle;width:20px;height:21px;margin-top:5px}.image-loader{width:30px;height:30px;background:url('https://static-v.tawk.to/a-v3-39/images/image-load.gif');background-repeat:no-repeat;background-position:center}#nameIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-734px 0;width:18px;height:19px;margin-top:3px}.upload-error{margin:5px}.upload-error span{font-size:16px;color:red;font-weight:bold;vertical-align:middle}.drag-over #textareaWrapper:before{text-align:center;margin:0;font-size:25px;height:auto;line-height:68px;color:#ccc;background:#fff;position:absolute;top:0;bottom:0;right:0;left:0;border:3px dashed #ccc;content:'';white-space:pre-line}#drop-text{text-align:center;font-size:25px;height:auto;color:#ccc;position:absolute;top:2px;bottom:2px;right:2px;left:2px;white-space:pre-line;display:none}.drag-over #drop-text{display:block}#drop-text span{display:block;vertical-align:middle;line-height:normal;top:50%;margin-top:-15px;position:relative}.drag-over .drop-text{display:block}.drag-over #ratingContainer{display:none !important}.drag-over #chatTextarea{opacity:0}#upload-form{position:absolute;top:-100000px}#uploadFileOption label{display:block;cursor:pointer}.form-field-label.small{color:#b3b3b3;padding:1px 0 0 0;display:none;font-size:10px;position:absolute;top:0;left:4px;font-weight:bold}.rtl-direction .form-field-label.small{left:auto;right:4px}.form-field-label{color:#707070;font-family:Arial;font-size:13px;font-weight:bold}.selection-label{vertical-align:middle;cursor:pointer}.selection-container{margin:3px}.selections-container{margin:3px 3px 7px 3px}.selections-container.error{border:1px solid #ef5656;border-radius:3px}.agentInfoNoImage{overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.messageContainer,#agentTypingContainer{position:relative;margin:10px 12px}.messageContainer{clear:both}.profileImageContainer{height:28px;float:left;width:28px;margin-left:-100%}.ownerNameContainer{float:left;width:100%}.messageOwnerName{color:#a7a7a7;font-weight:bold;text-decoration:none;font-size:12px !important;margin:0;padding:0;line-height:14px;display:block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;margin-left:30px}.rtl-direction .messageOwnerName{margin-left:0;margin-right:30px}.messageOwnerName.visitor{text-align:right;margin-right:0;margin-left:0}.rtl-direction .messageOwnerName.visitor{text-align:left}#chatTableWrapper{display:table;height:100%;width:100%;table-layout:fixed}#chatRowWrapper{display:table-row;vertical-align:bottom}#chatCellWrapper{overflow:auto;position:relative;display:table-cell;vertical-align:bottom}.single-agent .profileImageContainer,.single-agent .agentChatContainer .ownerNameContainer{display:none}.single-agent .agentChatContainer .ownerNameContainer.trigger{display:block}.ownerNameContainer.trigger .messageOwnerName{margin-left:0;margin-right:0}.multi-agent .ownerNameContainer.trigger .messageOwnerName{margin-left:30px;margin-right:0}.multi-agent .agentChatContainer .message{margin-left:30px}.rtl-direction .multi-agent .agentChatContainer .message{margin-right:30px;margin-left:40px}.rtl-direction .multi-agent .ownerNameContainer.trigger .messageOwnerName{margin-right:30px;margin-left:0}.single-agent .visitorChatContainer .messageBody,.single-agent .messageOwnerName.visitor{margin-right:0;margin-left:0}.single-agent .visitorChatContainer .messageBody,.single-agent .agentChatContainer .messageBody.trigger{margin-top:2px}.single-agent .agentChatContainer .messageBody,.single-agent .agentChatContainer .ownerNameContainer{margin-left:0;margin-right:0;margin-top:0}#agentTypingContainer .agentChatContainer{margin-bottom:5px}.has-profile-image #headerBoxWrapper,.has-profile-image #headerBox,.has-profile-image #agentWrapper,.has-profile-image #headerBoxControlsContainer,.has-profile-image #agentListBack{height:50px}.has-profile-image #endChat,.has-profile-image #popoutChat,.has-profile-image #minimizeChat{margin-top:17px;margin-bottom:17px}.has-profile-image #agentBar,.has-profile-image #chatPanel,.has-profile-image #tawkToContent{top:50px}.has-profile-image #listBack{margin-top:21px}.has-profile-image #agentListLabel{margin-top:17px}.selection-container input{margin:0 3px 0 5px}@keyframes typing{0%{opacity:0}100%{opacity:1}}@-ms-keyframes typing{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes typing{0%{opacity:0}100%{opacity:1}}@-moz-keyframes typing{0%{opacity:0}100%{opacity:1}}@-o-keyframes typing{0%{opacity:0}100%{opacity:1}}.agentTypingIndicator span{-moz-animation:typing 1.2s infinite;-webkit-animation:typing 1.2s infinite;-o-animation:typing 1.2s infinite;-ms-animation:typing 1.2s infinite;animation:typing 1.2s infinite;animation-fill-mode:both;margin:0 1px;font-size:20px;line-height:0}.agentTypingIndicator span:nth-child(2){animation-delay:400ms;-webkit-animation-delay:400ms;-moz-animation-delay:400ms;-ms-animation-delay:400ms;-o-animation-delay:400ms}.agentTypingIndicator span:nth-child(3){animation-delay:800ms;-webkit-animation-delay:800ms;-moz-animation-delay:800ms;-ms-animation-delay:800ms;-o-animation-delay:800ms}.rtl-direction .message{min-width:45px !important}.message a{color:inherit}#formContainer .inputContainer.selection:before{content:\"\";position:absolute;right:14px;top:13px;width:0;height:0;border-left:7px solid transparent;border-right:7px solid transparent;border-top:7px solid #707070;z-index:0}#formContainer .inputContainer{background-color:#fff;overflow:hidden;position:relative;height:33px}#formContainer .inputContainer select{position:absolute;height:100%;-webkit-appearance:none;-moz-appearance:none;appearance:none;width:90%;background:transparent;font-family:Arial,Helvetica,sans-serif;font-size:13px;font-weight:600;line-height:1;-webkit-appearance:none;-moz-appearance:none;text-indent:.01px;text-overflow:'';-ms-appearance:none}#formContainer .inputContainer select::-ms-expand{display:none}#endChatOption{display:none}#viewEmoji{position:absolute;top:9px;right:10px;opacity:.4}.drag-over #viewEmoji{display:none}#viewEmoji.active{opacity:1}#viewEmoji .icon{background:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-repeat:no-repeat;background-position:-799px 0;width:16px;height:16px;display:block}#emoji-selection-container{position:absolute;bottom:100px;left:5px;right:5px;height:200px;background:#fff;border:1px solid #ddd;border-radius:3px;display:none;z-index:10001}#tabs-selection{border-bottom:1px solid #ddd;list-style:none}.open-tab{opacity:.4;float:left;margin-bottom:-1px;position:relative;display:block;cursor:pointer;width:11%;text-align:center}.open-tab.active{opacity:1}#tab-content{position:absolute;top:32px;bottom:0;overflow:auto;left:0;right:0;padding:10px}.header-title{text-align:center;margin:5px 0;font-weight:bold;font-size:14px}.emoji-select{display:inline-block;margin:9px}.emoji-select:hover .emojione{transform:scale(2);-ms-transform:scale(2);-webkit-transform:scale(2);-moz-transform:scale(2);-o-transform:scale(2)}.emoji-header{display:block;background-color:#fff;cursor:default;padding:5px 3px;cursor:pointer}.emoji-header:hover{background:#eee}.open-tab.active .emoji-header{-webkit-box-shadow:0 -2px 0 #57889c;-moz-box-shadow:0 -2px 0 #57889c;box-shadow:0 -2px 0 #57889c;border-top-width:0 !important;margin-top:1px !important;border:1px solid #ddd;border-bottom-color:transparent;border-radius:3px 3px 0 0;cursor:default}#people.open-tab.active .emoji-header{border-left:0}.open-tab.active .emoji-header:hover{background:#fff}.emojionly .emojione{height:4.5ex !important}.emojionly .messageWrapper .message{background:transparent !important}#emoji-selection-container .emojione{min-width:auto;min-height:auto;height:3.2ex}#emoji-selection-container .inputContainer{padding:0 6px}#emoji-selection-container .textInput{padding:6px 0}.rtl-direction #viewEmoji{position:absolute;top:9px;left:10px;right:auto;opacity:.4}#incoming-call-container{margin:0;text-align:center;background:#333;color:#fff;padding:5px 5px 10px 5px}#icoming-call-buttons{width:100%;text-align:center;height:42px}#decline-call{background:#f92222;color:#fff;display:inline-block;float:none;margin:0 5px;border-radius:50%;width:42px;height:42px;padding:0;box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-moz-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-webkit-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);border:1px solid #b91717}#decline-call .icon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-919px 0;width:32px;height:14px;margin:4px auto}#accept-call{background:#2e9c05;color:white;float:none;display:inline-block;margin:0 5px;border-radius:50%;width:42px;height:42px;padding:0;box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-moz-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-webkit-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);border:1px solid #1f6b03}#accept-call .icon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-894px 0;width:20px;height:20px;margin:1px auto}#tooLongMsgNotification{position:absolute;bottom:35px;z-index:100000;width:100%;text-align:center;display:none;color:red;font-size:12px}#tooLongMsgNotification.visible{display:block}.callInfoContainer,.callErrorContainer{border:1px solid #ddd;border-radius:5px;padding:10px 8px;display:none;background:#fff}.callIconContainer{display:table-cell;width:35px;vertical-align:middle}.callIconWrapper{width:35px;height:35px;background:#eee;border-radius:50%;vertical-align:middle;display:inline-block}.callIconContainer .voiceCallIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');width:13px;height:21px;background-position:-849px 0;margin:7px auto}.callIconContainer .videoCallIcon{margin:11.5px auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-820px 0;width:24px;height:12px}.callIconContainer .screenShareIcon{margin:8px auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');width:22px;height:20px;background-position:-867px 0}.callDetailsContainer{display:table-cell;vertical-align:middle;padding-left:5px}.callTitle{font-size:15px;font-weight:bold}.callTitle.missed{color:#a90329}.callEndDetails{display:none}.callErrorContainer .callEndDetails{display:block}.callInfoWrapper{display:table}.callRetryContainer{padding-left:5px;vertical-align:middle;display:table-cell}.retry-load{float:none;background:#fafafa;color:#717171;border:1px solid #d3d3d3}";
            b.MinifiedStyle = "@font-face{font-family:'icomoon';src:url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.eot?-7rca1q');src:url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.eot?#iefix-7rca1q') format('embedded-opentype'),url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.ttf?-7rca1q') format('truetype'),url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.woff?-7rca1q') format('woff'),url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.svg?-7rca1q#icomoon') format('svg');font-weight:normal;font-style:normal}.rtl-direction{direction:rtl}.rectangle #tawkchat-minified-wrapper{height:100%;width:100%;*width:expression(this.parentNode.offsetWidth+'px')}.round #tawkchat-minified-wrapper{z-index:999997;bottom:6px}.round #tawkchat-status-text-container{margin-left:1px;border-radius:50%;height:60px;width:60px;-webkit-box-shadow:0 4px 5px -1px rgba(0,0,0,0.5);-moz-box-shadow:0 4px 5px -1px rgba(0,0,0,0.5);box-shadow:0 4px 5px -1px rgba(0,0,0,0.5)}.round #tawkchat-status-icon.online:before,.round #tawkchat-status-icon.away:before{content:\"\\e96c\"}.round #tawkchat-status-icon.offline:before{font-size:38px;line-height:55px;content:\"\\e904\"}.round #tawkchat-status-icon:before{font-size:28px;font-weight:normal;font-family:'icomoon';display:inline-block;vertical-align:top;width:100%;text-align:center;line-height:60px}.round #tawkchat-status-text-container a#maximizeChat,.round #tawkchat-status-text-container a#maximizeChat #tawkchat-status-icon{height:100%;width:100%;color:inherit;text-decoration:none;outline:0}.round.center #tawkchat-minified-wrapper{position:absolute}#tawkchat-minified-border{margin:0;border:0 none;padding:0;background-color:#000;filter:alpha(opacity=40);opacity:.4;position:absolute;z-index:999998;border-radius:4px 4px 0 0;-moz-border-radius:4px 4px 0 0;-webkit-border-radius:4px 4px 0 0;width:100%;height:100%;right:0;bottom:0}#tawkchat-minified-container{margin:0;border:0 none;padding:0;cursor:pointer;z-index:999999;position:absolute;top:2px;bottom:0;width:auto;height:auto;left:2px;right:2px;border-bottom:0;-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box;-webkit-box-shadow:rgba(0,0,0,0.0980392) 0 0 1px 2px;-moz-box-shadow:rgba(0,0,0,0.0980392) 0 0 1px 2px;box-shadow:rgba(0,0,0,0.0980392) 0 0 1px 2px}#tawkchat-status-middle{border:0 none;margin:0 auto;font-size:17px;vertical-align:middle;position:absolute;top:50%;left:10px;right:10px;transform:translate(0%,-50%);-webkit-transform:translate(0%,-50%);-moz-transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);-o-transform:translate(0%,-50%);*width:expression(this.parentNode.clientWidth - 20+'px');*top:0;*position:static;*margin-top:10px}#tawkchat-status-text-container{float:left;width:100%;*width:expression(this.parentNode.offsetWidth - 26+'px');*margin-top:expression(this.offsetHeight < this.parentNode.offsetHeight ? parseInt((this.parentNode.offsetHeight - this.offsetHeight) / 2)+'px':'0')}#tawkchat-status-message{border:0 none;margin:0 26px 0 0;padding:0;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-align:left;font-size:17px;*width:expression(this.parentNode.clientWidth+'px');*margin:0}.rtl-direction #tawkchat-status-message{margin:0 0 0 26px;text-align:right}#tawkchat-chat-bubble{border:0 none;padding:0;margin:0;width:190px;height:65px;position:absolute;top:0;display:none;right:32px}.left #tawkchat-chat-bubble{right:2px}#tawkchat-chat-bubble-text-container{border:0 none;padding:0;margin:0 0 0 -58px;width:111px;height:65px;position:absolute;z-index:10;font-family:Arial;font-style:italic;font-size:14px;top:5px;left:50%;right:auto;text-align:center;overflow:hidden;text-overflow:ellipsis;display:table}.rtl-direction #tawkchat-chat-bubble-text-container{right:50%;left:auto;margin:0 -58px 0 0}#tawkchat-chat-bubble-text{margin:0;display:table-cell;vertical-align:middle;*margin-top:expression(this.offsetHeight < this.parentNode.offsetHeight ? parseInt((this.parentNode.offsetHeight - this.offsetHeight) / 2)+'px':'0')}#tawkchat-chat-bubble-graphics-container{border:0 none;padding:0;margin:0;width:146px;height:85px}#tawkchat-chat-bubble-canvas{width:146px;height:85px;border:0 none;padding:0;margin:0}#tawkchat-minified-agent-container{float:left;width:100%;display:none}#tawkchat-minified-agent-information-wrapper{border:0 none;margin:0 88px 0 0;padding:0;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-align:left;font-size:17px;*width:100%}.hasImage #tawkchat-minified-agent-information-wrapper{margin-left:60px}#tawkchat-minified-agent-name{border:0 none;padding:0;margin:0;font-weight:bold}.agentNameCentered{margin-top:17px}.agentContainerNoImage{margin-right:26px;margin-left:0}.rtl-direction .agentContainerNoImage{margin-left:19px;margin-right:0}.agentContainer{margin:6px 20px 5px 45px}.rtl-direction .agentContainer{margin-right:45px;margin-left:20px}#tawkchat-minified-agent-position{border:0 none;padding:0;margin:0;font-style:italic}.bottom #tawkchat-chat-indicator{border:0 none;margin:0;position:absolute;top:0;left:26px;right:auto;z-index:1000000;display:none;background:#f77c76;padding:5px 10px;border-radius:15px}.round.left #tawkchat-chat-indicator{left:auto;right:0}.round.right #tawkchat-chat-indicator{right:auto;left:0}.round.bottom #tawkchat-chat-indicator,.round.center #tawkchat-chat-indicator,.round.top #tawkchat-chat-indicator{padding:2px;text-align:center;border-radius:50%;width:18px;height:18px}.rectangle.bottom #tawkchat-chat-indicator:after{content:'';position:absolute;right:48.5px;width:0;height:0;bottom:-8px;border-left:8px solid transparent;border-right:8px solid transparent;border-top:8px solid #f77c76}.rectangle.left #tawkchat-chat-indicator{left:auto;right:26px}.top #tawkchat-chat-indicator{border:0 none;margin:0;position:absolute;top:8px;left:26px;right:auto;z-index:1000000;display:none;background:#f77c76;padding:5px 10px;border-radius:15px}.rectangle.top #tawkchat-chat-indicator:before{content:'';position:absolute;right:48.5px;width:0;height:0;top:-8px;border-left:8px solid transparent;border-right:8px solid transparent;border-bottom:8px solid #f77c76}#tawkchat-chat-indicator.rtl-direction{left:auto;right:26px}#tawkchat-chat-indicator-text{border:0 none;padding:0;overflow:hidden;vertical-align:baseline;font-weight:bold;font-size:13px;font-family:Arial;text-align:center;color:white;z-index:1000001;display:block;margin:2px auto}.noCookies #tawkchat-minified-link-container{float:right}.noCookies #tawkchat-minified-link-container .icon{background-position:-16px 0}#tawkchat-minified-link-container{float:left;width:20px;margin-left:-20px;margin-top:3px;*margin-top:10px;*margin-right:5px}.rtl-direction #tawkchat-minified-link-container{margin-left:-100%}#tawkchat-minified-link-container .icon{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');display:block}#maximizeChat,#popoutChat{width:16px;height:16px;margin:0;z-index:100001}#maximizeChat .icon{width:11px;height:7px;margin:4.5px 2.5px}.black #maximizeChat .icon{background-position:-16px 0}.white #maximizeChat .icon{background-position:-79px 0}#popoutChat .icon{width:10px;height:10px;margin:3px}.black #popoutChat .icon{background-position:-48px 0}.white #popoutChat .icon{background-position:-111px 0}.alias-image{width:40px;height:40px;margin:0;background-repeat:no-repeat;border-radius:20px;margin:5px 0;background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:-624px 0;float:left;margin-left:-100%}.rtl-direction .alias-image{float:right}.small-image .alias-image{background-position:-589px 0;width:20px;height:20px;border-radius:10px}#profileDetail{position:static;width:100%;float:left}.agentInformationContainer p{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.position-label{font-size:12px}.agentInfoNoImage{overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.image-bubble-close{background-image:url('https://static-v.tawk.to/a-v3-39/images/icons.png');background-position:0 0;width:11px;height:11px;float:right;margin:2.5px;cursor:pointer;display:block;visibility:hidden}#bubble-image{cursor:pointer}.image-canvas-close{border:0 none;padding:0;margin:0;width:10px;height:13px;position:absolute;right:6px;top:3px;font-size:12px;cursor:pointer;font-family:Arial;z-index:20}.rtl-direction .image-canvas-close{left:6px !important;right:auto !important}.no-border #tawkchat-minified-container{border:none !important;top:0 !important;left:0 !important;right:0 !important}.top .white #maximizeChat .icon{background-position:-95px 0}.top .black #maximizeChat .icon{background-position:-32px 0}.top #tawkchat-minified-container{top:0;border-bottom:1px solid #e3e0e7;border-top:0;border-radius:0 0 8px 8px;-moz-border-radius:0 0 8px 8px;-webkit-border-radius:0 0 8px 8px}.top #tawkchat-chat-indicator{bottom:0;top:auto}.rectangle.top #tawkchat-chat-indicator:after{bottom:auto;border-bottom:8px solid #f77c76;border-top:0;top:-8px}.top #tawkchat-chat-bubble-text-container{margin-top:10px !important}.top #tawkchat-chat-bubble-close{bottom:0 !important;right:0 !important;position:absolute !important}.default.top #tawkchat-chat-bubble-close{bottom:3px !important;right:6px !important;top:auto !important}";
            b.MinifiedMobileStyle = "@font-face{font-family:'icomoon';src:url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.eot?-7rca1q');src:url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.eot?#iefix-7rca1q') format('embedded-opentype'),url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.ttf?-7rca1q') format('truetype'),url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.woff?-7rca1q') format('woff'),url('https://static-v.tawk.to/a-v3-39/fonts/icomoon.svg?-7rca1q#icomoon') format('svg');font-weight:normal;font-style:normal}body{position:relative;font-family:Verdana,Geneva,sans-serif !important;margin:0;font-size:16px;z-index:1000001}#tawkchat-minified-box{border:0 none;padding:0;margin:0;position:relative;width:100%;height:100%;z-index:999995;text-align:left;font-size:16px}.rectangle #tawkchat-minified-wrapper{width:107px;height:37px;bottom:5px}.round #tawkchat-minified-wrapper{bottom:6px;width:48px;height:48px}#tawkchat-minified-wrapper{border:0 none;margin:0;z-index:999997;position:absolute;cursor:pointer}.left #tawkchat-minified-wrapper.indicator-on{left:0 !important}.right #tawkchat-minified-wrapper.indicator-on{left:7px !important}.bottom.rectangle #tawkchat-minified-wrapper{bottom:15px !important}.round #tawkchat-status-text-container{padding:0;position:absolute;z-index:999998;width:100%;height:100%;border-radius:50%;border:0 none;-webkit-box-shadow:0 4px 5px -1px rgba(0,0,0,0.5);-moz-box-shadow:0 4px 5px -1px rgba(0,0,0,0.5);box-shadow:0 4px 5px -1px rgba(0,0,0,0.5)}.rectangle #tawkchat-status-text-container{padding:0;position:absolute;z-index:999998;width:100%;height:100%;border-radius:3px;border:0 none;-webkit-box-shadow:0 4px 5px -1px rgba(0,0,0,0.5);-moz-box-shadow:0 4px 5px -1px rgba(0,0,0,0.5);box-shadow:0 4px 5px -1px rgba(0,0,0,0.5)}#tawkchat-status-message{border:0 none;padding:0;text-decoration:none;height:30px;text-align:center;position:absolute;left:21px;right:21px;width:auto}#tawkchat-chat-indicator{border:0 none;margin:0;padding:0;line-height:1em;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');position:absolute;z-index:1000000;display:none;left:0;background-position:-234px 0;width:25px;height:25px}.bottom #tawkchat-chat-indicator,.center #tawkchat-chat-indicator{top:auto}.center.rectangle #tawkchat-chat-indicator{bottom:27px}.bottom.rectangle #tawkchat-chat-indicator{bottom:35px}.round #tawkchat-chat-indicator{bottom:29px}.top #tawkchat-chat-indicator{top:auto}.top.rectangle #tawkchat-chat-indicator{bottom:27px}.left #tawkchat-chat-indicator{left:30px;right:auto}.left.rectangle #tawkchat-chat-indicator{left:82px}.right #tawkchat-chat-indicator{left:0;right:auto}#tawkchat-chat-indicator-text{border:0 none;padding:0;margin:0;overflow:hidden;vertical-align:baseline;font-weight:bold;font-size:16px;font-family:Arial;text-align:center;color:white;height:25px;width:25px;z-index:1000001;display:block;line-height:25px}#status-message{color:inherit;text-decoration:none;font-weight:bold;font-size:16px;vertical-align:middle;display:block;line-height:30px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;margin:0 5px}#popout{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-219px 0;width:10px;height:10px;margin:10px 0;position:absolute;right:8px}#status-indicator{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');width:12px;height:12px;float:right;background-repeat:no-repeat}.rectangle #tawkchat-status-icon{margin:8px 13px}.round #tawkchat-status-icon{margin:13px}#tawkchat-status-icon{font-family:sans-serif,Verdana;speak:none;font-style:normal;font-weight:bold;font-variant:normal;text-transform:none;line-height:1;color:inherit;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size:19px}#tawkchat-status-icon .text{display:inline-block;vertical-align:top;padding:2px 0 2px 7px}#tawkchat-status-icon:before{font-size:21px;font-weight:normal;font-family:'icomoon'}#tawkchat-status-icon.offline:before{font-size:22px}#tawkchat-status-icon.offline{margin:13px 13px 13px 10px}.rectangle #tawkchat-status-icon.offline{margin:8px 13px}#tawkchat-status-icon.offline .text{padding:2px 0 0 9px}#tawkchat-status-icon.offline:before{font-size:28px;line-height:18px;content:\"\\e904\"}#tawkchat-status-icon.online:before,#tawkchat-status-icon.away:before{content:\"\\e96c\"}";
            b.MaximizedMobileStyle = "button{display:inline;zoom:1;vertical-align:baseline;outline:0 none;cursor:pointer;text-align:center;text-decoration:none;overflow:visible;margin:0;padding:7px 15px 8px 15px;font:bold 14px/100% Arial,sans-serif;background-color:#c1c1c1;color:#3d3d3d;border:0;float:left}button::-moz-focus-inner{border:0}button:focus{outline:0}button:active{background-color:#ddd}button:hover{background-color:#a9a9a9}.rtl-direction{direction:rtl !important}#tawkchat-container.maximized{height:100% !important;width:100% !important}#chatContainer{position:absolute;top:0;bottom:58px;left:0;right:0;background-color:#fcfcfc;overflow-y:auto;color:#6c6c6c}#chatContainer.chat-ended{bottom:87px}#maxFileNotificationContainer,#maxSizeNotificationContainer{color:#8a6d3b;background-color:#fcf8e3;border:#faebcc 1px solid;margin:5px 10px;padding:5px 10px;border-radius:6px;font-size:13px}.closeButtonContainer{margin:10px auto auto auto;text-align:right}.closeNotification{cursor:pointer;text-transform:uppercase}#maxFileSizeList,#maxFileNumberList{margin:10px}#maxFileSizeList li,#maxFileNumberList li{word-wrap:break-word}#maxFileSizeList a,#maxFileNumberList a{color:#00E}#chatContainer .hidden{display:none}.actionRetry{cursor:pointer;float:right}#actionsContainer{position:absolute;bottom:0;left:0;right:0;height:57px;border-top:1px solid #c4c4c4;background-color:#fff;border-bottom:1px solid #c4c4c4}#pluginsBar{height:38px;border-top:1px solid #c4c4c4;border-bottom:1px solid #c4c4c4;background-color:#e1e1e1}#ratingContainer{height:57px;position:absolute;z-index:2;width:88px;right:0}.rtl-direction #ratingContainer{-ms-transform:rotateY(180deg);-webkit-transform:rotateY(180deg);transform:rotateY(180deg);left:0;right:auto}#ratingContainer a{float:left;display:block;width:31px;height:30px;margin:3px 0 0 0}#ratingContainer div{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;width:34px;height:37px;margin:3px 0 0 10px}#ratePositive div{background-position:-78px 0}#rateNegative div{background-position:0 0}#ratePositive.selected div{background-position:-117px 0}#rateNegative.selected div{background-position:-39px 0}#popOut .icon{margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-831px 0;width:25px;height:25px}#emailTranscriptOption .icon{background-position:-156px 0;width:38px;height:25px;margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat}#changeNameOption .icon{background-position:-667px 0;width:24px;height:25px;margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat}#endChatOption .icon{background-position:-264px 0;width:25px;height:25px;margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat}#menuOptions .label{margin-left:10px;line-height:25px;vertical-align:middle}.rtl-direction #menuOptions .label{margin:auto 10px auto 0}#formContainer{width:100%;height:auto;position:absolute;top:53px;bottom:30px;background-color:#f1f1f1;display:none;z-index:99999999}.form{font-size:13px;color:#a1a1a1;height:100%}.form fieldset{padding:0 25px 0 0}.rtl-direction .form fieldset{padding:0 0 0 25px}.form textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;resize:none;display:block;height:40px;width:100%;overflow:auto;padding:0 15px;color:#707070;font-size:13px;font-weight:bold;border:0;background:#fff;font-family:Arial;margin:13px 0}.form textarea:active,.form textarea:focus,.inputContainer select:active,.inputContainer select:focus{outline:0}.inputContainer{padding:0 15px;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;background-color:#fff;margin:0 -25px 7px 0;position:relative}.rtl-direction .inputContainer{margin:0 0 7px -25px}.inputContainer input,.inputContainer select{outline:0 none transparent;background:#fff;width:100%;margin:0;border:0;display:block;line-height:1em;padding:13px 0;color:#707070;font-family:Arial;font-size:13px;font-weight:bold}.inputContainer.other-fix{padding:0}.inputContainer select{background-color:#fff;outline:0}#departmentFieldFieldset.safari-fix .inputContainer select{-webkit-appearance:none}#departmentFieldFieldset.safari-fix .inputContainer{position:relative}#departmentFieldFieldset.safari-fix .inputContainer:after{position:absolute;right:24px;top:12px;cursor:pointer;width:10px;height:10px;font-size:10px;padding:0;background:#fff;color:#000;content:'\u25bc';pointer-events:none;cursor:pointer}.inputContainer.error,.form .textareaFieldset.error{border-color:#ef5656;color:#ef5656}.inputContainer.error input,.form .textareaFieldset.error textarea,.inputContainer.error select{color:#ef5656}.inputContainer.error input::-webkit-input-placeholder,.form .textareaFieldset.error textarea::-webkit-input-placeholder{color:#ef5656}.inputContainer input:active,.inputContainer input:focus{margin:0;border:0;outline:0 none transparent;border:0 none}.formErrorContainer{display:block;margin:-5px 0 5px 0;font-style:italic;color:#ef5656}.formMessageField{padding:20px;line-height:1.2em;color:#616161;font-size:15px;margin:0;word-wrap:break-word}#formSavingStatus.errorMessage{color:#ef5656;border:0;visibility:visible}#formSavingStatus{font-size:13px;visibility:hidden;padding:0 0 0 5px;position:absolute;bottom:55px;left:20px;right:20px}#formSavingStatus img{margin:0 0 0 5px}.formButtonContainer{margin:20px 0 0 0}.rtl-direction #formCancel{float:right}button{display:inline;zoom:1;vertical-align:baseline;outline:0 none;cursor:pointer;text-align:center;text-decoration:none;overflow:visible;margin:0;padding:7px 25px 8px 25px;font:bold 12px/100% Arial,sans-serif;outline:0 none transparent;background:#fafafa;color:#717171;border:1px solid #d3d3d3;border-radius:0}button::-moz-focus-inner{border:0}button:focus{outline:0}button:active{background-color:#ddd}.formButton{height:50px;width:50%}#textareaContainer{position:relative;height:57px}#textareaSubmitContainer{width:60px;height:56px;position:absolute;right:0;display:none}.rtl-direction #textareaSubmitContainer{left:0;right:auto}#textareaSubmitButton{width:0;height:0;border-top:15px solid transparent;border-bottom:15px solid transparent;border-left:15px solid #bfbfbf;position:absolute;right:15px;top:7px}#textareaWrapper{position:absolute;top:12px;left:35px;right:40px}#textareaContainer.symbianPadding #textareaSubmitButton{right:60px}#textareaContainer.symbianPadding #textareaWrapper{left:60px;right:100px}#chatTextarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;border:0 none;outline:0 none transparent;height:29px;resize:none;width:100%;background:#fff;padding:0;font-family:Arial}#chatTextarea:active,#chatTextarea:focus{outline:0 none transparent;border:0 none}#chatTextarea::-webkit-input-placeholder{color:#717171;font-style:italic}#chatTextarea::-moz-placeholder{color:#717171;font-style:italic}#chatTextarea:-ms-input-placeholder{color:#717171;font-style:italic}#chatTextarea:-moz-placeholder{color:#717171;font-style:italic}#chatTableContainer{display:table;height:100%;width:100%;table-layout:fixed}#chatTableContainer.breakWord{word-break:break-all}#chatRowContainer{display:table-row;vertical-align:bottom}#chatCellContainer{overflow:auto;position:relative;display:table-cell;vertical-align:bottom;white-space:pre-wrap;word-break:break-word}.chatLineContainer{margin:20px 0 0 0}.chatLineContainer p{display:block;text-align:center;font-size:13px;color:#999}.chatLineContainer span{z-index:2;position:relative;background:#f1f1f1;padding:0 10px;font-size:13px}.chatLineContainer div{position:relative;top:-6px;z-index:1;border-top:1px solid #fff}#greetingsContainer{margin:15px 40px 0 40px;padding:5px;text-align:center;white-space:pre-wrap;word-wrap:break-word;color:#777;font-size:16px;font-weight:bold}#embedArrow{background-position:-917px 0;width:22px;height:26px;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;margin:5px auto}#estimatedWaitTimeHeaderText{text-transform:uppercase}#estimatedWaitTimeMessage{color:#707070;margin:15px 0 0 0;font-size:16px;text-align:center;padding:0 10px}#estimatedWaitTimeMessage span,#estimatedWaitTimeMessage b{font-weight:bold}#estimatedWaitTime{display:none}#pluginsBar a{-webkit-tap-highlight-color:rgba(255,255,255,0.5);text-decoration:none}#pluginsBar a.active{background:rgba(255,255,255,0.5)}#textareaWrapper{top:0 !important;bottom:0 !important;right:84px !important}.rtl-direction #textareaWrapper{left:84px !important;right:35px !important}#chatTextarea{height:37px !important;padding-top:18px !important;font-size:16px !important;margin:0}#textareaSubmitButton{border-top:22px solid transparent !important;border-bottom:22px solid transparent !important;border-left:22px solid #bfbfbf !important}.rtl-direction #textareaSubmitButton{border-top:22px solid transparent !important;border-bottom:22px solid transparent !important;border-right:22px solid #bfbfbf;border-left:none !important;right:auto;left:15px}#ratingContainer a{width:44px;height:44px;margin:3px 0 0 0}#ratingContainer div{margin:3px auto !important}#hideButtonContainer{left:103px;right:105px;width:auto}#greetingsWrapper,#formContainer #greetingsWrapper{transform:translate(0%,-50%);-webkit-transform:translate(0%,-50%);-moz-transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);-o-transform:translate(0%,-50%);top:50%;position:absolute;left:0;right:0}#tawkchat-maximized-container-element-no-cookies #chatPanel{background-color:#fff;color:#000;font-size:20px;text-align:center;border-bottom:1px solid #c4c4c4}#tawkchat-maximized-container-element-no-cookies #greetingsWrapper{position:absolute;left:0;right:0;top:50%}#chatPanel{width:100%;position:absolute;bottom:30px;top:53px;overflow:hidden}#emailTranscriptForm,#offlineForm{height:100%}#formContainer.success #offlineForm #overlayOfflineForm{display:block}#formContainer #offlineForm #overlayOfflineForm{position:absolute;top:0;bottom:0;left:0;right:0;display:none;z-index:1;background-color:#fff;color:#000;text-align:center;padding:30px 15px;font-size:15px}#formContainer #offlineForm #overlayOfflineForm #resendButton{margin-top:15px;padding:7px 12px;display:inline-block;font-weight:700;cursor:pointer}#topBarContainer{border-top:1px solid #c4c4c4;border-bottom:1px solid #c4c4c4;height:51px !important;position:absolute;top:0;width:100%}#siteNameContainer{float:left;width:100%;height:51px}.rtl-direction #siteNameContainer{float:right}#siteName{margin:0 60px;line-height:51px;height:51px;text-align:center;font-size:16px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}#backButtonContainer{float:left;width:57px;height:51px;margin-left:-100%}.rtl-direction #backButtonContainer{float:right;margin:auto -100% auto auto}#backButton{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-861px 0;width:23px;height:15px;margin:18.5px 17px}.isPopout #backButton{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-199px 0;width:15px;height:23px;margin:14px 21px}.rtl-direction #backButton{-ms-transform:rotate(180deg);-webkit-transform:rotate(180deg);transform:rotate(180deg)}.black #backButton{background-position:-861px 0}.white #backButton{background-position:-889px 0}.isPopout.black #backButton{background-position:-647px 0}.isPopout.white #backButton{background-position:-598px 0}#menuButtonContainer{float:left;width:57px;height:51px;margin-left:-57px}.rtl-direction #menuButtonContainer{margin:0 -57px 0 0;float:right}#menuButton{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');width:24px;height:24px;margin:14px 17px}.black #menuButton{background-position:-618px 0}.white #menuButton{background-position:-569px 0}#menuOptions{position:absolute;right:5px;top:53px;border-radius:10px;display:none;z-index:999999999;max-height:270px}.rtl-direction #menuOptions{right:auto;left:5px}#menuScrollable{background:#fff;overflow:auto;padding:5px;border:2px solid #e6e6e6;border-radius:10px;height:100%}#menuOptions ul{list-style:none}#menuOptions li{padding:10px;color:#696969;cursor:pointer;font-size:16px;font-weight:bold;line-height:25px;height:25px}#soundOption .icon{margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat}#soundOption.on .icon{background-position:-294px 0;width:32px;height:25px}#soundOption.off .icon{background-position:-330px 0;width:18px;height:25px}#menuOptions .iconWrapper{width:40px;height:25px;float:left}.rtl-direction #menuOptions .iconWrapper{float:right;display:inline-block}#printOption .icon{margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-353px 0;width:25px;height:25px}#submitWrapper{position:absolute;bottom:50px;height:0;width:auto;right:0;background:#000;border-radius:4px 4px 0 0;color:#fff;-webkit-transition:height .25s ease;-moz-transition:height .25s ease;-ms-transition:height .25s ease;-o-transition:height .25s ease;transition:height .25s ease;*height:30px;*display:none}#submitWrapper.visible{height:30px;*display:block}#submitWrapper p{line-height:30px;padding:0 10px;float:left}#submitWrapper div{background-image:url('https://static-v.tawk.to/a-v3-39/images/ajax-loader-3.gif');width:16px;height:16px;float:right;margin:7px}#emailTranscriptForm,#changeNameForm,#endChatForm{position:absolute;width:100%;height:100%;margin:0}#formInnerHeight{position:absolute;top:0;bottom:50px;width:auto;overflow:auto;left:10px;right:10px;padding:0 10px}#emailTranscriptForm #formInnerHeight,#changeNameForm #formInnerHeight,#endChatForm #formInnerHeight{width:auto;height:auto}#endChatForm #formInnerHeight{top:auto;text-align:center}#emailTranscriptForm .longFormBottomContainer,#changeNameForm .longFormBottomContainer,#endChatForm .longFormBottomContainer{bottom:0}#emailTranscriptForm .formButton,#changeNameForm .formButton,#endChatForm .formButton{width:50%}#emailTranscriptForm .inputContainer,#changeNameForm .inputContainer,#endChatForm .inputContainer{border:0;margin:0}.longFormBottomContainer{position:absolute;bottom:0;left:0;right:0}.longFormContainer{width:100%;height:100%;overflow:hidden;position:relative}#tawkToContent{display:none;position:absolute;top:53px;bottom:0;width:100%;background:#f1f1f1;z-index:10000000001}#tawkToContent .contentContainer{position:absolute;top:0;bottom:55px;width:auto;left:20px;right:20px;max-width:260px;margin:0 auto}#tawkToContent .buttonContainer{position:absolute;height:50px;bottom:0;width:100%}#tawkToContent .buttonContainer button{width:50%;height:50px}#tawkContent{font-size:15px;text-align:center;color:#6c6c6c;margin-top:12px;direction:ltr !important}#tawkImage{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-412px 0;width:78px;height:83px;margin:0 auto}#tawkToContent .wrapper{position:absolute;width:100%;transform:translate(0%,-50%);-webkit-transform:translate(0%,-50%);-moz-transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);-o-transform:translate(0%,-50%);top:50%}#tawkHeader{font-size:22px;font-weight:bold;text-align:center;padding:20px 0 12px 0;color:#343434;border-bottom:2px solid #ddd;width:150px;margin:0 auto}#chatEnded{position:absolute;left:0;bottom:30px;height:86px;width:100%;background:#fff;display:none;z-index:10000001}#chatEnded .title{text-align:center;font-size:14px;margin:10px 0}#chatEnded .buttonContainer{width:100%;height:50px}#chatEnded button{width:50%;height:50px}.messageTime{padding:0;font-size:12px !important;color:#666}.messageStatusContainer{float:left;width:40px;margin-left:-40px;text-align:center}.messageBody{line-height:1.5em;margin:5px 0 0 42px;position:relative}.ownerNameContainer,.notificationContainer{width:100%}.notificationContainer{float:left}.rtl-direction .notificationContainer{float:right}.message{white-space:pre-wrap;word-wrap:break-word;padding:5px 10px}.messageWrapper{font-size:16px;width:100%;background:0;float:right}.message-success{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-515px 0;width:16px;height:15px;padding:0 8px;margin-top:6.5px}.messageStatusContainer.pending .message-success,.messageStatusContainer.pending .messageTime,.messageStatusContainer.errorInMessage .message-success{display:none}.messageStatusContainer.pending .messageStatus{background-image:url('https://static-v.tawk.to/a-v3-39/images/ajax-loader.gif');background-position:0 0;background-repeat:no-repeat;margin-top:2px;width:13px;height:13px;display:block;float:right}.visitorChatContainer .messageStatusContainer.errorInMessage{width:100%;float:right;right:0;margin-right:0;position:relative}.messageStatusContainer.errorInMessage .messageStatus{display:block;float:right;text-decoration:none;color:#ec6368}.rtl-direction .messageStatusContainer.errorInMessage .messageStatus{float:left}.ownerNameContainer .agentProfileImage{background-position:-748px 0;width:28px;height:28px;background-repeat:no-repeat;border-radius:14px;float:left;margin-left:-100%;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png')}.ownerNameContainer .visitorProfileImage{width:28px;height:28px;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-536px 0;float:left;margin-left:-100%;*filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static-v.tawk.to/a-v3-39/images/mobile-icons.png',sizingMethod='scale')}.notificationContainer .message{margin-right:40px;font-size:14px !important;font-style:italic;padding:0}.rtl-direction .notificationContainer .message{margin:0 0 0 40px}.notificationTime{width:40px;float:left;margin-left:-40px;text-align:right;font-size:12px !important}.rtl-direction .notificationTime{float:right;text-align:left;margin:0 -40px 0 0}.messageContainer .messageHead.agent .messageTime,.notificationTime{color:#b3b3b3}#agentTypingContainer .messageBody{font-size:16px !important;font-weight:bold;min-width:auto;line-height:normal;margin-top:-8px}.messageBody.notification{margin-left:0}#waitTimeContainer .messageBody{width:100%;position:relative;margin:0;line-height:100%}#waitTimeContainer .messageWrapper{border:1px solid;border-radius:5px;width:auto;left:50%;transform:translate(-50%,0);-webkit-transform:translate(-50%,0);-moz-transform:translate(-50%,0);-o-transform:translate(-50%,0);-ms-transform:translate(-50%,0);float:left;position:relative}#stickyContainer{position:absolute;margin-left:-14px;margin-top:-12px;background-color:#fcfcfc;width:23px;height:24px;padding:2px;top:50%}#stickyIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-495px 0;width:15px;height:16px;margin:4px}#waitTimeContainer .message{margin:0;padding:12px 10px 12px 14px;font-size:15px !important;color:#7b7a7a;font-weight:bold}#waitTimeContainer{margin:20px}#prechatButtonContainer button{vertical-align:bottom;width:50%}.inputContainer.valid{padding-right:30px}.inputContainer.valid,.form .textareaFieldset div.valid textarea{border-color:#92ed9d}.validInputIcon{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-696px 0;width:16px;height:15px;float:right;display:none;position:absolute;bottom:10px;right:10px}.rtl-direction .validInputIcon{float:left;left:10px;right:auto}.download-file{color:#3276b1;text-decoration:none;margin-top:3px;display:block}.download-image{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-781px 0;width:16px;height:18px;padding:1px 8px;vertical-align:middle}.uploaded-image{max-width:90%;max-height:220px;display:block;margin:0 auto}#uploadFileOption .icon{margin:0 auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-802px 0;width:24px;height:25px}#uploadFileOption label{display:block;cursor:pointer}.progress{height:14px;position:relative;background:#eee;box-shadow:0 1px 0 transparent,0 0 0 1px #e3e3e3 inset;width:200px;margin:5px 0;display:inline-block;vertical-align:middle}.progress-bar{display:block;height:100%;background-color:#71a06a;box-shadow:inset 0 2px 9px rgba(255,255,255,0.3),inset 0 -2px 6px rgba(0,0,0,0.4);position:relative;overflow:hidden;box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.image-loader{width:30px;height:30px;background:url('https://static-v.tawk.to/a-v3-39/images/image-load.gif');background-repeat:no-repeat;background-position:center}.upload-error{margin:5px}.upload-error span{font-size:16px;color:red;font-weight:bold;vertical-align:middle}#upload-form{position:absolute;top:-100000px}.upload-data{margin:7px 12px 0 20px;min-width:250px}.upload-data span{font-style:italic;margin-right:3px}.agentChatContainer .messageBody{margin:-12px 0 0 30px;max-width:100%;float:left}.rtl-direction .agentChatContainer .messageBody{float:right}.agentChatContainer .message{border-radius:0 15px 15px 15px;background:#eee;color:#333;margin-right:50px}.rtl-direction .agentChatContainer .message{border-radius:15px 0 15px 15px;margin:auto auto auto 50px}.agentChatContainer .messageStatusContainer{margin-left:-47px;position:absolute;top:5px;left:100%}.rtl-direction .agentChatContainer .messageStatusContainer{left:auto;right:100%;margin:auto -47px auto auto}.messageContainer.agentChatContainer{margin:10px 0 10px 12px}.rtl-direction .messageContainer.agentChatContainer{margin:10px 12px 10px 0}.messageContainer.visitorChatContainer{margin:10px 12px 10px 0}.rtl-direction .messageContainer.visitorChatContainer{margin:10px 0 10px 12px}.visitorChatContainer .messageBody{margin:2px 0 0 0;float:right;max-width:100%}.rtl-direction .visitorChatContainer .messageBody{float:left}.visitorChatContainer .messageWrapper.error .message{background-color:#ec6368 !important;color:#fff !important;display:table;float:right}.visitorChatContainer .messageWrapper .message{color:#333;text-align:left;border-radius:15px 0 15px 15px;background:#e5e5e5;margin-left:50px}.rtl-direction .visitorChatContainer .messageWrapper .message{text-align:right;border-radius:0 15px 15px 15px;margin:auto 50px auto 0;float:left}.rtl-direction .visitorChatContainer .messageWrapper.error .message{float:left}.visitorChatContainer .messageStatusContainer{position:absolute;right:100%;top:2px;margin-right:-47px}.rtl-direction .visitorChatContainer .messageStatusContainer{left:100%;right:auto;margin:auto auto auto -47px}.rtl-direction .visitorChatContainer .messageStatusContainer.errorInMessage{left:0}.ownerNameContainer{float:left;width:100%}.messageOwnerName{color:#a7a7a7;text-decoration:none;font-size:12px !important;margin-left:42px;margin:0;padding:0;line-height:14px;display:block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;margin-left:30px}.messageOwnerName.visitor{text-align:right;margin-right:0;margin-left:0}.single-agent .profileImageContainer,.single-agent .agentChatContainer .ownerNameContainer{display:none}.single-agent .visitorChatContainer .messageBody,.single-agent .messageOwnerName.visitor{margin-right:0}.single-agent .visitorChatContainer .messageBody{margin-top:2px}.single-agent .agentChatContainer .messageBody,.single-agent .agentChatContainer .ownerNameContainer,.single-agent #agentTypingContainer .messageBody{margin-left:0;margin-top:0}#agentTypingContainer .agentChatContainer{margin-bottom:5px}.profileImageContainer{height:28px;float:left;width:28px;margin-left:-100%}.profileImageContainer .agentProfileImage{width:28px;height:28px;background-repeat:no-repeat;border-radius:14px;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-748px 0;position:absolute;left:0;right:0}.messageContainer,#agentTypingContainer{position:relative;margin:10px 12px;white-space:normal}.inputContainer input:focus+.form-field-label,.textareaFieldset textarea:focus+.form-field-label{display:block}.inputContainer input:active::-webkit-input-placeholder,.inputContainer input:focus::-webkit-input-placeholder,.textareaFieldset textarea:active::-webkit-input-placeholder,.textareaFieldset textarea:focus::-webkit-input-placeholder{color:transparent !important}.inputContainer input:focus::-moz-placeholder,.inputContainer input:active::-moz-placeholder,.textareaFieldset textarea:focus::-moz-placeholder,.textareaFieldset textarea:active::-moz-placeholder{color:transparent !important;opacity:0 !important}.form-field-label.small{color:#b3b3b3;padding:1px 0 0 0;display:none;font-size:10px;position:absolute;top:0;left:4px;font-weight:bold}.rtl-direction .form-field-label.small{right:4px;left:auto}.form-field-label{color:#707070;font-family:Arial;font-size:13px;font-weight:bold}.form .textareaFieldset{padding:0 33px 0 0;margin:0 0 7px 0;position:relative;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;background-color:#fff;border:1px solid #ccc}.rtl-direction .form .textareaFieldset{padding:0 0 0 33px}.selection-label{vertical-align:middle;cursor:pointer}.selection-container{margin:3px}.selection-container input{margin:0 3px 0 5px}.selections-container{margin:3px 3px 7px 3px}.selections-container.error{border:1px solid #ef5656;border-radius:3px}@keyframes typing{0%{opacity:0}100%{opacity:1}}@-ms-keyframes typing{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes typing{0%{opacity:0}100%{opacity:1}}@-moz-keyframes typing{0%{opacity:0}100%{opacity:1}}@-o-keyframes typing{0%{opacity:0}100%{opacity:1}}.agentTypingIndicator span{-moz-animation:typing 1.2s infinite;-webkit-animation:typing 1.2s infinite;-o-animation:typing 1.2s infinite;-ms-animation:typing 1.2s infinite;animation:typing 1.2s infinite;animation-fill-mode:both;margin:0 1px;font-size:20px;line-height:0}.agentTypingIndicator span:nth-child(2){animation-delay:400ms;-webkit-animation-delay:400ms;-moz-animation-delay:400ms;-ms-animation-delay:400ms;-o-animation-delay:400ms}.agentTypingIndicator span:nth-child(3){animation-delay:800ms;-webkit-animation-delay:800ms;-moz-animation-delay:800ms;-ms-animation-delay:800ms;-o-animation-delay:800ms}.rtl-direction .message{min-width:45px !important}.message a{color:inherit}#newMessageDivider{margin-top:4px;font-size:.7rem;line-height:.6rem}#newMessageDividerLine{border-top:2px solid #e4c0b6;border-bottom:0;margin:0 0 -1px}#newMessageDividerLabel{background:#fcfcfc;margin:-0.3rem 0;float:right;padding:0 .5rem;color:#e4c0b6}#newMessageContainer{position:relative;left:-50%;cursor:pointer;display:none}#newMessagesBar{position:absolute;bottom:33px;height:0;width:auto;left:50%;color:#fff;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease;visibility:hidden;cursor:pointer}#newMessagesBar.theme-background-color{background-color:transparent !important}#notificationMessageText{font-weight:700}#newMessageArrowDown{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-965px 0;width:16px;height:6px;margin:-1px auto}#newMessagesNotificationLink{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-944px 0;width:16px;height:16px;float:left;margin:7px 7px auto auto}#newMessagesBar.visible{height:27px;bottom:70px;visibility:visible}#newMessagesBar.visible #newMessageContainer{display:block}#newMessagesBar p{line-height:27px;padding:0 10px;text-align:center;background-color:#81bd1d;border-radius:5px}.rtl-direction #newMessagesNotificationLink{float:right;-ms-transform:rotateY(180deg);-webkit-transform:rotateY(180deg);transform:rotateY(180deg);margin:7px auto auto 7px}#bottomContainer{position:absolute;bottom:0;height:30px;line-height:30px;left:0;right:0;text-align:center;background-color:#fff;padding:0 25px;font-size:15px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}#tawktoLink{text-decoration:none;color:#000}#tawktoLink .thin{font-size:13px;font-weight:400}#formContainer .inputContainer.selection:before{content:\"\";position:absolute;right:14px;top:13px;width:0;height:0;border-left:7px solid transparent;border-right:7px solid transparent;border-top:7px solid #707070;z-index:0}#formContainer .inputContainer{background-color:#fff;overflow:hidden;position:relative;height:33px}#formContainer .inputContainer.selection select{padding:7px 0}#formContainer .inputContainer select{position:absolute;height:100%;-webkit-appearance:none;-moz-appearance:none;appearance:none;width:90%;background:transparent;font-family:Arial,Helvetica,sans-serif;font-size:13px;font-weight:600;line-height:1;-webkit-appearance:none;-moz-appearance:none;text-indent:.01px;text-overflow:'';-ms-appearance:none}#formContainer .inputContainer select::-ms-expand{display:none}#endChatOption{display:none}#viewEmoji{position:absolute;left:5px;top:14px;opacity:.4}.rtl-direction #viewEmoji{right:5px;left:auto}#viewEmoji .icon{background:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-986px 0;height:24px;width:24px;display:block}#viewEmoji.active{opacity:1}#emoji-selection-container{position:absolute;bottom:50px;left:5px;right:5px;height:200px;background:#fff;border:1px solid #ddd;border-radius:3px;display:none;z-index:1}#tabs-selection{border-bottom:1px solid #ddd;list-style:none}.open-tab{opacity:.4;float:left;margin-bottom:-2px;position:relative;display:block;cursor:pointer;width:11%}.open-tab.active{opacity:1}#tab-content{position:absolute;top:39px;bottom:0;overflow:auto;left:0;right:0;padding:10px}.header-title{text-align:center;margin:5px 0;font-weight:bold;font-size:14px}.emoji-select{display:inline-block;margin:9px}.emoji-select:hover .emojione{transform:scale(2);-ms-transform:scale(2);-webkit-transform:scale(2);-moz-transform:scale(2);-o-transform:scale(2)}.emoji-header{display:block;background-color:#fff;cursor:default;padding:5px 3px;cursor:pointer}.emoji-header:hover{background:#eee}.open-tab.active .emoji-header{-webkit-box-shadow:0 -2px 0 #57889c;-moz-box-shadow:0 -2px 0 #57889c;box-shadow:0 -2px 0 #57889c;border-top-width:0 !important;margin-top:1px !important;border:1px solid #ddd;border-bottom-color:transparent;border-radius:3px 3px 0 0;cursor:default}#people.open-tab.active .emoji-header{border-left:0}.open-tab.active .emoji-header:hover{background:#fff}.emojionly .emojione{height:4.5ex !important}#emoji-selection-container .emojione{min-width:18px;min-height:18px;height:4ex;margin:0}#emoji-selection-container .inputContainer{padding:0 6px;margin:0}#emoji-selection-container .textInput{padding:6px 0}.emojionly .messageWrapper .message{background:transparent !important}#videoCallOption .icon{background:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-1040px 0;width:32px;height:16px;margin-top:2px}#videoCallOption label{display:block;cursor:pointer}#voiceCallOption .icon{background:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-1015px 0;width:20px;height:32px;margin:-5px auto 0 auto}#voiceCallOption label{display:block;cursor:pointer}#incoming-call-container{margin:0;text-align:center;background:#333;color:#fff;padding:5px 5px 10px 5px}#icoming-call-buttons{width:100%;text-align:center;height:42px}#decline-call{background:#f92222;color:#fff;display:inline-block;float:none;margin:0 8px;border-radius:50%;width:42px;height:42px;padding:0;box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-moz-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-webkit-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);border:1px solid #b91717}#decline-call .icon{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-1176px 0;width:32px;height:14px;margin:4px auto}#accept-call{background:#2e9c05;color:white;float:none;display:inline-block;margin:0 8px;border-radius:50%;width:42px;height:42px;padding:0;box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-moz-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);-webkit-box-shadow:inset 0 -2px 0 rgba(0,0,0,.05);border:1px solid #1f6b03}#accept-call .icon{background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-1151px 0;width:20px;height:20px;margin:1px auto}#tooLongMsgNotification{position:absolute;bottom:59px;padding:5px 0;z-index:100000;width:100%;text-align:center;background-color:#fff;display:none;color:red}#tooLongMsgNotification.visible{display:block}.callInfoContainer,.callErrorContainer{border:1px solid #ddd;border-radius:5px;padding:10px 8px;display:none;background:#fff}.callIconContainer{display:table-cell;width:35px;vertical-align:middle}.callIconWrapper{width:35px;height:35px;background:#eee;border-radius:50%;vertical-align:middle;display:inline-block}.callIconContainer .voiceCallIcon{margin:7px auto;background:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-repeat:no-repeat;background-position:-1077px 0;width:13px;height:21px}.callIconContainer .videoCallIcon{margin:11.5px auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-1095px 0;width:24px;height:12px}.callIconContainer .screenShareIcon{margin:8px auto;background-image:url('https://static-v.tawk.to/a-v3-39/images/mobile-icons.png');background-position:-1124px 0;width:22px;height:20px}.callDetailsContainer{display:table-cell;vertical-align:middle;padding-left:5px}.callTitle{font-size:15px;font-weight:bold}.callTitle.missed{color:#a90329}.callEndDetails{display:none}.callInfoWrapper{display:table}.callErrorContainer .callEndDetails{display:block}.callRetryContainer{padding-left:5px;vertical-align:middle;display:table-cell}.retry-load{float:none}";
            var u = {
                "chat-notification-container": '<div id="__MESSAGE_ID__" class="messageBody notification clearfix"><div class="notificationContainer"><div class="message">__MESSAGE__</div></div><div class="notificationTime">__TIME__</div><div class="clear"></div></div>',
                "chat-resend-link": '<a id="resendMessage-__MESSAGE_ID__" href="javascript:void(0);" class="messageStatus" title="Resend">__NOT_DELIVERED__</a>',
                "tawk-survey-wrapper": '<div class="surveyContainer"><div class="surveyQuestion">__QUESTION__</div><div class="survey-options-wrapper">__OPTIONS__</div></div>',
                departmentOfflineNotification: '<div class="messageBody notification"><div class="messageWrapper"><div class="message">__MESSAGE__</div></div><div class="clear"></div></div>',
                "chat-message-container": '__OWNER_TPL__<div class="clearfix"></div><div class="messageBody clearfix">__CONTENT__</div>',
                "chat-message-owner-agent": '<div class="ownerNameContainer"><div class="messageOwnerName agent">__NAME__</div></div><div class="profileImageContainer"><div class="agentProfileImage"></div><div style="background-image : __IMAGE_URL__; __IE_IMAGE_SCALE__;" class="agentProfileImage"></div></div>',
                "mobile-agent-typing": '<div id="agentTyping-__MESSAGE_ID__" class="agentChatContainer clearfix"><div class="ownerNameContainer"><div class="messageOwnerName agent">__NAME__</div></div><div class="profileImageContainer"><div class="agentProfileImage"></div><div style="background-image : __IMAGE_URL__; __IE_IMAGE_SCALE__;" class="agentProfileImage"></div></div><div class="clearfix"></div><div class="messageBody clearfix"><div class="message agentTypingIndicator"><span>.</span><span>.</span><span>.</span></div></div></div>',
                "chat-message-row": '<div class="messageWrapper __PENDING__"><div class="message">__MESSAGE__</div></div>__MESSAGE_STATUS_ROW__<div class="clear"></div>',
                "chat-message-success": '<span class="message-success"></span>',
                "chat-message-status-row": '    <div class="messageStatusContainer">        <span class="messageTime __TIME_CLASS__">__TIME__</span>    </div>',
                "chat-message-pending-row": '    <div class="messageStatusContainer pending">        <span class="messageStatus"></span>    </div>',
                "survey-option": '<input type="radio" id="__RADIO_ID__" name="__RADIO_NAME__" value="__RADIO_VALUE__" /><label for="__RADIO_ID__">__RADIO_VALUE__</label><br />',
                "file-upload": '<div>__FILE_DISPLAY__<a class="download-file" href="__DOWNLOAD_URL__" title="__DOWNLOAD_TEXT__" target="_blank"><p class="uploaded-file-name"><b>__FILE_NAME__</b></p><span class="download-image"> </span>__FILE_SIZE__ <span>__FILE_TYPE__</span></a></div>',
                "chat-divider": '    <hr id="newMessageDividerLine">    <span id="newMessageDividerLabel">__NEW_MESSAGES__</span>',
                "default-branding": '<span class="thin">Supported by</span> <b>oki-ig.com</b>',
                fileUploadProgress: '    <div id="upload-__HANDLE__" class="upload-data">        <span class="upload-icon"></span> <span>__FILE_NAME__</span>        <div class="progress">            <div class="progress-bar" role="progressbar" style="width: 0.5%"></div>        </div>    </div>',
                incomingCallRequest: '<div id="incoming-call-container""><p style="margin: 5px 0; font-size: 14px; font-weight: bold;">__INCOMING_CALL__</p><div id="icoming-call-buttons"><button id="decline-call"><div class="icon"></div></button><button id="accept-call"><div class="icon"></div></button></div><div class="clear"></div></div>',
                callInfo: '<div class="loader"><img alt="" title="loading" src="https://static-v.tawk.to/a-v3-39/images/ajax-loader.gif" /></div><div class="callInfoContainer"><div class="callInfoWrapper"><div class="callIconContainer"><div class="callIconWrapper"></div></div><div class="callDetailsContainer"><p class="callTitle"></p><p class="callEndDetails"></p></div></div></div>',
                callError: '<div class="callInfoWrapper"><div class="callDetailsContainer"><p class="callTitle missed">__HEADER__</p><p class="callEndDetails">__MESSAGE__</p></div><div class="callRetryContainer"><button class="retry-load">__ACTION__</button></div></div>',
                "emoji-selection": '<ul id="tabs-selection">__TAB_LIST__<li id="search" class="open-tab"><a href="javascript:void(0);" class="emoji-header"><img class="emojione only-emoji" alt="search" title=":mag:" src="https://cdn.jsdelivr.net/emojione/assets/png/1f50d.png?v=2.2.7" /></a></li><div class="clearfix"></div></ul><div id="tab-content"></div>',
                "emoji-tab-pane": '<div class="tab-pane"><div class="emoji-list">__EMOJIS__</div></div>',
                "emoji-search-pane": '<div class="tab-pane"><div class="inputContainer"><input id="search-emoji" type="text" class="textInput" placeholder="Search Emoji" /></div><div id="search-list"></div></div>',
                "emoji-tab-select": '<li class="open-tab" id="__ID__"><a href="javascript:void(0);" class="emoji-header">__IMAGE__</a></li>',
                "emoji-list": '<a href="javascript:void(0);" class="emoji-select" id="__SHORTNAME__" title="__SHORTNAME__">__IMAGE__</a>',
                changeNameForm: '<div id="formInnerHeight"><div id="changeNameFormMessageContainer" class="formMessageField">__TITLE__</div><fieldset><div class="inputContainer"><input type="text" id="nameField" value="__NAME__" title="__NAME_PLACEHOLDER__" class="textInput" maxlength="40" placeholder="__NAME_PLACEHOLDER__" /></div></fieldset><div id="nameFieldError" class="formErrorContainer"></div></div><div id="submitWrapper"><div></div></div><div id="formSavingStatus"><span id="savingStatus">__STATUS__</span></div><div class="longFormBottomContainer"><button id="formCancel" class="declineButton formButton">__CANCEL_BUTTON__</button><button id="formSubmit" class="approveButton formButton  theme-background-color theme-text-color">__SAVE_BUTTON__</button></div>',
                emailTranscriptForm: '<div id="formInnerHeight"><div id="emailTranscriptFormMessageContainer" class="formMessageField">Email transcript to:</div><fieldset><div class="inputContainer"><input type="email" id="transcriptEmailField" title="__TRANSCRIPTEMAIL_PLACEHOLDER__" value="__TRANSCRIPTEMAIL__" class="textInput" maxlength="150" placeholder="__TRANSCRIPTEMAIL_PLACEHOLDER__" /></div></fieldset><div id="transcriptEmailFieldError" class="formErrorContainer"></div><div class="clear"></div></div><div id="submitWrapper"><div></div></div><div id="formSavingStatus"><span id="savingStatus">__STATUS__</span></div><div class="longFormBottomContainer"><button id="formCancel" class="declineButton formButton">__CANCEL_BUTTON__</button><button id="formSubmit" class="approveButton formButton theme-background-color theme-text-color">__SEND_BUTTON__</button></div>',
                offlineForm: '<div id="overlayOfflineForm">__OFFLINE_MESSAGE_SUCCESSFULY_SENT__</br><div id="resendButton" class="theme-background-color theme-text-color">__SEND_AGAIN__</div></div><div class="longFormContainer"><div id="formInnerHeight"><div id="offlineFormMessageContainer" class="formMessageField">__TITLE__</div>__FIELDS__<div id="messageFieldError" class="formErrorContainer"></div><div class="clear"></div></div></div><div id="submitWrapper"><p>Submitting</p><div></div></div><div class="longFormBottomContainer">__CLOSE_BUTTON_CONTAINER__<button id="formSubmit" class="approveButton formButton theme-background-color theme-text-color">__SUBMIT_BUTTON__</button></div>',
                preChatForm: '<div class="longFormContainer"><div id="formInnerHeight"><div id="preChatFormMessageContainer" class="formMessageField">__TITLE__</div>__FIELDS__</div></div><div id="submitWrapper"><p>Submitting</p><div></div></div><div id="prechatButtonContainer" class="longFormBottomContainer">__CLOSE_BUTTON_CONTAINER__<button id="formSubmit" class="approveButton formButton theme-background-color theme-text-color">__START_CHAT_BUTTON__</button><div class="clear"></div></div>',
                departmentSelection: '<fieldset class="__SAFARI__"><label class="form-field-label">__REQUIRED__ __LABEL__</label><div class="inputContainer selection __NON_MODERN__"><select id="__ID__Field" title="__LABEL__">__VALUE__</select></div></fieldset><div id="__ID__FieldError" class="formErrorContainer"></div>',
                inputTextFieldType: '<fieldset><div class="inputContainer"><input type="__INPUT_TYPE__" id="__ID__Field" title="__LABEL__" value="__VALUE__" class="textInput" maxlength="__MAXLENGTH__"placeholder="__REQUIRED__ __LABEL__" /><label class="form-field-label small">__REQUIRED__ __LABEL__</label><span id="__ID__FieldValid" class="validInputIcon"></span></div></fieldset><div id="__ID__FieldError" class="formErrorContainer"></div>',
                textAreaFieldType: '<fieldset class="textareaFieldset"><textarea id="__ID__Field" title="__LABEL__" maxlength="__MAXLENGTH__" placeholder="__REQUIRED__ __LABEL__"></textarea><label class="form-field-label small">__REQUIRED__ __LABEL__</label><span id="__ID__FieldValid" class="validInputIcon"></span></fieldset><div id="__ID__FieldError" class="formErrorContainer"></div>',
                selectionsType: '<fieldset><label class="form-field-label">__REQUIRED__ __LABEL__</label><div><div class="selections-container" id="__ID__Container">__VALUE__</div></div></fieldset><div id="__ID__FieldError" class="formErrorContainer"></div>',
                checkboxSelectionType: '<div class="selection-container"><input type="checkbox" name="__FIELD_ID__group" id="__ID__" value="__VALUE__" /><label class="selection-label" for="__ID__">__VALUE__</label></div>',
                radioSelectionType: '<div class="selection-container"><input type="radio" name="__FIELD_ID__group" id="__ID__" value="__VALUE__" /><label class="selection-label" for="__ID__">__VALUE__</label></div>',
                "close-form-button": '<button id="formCloseChat" class="declineButton formButton">__CLOSE_BUTTON__</button>',
                inactivityOverlay: "<div>__OVERLAY__</div>",
                maintenanceOverlay: "<div>__OVERLAY__</div>",
                endChatForm: '<div id="formInnerHeight"><div id="endChatFormMessageContainer" class="formMessageField">__TITLE__</div></div><div id="submitWrapper"><div></div></div><div id="formSavingStatus"><span id="savingStatus">__STATUS__</span></div><div class="longFormBottomContainer"><button id="formCancel" class="declineButton formButton">__CANCEL_BUTTON__</button><button id="formSubmit" class="approveButton formButton theme-background-color theme-text-color">__END_CHAT_BUTTON__</button></div>',
                "tawkchat-minified-iframe-element-rectangle": '<div id="tawkchat-minified-wrapper"><div id="tawkchat-minified-container" class="theme-background-color border-corner"><div id="tawkchat-status-middle"><div id="tawkchat-status-text-container" class="theme-text-color"><p id="tawkchat-status-message"><span id="short-message"></span></p></div><div id="tawkchat-minified-agent-container" class="theme-text-color"><p id="tawkchat-minified-agent-information-wrapper"></p></div><div id="tawkchat-minified-link-container"><a href="javascript:void(0);" id="maximizeChat" title="__MAXIMIZE__"><div class="icon"></div></a></div></div></div></div>',
                "tawkchat-minified-iframe-element-round": '<div id="tawkchat-minified-box"><div id="tawkchat-minified-wrapper"><div id="tawkchat-status-text-container" class="theme-background-color theme-text-color"><a href="javascript:void(0);" id="maximizeChat" title="__MAXIMIZE__"><div id="tawkchat-status-icon" class="online"></div></a></div></div></div>',
                "tawkchat-chat-bubble-canvas": '<div id="tawkchat-chat-bubble-graphics-container"><canvas id="tawkchat-chat-bubble-canvas"></canvas></div><div id="tawkchat-chat-bubble-close" class="image-canvas-close"></div><div id="tawkchat-chat-bubble-text-container"><p id="tawkchat-chat-bubble-text" class="bubble-text-color"></p></div>',
                "tawkchat-chat-indicator": '<div id="tawkchat-chat-indicator"><p id="tawkchat-chat-indicator-text"></p></div>',
                "tawkchat-chat-bubble-gallery": '<span id="tawkchat-chat-bubble-close" class="image-bubble-close"></span><img src="__IMAGE_SRC__" id="bubble-image" />',
                "tawkchat-agent-details-default": '<p id="tawkchat-minified-agent-name"></p><p id="tawkchat-minified-agent-position"></p>',
                "tawkchat-agent-details": '<span id="tawkchat-minified-agent-name"></span><span id="tawkchat-minified-agent-position"></span>',
                "tawkchat-maximized-wrapper": '<div id="innerWrapper" class="border-corner"><div id="headerBoxWrapper"><div id="headerBox" class="theme-background-color theme-text-color border-corner"><div id="headerAccountStateContainer"><p id="headerAccountState"><span id="shortMessage"></span></p></div><div id="agentWrapper"><div id="agentProfileContainer"></div><div id="agentListBack"><div id="listBack"></div><p id="agentListLabel">__AGENT_LIST__</p></div></div><div id="headerBoxControlsContainer"><a id="minimizeChat" href="javascript:void(0);" title="__MINIMIZE__"><span class="icon"></span></a><a id="popoutChat" href="javascript:void(0);" title="__POPOUT__"><span class="icon"></span></a><a id="endChat" href="javascript:void(0);" title="__END__"><span class="icon"></span></a></div></div></div><div id="agentBar"><div id="agentList" class="__IE6__"></div></div><div id="chatPanel"><div id="chatContainerWrapper"><div id="chatContainer" class="__IE6__">__GREETINGS__<div id="chatTableWrapper"><div id="chatRowWrapper"><div id="chatCellWrapper"><div id="chatWrapper" class="single-agent"><div id="agentTypingContainer" class="__IE6__"></div></div></div></div></div><div id="maxFileNotificationContainer" class="hidden"><div id="maxFileNotificationMessage"></div><div id="maxFileNumberList"></div><div class="closeButtonContainer"><span id="closeNumberNotification" class="closeNotification"></span></div></div><div id="maxSizeNotificationContainer" class="hidden"><div id="maxSizeNotificationMessage"></div><div id="maxFileSizeList"></div><div class="closeButtonContainer"><span id="closeSizeNotification" class="closeNotification"></span></div></div></div></div><div id="tooLongMsgNotification">__TOO_LONG_MESSAGE__</div><div id="actionsContainer" class="__IE6__"><fieldset id="textareaWrapper"><div id="drop-text"><span></span></div><div id="ratingContainer"><a id="ratePositive" href="javascript:void(0);" title="__RATE_POSITIVE__"></a><a id="rateNegative" href="javascript:void(0);" title="__RATE_NEGATIVE__"></a></div><div id="textareaContainer" class="additionalPadding"></div><a href="javascript:void(0);" id="viewEmoji"><span class="icon"></span></a></fieldset><div id="optionsContainer" style="display: block;"><div class="item" id="soundOption" class="activeSound"><div id="soundOnIcon" class="icon"></div><div id="soundTitle" class="tooltip">Disable Sound</div></div><div class="item" id="emailTranscriptOption"><div id="emailIcon" class="icon"></div><div class="tooltip"></div></div><div class="item" id="uploadFileOption"><label for="fileInput"><div id="uploadFileIcon" class="icon"></div></label><div class="tooltip"></div></div><div id="videoCall" class="item" style="display: none;"><div id="videoCallIcon" class="icon"></div><div class="tooltip"></div></div><div id="voiceCall"  class="item" style="display: none;"><div id="voiceCallIcon" class="icon"></div><div class="tooltip"></div></div><div id="screenShare" class="item" style="display: none;"><div id="screenShareIcon" class="icon"></div><div class="tooltip"></div></div></div></div><form enctype="multipart/form-data" id="upload-form" method="post"><input type="file" class="hidden file-input" name="file[]" multiple="multiple" id="fileInput" /><label class="upload-file sprite-background" title="Upload File" for="test"></label></form></div><div id="emoji-selection-container"><img alt="" title="loading" src="https://static-v.tawk.to/a-v3-39/images/ajax-loader.gif" /></div><div id="formContainer"></div><div id="newMessagesBar"><div id="newMessageContainer"><p id="newMessagesNotification"><a id="newMessagesNotificationLink" title=""></a><span id="notificationMessageText"></span></p><div id="newMessageArrowDown"></div></div></div><div id="__BOTTOM_CONTAINER__"><a id="__TAWK_TO_LINK__" tabindex="-1"></a></div><div id="tawkToContent"><div class="longFormContainer"><div class="wrapper"><div id="tawkImage"></div><p id="tawkHeader">TAWK.TO</p><p id="tawkContent"></p></div></div><div class="buttonContainer"><button id="cancelTawkRedirect"></button><button id="tawkRedirect" class="theme-background-color theme-text-color"></button></div></div></div>',
                greetingsOverlay: '<div id="greetingsOverlay"><div id="greetingsWrapper"><div id="greetingsContainer"></div><div id="embedArrow"></div></div></div>',
                chatEnded: '<p class="title">__CHAT_ENDED__</p><div class="buttonContainer"><button id="newChat">__START_CHAT__</button><button id="emailTranscript">__EMAIL_TRANCRIPT__</button></div>',
                "mobile-bottom-opt": '<div id="tawkchat-minified-box" class="bottom-opt"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper"><div id="tawkchat-status-text-container" class="theme-background-color"><div id="status-indicator" class="online"></div><div id="tawkchat-status-message" class="theme-text-color"><a id="status-message"></a></div><div id="popout"></div><div class="clear"></div></div></div></div>',
                "mobile-bottom-not-opt": '<div id="tawkchat-minified-box" class="bottom-not-opt"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper"><div id="tawkchat-status-text-container" class="theme-background-color"><div id="status-indicator" class="online"></div><div id="tawkchat-status-message" class="theme-text-color"><a id="status-message"></a></div><div id="popout"></div><div class="clear"></div></div></div></div>',
                "mobile-side-not-opt-right": '<div id="tawkchat-minified-box" class="left-corner"><div id="tawkchat-chat-indicator" class="online"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper" class="theme-background-color"><div id="tawkchat-status-text-container"><div id="status-indicator"></div><div id="tawkchat-status-message" class="theme-text-color"><a id="status-message"></a></div><div id="popout"></div><div class="clear"></div></div></div></div>',
                "mobile-side-not-opt-left": '<div id="tawkchat-minified-box" class="right-corner"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper" class="theme-background-color"><div id="tawkchat-status-text-container"><div id="popout"></div><div id="status-indicator" class="online"></div><div class="clear"></div><div id="tawkchat-status-message" class="theme-text-color"><a id="status-message"></a></div></div></div></div>',
                "mobile-side-ie9Less-not-opt": '<div id="tawkchat-minified-box" class="ie9Less"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper" class="wrapperIE9Less theme-background-color"><div id="tawkchat-status-text-container" class="statusContainerIE9Less statusContainerIE9LessNOptimized"><div id="popout"></div><div id="status-indicator" class="online"></div><div id="tawkchat-status-message" class="theme-text-color statusMessageIE9Less statusMessageIE9LessNOptimized"><a id="status-message"></a></div><div class="clear"></div></div></div></div>',
                "mobile-side-ie9Less-opt": '<div id="tawkchat-minified-box" class="ie9Less"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper" class="wrapperIE9Less theme-background-color"><div id="tawkchat-status-text-container" class="statusContainerIE9Less statusContainerIE9LessOptimized"><div id="popout"></div><div id="status-indicator" class="online"></div><div id="tawkchat-status-message" class="theme-text-color statusMessageIE9Less statusMessageIE9LessOptimized"><a id="status-message"></a></div></div></div></div>',
                "mobile-side-opt-right": '<div id="tawkchat-minified-box" class="opt-left-corner"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper" class="theme-background-color"><div id="popout"></div><div id="tawkchat-status-text-container"><div id="status-indicator" class="online"></div><div id="tawkchat-status-message" class="theme-text-color"><a id="status-message"></a></div><div class="clear"></div></div></div></div>',
                "mobile-side-opt-left": '<div id="tawkchat-minified-box" class="opt-right-corner"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper" class="theme-background-color"><div id="popout"></div><div id="tawkchat-status-text-container"><div id="status-indicator" class="online"></div><div id="tawkchat-status-message" class="theme-text-color"><a id="status-message"></a></div><div class="clear"></div></div></div></div>',
                "mobile-bottom-round": '<div id="tawkchat-minified-box"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper"><div id="tawkchat-status-text-container" class="theme-background-color theme-text-color"><div id="tawkchat-status-icon" class="online"></div></div></div></div>',
                "mobile-bottom-rectangle": '<div id="tawkchat-minified-box"><div id="tawkchat-chat-indicator"><span id="tawkchat-chat-indicator-text"></span></div><div id="tawkchat-minified-wrapper"><div id="tawkchat-status-text-container" class="theme-background-color theme-text-color"><div id="tawkchat-status-icon" class="online"><div id="tawk-minified-mobile-text" class="text"></div></div></div></div></div>',
                "tawkchat-maximized-container-element": '<div id="topBarContainer" class="theme-background-color theme-text-color"><div id="siteNameContainer"><p id="siteName"></p></div><div id="backButtonContainer" class="button"><div id="backButton"></div></div><div id="menuButtonContainer" class="button"><div id="menuButton"></div></div></div><div id="menuOptions"><div id="menuScrollable"><ul><li id="soundOption"><div class="iconWrapper"><div class="icon"></div></div><span id="soundTitle" class="label"></span></li><li id="changeNameOption"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></li><li id="emailTranscriptOption"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></li><li id="uploadFileOption"><label for="fileInput"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></label></li><li id="videoCallOption" style="display: none;"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></li><li id="voiceCallOption" style="display: none;"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></li><li id="popOut"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></li><li id="endChatOption"><div class="iconWrapper"><div class="icon"></div></div><span class="label"></span></li></ul></div></div><div id="chatPanel"><form enctype="multipart/form-data" id="upload-form" method="post"><input type="file" class="hidden file-input" name="file[]" multiple="multiple" id="fileInput" /><label class="upload-file sprite-background" title="Upload File" for="test"></label></form><div id="chatContainer"><div id="chatTableContainer"><div id="chatRowContainer"><div id="chatCellContainer"><div id="greetingsWrapper"><div id="greetingsContainer"></div><div id="embedArrow"></div></div><div id="chatWrapper" class="single-agent"><div id="agentTypingContainer"></div></div></div></div></div><div id="maxFileNotificationContainer" class="hidden"><div id="maxFileNotificationMessage"></div><div id="maxFileNumberList"></div><div class="closeButtonContainer"><span id="closeNumberNotification" class="closeNotification"></span></div></div><div id="maxSizeNotificationContainer" class="hidden"><div id="maxSizeNotificationMessage"></div><div id="maxFileSizeList"></div><div class="closeButtonContainer"><span id="closeSizeNotification" class="closeNotification"></span></div></div></div><div id="tooLongMsgNotification">__TOO_LONG_MESSAGE__</div><div id="newMessagesBar"><div id="newMessageContainer"><p id="newMessagesNotification"><a id="newMessagesNotificationLink" title=""></a><span id="notificationMessageText"></span></p><div id="newMessageArrowDown"></div></div></div><div id="actionsContainer"><div id="textareaContainer"><a href="javascript:void(0);" id="viewEmoji"><span class="icon"></span></a><div id="emoji-selection-container"><img alt="" title="loading" src="https://static-v.tawk.to/a-v3-39/images/ajax-loader.gif" /></div><div id="textareaWrapper"><textarea id="chatTextarea" maxlength="5000"></textarea></div><div id="textareaSubmitContainer"><div id="textareaSubmitButton"></div></div><div id="ratingContainer"><a id="ratePositive" href="javascript:void(0);"><div class="touch"></div></a><a id="rateNegative" href="javascript:void(0);"><div class="touch"></div></a></div></div></div></div><div id="tawkToContent"><div class="contentContainer"><div class="wrapper"><div id="tawkImage"></div><p id="tawkHeader">TAWK.TO</p><p id="tawkContent"></p></div></div><div class="buttonContainer"><button id="cancelTawkRedirect"></button><button id="tawkRedirect" class="theme-background-color theme-text-color"></button></div></div><div id="formContainer"></div><div id="__BOTTOM_CONTAINER__"><a id="__TAWK_TO_LINK__" tabindex="-1" href="javascript:void(0);"></a></div>',
                "tawkchat-maximized-container-element-no-cookies": '<div id="topBarContainer" class="theme-background-color theme-text-color"><div id="siteNameContainer"><p id="siteName"></p></div><div id="backButtonContainer" class="button"><div id="backButton"></div></div></div><div id="chatPanel"></div><div id="tawkToContent"><div class="contentContainer"><div class="wrapper"><div id="tawkImage"></div><p id="tawkHeader">TAWK.TO</p><p id="tawkContent"></p></div></div><div class="buttonContainer"><button id="cancelTawkRedirect"></button><button id="tawkRedirect" class="theme-background-color theme-text-color"></button></div></div><div id="formContainer"></div><div id="__BOTTOM_CONTAINER__"><a id="__TAWK_TO_LINK__" tabindex="-1"></a></div>',
                estimatedWaitTime: '<div class="messageBody notification"><div class="messageWrapper"><div id="stickyContainer"><div id="stickyIcon"></div></div><div class="message">__MESSAGE__</div></div><div class="clear"></div></div>',
                "mobile-first-message-time": '<p id="firstMessageTimeContainer"><span id="firstMessageTime">__CONTENT__</span></p><div id="firstMessageTimeLine"></div>',
                "chat-message-owner-visitor": '<div class="ownerNameContainer"><a class="messageOwnerName visitor" href="#">__NAME__</a></div>',
                "agent-typing": '<div id="agentTyping-__MESSAGE_ID__" class="agentChatContainer clearfix"><div class="ownerNameContainer"><div class="messageOwnerName agent">__NAME__</div></div><div class="profileImageContainer"><div class="agentProfileImage"></div><div style="background-image : __IMAGE_URL__; __IE_IMAGE_SCALE__;" class="agentProfileImage"></div></div><div class="clearfix"></div><div class="messageBody clearfix"><div class="message agentTypingIndicator"><span>.</span><span>.</span><span>.</span></div></div></div>',
                "agent-profile": "__AGENT_PROFILE_DETAIL____AGENT_PROFILE_IMAGE__",
                "agent-profile-image": '    <div class="alias-image"></div><div class="alias-image" style="__IMAGE_URL__; __IE_IMAGE_SCALE__;"></div>',
                "agent-profile-description": '<div class="agentContainer"><div class="agentInformationContainer"><p class="__POSITION_CLASS__">__NAME__</p><p class="position-label">__POSITION__</p></div></div>',
                "agent-profile-description-noimage": '<div class="agentContainerNoImage"><div class="agentInformationContainerNoImage"><p class="agentInfoNoImage"><b>__NAME__</b><i>__POSITION__</i></p></div></div>',
                "agent-profile-description-single": '<div class="agentContainer"><div class="agentInformationContainer"><p class="__POSITION_CLASS__">__NAME__&nbsp;-&nbsp;__POSITION__</p></div></div>',
                "wait-time-container": '<div class="messageBody notification"><div class="messageWrapper"><div id="stickyContainer"><div id="stickyIcon"></div></div><div class="message">__MESSAGE__</div></div><div class="clear"></div></div>',
                "extra-profile": '<div class="alias-image"></div><div class="overlay"></div><p id="totalExtra"></p>'
            };
            Function.prototype.bind || (Function.prototype.bind = function(a) {
                if ("function" !== typeof this) throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
                var b = Array.prototype.slice.call(arguments, 1),
                    d = this,
                    l = function() {},
                    r = function() {
                        return d.apply(this instanceof l && a ? this : a, b.concat(Array.prototype.slice.call(arguments)))
                    };
                l.prototype = this.prototype;
                r.prototype = new l;
                return r
            });
            Object.keys || (Object.keys = function() {
                var a = Object.prototype.hasOwnProperty,
                    b = !{
                        toString: null
                    }.propertyIsEnumerable("toString"),
                    d = "toString toLocaleString valueOf hasOwnProperty isPrototypeOf propertyIsEnumerable constructor".split(" "),
                    l = d.length;
                return function(r) {
                    if ("object" !== typeof r && ("function" !== typeof r || null === r)) throw new TypeError("Object.keys called on non-object");
                    var c = [],
                        e;
                    for (e in r) a.call(r, e) && c.push(e);
                    if (b)
                        for (e = 0; e < l; e++) a.call(r, d[e]) && c.push(d[e]);
                    return c
                }
            }());
            Array.prototype.forEach || (Array.prototype.forEach = function(a) {
                if (void 0 === this || null === this) throw new TypeError;
                var b = Object(this),
                    d = b.length >>>
                    0;
                if ("function" !== typeof a) throw new TypeError;
                for (var l = 2 <= arguments.length ? arguments[1] : void 0, r = 0; r < d; r++) r in b && a.call(l, b[r], r, b)
            });
            "function" !== typeof String.prototype.trim && (String.prototype.trim = function() {
                return this.replace(/^\s+|\s+$/g, "")
            });
            var L = {
                    undefined: 1,
                    "boolean": 1,
                    number: 1,
                    string: 1
                },
                x = {
                    exportProperty: function(a, b, d) {
                        a[b] = d
                    }
                };
            x.dependencyDetection = function() {
                var a = [];
                return {
                    begin: function(b) {
                        a.push(b && {
                            callback: b,
                            distinctDependencies: []
                        })
                    },
                    end: function() {
                        a.pop()
                    },
                    registerDependency: function(b) {
                        if (!x.isSubscribable(b)) throw Error("Only subscribable things can act as dependencies");
                        if (0 < a.length) {
                            var d = a[a.length - 1];
                            !d || 0 <= x.utils.arrayIndexOf(d.distinctDependencies, b) || (d.distinctDependencies.push(b), d.callback(b))
                        }
                    },
                    ignore: function(b, d, l) {
                        try {
                            return a.push(null), b.apply(d, l || [])
                        } finally {
                            a.pop()
                        }
                    }
                }
            }();
            x.observable = function(a) {
                function b() {
                    if (0 < arguments.length) return b.equalityComparer && b.equalityComparer(d, arguments[0]) || (b.valueWillMutate(), d = arguments[0], b.valueHasMutated()), this;
                    x.dependencyDetection.registerDependency(b);
                    return d
                }
                var d = a;
                x.subscribable.call(b);
                b.peek =
                    function() {
                        return d
                    };
                b.valueHasMutated = function() {
                    b.notifySubscribers(d)
                };
                b.valueWillMutate = function() {
                    b.notifySubscribers(d, "beforeChange")
                };
                x.utils.extend(b, x.observable.fn);
                x.exportProperty(b, "peek", b.peek);
                x.exportProperty(b, "valueHasMutated", b.valueHasMutated);
                x.exportProperty(b, "valueWillMutate", b.valueWillMutate);
                return b
            };
            x.subscribable = function() {
                this._subscriptions = {};
                x.utils.extend(this, x.subscribable.fn);
                x.exportProperty(this, "subscribe", this.subscribe);
                x.exportProperty(this, "getSubscriptionsCount",
                    this.getSubscriptionsCount)
            };
            x.subscribable.fn = {
                subscribe: function(a, b, d) {
                    d = d || "change";
                    a = b ? a.bind(b) : a;
                    var l = new x.subscription(this, a, function() {
                        x.utils.arrayRemoveItem(this._subscriptions[d], l)
                    }.bind(this));
                    this._subscriptions[d] || (this._subscriptions[d] = []);
                    this._subscriptions[d].push(l);
                    return l
                },
                notifySubscribers: function(a, b) {
                    b = b || "change";
                    if (this.hasSubscriptionsForEvent(b)) {
                        var d = this._subscriptions[b],
                            l;
                        l = 0;
                        for (var r = this._subscriptions[b].length; l < r; ++l) d = this._subscriptions[b].slice(0),
                            (d = d[l]) && !0 !== d.isDisposed && d.callback(a)
                    }
                },
                hasSubscriptionsForEvent: function(a) {
                    return this._subscriptions[a] && this._subscriptions[a].length
                },
                getSubscriptionsCount: function() {
                    var a = 0;
                    x.utils.objectForEach(this._subscriptions, function(b, d) {
                        a += d.length
                    });
                    return a
                },
                unsubscribe: function(a, b) {
                    x.utils.arrayRemoveItem(this._subscriptions[b || "change"], a)
                }
            };
            x.isSubscribable = function(a) {
                return null !== a && "function" === typeof a.subscribe && "function" === typeof a.notifySubscribers
            };
            x.subscription = function(a, b,
                d) {
                this.target = a;
                this.callback = b;
                this.disposeCallback = d;
                x.exportProperty(this, "dispose", this.dispose)
            };
            x.subscription.prototype.dispose = function() {
                this.isDisposed = !0;
                this.disposeCallback()
            };
            x.observable.fn = {
                equalityComparer: function(a, b) {
                    return null === a || typeof a in L ? a === b : !1
                }
            };
            var fa = x.observable.protoProperty = "__tw_proto__";
            x.observable.fn[fa] = x.observable;
            x.hasPrototype = function(a, b) {
                return null === a || void 0 === a || void 0 === a[fa] ? !1 : a[fa] === b ? !0 : x.hasPrototype(a[fa], b)
            };
            x.isObservable = function(a) {
                return x.hasPrototype(a,
                    x.observable)
            };
            x.utils = {
                arrayIndexOf: function(a, b) {
                    if ("function" == typeof Array.prototype.indexOf) return Array.prototype.indexOf.call(a, b);
                    for (var d = 0, l = a.length; d < l; d++)
                        if (a[d] === b) return d;
                    return -1
                },
                extend: function(a, b) {
                    if (b)
                        for (var d in b) b.hasOwnProperty(d) && (a[d] = b[d]);
                    return a
                },
                arrayRemoveItem: function(a, b) {
                    var d = x.utils.arrayIndexOf(a, b);
                    0 <= d && a.splice(d, 1)
                },
                objectForEach: function(a, b) {
                    for (var d in a) a.hasOwnProperty(d) && b(d, a[d])
                }
            };
            (function(a) {
                function b(a, h) {
                    var d = a.split("@"),
                        l = "";
                    1 < d.length &&
                        (l = d[0] + "@", a = d[1]);
                    a = a.replace(s, ".");
                    for (var d = a.split("."), r = d.length, c = []; r--;) c[r] = h(d[r]);
                    d = c.join(".");
                    return l + d
                }

                function d(a) {
                    for (var b = [], h = 0, d = a.length, l, r; h < d;) l = a.charCodeAt(h++), 55296 <= l && 56319 >= l && h < d ? (r = a.charCodeAt(h++), 56320 == (r & 64512) ? b.push(((l & 1023) << 10) + (r & 1023) + 65536) : (b.push(l), h--)) : b.push(l);
                    return b
                }

                function l(a) {
                    var b, h, l, q, s, v, y, A, z, B = [],
                        C, D, E;
                    a = d(a);
                    C = a.length;
                    b = n;
                    h = 0;
                    s = k;
                    for (v = 0; v < C; ++v) z = a[v], 128 > z && B.push(x(z));
                    for ((l = q = B.length) && B.push(p); l < C;) {
                        y = r;
                        for (v = 0; v < C; ++v) z =
                            a[v], z >= b && z < y && (y = z);
                        D = l + 1;
                        if (y - b > w((r - h) / D)) throw new RangeError(t.overflow);
                        h += (y - b) * D;
                        b = y;
                        for (v = 0; v < C; ++v) {
                            z = a[v];
                            if (z < b && ++h > r) throw new RangeError(t.overflow);
                            if (z == b) {
                                A = h;
                                for (y = c;; y += c) {
                                    z = y <= s ? e : y >= s + f ? f : y - s;
                                    if (A < z) break;
                                    E = A - z;
                                    A = c - z;
                                    B.push(x(z + E % A + 22 + 75 * (26 > z + E % A) - 0));
                                    A = w(E / A)
                                }
                                B.push(x(A + 22 + 75 * (26 > A) - 0));
                                s = D;
                                y = 0;
                                h = l == q ? w(h / m) : h >> 1;
                                for (h += w(h / s); h > u * f >> 1; y += c) h = w(h / u);
                                s = w(y + (u + 1) * h / (h + g));
                                h = 0;
                                ++l
                            }
                        }++h;
                        ++b
                    }
                    return B.join("")
                }
                var r = 2147483647,
                    c = 36,
                    e = 1,
                    f = 26,
                    g = 38,
                    m = 700,
                    k = 72,
                    n = 128,
                    p = "-",
                    q = /[^\x20-\x7E]/,
                    s = /[\x2E\u3002\uFF0E\uFF61]/g,
                    t = {
                        overflow: "Overflow: input needs wider integers to process",
                        "not-basic": "Illegal input >= 0x80 (not a basic code point)",
                        "invalid-input": "Invalid input"
                    },
                    u = c - e,
                    w = Math.floor,
                    x = String.fromCharCode;
                a.punycode = {
                    version: "1.4.1",
                    ucs2: {
                        decode: d
                    },
                    encode: l,
                    toASCII: function(a) {
                        return b(a, function(a) {
                            return q.test(a) ? "xn--" + l(a) : a
                        })
                    }
                }
            })(b);
            e.$_Tawk = e.$_Tawk || {};
            e.Tawk_API = e.Tawk_API || {};
            if ("object" === typeof e.$_Tawk_API)
                for (var T in e.$_Tawk_API) e.$_Tawk_API.hasOwnProperty(T) &&
                    (e.Tawk_API[T] = e.$_Tawk_API[T]);
            v.begin = function(a) {
                b.main.begin(a)
            };
            v.init = function(a) {
                b.main.init(a)
            };
            n = {
                onLoad: function() {},
                onStatusChange: function() {},
                onBeforeLoad: function() {},
                onChatMaximized: function() {},
                onChatMinimized: function() {},
                onChatHidden: function() {},
                onChatStarted: function() {},
                onChatEnded: function() {},
                onPrechatSubmit: function() {},
                onOfflineSubmit: function() {},
                onChatMessageVisitor: function() {},
                onChatMessageAgent: function() {},
                onChatMessageSystem: function() {},
                onAgentJoinChat: function() {},
                onAgentLeaveChat: function() {},
                onChatSatisfaction: function() {},
                onVisitorNameChanged: function() {},
                onFileUpload: function() {}
            };
            v.maximize = Tawk_API.maximize = function() {
                v.ready && b.sessionHandler.notifyWindowState("max")
            };
            v.minimize = Tawk_API.minimize = function() {
                v.ready && b.sessionHandler.notifyWindowState("min")
            };
            v.toggle = Tawk_API.toggle = function() {
                v.ready && b.viewHandler.toggleWidget()
            };
            v.popup = Tawk_API.popup = function() {
                v.ready && b.viewHandler.popoutWidget()
            };
            v.getWindowType = Tawk_API.getWindowType = function() {
                if (v.ready) return f.isEmbedded ?
                    "embed" : f.isPopup ? "popup" : "inline"
            };
            v.showWidget = Tawk_API.showWidget = function() {
                v.ready && b.viewHandler.showWidget()
            };
            v.hideWidget = Tawk_API.hideWidget = function() {
                v.ready && b.viewHandler.hideWidget()
            };
            v.toggleVisibility = Tawk_API.toggleVisibility = function() {
                v.ready && b.viewHandler.toggleVisibility()
            };
            v.getStatus = Tawk_API.getStatus = function() {
                if (v.ready) return t.pageStatus()
            };
            v.isChatMaximized = Tawk_API.isChatMaximized = function() {
                if (v.ready) return "max" === t.chatWindowState()
            };
            v.isChatMinimized = Tawk_API.isChatMinimized =
                function() {
                    if (v.ready) return "min" === t.chatWindowState()
                };
            v.isChatHidden = Tawk_API.isChatHidden = function() {
                if (v.ready) return b.viewHandler.isWidgetHidden()
            };
            v.isChatOngoing = Tawk_API.isChatOngoing = function() {
                if (v.ready) return b.chatHandler.isChatOngoing()
            };
            v.isVisitorEngaged = Tawk_API.isVisitorEngaged = function() {
                if (v.ready) return b.chatHandler.isVisitorEngaged()
            };
            v.endChat = Tawk_API.endChat = function() {
                v.ready && b.chatHandler.triggerEndChat()
            };
            v.setForeignKey = Tawk_API.setForeignKey = function(a, h) {
                b.sessionHandler.setForeignKey(a,
                    h)
            };
            v.setConversion = Tawk_API.setConversion = function(a, h) {
                b.sessionHandler.setConversionId(a, h)
            };
            v.addEvent = Tawk_API.addEvent = function(a, h, d) {
                b.sessionHandler.addEvent(a, h, d)
            };
            v.setAttributes = Tawk_API.setAttributes = function(a, h) {
                b.sessionHandler.setAttributes(a, !0, h)
            };
            v.addTags = Tawk_API.addTags = function(a, h) {
                b.sessionHandler.addTags(a, h)
            };
            v.removeTags = Tawk_API.removeTags = function(a, h) {
                b.sessionHandler.removeTags(a, h)
            };
            var K = "",
                H = 0,
                N = !1,
                X = !1,
                R = !1,
                F = null,
                A = null,
                Z, aa, Na, ka, ca, la = !0,
                f = {
                    widgetId: "default",
                    isPopup: !1,
                    isEmbedded: !1,
                    soundOn: x.observable(!0),
                    showAgentBar: !0,
                    showWaitTime: !0,
                    showPreChatForm: !1,
                    showOfflineForm: !0,
                    hideWidget: !1,
                    hideWidgetOnLoad: !1,
                    hideWidgetOnOffline: !1,
                    greetings: {},
                    prechatOptions: {},
                    headerBgColor: null,
                    headerTxtColor: null,
                    whiteLabel: x.observable(),
                    mobileWidget: x.observable("round"),
                    desktopWidget: x.observable("full"),
                    chatBubble: x.observable(),
                    chatPosition: x.observable("br"),
                    maximizedDimensions: x.observable({
                        width: 0,
                        height: 0
                    }),
                    minimizedDimensions: x.observable({
                        width: 0,
                        height: 0,
                        position: "br"
                    }),
                    onClickAction: "max",
                    widgetVersion: 0,
                    locale: "en",
                    schedule: null,
                    scheduleTimezone: null,
                    isTopPositioned: function() {
                        return "tr" === this.chatPosition() || "tl" === this.chatPosition()
                    },
                    isBottomPositioned: function() {
                        return "br" === this.chatPosition() || "bl" === this.chatPosition()
                    },
                    isCenterPositioned: function() {
                        return "cr" === this.chatPosition() || "cl" === this.chatPosition()
                    },
                    isRightPositioned: function() {
                        return "cr" === this.chatPosition() || "tr" === this.chatPosition() || "br" === this.chatPosition()
                    },
                    isLeftPositioned: function() {
                        return "cl" ===
                            this.chatPosition() || "tl" === this.chatPosition() || "bl" === this.chatPosition()
                    },
                    isDesktopRectangle: function() {
                        return "min" !== this.desktopWidget()
                    },
                    agentTextBgColor: null,
                    agentTextColor: null,
                    visitorTextBgColor: null,
                    visitorTextColor: null,
                    topCorner: null,
                    bottomCorner: null,
                    maxStyle: x.observable(),
                    minStyle: x.observable(),
                    mobMaxStyle: x.observable(),
                    mobMinStyle: x.observable(),
                    isRTL: x.observable(!1),
                    webRTCSettings: x.observable(),
                    brandingRedirect: x.observable()
                },
                E = {
                    uuid: null,
                    uuidVer: 0,
                    visitorId: "",
                    name: x.observable(),
                    displayName: x.observable(),
                    email: x.observable(),
                    transcriptEmail: "",
                    uuids: []
                },
                I = {
                    pageId: null,
                    tawkId: "",
                    pageName: x.observable(),
                    isStable: !0
                },
                y = {
                    chatSynced: !1,
                    chatBuffer: [],
                    chatVersion: 0,
                    chatDepartment: "any",
                    agents: {},
                    agentProfiles: {},
                    profiles: {},
                    rating: x.observable(0),
                    chatHistory: [],
                    chatOrder: 0,
                    chatEndVersion: 1
                },
                t = {
                    transferKey: "",
                    sessionKey: "",
                    transferedSession: !1,
                    currentVersion: 574,
                    criticalVersion: 0,
                    serverVersion: 0,
                    agentImgUrl: "https://s3.amazonaws.com/tawk-to-pi",
                    visitorAppServer: "https://va.tawk.to",
                    visitorSocketServer: "",
                    chatWindowState: x.observable("min"),
                    pageStatus: x.observable(),
                    pageStatusVersion: 0,
                    prechatFormSubmitted: !1,
                    waitTime: 6E4,
                    chatBubbleClosed: x.observable(!1),
                    restarted: !1,
                    departments: []
                },
                ab = {
                    chat_sound: "https://static-v.tawk.to/a-v3-39/audio/chat_sound.mp3"
                },
                bb = {
                    chat_sound: "https://static-v.tawk.to/a-v3-39/audio/chat_sound.ogg"
                },
                B = {
                    chat_sound: "https://static-v.tawk.to/a-v3-39/audio/chat_sound.wav"
                },
                ya = {
                    chat_sound: "https://static-v.tawk.to/a-v3-39/audio/chat_sound.aac"
                };
            (function() {
                var a = !1,
                    b = /xyz/.test(function() {
                        xyz
                    }) ? /\b_super\b/ : /.*/;
                this.TawkClass = function() {};
                TawkClass.extend = function(d) {
                    function l() {
                        !a && this.init && this.init.apply(this, arguments)
                    }
                    var r = this.prototype;
                    a = !0;
                    var c = new this;
                    a = !1;
                    for (var e in d) c[e] = "function" === typeof d[e] && "function" === typeof r[e] && b.test(d[e]) ? function(a, b) {
                        return function() {
                            var h = this._super;
                            this._super = r[a];
                            var d = b.apply(this, arguments);
                            this._super = h;
                            return d
                        }
                    }(e, d[e]) : d[e];
                    l.prototype = c;
                    l.prototype.constructor = l;
                    l.extend = arguments.callee;
                    return l
                }
            })();
            var z = function() {
                this.br = "<br/>";
                this.regAlphaNumeric = /^[a-z0-9\-]{1,50}$/i;
                this.regNameMach = /^V[0-9]{16}$/;
                this.regTrim = /^\s+|\s+$/g;
                this.regDate = /^(\d{4}|[+\-]\d{6})(?:-(\d{2})(?:-(\d{2}))?)?(?:T(\d{2}):(\d{2})(?::(\d{2})(?:\.(\d{3}))?)?(?:(Z)|([+\-])(\d{2})(?::(\d{2}))?)?)?$/;
                this.regEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/i;
                this.regSurvey = /\[option\](.*?)(<br\/>|$)/g;
                this.regSurveyQuestion = /^(.*?)\[option\]/g;
                this.regOption = /\[option\]/g;
                this.regBr = /<br\/>/;
                this.regMatchUrl = RegExp('(?:^(?:(?:[a-z]+:)?//)?(?:\\S+(?::\\S*)?@)?(?:localhost|(?:(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)(?:\\.(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)*(?:\\.(?:[a-z\\u00a1-\\uffff]{2,})))(?::\\d{2,5})?(?:[/?#][^\\s"]*)?$)', "i");
                this.regMatchIp = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?\/([a-zA-Z0-9!$&'()*+.=-_~:@\/\?#]+)+)\b/gi;
                this.regEmailMatch = /^((mailto:){0,1}[a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]+)$/;
                this.regLineBreaks = /(\r\n|\n|\r)/gm;
                this.decodedAmp = "&";
                this.decodedQuote = '"';
                this.decodedApos = "'";
                this.decodedLess = "<";
                this.decodedGreat = ">";
                this.encodedQuote = "&quot;";
                this.encodedApos = "&#39;";
                this.encodedLess = "&lt;";
                this.encodedGreat = "&gt;";
                this.encodedAmp = "&amp;";
                this.rtlLangTab = ["ar", "he", "fa"];
                this.decodedAmpRegex = RegExp(this.decodedAmp, "g");
                this.decodedQuoteRegex = RegExp(this.decodedQuote, "g");
                this.decodedAposRegex =
                    RegExp(this.decodedApos, "g");
                this.decodedLessRegex = RegExp(this.decodedLess, "g");
                this.decodedGreatRegex = RegExp(this.decodedGreat, "g");
                this.encodedQuoteRegex = RegExp(this.encodedQuote, "g");
                this.encodedAposRegex = RegExp(this.encodedApos, "g");
                this.encodedLessRegex = RegExp(this.encodedLess, "g");
                this.encodedGreatRegex = RegExp(this.encodedGreat, "g");
                this.encodedAmpRegex = RegExp(this.encodedAmp, "g");
                this.connectionUrl = "https://video.tawk.to"
            };
            z.prototype.createElement = function(a, b, d, l, r) {
                var c;
                a = a.createElement(b);
                d = d || {};
                for (c in d) a[c] = d[c];
                r && "iframe" !== b && (a.innerHTML = r);
                l && (a.style.cssText = l);
                return a
            };
            z.prototype.getDocument = function(a) {
                return a.contentWindow ? a.contentWindow.document : a.contentDocument ? a.contentDocument : a.document ? a.document : null
            };
            z.prototype.parseQueryString = function(a) {
                var b, d, l, r = {};
                l = (a ? a.replace(/(.*)\?/, "") : e.location.search.substring(1)).split("&");
                a = 0;
                for (b = l.length; a < b; a += 1) d = l[a].split("="), r[d[0]] = d[1];
                return r
            };
            z.prototype.createQueryString = function(a) {
                var b, d = [];
                for (b in a) a.hasOwnProperty(b) &&
                    d.push(encodeURIComponent(b) + "=" + encodeURIComponent(a[b]));
                return d.join("&")
            };
            z.prototype.getReloadedScript = function() {
                var a, b, d = document.getElementsByTagName("script"),
                    l = null;
                a = 0;
                for (b = d.length; a < b; a++) d[a].id && -1 !== d[a].id.indexOf("TawkScript") && (l = d[a]);
                return l
            };
            z.prototype.parseApi = function() {
                var a = Tawk_API;
                "function" === typeof a.onBeforeLoad && (n.onBeforeLoad = function() {
                    "function" === typeof a.onBeforeLoad && (a.onBeforeLoad(), delete a.onBeforeLoad)
                });
                "function" === typeof a.onLoad && (n.onLoad = function() {
                    "function" ===
                    typeof a.onLoad && (a.onLoad(), delete a.onLoad)
                });
                "function" === typeof a.onStatusChange && (n.onStatusChange = function(b) {
                    try {
                        a.onStatusChange(b)
                    } catch (d) {}
                });
                "function" === typeof a.onChatMaximized && (n.onChatMaximized = function() {
                    try {
                        a.onChatMaximized()
                    } catch (b) {}
                });
                "function" === typeof a.onChatMinimized && (n.onChatMinimized = function() {
                    try {
                        a.onChatMinimized()
                    } catch (b) {}
                });
                "function" === typeof a.onChatHidden && (n.onChatHidden = function() {
                    try {
                        a.onChatHidden()
                    } catch (b) {}
                });
                "function" === typeof a.onChatStarted && (n.onChatStarted =
                    function() {
                        try {
                            a.onChatStarted()
                        } catch (b) {}
                    });
                "function" === typeof a.onChatEnded && (n.onChatEnded = function() {
                    try {
                        a.onChatEnded()
                    } catch (b) {}
                });
                "function" === typeof a.onPrechatSubmit && (n.onPrechatSubmit = function(b) {
                    try {
                        a.onPrechatSubmit(b)
                    } catch (d) {}
                });
                "function" === typeof a.onOfflineSubmit && (n.onOfflineSubmit = function(b) {
                    try {
                        a.onOfflineSubmit(b)
                    } catch (d) {}
                });
                "function" === typeof a.onChatMessageVisitor && (n.onChatMessageVisitor = function(b) {
                    try {
                        a.onChatMessageVisitor(b)
                    } catch (d) {}
                });
                "function" === typeof a.onChatMessageAgent &&
                    (n.onChatMessageAgent = function(b) {
                        try {
                            a.onChatMessageAgent(b)
                        } catch (d) {}
                    });
                "function" === typeof a.onChatMessageSystem && (n.onChatMessageSystem = function(b) {
                    try {
                        a.onChatMessageSystem(b)
                    } catch (d) {}
                });
                "function" === typeof a.onAgentJoinChat && (n.onAgentJoinChat = function(b) {
                    try {
                        a.onAgentJoinChat(b)
                    } catch (d) {}
                });
                "function" === typeof a.onAgentLeaveChat && (n.onAgentLeaveChat = function(b) {
                    try {
                        a.onAgentLeaveChat(b)
                    } catch (d) {}
                });
                "function" === typeof a.onChatSatisfaction && (n.onChatSatisfaction = function(b) {
                    try {
                        a.onChatSatisfaction(b)
                    } catch (d) {}
                });
                "function" === typeof a.onVisitorNameChanged && (n.onVisitorNameChanged = function(b) {
                    try {
                        a.onVisitorNameChanged(b)
                    } catch (d) {}
                });
                "function" === typeof a.onFileUpload && (n.onFileUpload = function(b) {
                    try {
                        a.onFileUpload(b)
                    } catch (d) {}
                });
                n.disableSound = !!a.disableSound;
                n.embedded = a.embedded || null;
                n.profileName = a.profileName || null;
                n.visitor = a.visitor || null;
                n.disableMobileBackHistory = !!a.disableMobileBackHistory
            };
            z.prototype.trim = function(a) {
                return this.isString(a) ? String.prototype.trim ? a.trim().toString() : a.replace(this.regTrim,
                    "") : null
            };
            z.prototype.isString = function(a) {
                return void 0 === a || "string" !== typeof a ? !1 : !0
            };
            z.prototype.isEmail = function(a) {
                return this.regEmail.test(a)
            };
            z.prototype.isArray = Array.isArray || function(a) {
                return "[object Array]" === Object.prototype.toString.call(a)
            };
            z.prototype.parseVisitorName = function(a) {
                return this.isGeneratedName(a) ? b.languageParser.translate("chat", "defaultName") : a
            };
            z.prototype.generateRandomString = function(a) {
                var b, d = [];
                a = a || 6;
                for (b = 0; b < a; b++) d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".charAt(Math.floor(62 *
                    Math.random())));
                return d.join("")
            };
            z.prototype.computedStyle = function(a, b) {
                var d;
                if (!a || !b) return null;
                if (a.currentStyle) d = a.currentStyle[b];
                else try {
                    d = getComputedStyle(a, null).getPropertyValue(b)
                } catch (l) {
                    d = "none"
                }
                "width" === b && "auto" === d && (d = a.clientWidth);
                return "" + d
            };
            z.prototype.parseChatTime = function(a) {
                var b = this.getDateFromUTC(a);
                a = b.getHours();
                b = b.getMinutes();
                10 > a && (a = "0" + a);
                10 > b && (b = "0" + b);
                return a + ":" + b
            };
            z.prototype.getDateFromUTC = function(a) {
                if (a instanceof Date) return a;
                a = this.regDate.exec(a);
                return new Date(Date.UTC(a[1], a[2] - 1, a[3], a[4], a[5], a[6], a[7]))
            };
            z.prototype.rawEncode = function(a) {
                return a.replace(this.decodedAmpRegex, this.encodedAmp).replace(this.decodedQuoteRegex, this.encodedQuote).replace(this.decodedAposRegex, this.encodedApos).replace(this.decodedLessRegex, this.encodedLess).replace(this.decodedGreatRegex, this.encodedGreat)
            };
            z.prototype.rawDecode = function(a) {
                return a.replace(this.encodedQuoteRegex, this.decodedQuote).replace(this.encodedAposRegex, this.decodedApos).replace(this.encodedLessRegex,
                    this.decodedLess).replace(this.encodedGreatRegex, this.decodedGreat).replace(this.encodedAmpRegex, this.decodedAmp)
            };
            z.prototype.getMilliseconds = function(a) {
                a instanceof Date || (a = this.regDate.exec(a), a = new Date(Date.UTC(a[1], a[2] - 1, a[3], a[4], a[5], a[6], a[7])));
                return a.getTime()
            };
            z.prototype.capitalize = function(a) {
                return a.charAt(0).toUpperCase() + a.slice(1).toLowerCase()
            };
            z.prototype.getDepartmentStatus = function(a) {
                var b, d, l = t.departments,
                    r = "",
                    c = !0,
                    e = "";
                if ("any" === a) return {
                    status: "",
                    isOnline: !0,
                    name: ""
                };
                b = 0;
                for (d = l.length; b < d; b++)
                    if (l[b].did === a) {
                        c = "online" === l[b].st;
                        r = l[b].st;
                        e = l[b].n;
                        break
                    }
                return {
                    status: r,
                    isOnline: c,
                    name: e
                }
            };
            z.prototype.getElementsByClassName = function(a, b) {
                var d, l, r, c;
                if (a.getElementsByClassName) return a.getElementsByClassName(b);
                r = a.getElementsByTagName("*");
                c = [];
                d = 0;
                for (l = r.length; d < l; d++) - 1 !== r[d].className.indexOf(b) && c.push(r[d]);
                return c
            };
            z.prototype.insertStaticIframe = function(a) {
                var b = document.createElement("iframe");
                b.style.display = "none";
                b.src = a;
                document.body && document.body.appendChild(b)
            };
            z.prototype.insertScript = function(a, b, d) {
                var l = document.getElementsByTagName("script")[0],
                    r = document.createElement("script");
                r.async = !0;
                r.src = a;
                r.charset = "UTF-8";
                r.setAttribute("crossorigin", "*");
                b && (r.id = b);
                d ? l.parentNode.insertBefore(r, l) : l.parentNode.appendChild(r)
            };
            z.prototype.isPlaceholderSupported = function() {
                return "placeholder" in document.createElement("input")
            };
            z.prototype.togglePlaceholderText = function(a, h, d) {
                b.eventHandler.listen(a, "focus", function(a) {
                    this.value === h && (this.value = "")
                }, d + "inputfocus");
                b.eventHandler.listen(a, "blur", function() {
                    "" === this.value && (this.value = h)
                }, d + "inputblur")
            };
            z.prototype.redraw = function(a) {
                var b = a.style.display;
                a.style.display = "none";
                a.style.display = b
            };
            z.prototype.isTouchDevice = function() {
                try {
                    return document.createEvent("TouchEvent"), !0
                } catch (a) {
                    return !1
                }
            };
            z.prototype.shadeColor = function(a, b) {
                var d = "#",
                    l, r;
                a = String(a).replace(/[^0-9a-f]/gi, "");
                6 > a.length && (a = a.charAt(0) + a.charAt(0) + a.charAt(1) + a.charAt(1) + a.charAt(2) + a.charAt(2));
                b = b || 0;
                for (r = 0; 6 > r; r += 2) l = parseInt(a[r] +
                    "" + a[r + 1], 16), l = Math.round(Math.min(Math.max(0, l + l * b), 255)).toString(16), d += ("00" + l).substring(l.length);
                return d
            };
            z.prototype.getContrast = function(a) {
                a = a.replace("#", "");
                6 > a.length && (a = a.charAt(0) + a.charAt(0) + a.charAt(1) + a.charAt(1) + a.charAt(2) + a.charAt(2));
                return 8388607.5 < parseInt(a, 16) ? "white" : "black"
            };
            z.prototype.getElementsByTagName = function(a, b) {
                for (var d = [], l = a.getElementsByTagName(b), r = 0; r < l.length; r++) d.push(l[r]);
                return d
            };
            z.prototype.chatElementInView = function(a) {
                var h = b.viewHandler.chatContainer.getElementById("chatContainer");
                return a.offsetTop >= h.scrollTop && a.offsetTop <= h.scrollTop + h.offsetHeight ? !0 : !1
            };
            z.prototype.formatFileSize = function(a) {
                var b = "Bytes KB MB GB TB PB EB ZB YB".split(" ");
                a = parseInt(a, 10);
                if (!a) return "0Bytes";
                for (var d = 1; d < b.length; d++)
                    if (a < Math.pow(1024, d)) return Math.round(100 * (a / Math.pow(1024, d - 1))) / 100 + b[d - 1];
                return a
            };
            z.prototype.isFileInputSupported = function() {
                if (w.userAgent.match(/(Android (1.0|1.1|1.5|1.6|2.0|2.1))|(Windows Phone (OS 7|8.0))|(XBLWP)|(ZuneWP)|(w(eb)?OSBrowser)|(webOS)|(Kindle\/(1.0|2.0|2.5|3.0))/)) return !1;
                var a = document.createElement("input");
                a.type = "file";
                return !a.disabled
            };
            z.prototype.escapeTemplateReplacement = function(a, b) {
                for (var d = 0; d < b.length; d++) {
                    var l = b[d],
                        r = l.textReplace;
                    "string" === typeof r && (r = r.replace(/\$/g, "$$$"));
                    a = a.replace(l.placeholder, r)
                }
                return a
            };
            z.prototype.getGenericStyle = function(a) {
                return ["outline                     : " + (a.outline ? a.outline : "none") + " !important; ", "visibility                  : " + (a.visibility ? a.visibility : "visible") + " !important; ", "resize                      : " +
                    (a.resize ? a.resize : "none") + " !important; ", "box-shadow                  : " + (a.boxshadow ? a.boxshadow : "none") + " !important; ", "overflow                    : " + (a.overflow ? a.overflow : "visible") + " !important; ", "background                  : " + (a.background ? a.background : "none") + " !important; ", "opacity                     : " + (a.opacity ? a.opacity : "1") + " !important; ", "filter                      : alpha(opacity=" + (a.opacity ? 100 * a.opacity : "100") + ") !important; ", "-ms-filter                  : progid:DXImageTransform.Microsoft.Alpha(Opacity" +
                    (a.opacity ? a.opacity : "1") + ") !important; ", "-moz-opacity                : " + (a.opacity ? a.opacity : "1") + " !important; ", "-khtml-opacity              : " + (a.opacity ? a.opacity : "1") + " !important; ", "top                         : " + (a.top ? a.top : "auto") + " !important; ", "right                       : " + (a.right ? a.right : "auto") + " !important; ", "bottom                      : " + (a.bottom ? a.bottom : "auto") + " !important; ", "left                        : " + (a.left ? a.left : "auto") + " !important; ", "position                    : " +
                    (a.position ? a.position : "absolute") + " !important; ", "border                      : " + (a.border ? a.border : "0") + " !important; ", "min-height                  : " + (a.minheight ? a.minheight : "auto") + " !important; ", "min-width                   : " + (a.minwidth ? a.minwidth : "auto") + " !important; ", "max-height                  : " + (a.maxheight ? a.maxheight : "none") + " !important; ", "max-width                   : " + (a.maxwidth ? a.maxwidth : "none") + " !important; ", "padding                     : " + (a.padding ? a.padding :
                        "0") + " !important; ", "margin                      : " + (a.margin ? a.margin : "0") + " !important; ", "-moz-transition-property    : " + (a.transition ? a.transition : "none") + " !important; ", "-webkit-transition-property : " + (a.transition ? a.transition : "none") + " !important; ", "-o-transition-property      : " + (a.transition ? a.transition : "none") + " !important; ", "transition-property         : " + (a.transition ? a.transition : "none") + " !important; ", "transform                   : " + (a.transform ? a.transform : "none") + " !important; ",
                    "-webkit-transform           : " + (a.transform ? a.transform : "none") + " !important; ", "-ms-transform               : " + (a.transform ? a.transform : "none") + " !important; ", "width                       : " + (a.width ? a.width : "auto") + " !important; ", "height                      : " + (a.height ? a.height : "auto") + " !important; ", "display                     : " + (a.display ? a.display : "block") + " !important; ", "z-index                     : " + (a.zindex ? a.zindex : "none") + " !important; ", "background-color            : " +
                    (a.backgroundcolor ? a.backgroundcolor : "transparent") + " !important; ", "cursor                      : " + (a.cursor ? a.cursor : "auto") + " !important; ", "float                       : " + (a["float"] ? a["float"] : "none") + " !important; "
                ].join("")
            };
            z.prototype.isGeneratedName = function(a) {
                return this.regNameMach.test(a)
            };
            z.prototype.getRotateStyling = function(a, b) {
                var d = "rotate(" + a + "deg) translateZ(0px)";
                return {
                    transform: d,
                    "-moz-transform": d,
                    "-webkit-transform": d,
                    "-o-transform": d,
                    "-ms-transform": d,
                    "transform-origin": b,
                    "-moz-transform-origin": b,
                    "-webkit-transform-origin": b,
                    "-o-transform-origin": b,
                    "-ms-transform-origin": b
                }
            };
            z.prototype.blurElements = function(a) {
                for (var b = 0; b < a.length; b++) a[b].blur()
            };
            z.prototype.transformGreetings = function(a) {
                for (var b = /\[([^)]+)\]/, d = /\(([^)]+)\)/, l = /\[[^\]\(\)]+\]\((\bhttp:\/\/\b|\bhttps:\/\/\b|\bmailto:\b){1}[^\]\(\)]+\)/i, r = "_blank", c = a, e, f; null !== (e = l.exec(c)) && (f = b.exec(e[0]), e = d.exec(e[0]), e[0].indexOf("(mailto:") || (r = "_top"), c = c.replace(f[0] + e[0], '<a target="' + r + '" href="' +
                        e[1] + '" class="link">' + f[1] + "</a>"), c !== a););
                return c
            };
            z.prototype.checkWhiteLabelLink = function(a, h) {
                var d = 1E4 * Math.random(),
                    l = this,
                    r = b.viewHandler.chatContainer,
                    c, e;
                this.checkWhiteLabelRef = setTimeout(function() {
                    if (h.label !== a.innerHTML || h.url && h.url !== a.href || !h.url && a.href || h.id !== a.id || !r.getElementById(a.id) || h.cssText !== a.style.cssText) l.whiteLabelUnexpectedIssueLogged || (b.loggingHandler.logIncident("White label element has changed unexpectedly", {
                        pageId: E.uuid
                    }), l.whiteLabelUnexpectedIssueLogged = !0), a.id = h.id, a.innerHTML = h.label, a.style.cssText = h.cssText, null !== h.url ? a.href = h.url : a.removeAttribute("href"), !r.getElementById(h.parentElem.id) && h.grandParentName && (c = r.getElementById(h.grandParentName), h.siblingName && (e = r.getElementById(h.siblingName)) && c && c.insertBefore(h.parentElem, e)), c = r.getElementById(h.parentElem.id), !r.getElementById(a.id) && c && c.appendChild(a);
                    l.checkWhiteLabelLink(a, h)
                }, d)
            };
            z.prototype.applyWhiteLabelSettings = function(a, b) {
                clearTimeout(this.checkWhiteLabelRef);
                null ===
                    b.url ? a.removeAttribute("href") : (a.href = b.url, b.url = a.href);
                f.whiteLabel() && null !== b.url && (a.target = "_blank");
                a.innerHTML = b.label;
                a.style.cssText += ";color:" + b.textColor + " !important";
                b.cssText = a.style.cssText;
                this.checkWhiteLabelLink(a, b)
            };
            z.prototype.transformLabel = function(a) {
                var b;
                (b = a.match(/_[^_]+_/gi)) && 0 < b.length && b.forEach(function(b) {
                    var h;
                    h = b.indexOf("_");
                    var r = b.lastIndexOf("_");
                    h = b.substring(0, h) + "<i>" + b.substring(h + 1, r) + "</i>" + b.substring(r + 1, b.length);
                    a = a.replace(b, h)
                });
                (b = a.match(/\*[^*]+\*/gi)) &&
                0 < b.length && b.forEach(function(b) {
                    var h;
                    h = b.indexOf("*");
                    var r = b.lastIndexOf("*");
                    h = b.substring(0, h) + "<b>" + b.substring(h + 1, r) + "</b>" + b.substring(r + 1, b.length);
                    a = a.replace(b, h)
                });
                return a
            };
            z.prototype.getRandomName = function() {
                return "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz".charAt(52 * Math.random()) + this.generateRandomString() + "-" + (new Date).getTime()
            };
            z.prototype.insertRandomTagsBeforeAndAfter = function(a, b, d) {
                var l = Math.floor(3 * Math.random() + 1),
                    r;
                for (r = 0; r < l; r++) {
                    var c = document.createElement(d);
                    c.id = m.getRandomName();
                    b.insertBefore(c, a)
                }
                l = Math.floor(3 * Math.random() + 1);
                for (r = 0; r < l; r++) a = document.createElement(d), a.id = m.getRandomName(), b.appendChild(a)
            };
            z.prototype.getWebRTCToken = function(a, h, d) {
                var l = this;
                a = {
                    video: a,
                    screen: h
                };
                d = d || function() {};
                this.webrtcWin = e.open("", "");
                b.socketManager.sendToConnector("getWebRTCToken", a, function(a, b) {
                    if (a) return l.webrtcWin.close(), d(!0, a);
                    l.webrtcWin.location.href = l.connectionUrl + "/v2/call?token=" + b.data.token;
                    d()
                })
            };
            z.prototype.rejectCall = function(a,
                h) {
                var d = {
                    callId: a
                };
                h = h || function() {};
                b.socketManager.sendToConnector("declineCall", d, function(a, b) {
                    h()
                })
            };
            z.prototype.disconnectWebRTC = function() {
                this.webrtcWin && this.webrtcWin.close()
            };
            z.prototype.isDescendent = function(a, b) {
                for (var d = b.parentNode; null !== d;) {
                    if (d === a) return !0;
                    d = d.parentNode || null
                }
                return !1
            };
            z.prototype.getTimeDifference = function(a, h) {
                var d, l;
                d = new Date(a);
                endTimeFmt = new Date(h);
                diff = endTimeFmt.getTime() - d.getTime();
                36E5 <= diff ? (d = Math.round(diff / 36E5), l = "hours") : 6E4 <= diff ? (d = Math.round(diff /
                    6E4), l = "minutes") : (d = Math.round(diff / 1E3), l = "seconds");
                return b.languageParser.translate("chat", l, {
                    num: d
                })
            };
            Inheritance_Manager = {
                extend: function(a, b) {
                    function d() {}
                    d.prototype = b.prototype;
                    a.prototype = new d;
                    a.prototype.constructor = a;
                    a.prototype.parent = b.prototype;
                    a.baseConstructor = b;
                    a.superClass = b.prototype
                }
            };
            var m = new z;
            "undefined" !== typeof module && module.exports && (module.exports.Utils = z);
            var Ha = [{
                    string: w.userAgent,
                    subString: "Edge",
                    identity: "explorer",
                    versionSearch: "Edge"
                }, {
                    string: w.userAgent,
                    subString: "Trident/7.0",
                    identity: "explorer",
                    versionSearch: "rv"
                }, {
                    string: w.userAgent,
                    subString: "(Opera|OPR)",
                    identity: "opera",
                    versionSearch: "Version"
                }, {
                    string: w.userAgent,
                    subString: "Chrome",
                    identity: "chrome",
                    versionSearch: "Chrome"
                }, {
                    string: w.userAgent,
                    subString: "Mobile Safari",
                    identity: "android",
                    versionSearch: "Version"
                }, {
                    string: w.userAgent,
                    subString: "Firefox",
                    identity: "firefox",
                    versionSearch: "Firefox"
                }, {
                    string: w.userAgent,
                    subString: "MSIE",
                    identity: "explorer",
                    versionSearch: "MSIE"
                }, {
                    string: w.userAgent,
                    subString: "IEMobile",
                    identity: "explorer",
                    versionSearch: "IEMobile"
                }, {
                    string: w.userAgent,
                    subString: "Safari",
                    identity: "safari",
                    versionSearch: "Version"
                }, {
                    string: w.userAgent,
                    subString: "Gecko",
                    identity: "mozilla",
                    versionSearch: "rv"
                }],
                Pa = [{
                        string: w.userAgent,
                        subString: "Windows Phone",
                        identity: "windows_phone"
                    }, {
                        string: w.platform,
                        subString: "Win",
                        identity: "windows"
                    }, {
                        string: w.platform,
                        subString: "Mac",
                        identity: "mac"
                    }, {
                        string: w.userAgent,
                        subString: "iPhone",
                        identity: "iphone"
                    }, {
                        string: w.userAgent,
                        subString: "Android",
                        identity: "android"
                    },
                    {
                        string: w.platform,
                        subString: "Linux",
                        identity: "linux"
                    }, {
                        string: w.userAgent,
                        subString: "iPad",
                        identity: "ipad"
                    }
                ],
                Ia = {
                    google: "q",
                    yahoo: "p",
                    baidu: "wd",
                    yandex: "text",
                    bing: "q",
                    soso: "w",
                    ask: "q",
                    aol: "q",
                    sogou: "query",
                    mywebsearch: "searchfor",
                    youdao: "q",
                    lycos: "q",
                    infospace: "q",
                    blekko: "q",
                    info: "q",
                    dogpile: "q",
                    duckduckgo: "q",
                    webcrawler: "q"
                },
                ga = {
                    src: "about:blank",
                    border: "0",
                    cellspacing: "0",
                    frameBorder: "0",
                    scrolling: "no",
                    horizontalscrolling: "no",
                    verticalscrolling: "no",
                    allowTransparency: "true",
                    title: "chat widget"
                },
                Xa = {
                    nokia: [/(NokiaBrowser)\/(\d+)\.(\d+).(\d+)\.(\d+)/, /^(Nokia)/, /(NokiaBrowser)\/(\d+)\.(\d+).(\d+)/, /(NokiaBrowser)\/(\d+)\.(\d+)/, /(BrowserNG)\/(\d+)\.(\d+).(\d+)/, /(Series60)\/5\.0/, /(Series60)\/(\d+)\.(\d+)/, /(S40OviBrowser)\/(\d+)\.(\d+)\.(\d+)\.(\d+)/, /(Nokia)[EN]?(\d+)/],
                    blackberry: [/(BB10);/, /(PlayBook).+RIM Tablet OS (\d+)\.(\d+)\.(\d+)/, /(Black[bB]erry).+Version\/(\d+)\.(\d+)\.(\d+)/, /(Black[bB]erry)\s?(\d+)/],
                    chrome: [/(CrMo)\/(\d+)\.(\d+)\.(\d+)\.(\d+)/, /(CriOS)\/(\d+)\.(\d+)\.(\d+)\.(\d+)/,
                        /(Android).*(Chrome)\/(\d+)\.(\d+)\.(\d+)\.(\d+) (Mobile)?/
                    ],
                    ie: [/(IEMobile)[ \/](\d+)\.(\d+)/],
                    firefox: [/Mobile.*(Firefox)\/(\d+)\.(\d+)/, /Tablet.*(Firefox)\/(\d+)\.(\d+)/],
                    operamini: [/(Opera Mini)(?:\/att)?\/(\d+)\.(\d+)/],
                    opera: [/(Opera Tablet).*Version\/(\d+)\.(\d+)(?:\.(\d+))?/, /(?:Mobile Safari).*(OPR)\/(\d+)\.(\d+)\.(\d+)'/, /(Opera)\/.+Opera Mobi.+Version\/(\d+)\.(\d+)/, /(Opera)\/(\d+)\.(\d+).+Opera Mobi/, /Opera Mobi.+(Opera)\/(\d+)\.(\d+)/, /Opera Mobi/, /(Opera)\/9.80.*Version\/(\d+)\.(\d+)(?:\.(\d+))?/],
                    safari: [/(iPod|iPhone|iPad);.*CPU.*OS (\d+)(?:_\d+)?_(\d+).*Mobile/],
                    uc: [/(UCBrowser)[ \/](\d+)\.(\d+)\.(\d+)/, /(UC Browser)[ \/](\d+)\.(\d+)\.(\d+)/, /(UC Browser|UCBrowser|UCWEB)(\d+)\.(\d+)\.(\d+)/],
                    "android2.3": [/(Android) 2\.3(?:[.\-]([a-z0-9]+))?/],
                    android2: [/(Android) 2\.(\d+)(?:[.\-]([a-z0-9]+))?/],
                    android: [/Android[\- ][\d]+\.[\d]+; [A-Za-z]{2}\-[A-Za-z]{0,2}; WOWMobile (.+) Build/, /Android[\- ][\d]+\.[\d]+\-update1; [A-Za-z]{2}\-[A-Za-z]{0,2}; (.+) Build/, /Android[\- ][\d]+\.[\d]+\.[\d]+; [A-Za-z]{2}\-[A-Za-z]{0,2}; (.+) Build/,
                        /Android[\- ][\d]+\.[\d]+\.[\d]+;[A-Za-z]{2}\-[A-Za-z]{0,2};(.+) Build/, /Android[\- ][\d]+\.[\d]+; [A-Za-z]{2}\-[A-Za-z]{0,2}; (.+) Build/, /Android[\- ][\d]+\.[\d]+\.[\d]+; (.+) Build/, /Android[\- ][\d]+\.[\d]+; (.+) Build/
                    ]
                },
                ha = function() {
                    this.versionSearchString = this.browserObj = null;
                    this.init()
                };
            ha.prototype.init = function() {
                var a = this.getBrowserVersion();
                A = this.getMobileBrowser();
                H = a.version;
                K = a.vendor;
                Z = this.hasHtmlAudio("mp3");
                aa = this.hasHtmlAudio("ogg");
                Na = this.hasHtmlAudio("wav");
                ka = this.hasHtmlAudio("aac");
                ca = void 0;
                ca = Z || aa || Na || ka;
                la = m.isPlaceholderSupported();
                "explorer" === K && (N = !0, 6 === H ? X = !0 : 8 <= H && 9 > H && (R = !0))
            };
            ha.prototype.getBrowserVersion = function() {
                return this.browserObj ? this.browserObj : this.browserObj = {
                    vendor: this.searchString(Ha) || "other",
                    version: this.searchVersion(w.userAgent) || this.searchVersion(w.appVersion) || "other",
                    os: this.searchString(Pa) || "other",
                    plugins: this.getPlugins()
                }
            };
            ha.prototype.getPlugins = function() {
                var a, b, d = [];
                a = 0;
                for (b = w.plugins.length; a < b; a++) w.plugins[a].name && d.push(w.plugins[a].name);
                return d
            };
            ha.prototype.searchString = function(a) {
                var b, d, l;
                for (b = 0; b < a.length; b++)
                    if (d = a[b].string, l = RegExp(a[b].subString), this.versionSearchString = a[b].versionSearch || a[b].identity, l.test(d)) return a[b].identity
            };
            ha.prototype.searchVersion = function(a) {
                var b = a.indexOf(this.versionSearchString);
                if (-1 !== b) return parseFloat(a.substring(b + this.versionSearchString.length + 1))
            };
            ha.prototype.getMobileBrowser = function() {
                for (var a = !1, b = w.userAgent, d = Object.keys(Xa), l = 0; !a && l < d.length;) {
                    for (var r = d[l], c = 0; c <
                        Xa[r].length; c++)
                        if (b.match(Xa[r][c])) {
                            a = r;
                            break
                        }
                    l++
                }
                return a
            };
            ha.prototype.getReferredSearchEngine = function() {
                var a, b, d = "";
                if (document.referrer && (b = this.getHostname(document.referrer)))
                    for (a in b = b.toLowerCase(), Ia)
                        if (0 <= b.indexOf(a)) {
                            queryString = this.getQuerystring(document.referrer, Ia[a]);
                            "blekko" === a && "" === queryString && (queryString = this.getQuerystring(document.referrer.replace("/ws/", "/?q="), "q"));
                            d = a;
                            break
                        }
                return d
            };
            ha.prototype.getQuerystring = function(a, b) {
                var d;
                b = b.replace(/[\[]/, "\\[").replace(/[\]]/,
                    "\\]");
                d = RegExp("[\\?&]" + b + "=([^&#]*)").exec(a);
                return null === d || !m.isArray(d) || 2 > d.length ? null : d[1] ? unescape(d[1].replace(/\+/g, " ")) : null
            };
            ha.prototype.getHostname = function(a) {
                a = a.match(/^(?:f|ht)tp(?:s)?:\/\/([^/]+)/im);
                return null === a || !m.isArray(a) || 2 > a.length ? null : a[1] ? a[1].toString() : null
            };
            ha.prototype.hasHtmlAudio = function(a) {
                var b = document.createElement("audio");
                try {
                    if (!b.canPlayType || "no" === b.canPlayType("audio/" + a) || "" === b.canPlayType("audio/" + a)) return !1
                } catch (d) {
                    return !1
                }
                return !0
            };
            b.browserData =
                new ha;
            var Ea = function() {
                this.unloading = !1
            };
            Ea.prototype.logPerformance = function(a) {
                this.postForm("log-performance/v3", $_TAWK_JSON.stringify(a))
            };
            Ea.prototype.logIncident = function(a, b) {
                var d = c.getBrowserData();
                d.visitorId = E.visitorId || "";
                d.message = a;
                d.data = b;
                this.log("warning", d)
            };
            Ea.prototype.log = function(a, b) {
                var d;
                b && a && (b.uiVersion = "v3", b.buildVersion = "574", b.buildCommit = "f3e355d245c86c34ebc34d5d4c8b2a44b17b97da", d = {
                    type: a,
                    data: b
                }, this.postForm("log", $_TAWK_JSON.stringify(d)))
            };
            Ea.prototype.postForm =
                function(a, b) {
                    var d, l, r;
                    l = document.createElement("iframe");
                    if (!document.body) return !1;
                    l.src = "about:blank";
                    l.style.cssText = ";display:none !important;";
                    l.title = "chat widget logging";
                    document.body.appendChild(l);
                    try {
                        d = m.getDocument(l)
                    } catch (c) {
                        return !1
                    }
                    N && (d.open(), d.writeln('<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body><iframe name="form-receiver" id="form-receiver"></iframe></body></html>'), d.close());
                    l = d.createElement("form");
                    l.method = "POST";
                    l.action = "https://va.tawk.to/" + a;
                    l.enctype = "application/x-www-form-urlencoded";
                    l.acceptCharset = "UTF-8";
                    r = d.createElement("input");
                    r.type = "text";
                    r.name = "logData";
                    r.value = b;
                    l.appendChild(r);
                    N && (l.target = "form-receiver");
                    d.body.appendChild(l);
                    l.submit();
                    l.parentNode.removeChild(l)
                };
            e.onbeforeunload = function() {
                this.unloading = !0
            };
            e.onunload = function() {
                this.unloading = !0
            };
            var Ya = function() {
                this.originalErrorHandlerFn = e.onerror
            };
            Ya.prototype.getBrowserData = function() {
                var a = b.browserData.getBrowserVersion();
                return {
                    site: e.location.href,
                    browser: a.vendor || "",
                    version: a.version || "",
                    os: a.os || "",
                    plugins: a.plugins || ""
                }
            };
            Ya.prototype.handleError = function(a, h, d, l, r) {
                var c;
                if (!(h && d || "Script error." !== a && "Script error" !== a) || "string" !== typeof h || -1 === h.indexOf("tawk.to") && -1 === h.indexOf("tawk.js")) return !1;
                c = this.getBrowserData();
                c.visitorId = E.visitorId || "";
                c.message = a || "";
                c.file = h || "";
                c.line = d || "";
                c.column = l || "";
                c.stack = r ? JSON.stringify(r) : "";
                c.stack = c.stack.replace(m.regLineBreaks, "");
                b.loggingHandler.log("error",
                    c);
                return !0
            };
            c = new Ya;
            e.onerror = function() {
                var a;
                if (!c) return !1;
                a = c.handleError.apply(this, arguments);
                return "function" === typeof c.originalErrorHandlerFn ? c.originalErrorHandlerFn.apply(this, arguments) : a
            };
            var qa = function() {
                this.events = {}
            };
            qa.prototype.attachEvent = function(a, b, d) {
                var l = this,
                    r = function(b) {
                        d.call(a, l.getEvent(b))
                    };
                a.attachEvent("on" + b, r);
                return r
            };
            qa.prototype.listen = function(a, b, d, l) {
                var r;
                if (l) {
                    this.events[l] && (r = this.events[l], this.events[l] = null, this.removeEventHandler(r.element, r.eventName,
                        r.eventListener));
                    if (a.addEventListener) a.addEventListener(b, d, !1);
                    else if (document.attachEvent) d = this.attachEvent(a, b, d);
                    else return null;
                    this.events[l] = {
                        element: a,
                        eventName: b,
                        eventListener: d
                    };
                    return d
                }
            };
            qa.prototype.cancelEvent = function(a) {
                document.attachEvent && (a = this.getEvent(a));
                a.preventDefault ? a.preventDefault() : a.returnValue = !1
            };
            qa.prototype.removeEventHandler = function(a, b, d) {
                document.removeEventListener ? a.removeEventListener(b, d, !1) : a.detachEvent("on" + b, d)
            };
            qa.prototype.getEvent = function(a) {
                var b =
                    a || e.event;
                if (!b)
                    for (a = this.getEvent.caller; a && (!(b = a.arguments[0]) || Event != b.constructor);) a = a.caller;
                return b
            };
            qa.prototype.clearEvents = function() {
                var a = this;
                Object.keys(this.events).forEach(function(b) {
                    b = a.events[b];
                    a.removeEventHandler(b.element, b.eventName, b.eventListener)
                });
                this.events = {}
            };
            qa.prototype.getTargetElement = function(a) {
                document.attachEvent && (a = this.getEvent(a));
                a = a.target || a.srcElement;
                3 === a.nodeType && (a = a.parentNode);
                return a
            };
            var ib = {
                    keypressTimer: 0,
                    previousValue: 0,
                    initElement: function(a,
                        h) {
                        var d = this;
                        this.previousValue = "";
                        b.eventHandler.listen(a, "focus", function(b) {
                            d.startWatching(b, a, h)
                        }, a.id + "focus");
                        b.eventHandler.listen(a, "blur", function(a) {
                            d.stopWatching()
                        }, a.id + "blur");
                        b.eventHandler.listen(a, "keyup", function(b) {
                            d.detectChange(b, a, h)
                        }, a.id + "keyup")
                    },
                    startWatching: function(a, b, d) {
                        var l = this;
                        this.stopWatching();
                        this.keypressTimer = setInterval(function() {
                            l.detectChange(a, b, d)
                        }, 100)
                    },
                    stopWatching: function() {
                        0 != this.keypressTimer && (clearInterval(this.keypressTimer), this.keypressTimer =
                            0)
                    },
                    detectChange: function(a, b, d) {
                        b = b.value || "";
                        if (this.previousValue === b) return !1;
                        d(a, b);
                        this.previousValue = b
                    }
                },
                xa = function() {
                    this.hasCORS = ("undefined" !== typeof XMLHttpRequest || "undefined" !== typeof XDomainRequest) && function() {
                        var a;
                        if ("undefined" !== typeof XDomainRequest) return "https" === location.protocol;
                        try {
                            a = new XMLHttpRequest
                        } catch (b) {
                            return !1
                        }
                        return void 0 !== a.withCredentials
                    }()
                };
            xa.prototype.jsonpLoad = function(a, b, d) {
                var l = document.getElementsByTagName("script")[0],
                    r = document.createElement("script"),
                    c = !1;
                b = b || {};
                b = "?" + m.createQueryString(b);
                r.src = a + b;
                r.async = !0;
                r.charset = "UTF-8";
                r.onload = r.onreadystatechange = function() {
                    c || this.readyState && "loaded" !== this.readyState && "complete" !== this.readyState || (c = !0, r.onload = r.onreadystatechange = null, r && r.parentNode && r.parentNode.removeChild(r))
                };
                r.onerror = function() {
                    d(null, $_TAWK_JSON.stringify({
                        error: "SERVER_DOWN"
                    }))
                };
                l.parentNode.insertBefore(r, l);
                return {
                    type: "jsonp",
                    req: r
                }
            };
            xa.prototype.jsonp = function(a, b, d) {
                var l;
                b = b || {};
                b = "?" + m.createQueryString(b);
                l =
                    "$_Tawk_json" + ++this.counter;
                d && (e[l] = function(a) {
                    d(a);
                    try {
                        delete e[l]
                    } catch (b) {}
                    e[l] = null
                });
                return this.jsonpLoad(a + b + (d ? "callback=" + l : ""))
            };
            xa.prototype.xhrRequest = function(a, b, d) {
                var l = this.getRequestObject();
                if (!l) return this.jsonpLoad(a, b, d);
                b = b || {};
                l.onerror = d;
                l.open("POST", a, !0);
                l.withCredentials = !0;
                l.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                l.onreadystatechange = function() {
                    l.passed || 4 !== l.readyState || (l.passed = !0, d(null, l.responseText))
                };
                l.send(m.createQueryString(b));
                return {
                    type: "xhr",
                    req: l
                }
            };
            xa.prototype.getRequestObject = function() {
                if ("undefined" !== typeof XMLHttpRequest) return new XMLHttpRequest;
                if ("undefined" !== typeof XDomainRequest) return new XDomainRequest
            };
            xa.prototype.abort = function(a) {
                a && ("xhr" === a.type ? a.req.abort() : (a = a.req) && a.parentNode && a.parentNode.removeChild(a))
            };
            var Fa = new xa,
                Y = function() {
                    this.isCookieEnabled = this.checkCookieEnabled();
                    this.alphaNumericReg = /[^0-9a-zA-Z]/g;
                    this.hasSessionStorage = this.isCookieEnabled && !!e.sessionStorage;
                    this.clearOldCookies("TawkCookie")
                };
            Y.prototype.setHTTPCookie = function(a, b, d, l) {
                var r = "";
                d || (d = new Date, d.setTime(d.getTime() + 15552E6), r = "; expires=" + d.toGMTString());
                document.cookie = a + "=" + b + r + "; path=/" + (l ? ";domain=" + l : "")
            };
            Y.prototype.getHTTPCookie = function(a) {
                var b, d, l = [],
                    r = a + "=",
                    c = document.cookie.split(";");
                a = 0;
                for (b = c.length; a < b; a++) {
                    for (d = c[a];
                        " " === d.charAt(0);) d = d.substring(1, d.length);
                    0 === d.indexOf(r) && l.push(d.substring(r.length, d.length))
                }
                return l
            };
            Y.prototype.setSessionStorage = function(a, b) {
                if (this.hasSessionStorage && sessionStorage.setItem) try {
                    sessionStorage.setItem(a,
                        b)
                } catch (d) {}
            };
            Y.prototype.getSessionStorage = function(a) {
                return this.hasSessionStorage && sessionStorage.getItem ? sessionStorage.getItem(a) : null
            };
            Y.prototype.setWindowName = function(a) {
                e.name && 0 !== e.name.indexOf("TawkWindowName-") || (e.name = "TawkWindowName-" + a)
            };
            Y.prototype.getWindowName = function() {
                var a, b, d;
                if (!e.name) return null;
                if (0 !== e.name.indexOf("TawkWindowName-")) {
                    d = e.name.substring(0, 5);
                    b = d.length;
                    if (6 > b)
                        for (a = 0, b = 6 - b; a < b; a++) d += "0";
                    return d.replace(/[^0-9a-zA-Z]/g, "0").replace(" ", "0")
                }
                return e.name.substring(15,
                    21)
            };
            Y.prototype.handleWindowId = function() {
                var a = this.getSessionStorage("TawkWindowName");
                "null" === a && (a = null);
                a || this.hasSessionStorage || (a = this.getWindowName());
                "null" === a && (a = null);
                a || (a = m.generateRandomString(), this.hasSessionStorage ? this.setSessionStorage("TawkWindowName", a) : this.setWindowName(a));
                F = a
            };
            Y.prototype.storeUUID = function() {
                var a = this;
                t.transferedSession || E.uuids && 0 < E.uuids.length && E.uuids.forEach(function(b) {
                    var d = (b.isExact ? "e::" : "p::") + b.domain + "::" + b.uuid + "::" + E.uuidVer;
                    a.isCookieEnabled &&
                        a.setHTTPCookie("__tawkuuid", d, !1, b.domain)
                });
                this.handleWindowId();
                this.storeSessionInformation()
            };
            Y.prototype.getSessionInformation = function() {
                var a;
                this.sessionInformation && (a = this.sessionInformation);
                a || (a = this.getHTTPCookie("Tawk_" + I.pageId)[0]);
                return this.parseSessionInformation(a)
            };
            Y.prototype.storeSessionInformation = function(a) {
                a ? a = t.visitorSocketServer + "::" + b.viewHandler.indicator.unansweredMessages : (a = this.getSessionInformation()[1] || 0, b.main.previousSessionKey !== t.sessionKey && (a = 0), a =
                    t.visitorSocketServer + "::" + a);
                this.setHTTPCookie("Tawk_" + I.pageId, a, !1);
                this.sessionInformation = a
            };
            Y.prototype.parseSessionInformation = function(a) {
                var b = [];
                a && (b = a.split("::"), 1 >= b.length && (b = a.split("||")));
                return b
            };
            Y.prototype.clearOldCookies = function(a) {
                document.cookie = a + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;"
            };
            Y.prototype.checkCookieEnabled = function() {
                var a = w.cookieEnabled ? !0 : !1;
                "undefined" != typeof w.cookieEnabled || a || (document.cookie = "testcookie", a = -1 != document.cookie.indexOf("testcookie") ?
                    !0 : !1);
                return a
            };
            Y.prototype.getStoredUUID = function() {
                var a;
                this.isCookieEnabled && (a = this.getHTTPCookie("__tawkuuid"));
                return a && 0 < a.length ? a : []
            };
            var U = new Y,
                jb = function(a) {
                    var b;
                    "symbian" === A ? this.play = function() {} : ("safari" === A ? (b = document.createElement("audio"), b.src = a, b.style.cssText = "position: absolute; position: absolute; width: 0px; height: 0px; top: -10000px; left: -10000px;", document.body.appendChild(b)) : b = new Audio(a), b.addEventListener("timeupdate", function() {
                        0.2 <= b.currentTime && b.pause()
                    }, !1), b.load(), this.soundEl = b, this.play = function() {
                        try {
                            b.currentTime = 0, b.autoplay = !0, b.load(), b.play()
                        } catch (a) {}
                    })
                },
                kb = function(a, b, d) {
                    this.sourcePath = a;
                    this.buffer = null;
                    this.name = b;
                    this.audioPlayer = d;
                    this.source = null;
                    this.volume = 1;
                    this.play = function() {
                        if (this.buffer) {
                            var a = this.audioPlayer.audioContext.createGain();
                            a.gain.value = this.volume;
                            this.source = this.audioPlayer.audioContext.createBufferSource();
                            this.source.buffer = this.buffer;
                            this.source.connect(a);
                            a.connect(this.audioPlayer.audioContext.destination);
                            this.source.start(0)
                        }
                    };
                    this.loadBuffer = function() {
                        var a = new XMLHttpRequest,
                            b = this;
                        a.open("GET", b.sourcePath, !0);
                        a.responseType = "arraybuffer";
                        a.onload = function() {
                            b.audioPlayer.audioContext.decodeAudioData(a.response, function(a) {
                                a && (b.buffer = a, b.audioPlayer.isReadyForInit || (b.audioPlayer.eventUsedForInit = b.name, b.audioPlayer.isReadyForInit = !0))
                            }, function(a) {
                                throw Error(a);
                            })
                        };
                        a.onerror = function(a) {
                            throw Error("BufferLoader: XHR error for " + b.sourcePath);
                        };
                        a.send()
                    };
                    this.loadBuffer()
                },
                Za = function() {
                    this.sounds = {};
                    this.audioContext = null;
                    this.isReadyForInit = !1;
                    this.eventUsedForInit = null
                };
            Za.prototype.initAudioPlayer = function() {
                var a, h = {};
                if (ca) {
                    this.audioContext || (/Firefox/.test(w.userAgent) || "undefined" === typeof AudioBuffer || void 0 === e.AudioContext && void 0 === e.webkitAudioContext) || (e.AudioContext = e.AudioContext || e.webkitAudioContext, this.audioContext = new AudioContext);
                    aa ? h = bb : Z && !/Edge/.test(w.userAgent) ? h = ab : ka ? h = ya : Na && (h = B);
                    for (a in h) this.sounds[a] = this.audioContext ? new kb(h[a], a, this) : new jb(h[a]);
                    if (this.audioContext) {
                        var d = this,
                            l;
                        initSourceFunction = function(a) {
                            d.isReadyForInit && (d.eventUsedForInit && !d.touchstartInited) && (d.sounds[d.eventUsedForInit].volume = 0, d.sounds[d.eventUsedForInit].play(), d.sounds[d.eventUsedForInit].source.stop(0), d.sounds[d.eventUsedForInit].volume = 1, e && "function" === typeof e.removeEventListener && e.removeEventListener("touchstart", initSourceFunction, !1), l && "function" === typeof l.removeEventListener && l.removeEventListener("touchstart", initSourceFunction, !1), d.touchstartInited = !0)
                        };
                        if (A && "ontouchstart" in e) {
                            if (a = f.isPopup ? b.viewHandler.chatContainer.elementReferrer : b.viewHandler.maximizedWidget.container.elementReferrer) l = a.contentWindow ? a.contentWindow : a.contentDocument.defaultView, l.addEventListener("touchstart", initSourceFunction, !1);
                            e.addEventListener("touchstart", initSourceFunction, !1)
                        }
                    }
                }
            };
            Za.prototype.play = function(a) {
                n.disableSound || f.soundOn() && this.sounds[a] && this.sounds[a].play()
            };
            var lb = {
                    init: function() {
                        this.iframeContainerName = m.getRandomName();
                        b.languageParser.language =
                            v.language;
                        this.message = '<div id="formContainer" style="display: block;"><div id="greetingsOverlay"><div id="greetingsWrapper"><div id="greetingsContainer">' + b.languageParser.translate("overlay", "cookiesOff") + "</div></div></div></div>";
                        A ? this.showMobileFix() : (this.showDesktopFix(), this.iframeContainer.restyle("display", "block"))
                    },
                    showDesktopFix: function() {
                        var a, h;
                        a = m.getContrast(f.headerTxtColor);
                        var d = this;
                        this.iframeContainer = new D(d.iframeContainerName, m.getGenericStyle({
                            display: "none",
                            right: "10px",
                            bottom: "0px",
                            zindex: "2000000000",
                            position: "fixed"
                        }));
                        if (f.isEmbedded) {
                            var l, r = "100%",
                                c = "100%";
                            l = document.getElementById(n.embedded);
                            if (!l) return;
                            l.appendChild(this.iframeContainer.buildView());
                            if (f.maximizedDimensions().width || f.maximizedDimensions().height) r = f.maximizedDimensions().width + "px", c = f.maximizedDimensions().height + "px";
                            else {
                                h = parseInt(m.computedStyle(l, "width").replace("px", ""), 10);
                                l = parseInt(m.computedStyle(l, "height").replace("px", ""), 10);
                                if (!h || 280 > h) r = "280px";
                                if (!l || 330 > l) c = "330px"
                            }
                            this.iframeContainer.restyle("width",
                                r);
                            this.iframeContainer.restyle("height", c)
                        } else document.body.appendChild(this.iframeContainer.buildView());
                        if (f.isEmbedded || f.isPopup) h = '<div id="tawkchat-maximized-wrapper"><div id="borderWrapper"></div><div id="headerBoxWrapper"><div class="theme-background-color theme-text-color" id="headerBox"><div id="shortMessage">' + b.languageParser.translate("chat", "live_chat") + "</div></div></div>" + this.message + '<div id="bottomContainer"><a id="tawktoLink" href="https://www.tawk.to/?utm_source=magento&utm_medium=link&utm_campaign=signup" target="_blank"><span class="thin">Powered by</span> tawk.to</a></div>',
                            f.isPopup ? (a = document.getElementsByTagName("head")[0], r = document.createDocumentFragment(), c = m.createElement(document, "style", {
                                    type: "text/css"
                                }), l = document.createTextNode(b.ResetStyle + "" + b.MaximizedStyle + f.maxStyle()), c.styleSheet ? c.styleSheet.cssText = l.nodeValue : c.appendChild(l), r.appendChild(c), a.appendChild(r), this.maximizedContainer = new D(m.getRandomName(), m.getGenericStyle({
                                    width: "100%",
                                    height: "100%"
                                })), document.getElementById(this.iframeContainerName).appendChild(this.maximizedContainer.buildView()),
                                this.maximizedContainer.elementReferrer.innerHTML = h, this.iframeContainer.restyle("width", "100%"), this.iframeContainer.restyle("height", "100%")) : (this.maximizedContainer = new S(m.getRandomName(), m.getGenericStyle({
                                    zindex: "999999",
                                    height: "100%",
                                    width: "100%",
                                    position: "static"
                                }), ga, "iframe"), document.getElementById(this.iframeContainerName).appendChild(this.maximizedContainer.buildView()), this.maximizedContainer.buildIframe(b.MaximizedStyle + f.maxStyle()), this.maximizedContainer.documentRef.body.classList.add("noCookies"),
                                this.maximizedContainer.documentRef.body.classList.add(a), this.maximizedContainer.documentRef.body.classList.add("embed"), this.maximizedContainer.documentRef.body.innerHTML = h, this.iframeContainer.restyle("position", "static"), n.onLoad());
                        else if (this.maximizedContainer = new S(m.getRandomName(), m.getGenericStyle({
                                zindex: "999999",
                                display: "none",
                                height: "400px",
                                width: "320px",
                                position: "static"
                            }), ga, "iframe"), this.minimizedContainer = new S(m.getRandomName(), m.getGenericStyle({
                                zindex: "1000001",
                                bottom: "0px",
                                display: "none",
                                height: "40px",
                                width: "320px",
                                maxheight: "40px",
                                maxwidth: "320px",
                                right: "0px",
                                minheight: "40px",
                                minwidth: "320px",
                                position: "fixed"
                            }), ga, "iframe"), this.minimizedContainer.template = u["tawkchat-minified-iframe-element-rectangle"], h = '<div id="tawkchat-maximized-wrapper"><div id="borderWrapper"></div><div id="headerBoxWrapper"><div class="theme-background-color theme-text-color" id="headerBox"><div id="shortMessage">' + b.languageParser.translate("chat", "live_chat") + '</div><div id="headerBoxControlsContainer"><div id="minimizeChat" class="icon"></div></div></div></div>' +
                            this.message + '<div id="bottomContainer"><a id="tawktoLink" href="https://www.tawk.to/?utm_source=magento&utm_medium=link&utm_campaign=signup" target="_blank"><span class="thin">Powered by</span> tawk.to</a></div>', document.getElementById(this.iframeContainerName).appendChild(this.minimizedContainer.buildView()), document.getElementById(this.iframeContainerName).appendChild(this.maximizedContainer.buildView()), this.minimizedContainer.buildIframe(b.MinifiedStyle + f.minStyle()), this.maximizedContainer.buildIframe(b.MaximizedStyle +
                                f.maxStyle()), this.maximizedContainer.documentRef.body.classList.add("noCookies"), this.maximizedContainer.documentRef.body.classList.add(a), this.minimizedContainer.documentRef.body.classList.add("noCookies"), this.minimizedContainer.documentRef.body.classList.add(a), this.maximizedContainer.documentRef.body.innerHTML = h, this.maximizedContainer.getElementById("formContainer").style.display = "block", this.minimizedContainer.restyle("display", "block"), this.minimizedContainer.attachUserEventListener("click",
                                function(a) {
                                    d.minimizedContainer.restyle("display", "none");
                                    d.maximizedContainer.restyle("display", "block");
                                    b.eventHandler.cancelEvent(a)
                                }, "tawkchat-minified-wrapper", "minifiedclick"), this.maximizedContainer.attachUserEventListener("click", function(a) {
                                d.minimizedContainer.restyle("display", "block");
                                d.maximizedContainer.restyle("display", "none");
                                b.eventHandler.cancelEvent(a)
                            }, "minimizeChat", "minlinkclick"), a = this.minimizedContainer.getElementById("short-message")) a.innerHTML = b.languageParser.translate("chat",
                            "live_chat")
                    },
                    showMobileFix: function() {
                        if (f.isPopup) {
                            var a = document.getElementsByTagName("head")[0],
                                h = document.createDocumentFragment(),
                                d = m.createElement(document, "style", {
                                    type: "text/css"
                                }),
                                l = document.createTextNode(b.ResetStyle + "" + b.MaximizedMobileStyle);
                            d.styleSheet ? d.styleSheet.cssText = l.nodeValue : d.appendChild(l);
                            h.appendChild(d);
                            a.appendChild(h);
                            this.iframeContainer = new D(self.iframeContainerName, m.getGenericStyle({
                                display: "block",
                                right: "0px",
                                bottom: "0px",
                                zindex: "2000000000",
                                position: "fixed"
                            }));
                            this.iframeContainer.restyle("width", "100%");
                            this.iframeContainer.restyle("height", "100%");
                            document.getElementById(this.iframeContainerName).innerHTML = '<div id="mainContainer" style="display: block">' + this.message + "</div>"
                        } else if (b.main.initRenderer(A), b.formHandler = new P, b.viewHandler.begin(), b.viewHandler.show(), a = b.viewHandler.chatContainer.getElementById("chatPanel")) a.innerHTML = '<div id="greetingsWrapper">' + b.languageParser.translate("overlay", "cookiesOff") + "</div>"
                    }
                },
                $a = function() {
                    var a = this;
                    this.uploads = {};
                    b.eventEmitter.on("fileUploadProgress", function(a) {
                        b.viewHandler.updateFileProgress(a)
                    });
                    b.eventEmitter.on("fileUploadFinished", function(h) {
                        a.uploads[h.handle] && (delete a.uploads[h.handle], b.viewHandler.fileUploaded(h.handle), b.chatHandler.sendFileMessage(h))
                    });
                    b.eventEmitter.on("fileUploadError", function(h) {
                        var d = a.uploads[h.handle];
                        d && b.viewHandler.handleUploadError(null, d, h.handle)
                    })
                };
            $a.prototype.getUploadHandler = function(a) {
                var b = "https://upload.tawk.to/upload/handle?_t=" + (new Date).getTime(),
                    d;
                "XDomainRequest" in e && null !== e.XDomainRequest ? (d = new XDomainRequest, d.onload = function() {
                    var b = new ActiveXObject("Microsoft.XMLDOM"),
                        d = $.parseJSON(this.responseText);
                    b.async = !1;
                    if (null === d || "undefined" === typeof d) d = $.parseJSON(this.firstChild.textContent);
                    a(d)
                }) : (d = new XMLHttpRequest, d.onreadystatechange = function() {
                    4 === this.readyState && (200 <= this.status && 400 > this.status ? a(JSON.parse(this.responseText)) : a(!0))
                });
                d.open("GET", b);
                d.onerror = function() {
                    a(!0)
                };
                d.send();
                d = null
            };
            $a.prototype.uploadFile =
                function(a, b, d, l, r) {
                    var c, e = "https://upload.tawk.to/upload/visitor-chat/visitor?handle=" + a + "&visitorSessionId=" + t.sessionKey;
                    this.uploads[a] = d;
                    if (l) {
                        var f;
                        a += "-iframe";
                        try {
                            f = document.createElement("iframe")
                        } catch (g) {
                            return r(!0)
                        }
                        f.setAttribute("src", "about:blank");
                        f.setAttribute("name", a);
                        f.setAttribute("id", a);
                        f.setAttribute("width", "0");
                        f.setAttribute("height", "0");
                        f.setAttribute("border", "0");
                        f.setAttribute("style", "width: 0; height: 0; border: none; display: none !important;");
                        b.setAttribute("target",
                            a);
                        b.setAttribute("action", e);
                        document.body.appendChild(f);
                        try {
                            c = m.getDocument(f)
                        } catch (k) {
                            return !1
                        }
                        "explorer" === K && (c.open(), c.writeln('<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body></body></html>'), c.close());
                        b.submit()
                    } else {
                        if (52428800 < b.size) return r(!0, "limit50");
                        if (A && 2097152 < b.size) return r(!0, "limit2");
                        c = new FormData;
                        c.append("upload", b, b.name || b.filename);
                        b = Fa.getRequestObject();
                        b.open("POST", e);
                        b.onload = function() {
                            return r($_TAWK_JSON.parse(this.responseText))
                        };
                        b.onerror = function() {
                            return r(!0)
                        };
                        b.send(c)
                    }
                };
            var Oa, Q, Ga, za = 0,
                cb = {
                    people: {
                        header: ":smiley:",
                        content: ":grinning: :grin: :joy: :rofl: :smiley: :smile: :sweat_smile: :laughing: :wink: :blush: :yum: :sunglasses: :heart_eyes: :kissing_heart: :kissing: :kissing_smiling_eyes: :kissing_closed_eyes: :relaxed: :slight_smile: :hugging: :thinking: :neutral_face: :expressionless: :no_mouth: :rolling_eyes: :smirk: :persevere: :disappointed_relieved: :open_mouth: :zipper_mouth: :hushed: :sleepy: :tired_face: :sleeping: :relieved: :nerd: :stuck_out_tongue: :stuck_out_tongue_winking_eye: :stuck_out_tongue_closed_eyes: :drooling_face: :unamused: :sweat: :pensive: :confused: :upside_down: :money_mouth: :astonished: :frowning2: :slight_frown: :confounded: :disappointed: :worried: :triumph: :cry: :sob: :frowning: :anguished: :fearful: :weary: :grimacing: :cold_sweat: :scream: :flushed: :dizzy_face: :rage: :angry: :innocent: :cowboy: :clown: :lying_face: :mask: :thermometer_face: :head_bandage: :nauseated_face: :sneezing_face: :smiling_imp: :imp: :japanese_ogre: :japanese_goblin: :skull: :ghost: :alien: :robot: :poop: :smiley_cat: :smile_cat: :joy_cat: :heart_eyes_cat: :smirk_cat: :kissing_cat: :scream_cat: :crying_cat_face: :pouting_cat: :boy: :boy_tone1: :boy_tone2: :boy_tone3: :boy_tone4: :boy_tone5: :girl: :girl_tone1: :girl_tone2: :girl_tone3: :girl_tone4: :girl_tone5: :man: :man_tone1: :man_tone2: :man_tone3: :man_tone4: :man_tone5: :woman: :woman_tone1: :woman_tone2: :woman_tone3: :woman_tone4: :woman_tone5: :older_man: :older_man_tone1: :older_man_tone2: :older_man_tone3: :older_man_tone4: :older_man_tone5: :older_woman: :older_woman_tone1: :older_woman_tone2: :older_woman_tone3: :older_woman_tone4: :older_woman_tone5: :baby: :baby_tone1: :baby_tone2: :baby_tone3: :baby_tone4: :baby_tone5: :angel: :angel_tone1: :angel_tone2: :angel_tone3: :angel_tone4: :angel_tone5: :cop: :cop_tone1: :cop_tone2: :cop_tone3: :cop_tone4: :cop_tone5: :spy: :spy_tone1: :spy_tone2: :spy_tone3: :spy_tone4: :spy_tone5: :guardsman: :guardsman_tone1: :guardsman_tone2: :guardsman_tone3: :guardsman_tone4: :guardsman_tone5: :construction_worker: :construction_worker_tone1: :construction_worker_tone2: :construction_worker_tone3: :construction_worker_tone4: :construction_worker_tone5: :man_with_turban: :man_with_turban_tone1: :man_with_turban_tone2: :man_with_turban_tone3: :man_with_turban_tone4: :man_with_turban_tone5: :person_with_blond_hair: :person_with_blond_hair_tone1: :person_with_blond_hair_tone2: :person_with_blond_hair_tone3: :person_with_blond_hair_tone4: :person_with_blond_hair_tone5: :santa: :santa_tone1: :santa_tone2: :santa_tone3: :santa_tone4: :santa_tone5: :mrs_claus: :mrs_claus_tone1: :mrs_claus_tone2: :mrs_claus_tone3: :mrs_claus_tone4: :mrs_claus_tone5: :princess: :princess_tone1: :princess_tone2: :princess_tone3: :princess_tone4: :princess_tone5: :prince: :prince_tone1: :prince_tone2: :prince_tone3: :prince_tone4: :prince_tone5: :bride_with_veil: :bride_with_veil_tone1: :bride_with_veil_tone2: :bride_with_veil_tone3: :bride_with_veil_tone4: :bride_with_veil_tone5: :man_in_tuxedo: :man_in_tuxedo_tone1: :man_in_tuxedo_tone2: :man_in_tuxedo_tone3: :man_in_tuxedo_tone4: :man_in_tuxedo_tone5: :pregnant_woman: :pregnant_woman_tone1: :pregnant_woman_tone2: :pregnant_woman_tone3: :pregnant_woman_tone4: :pregnant_woman_tone5: :man_with_gua_pi_mao: :man_with_gua_pi_mao_tone1: :man_with_gua_pi_mao_tone2: :man_with_gua_pi_mao_tone3: :man_with_gua_pi_mao_tone4: :man_with_gua_pi_mao_tone5: :person_frowning: :person_frowning_tone1: :person_frowning_tone2: :person_frowning_tone3: :person_frowning_tone4: :person_frowning_tone5: :person_with_pouting_face: :person_with_pouting_face_tone1: :person_with_pouting_face_tone2: :person_with_pouting_face_tone3: :person_with_pouting_face_tone4: :person_with_pouting_face_tone5: :no_good: :no_good_tone1: :no_good_tone2: :no_good_tone3: :no_good_tone4: :no_good_tone5: :ok_woman: :ok_woman_tone1: :ok_woman_tone2: :ok_woman_tone3: :ok_woman_tone4: :ok_woman_tone5: :information_desk_person: :information_desk_person_tone1: :information_desk_person_tone2: :information_desk_person_tone3: :information_desk_person_tone4: :information_desk_person_tone5: :raising_hand: :raising_hand_tone1: :raising_hand_tone2: :raising_hand_tone3: :raising_hand_tone4: :raising_hand_tone5: :bow: :bow_tone1: :bow_tone2: :bow_tone3: :bow_tone4: :bow_tone5: :face_palm: :face_palm_tone1: :face_palm_tone2: :face_palm_tone3: :face_palm_tone4: :face_palm_tone5: :shrug: :shrug_tone1: :shrug_tone2: :shrug_tone3: :shrug_tone4: :shrug_tone5: :massage: :massage_tone1: :massage_tone2: :massage_tone3: :massage_tone4: :massage_tone5: :haircut: :haircut_tone1: :haircut_tone2: :haircut_tone3: :haircut_tone4: :haircut_tone5: :walking: :walking_tone1: :walking_tone2: :walking_tone3: :walking_tone4: :walking_tone5: :runner: :runner_tone1: :runner_tone2: :runner_tone3: :runner_tone4: :runner_tone5: :dancer: :dancer_tone1: :dancer_tone2: :dancer_tone3: :dancer_tone4: :dancer_tone5: :man_dancing: :man_dancing_tone1: :man_dancing_tone2: :man_dancing_tone3: :man_dancing_tone4: :man_dancing_tone5: :dancers: :speaking_head: :bust_in_silhouette: :busts_in_silhouette: :couple: :two_men_holding_hands: :two_women_holding_hands: :couplekiss: :kiss_mm: :kiss_ww: :couple_with_heart: :couple_mm: :couple_ww: :family: :family_mwg: :family_mwgb: :family_mwbb: :family_mwgg: :family_mmb: :family_mmg: :family_mmgb: :family_mmbb: :family_mmgg: :family_wwb: :family_wwg: :family_wwgb: :family_wwbb: :family_wwgg: :muscle: :muscle_tone1: :muscle_tone2: :muscle_tone3: :muscle_tone4: :muscle_tone5: :selfie: :selfie_tone1: :selfie_tone2: :selfie_tone3: :selfie_tone4: :selfie_tone5: :point_left: :point_left_tone1: :point_left_tone2: :point_left_tone3: :point_left_tone4: :point_left_tone5: :point_right: :point_right_tone1: :point_right_tone2: :point_right_tone3: :point_right_tone4: :point_right_tone5: :point_up: :point_up_tone1: :point_up_tone2: :point_up_tone3: :point_up_tone4: :point_up_tone5: :point_up_2: :point_up_2_tone1: :point_up_2_tone2: :point_up_2_tone3: :point_up_2_tone4: :point_up_2_tone5: :middle_finger: :middle_finger_tone1: :middle_finger_tone2: :middle_finger_tone3: :middle_finger_tone4: :middle_finger_tone5: :point_down: :point_down_tone1: :point_down_tone2: :point_down_tone3: :point_down_tone4: :point_down_tone5: :v: :v_tone1: :v_tone2: :v_tone3: :v_tone4: :v_tone5: :fingers_crossed: :fingers_crossed_tone1: :fingers_crossed_tone2: :fingers_crossed_tone3: :fingers_crossed_tone4: :fingers_crossed_tone5: :vulcan: :vulcan_tone1: :vulcan_tone2: :vulcan_tone3: :vulcan_tone4: :vulcan_tone5: :metal: :metal_tone1: :metal_tone2: :metal_tone3: :metal_tone4: :metal_tone5: :call_me: :call_me_tone1: :call_me_tone2: :call_me_tone3: :call_me_tone4: :call_me_tone5: :hand_splayed: :hand_splayed_tone1: :hand_splayed_tone2: :hand_splayed_tone3: :hand_splayed_tone4: :hand_splayed_tone5: :raised_hand: :raised_hand_tone1: :raised_hand_tone2: :raised_hand_tone3: :raised_hand_tone4: :raised_hand_tone5: :ok_hand: :ok_hand_tone1: :ok_hand_tone2: :ok_hand_tone3: :ok_hand_tone4: :ok_hand_tone5: :thumbsup: :thumbsup_tone1: :thumbsup_tone2: :thumbsup_tone3: :thumbsup_tone4: :thumbsup_tone5: :thumbsdown: :thumbsdown_tone1: :thumbsdown_tone2: :thumbsdown_tone3: :thumbsdown_tone4: :thumbsdown_tone5: :fist: :fist_tone1: :fist_tone2: :fist_tone3: :fist_tone4: :fist_tone5: :punch: :punch_tone1: :punch_tone2: :punch_tone3: :punch_tone4: :punch_tone5: :left_facing_fist: :left_facing_fist_tone1: :left_facing_fist_tone2: :left_facing_fist_tone3: :left_facing_fist_tone4: :left_facing_fist_tone5: :right_facing_fist: :right_facing_fist_tone1: :right_facing_fist_tone2: :right_facing_fist_tone3: :right_facing_fist_tone4: :right_facing_fist_tone5: :raised_back_of_hand: :raised_back_of_hand_tone1: :raised_back_of_hand_tone2: :raised_back_of_hand_tone3: :raised_back_of_hand_tone4: :raised_back_of_hand_tone5: :wave: :wave_tone1: :wave_tone2: :wave_tone3: :wave_tone4: :wave_tone5: :clap: :clap_tone1: :clap_tone2: :clap_tone3: :clap_tone4: :clap_tone5: :writing_hand: :writing_hand_tone1: :writing_hand_tone2: :writing_hand_tone3: :writing_hand_tone4: :writing_hand_tone5: :open_hands: :open_hands_tone1: :open_hands_tone2: :open_hands_tone3: :open_hands_tone4: :open_hands_tone5: :raised_hands: :raised_hands_tone1: :raised_hands_tone2: :raised_hands_tone3: :raised_hands_tone4: :raised_hands_tone5: :pray: :pray_tone1: :pray_tone2: :pray_tone3: :pray_tone4: :pray_tone5: :handshake: :handshake_tone1: :handshake_tone2: :handshake_tone3: :handshake_tone4: :handshake_tone5: :nail_care: :nail_care_tone1: :nail_care_tone2: :nail_care_tone3: :nail_care_tone4: :nail_care_tone5: :ear: :ear_tone1: :ear_tone2: :ear_tone3: :ear_tone4: :ear_tone5: :nose: :nose_tone1: :nose_tone2: :nose_tone3: :nose_tone4: :nose_tone5: :footprints: :eyes: :eye: :tongue: :lips: :kiss: :zzz: :eyeglasses: :dark_sunglasses: :necktie: :shirt: :jeans: :dress: :kimono: :bikini: :womans_clothes: :purse: :handbag: :pouch: :school_satchel: :mans_shoe: :athletic_shoe: :high_heel: :sandal: :boot: :crown: :womans_hat: :tophat: :mortar_board: :helmet_with_cross: :lipstick: :ring: :closed_umbrella: :briefcase:".split(" ")
                    },
                    nature: {
                        header: ":four_leaf_clover:",
                        content: ":see_no_evil: :hear_no_evil: :speak_no_evil: :sweat_drops: :dash: :monkey_face: :monkey: :gorilla: :dog: :dog2: :poodle: :wolf: :fox: :cat: :cat2: :lion_face: :tiger: :tiger2: :leopard: :horse: :racehorse: :deer: :unicorn: :cow: :ox: :water_buffalo: :cow2: :pig: :pig2: :boar: :pig_nose: :ram: :sheep: :goat: :dromedary_camel: :camel: :elephant: :rhino: :mouse: :mouse2: :rat: :hamster: :rabbit: :rabbit2: :chipmunk: :bat: :bear: :koala: :panda_face: :feet: :turkey: :chicken: :rooster: :hatching_chick: :baby_chick: :hatched_chick: :bird: :penguin: :dove: :eagle: :duck: :owl: :frog: :crocodile: :turtle: :lizard: :snake: :dragon_face: :dragon: :whale: :whale2: :dolphin: :fish: :tropical_fish: :blowfish: :shark: :octopus: :shell: :crab: :shrimp: :squid: :butterfly: :snail: :bug: :ant: :bee: :beetle: :spider: :spider_web: :scorpion: :bouquet: :cherry_blossom: :rosette: :rose: :wilted_rose: :hibiscus: :sunflower: :blossom: :tulip: :seedling: :evergreen_tree: :deciduous_tree: :palm_tree: :cactus: :ear_of_rice: :herb: :shamrock: :four_leaf_clover: :maple_leaf: :fallen_leaf: :leaves: :mushroom: :chestnut: :earth_africa: :earth_americas: :earth_asia: :new_moon: :waxing_crescent_moon: :first_quarter_moon: :waxing_gibbous_moon: :full_moon: :waning_gibbous_moon: :last_quarter_moon: :waning_crescent_moon: :crescent_moon: :new_moon_with_face: :first_quarter_moon_with_face: :last_quarter_moon_with_face: :sunny: :full_moon_with_face: :sun_with_face: :star: :star2: :cloud: :partly_sunny: :thunder_cloud_rain: :white_sun_small_cloud: :white_sun_cloud: :white_sun_rain_cloud: :cloud_rain: :cloud_snow: :cloud_lightning: :cloud_tornado: :fog: :wind_blowing_face: :umbrella2: :umbrella: :zap: :snowflake: :snowman2: :snowman: :comet: :fire: :droplet: :ocean: :jack_o_lantern: :christmas_tree: :sparkles: :tanabata_tree: :bamboo:".split(" ")
                    },
                    food: {
                        header: ":hamburger:",
                        content: ":grapes: :melon: :watermelon: :tangerine: :lemon: :banana: :pineapple: :apple: :green_apple: :pear: :peach: :cherries: :strawberry: :kiwi: :tomato: :avocado: :eggplant: :potato: :carrot: :corn: :hot_pepper: :cucumber: :peanuts: :bread: :croissant: :french_bread: :pancakes: :cheese: :meat_on_bone: :poultry_leg: :bacon: :hamburger: :fries: :pizza: :hotdog: :taco: :burrito: :stuffed_flatbread: :egg: :cooking: :shallow_pan_of_food: :stew: :salad: :popcorn: :bento: :rice_cracker: :rice_ball: :rice: :curry: :ramen: :spaghetti: :sweet_potato: :oden: :sushi: :fried_shrimp: :fish_cake: :dango: :icecream: :shaved_ice: :ice_cream: :doughnut: :cookie: :birthday: :cake: :chocolate_bar: :candy: :lollipop: :custard: :honey_pot: :baby_bottle: :milk: :coffee: :tea: :sake: :champagne: :wine_glass: :cocktail: :tropical_drink: :beer: :beers: :champagne_glass: :tumbler_glass: :fork_knife_plate: :fork_and_knife: :spoon:".split(" ")
                    },
                    objects: {
                        header: ":bulb:",
                        content: ":skull_crossbones: :love_letter: :bomb: :hole: :shopping_bags: :prayer_beads: :gem: :knife: :amphora: :map: :barber: :frame_photo: :bellhop: :door: :sleeping_accommodation: :bed: :couch: :toilet: :shower: :bathtub: :hourglass: :hourglass_flowing_sand: :watch: :alarm_clock: :stopwatch: :timer: :clock: :thermometer: :beach_umbrella: :balloon: :tada: :confetti_ball: :dolls: :flags: :wind_chime: :ribbon: :gift: :joystick: :postal_horn: :microphone2: :level_slider: :control_knobs: :radio: :iphone: :calling: :telephone: :telephone_receiver: :pager: :fax: :battery: :electric_plug: :computer: :desktop: :printer: :keyboard: :mouse_three_button: :trackball: :minidisc: :floppy_disk: :cd: :dvd: :movie_camera: :film_frames: :projector: :tv: :camera: :camera_with_flash: :video_camera: :vhs: :mag: :mag_right: :microscope: :telescope: :satellite: :candle: :bulb: :flashlight: :izakaya_lantern: :notebook_with_decorative_cover: :closed_book: :book: :green_book: :blue_book: :orange_book: :books: :notebook: :ledger: :page_with_curl: :scroll: :page_facing_up: :newspaper: :newspaper2: :bookmark_tabs: :bookmark: :label: :moneybag: :yen: :dollar: :euro: :pound: :money_with_wings: :credit_card: :envelope: :e-mail: :incoming_envelope: :envelope_with_arrow: :outbox_tray: :inbox_tray: :package: :mailbox: :mailbox_closed: :mailbox_with_mail: :mailbox_with_no_mail: :postbox: :ballot_box: :pencil2: :black_nib: :pen_fountain: :pen_ballpoint: :paintbrush: :crayon: :pencil: :file_folder: :open_file_folder: :dividers: :date: :calendar: :notepad_spiral: :calendar_spiral: :card_index: :chart_with_upwards_trend: :chart_with_downwards_trend: :bar_chart: :clipboard: :pushpin: :round_pushpin: :paperclip: :paperclips: :straight_ruler: :triangular_ruler: :scissors: :card_box: :file_cabinet: :wastebasket: :lock: :unlock: :lock_with_ink_pen: :closed_lock_with_key: :key: :key2: :hammer: :pick: :hammer_pick: :tools: :dagger: :crossed_swords: :gun: :shield: :wrench: :nut_and_bolt: :gear: :compression: :alembic: :scales: :link: :chains: :syringe: :pill: :smoking: :coffin: :urn: :moyai: :oil: :crystal_ball: :shopping_cart: :triangular_flag_on_post: :crossed_flags: :flag_black: :flag_white: :rainbow_flag:".split(" ")
                    },
                    activity: {
                        header: ":football:",
                        content: ":space_invader: :levitate: :fencer: :horse_racing: :horse_racing_tone1: :horse_racing_tone2: :horse_racing_tone3: :horse_racing_tone4: :horse_racing_tone5: :skier: :snowboarder: :golfer: :surfer: :surfer_tone1: :surfer_tone2: :surfer_tone3: :surfer_tone4: :surfer_tone5: :rowboat: :rowboat_tone1: :rowboat_tone2: :rowboat_tone3: :rowboat_tone4: :rowboat_tone5: :swimmer: :swimmer_tone1: :swimmer_tone2: :swimmer_tone3: :swimmer_tone4: :swimmer_tone5: :basketball_player: :basketball_player_tone1: :basketball_player_tone2: :basketball_player_tone3: :basketball_player_tone4: :basketball_player_tone5: :lifter: :lifter_tone1: :lifter_tone2: :lifter_tone3: :lifter_tone4: :lifter_tone5: :bicyclist: :bicyclist_tone1: :bicyclist_tone2: :bicyclist_tone3: :bicyclist_tone4: :bicyclist_tone5: :mountain_bicyclist: :mountain_bicyclist_tone1: :mountain_bicyclist_tone2: :mountain_bicyclist_tone3: :mountain_bicyclist_tone4: :mountain_bicyclist_tone5: :cartwheel: :cartwheel_tone1: :cartwheel_tone2: :cartwheel_tone3: :cartwheel_tone4: :cartwheel_tone5: :wrestlers: :wrestlers_tone1: :wrestlers_tone2: :wrestlers_tone3: :wrestlers_tone4: :wrestlers_tone5: :water_polo: :water_polo_tone1: :water_polo_tone2: :water_polo_tone3: :water_polo_tone4: :water_polo_tone5: :handball: :handball_tone1: :handball_tone2: :handball_tone3: :handball_tone4: :handball_tone5: :juggling: :juggling_tone1: :juggling_tone2: :juggling_tone3: :juggling_tone4: :juggling_tone5: :circus_tent: :performing_arts: :art: :slot_machine: :bath: :bath_tone1: :bath_tone2: :bath_tone3: :bath_tone4: :bath_tone5: :reminder_ribbon: :tickets: :ticket: :military_medal: :trophy: :medal: :first_place: :second_place: :third_place: :soccer: :baseball: :basketball: :volleyball: :football: :rugby_football: :tennis: :8ball: :bowling: :cricket: :field_hockey: :hockey: :ping_pong: :badminton: :boxing_glove: :martial_arts_uniform: :goal: :dart: :golf: :ice_skate: :fishing_pole_and_fish: :running_shirt_with_sash: :ski: :video_game: :game_die: :musical_score: :microphone: :headphones: :saxophone: :guitar: :musical_keyboard: :trumpet: :violin: :drum: :clapper: :bow_and_arrow:".split(" ")
                    },
                    travel: {
                        header: ":red_car:",
                        content: ":race_car: :motorcycle: :japan: :mountain_snow: :mountain: :volcano: :mount_fuji: :camping: :beach: :desert: :island: :park: :stadium: :classical_building: :construction_site: :homes: :cityscape: :house_abandoned: :house: :house_with_garden: :office: :post_office: :european_post_office: :hospital: :bank: :hotel: :love_hotel: :convenience_store: :school: :department_store: :factory: :japanese_castle: :european_castle: :wedding: :tokyo_tower: :statue_of_liberty: :church: :mosque: :synagogue: :shinto_shrine: :kaaba: :fountain: :tent: :foggy: :night_with_stars: :sunrise_over_mountains: :sunrise: :city_dusk: :city_sunset: :bridge_at_night: :milky_way: :carousel_horse: :ferris_wheel: :roller_coaster: :steam_locomotive: :railway_car: :bullettrain_side: :bullettrain_front: :train2: :metro: :light_rail: :station: :tram: :monorail: :mountain_railway: :train: :bus: :oncoming_bus: :trolleybus: :minibus: :ambulance: :fire_engine: :police_car: :oncoming_police_car: :taxi: :oncoming_taxi: :red_car: :oncoming_automobile: :blue_car: :truck: :articulated_lorry: :tractor: :bike: :scooter: :motor_scooter: :busstop: :motorway: :railway_track: :fuelpump: :rotating_light: :traffic_light: :vertical_traffic_light: :construction: :anchor: :sailboat: :canoe: :speedboat: :cruise_ship: :ferry: :motorboat: :ship: :airplane: :airplane_small: :airplane_departure: :airplane_arriving: :seat: :helicopter: :suspension_railway: :mountain_cableway: :aerial_tramway: :rocket: :satellite_orbital: :stars: :rainbow: :fireworks: :sparkler: :rice_scene: :checkered_flag:".split(" ")
                    },
                    symbols: {
                        header: ":hash:",
                        content: ":100: :1234: :eye_in_speech_bubble: :cupid: :heart: :heartbeat: :broken_heart: :two_hearts: :sparkling_heart: :heartpulse: :blue_heart: :green_heart: :yellow_heart: :purple_heart: :black_heart: :gift_heart: :revolving_hearts: :heart_decoration: :heart_exclamation: :anger: :boom: :dizzy: :speech_balloon: :speech_left: :anger_right: :thought_balloon: :white_flower: :globe_with_meridians: :hotsprings: :octagonal_sign: :clock12: :clock1230: :clock1: :clock130: :clock2: :clock230: :clock3: :clock330: :clock4: :clock430: :clock5: :clock530: :clock6: :clock630: :clock7: :clock730: :clock8: :clock830: :clock9: :clock930: :clock10: :clock1030: :clock11: :clock1130: :cyclone: :spades: :hearts: :diamonds: :clubs: :black_joker: :mahjong: :flower_playing_cards: :mute: :speaker: :sound: :loud_sound: :loudspeaker: :mega: :bell: :no_bell: :musical_note: :notes: :chart: :currency_exchange: :heavy_dollar_sign: :atm: :put_litter_in_its_place: :potable_water: :wheelchair: :mens: :womens: :restroom: :baby_symbol: :wc: :passport_control: :customs: :baggage_claim: :left_luggage: :warning: :children_crossing: :no_entry: :no_entry_sign: :no_bicycles: :no_smoking: :do_not_litter: :non-potable_water: :no_pedestrians: :no_mobile_phones: :underage: :radioactive: :biohazard: :arrow_up: :arrow_upper_right: :arrow_right: :arrow_lower_right: :arrow_down: :arrow_lower_left: :arrow_left: :arrow_upper_left: :arrow_up_down: :left_right_arrow: :leftwards_arrow_with_hook: :arrow_right_hook: :arrow_heading_up: :arrow_heading_down: :arrows_clockwise: :arrows_counterclockwise: :back: :end: :on: :soon: :top: :place_of_worship: :atom: :om_symbol: :star_of_david: :wheel_of_dharma: :yin_yang: :cross: :orthodox_cross: :star_and_crescent: :peace: :menorah: :six_pointed_star: :aries: :taurus: :gemini: :cancer: :leo: :virgo: :libra: :scorpius: :sagittarius: :capricorn: :aquarius: :pisces: :ophiuchus: :twisted_rightwards_arrows: :repeat: :repeat_one: :arrow_forward: :fast_forward: :track_next: :play_pause: :arrow_backward: :rewind: :track_previous: :arrow_up_small: :arrow_double_up: :arrow_down_small: :arrow_double_down: :pause_button: :stop_button: :record_button: :eject: :cinema: :low_brightness: :high_brightness: :signal_strength: :vibration_mode: :mobile_phone_off: :recycle: :name_badge: :fleur-de-lis: :beginner: :trident: :o: :white_check_mark: :ballot_box_with_check: :heavy_check_mark: :heavy_multiplication_x: :x: :negative_squared_cross_mark: :heavy_plus_sign: :heavy_minus_sign: :heavy_division_sign: :curly_loop: :loop: :part_alternation_mark: :eight_spoked_asterisk: :eight_pointed_black_star: :sparkle: :bangbang: :interrobang: :question: :grey_question: :grey_exclamation: :exclamation: :wavy_dash: :copyright: :registered: :tm: :hash: :asterisk: :zero: :one: :two: :three: :four: :five: :six: :seven: :eight: :nine: :keycap_ten: :capital_abcd: :abcd: :symbols: :abc: :a: :ab: :b: :cl: :cool: :free: :information_source: :id: :m: :new: :ng: :o2: :ok: :parking: :sos: :up: :vs: :koko: :sa: :u6708: :u6709: :u6307: :ideograph_advantage: :u5272: :u7121: :u7981: :accept: :u7533: :u5408: :u7a7a: :congratulations: :secret: :u55b6: :u6e80: :black_small_square: :white_small_square: :white_medium_square: :black_medium_square: :white_medium_small_square: :black_medium_small_square: :black_large_square: :white_large_square: :large_orange_diamond: :large_blue_diamond: :small_orange_diamond: :small_blue_diamond: :small_red_triangle: :small_red_triangle_down: :diamond_shape_with_a_dot_inside: :radio_button: :black_square_button: :white_square_button: :white_circle: :black_circle: :red_circle: :blue_circle: :regional_indicator_z: :regional_indicator_y: :regional_indicator_x: :regional_indicator_w: :regional_indicator_v: :regional_indicator_u: :regional_indicator_t: :regional_indicator_s: :regional_indicator_r: :regional_indicator_q: :regional_indicator_p: :regional_indicator_o: :regional_indicator_n: :regional_indicator_m: :regional_indicator_l: :regional_indicator_k: :regional_indicator_j: :regional_indicator_i: :regional_indicator_h: :regional_indicator_g: :regional_indicator_f: :regional_indicator_e: :regional_indicator_d: :regional_indicator_c: :regional_indicator_b: :regional_indicator_a:".split(" ")
                    },
                    flags: {
                        header: ":flag_black:",
                        content: ":flag_ac: :flag_ad: :flag_ae: :flag_af: :flag_ag: :flag_ai: :flag_al: :flag_am: :flag_ao: :flag_aq: :flag_ar: :flag_as: :flag_at: :flag_au: :flag_aw: :flag_ax: :flag_az: :flag_ba: :flag_bb: :flag_bd: :flag_be: :flag_bf: :flag_bg: :flag_bh: :flag_bi: :flag_bj: :flag_bl: :flag_bm: :flag_bn: :flag_bo: :flag_bq: :flag_br: :flag_bs: :flag_bt: :flag_bv: :flag_bw: :flag_by: :flag_bz: :flag_ca: :flag_cc: :flag_cd: :flag_cf: :flag_cg: :flag_ch: :flag_ci: :flag_ck: :flag_cl: :flag_cm: :flag_cn: :flag_co: :flag_cp: :flag_cr: :flag_cu: :flag_cv: :flag_cw: :flag_cx: :flag_cy: :flag_cz: :flag_de: :flag_dg: :flag_dj: :flag_dk: :flag_dm: :flag_do: :flag_dz: :flag_ea: :flag_ec: :flag_ee: :flag_eg: :flag_eh: :flag_er: :flag_es: :flag_et: :flag_eu: :flag_fi: :flag_fj: :flag_fk: :flag_fm: :flag_fo: :flag_fr: :flag_ga: :flag_gb: :flag_gd: :flag_ge: :flag_gf: :flag_gg: :flag_gh: :flag_gi: :flag_gl: :flag_gm: :flag_gn: :flag_gp: :flag_gq: :flag_gr: :flag_gs: :flag_gt: :flag_gu: :flag_gw: :flag_gy: :flag_hk: :flag_hm: :flag_hn: :flag_hr: :flag_ht: :flag_hu: :flag_ic: :flag_id: :flag_ie: :flag_il: :flag_im: :flag_in: :flag_io: :flag_iq: :flag_ir: :flag_is: :flag_it: :flag_je: :flag_jm: :flag_jo: :flag_jp: :flag_ke: :flag_kg: :flag_kh: :flag_ki: :flag_km: :flag_kn: :flag_kp: :flag_kr: :flag_kw: :flag_ky: :flag_kz: :flag_la: :flag_lb: :flag_lc: :flag_li: :flag_lk: :flag_lr: :flag_ls: :flag_lt: :flag_lu: :flag_lv: :flag_ly: :flag_ma: :flag_mc: :flag_md: :flag_me: :flag_mf: :flag_mg: :flag_mh: :flag_mk: :flag_ml: :flag_mm: :flag_mn: :flag_mo: :flag_mp: :flag_mq: :flag_mr: :flag_ms: :flag_mt: :flag_mu: :flag_mv: :flag_mw: :flag_mx: :flag_my: :flag_mz: :flag_na: :flag_nc: :flag_ne: :flag_nf: :flag_ng: :flag_ni: :flag_nl: :flag_no: :flag_np: :flag_nr: :flag_nu: :flag_nz: :flag_om: :flag_pa: :flag_pe: :flag_pf: :flag_pg: :flag_ph: :flag_pk: :flag_pl: :flag_pm: :flag_pn: :flag_pr: :flag_ps: :flag_pt: :flag_pw: :flag_py: :flag_qa: :flag_re: :flag_ro: :flag_rs: :flag_ru: :flag_rw: :flag_sa: :flag_sb: :flag_sc: :flag_sd: :flag_se: :flag_sg: :flag_sh: :flag_si: :flag_sj: :flag_sk: :flag_sl: :flag_sm: :flag_sn: :flag_so: :flag_sr: :flag_ss: :flag_st: :flag_sv: :flag_sx: :flag_sy: :flag_sz: :flag_ta: :flag_tc: :flag_td: :flag_tf: :flag_tg: :flag_th: :flag_tj: :flag_tk: :flag_tl: :flag_tm: :flag_tn: :flag_to: :flag_tr: :flag_tt: :flag_tv: :flag_tw: :flag_tz: :flag_ua: :flag_ug: :flag_um: :flag_us: :flag_uy: :flag_uz: :flag_va: :flag_vc: :flag_ve: :flag_vg: :flag_vi: :flag_vn: :flag_vu: :flag_wf: :flag_ws: :flag_xk: :flag_ye: :flag_yt: :flag_za: :flag_zm: :flag_zw:".split(" ")
                    }
                },
                fb = function(a) {
                    var b = a.getElementsByTagName("head")[0],
                        d = a.createElement("script");
                    a = a.createElement("link");
                    d.type = "text/javascript";
                    d.src = "https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js";
                    d.async = !0;
                    a.type = "text/css";
                    a.rel = "stylesheet";
                    a.href = "https://cdn.jsdelivr.net/emojione/2.2.7/assets/css/emojione.min.css";
                    b.appendChild(a);
                    b.appendChild(d);
                    db()
                },
                db = function() {
                    var a;
                    clearTimeout(Ga);
                    !A && f.isPopup ? a = e : (a = A ? f.isPopup ? b.viewHandler.chatContainer.elementId : b.viewHandler.maximizedWidget.container.elementId :
                        k.container.elementId, a = document.getElementById(a), a = a.contentWindow || a.contentDocument || a);
                    "undefined" === typeof a.emojione ? (za++, 20 === za ? (clearTimeout(Ga), za = 0) : Ga = setTimeout(function() {
                        db()
                    }, 20)) : (clearTimeout(Ga), za = 0, Q = a.emojione, Q.ascii = !0)
                },
                eb = function(a) {
                    var h, d = "";
                    h = u["emoji-selection"];
                    var l = u["emoji-tab-select"];
                    if (Oa) Oa.style.display = "block";
                    else if (a.style.display = "block", "undefined" === typeof Q) 20 === za ? a.innerHTML = "Unable to load emojis" : (0 === za && db(), setTimeout(function() {
                        eb(a)
                    }, 20));
                    else {
                        clearTimeout(Ga);
                        Oa = a;
                        Object.keys(cb).forEach(function(a, b) {
                            d += l.replace(/__ID__/, a).replace(/__IMAGE__/, Q.shortnameToImage(cb[a].header)).replace(/__IS_ACTIVE__/, "")
                        });
                        h = h.replace(/__TAB_LIST__/, d);
                        a.innerHTML = h;
                        h = m.getElementsByClassName(a, "open-tab");
                        gb(a, {
                            target: h[0]
                        });
                        for (var r = 0; r < h.length; r++) b.eventHandler.listen(h[r], b.viewHandler.clickEvent, function(b) {
                            b.stopPropagation();
                            gb(a, b)
                        }, h[r].id + "OpenTab")
                    }
                },
                gb = function(a, h) {
                    var d, l, r = "",
                        c = u["emoji-tab-pane"],
                        e = u["emoji-list"];
                    tabElements =
                        m.getElementsByClassName(a, "open-tab");
                    if (l = A ? f.isPopup ? b.viewHandler.chatContainer.getElementById("tab-content") : b.viewHandler.maximizedWidget.container.getElementById("tab-content") : k.container.getElementById("tab-content")) {
                        d = "open-tab" === h.target.className ? h.target : h.target.offsetParent;
                        d = d.id;
                        for (var g = 0; g < tabElements.length; g++) tabElements[g].className = tabElements[g].id === d ? "open-tab active" : "open-tab";
                        if ("search" === d) l.innerHTML = u["emoji-search-pane"], l = A ? f.isPopup ? b.viewHandler.chatContainer.getElementById("search-emoji") :
                            b.viewHandler.maximizedWidget.container.getElementById("search-emoji") : k.container.getElementById("search-emoji"), b.eventHandler.listen(l, "keyup", function(a) {
                                var d = b.eventHandler.getTargetElement(a).value.trim().toLowerCase(),
                                    h = u["emoji-list"];
                                results = "";
                                shortnames = Q.shortnames.split("|");
                                if (a = A ? f.isPopup ? b.viewHandler.chatContainer.getElementById("search-list") : b.viewHandler.maximizedWidget.container.getElementById("search-list") : k.container.getElementById("search-list")) {
                                    if (d)
                                        for (var l = 0; l < shortnames.length; l++) {
                                            var r =
                                                shortnames[l]; - 1 !== r.indexOf(d) && (results += h.replace(/__IMAGE__/, Q.shortnameToImage(r)).replace(/__SHORTNAME__/g, r))
                                        }
                                    a.innerHTML = results;
                                    hb()
                                }
                            }, "searchEmojiKeyup");
                        else if (d = cb[d]) d.content.forEach(function(a) {
                            r += e.replace(/__IMAGE__/, Q.shortnameToImage(a)).replace(/__SHORTNAME__/g, a)
                        }), l.innerHTML = c.replace(/__EMOJIS__/, r).replace(/__ID__/, "people"), hb()
                    }
                },
                hb = function() {
                    for (var a = m.getElementsByClassName(Oa, "emoji-select"), h = 0; h < a.length; h++) b.eventHandler.listen(a[h], b.viewHandler.clickEvent, function(a) {
                        a =
                            b.eventHandler.getTargetElement(a);
                        a = Q.shortnameToUnicode(a.title);
                        A ? f.isPopup ? b.viewHandler.addEmojiToInput(a) : b.viewHandler.maximizedWidget.addEmojiToInput(a) : k.addEmojiToInput(a)
                    }, a[h].id + "SelectEmoji")
                },
                Aa = function() {
                    this.chatWindowStates = {
                        min: !0,
                        max: !0
                    };
                    this.selfOrigin = this.socket = null;
                    this.forceDisconnected = this.banned = this.ready = this.disconnect = !1;
                    this.clearRegisterRetryTimeout = null
                };
            Aa.prototype = new EventEmitter;
            Aa.prototype.init = function() {
                var a, h = !1,
                    d = this,
                    l = (new Date).getTime();
                this.forceDisconnected =
                    this.disconnect = v.connected = !1;
                this.removeAllListeners();
                this.socket && (this.socket.removeAllListeners(), this.socket.disconnect());
                null === F && U.handleWindowId();
                null !== F && "null" !== F || b.loggingHandler.logIncident("windowId is null", {
                    windowId: F,
                    type: typeof F
                });
                if ("symbian" === A || "android" === A || "safari" === A && 7 > H || N && 9 >= H && "https" !== location.protocol) h = !0;
                a = {
                    k: t.sessionKey,
                    u: E.uuid,
                    uv: E.uuidVer,
                    a: I.pageId,
                    cver: y.chatVersion,
                    pop: f.isPopup,
                    w: F,
                    jv: t.currentVersion,
                    asver: t.pageStatusVersion,
                    ust: $_Tawk_Unstable,
                    p: f.isPopup ? I.pageName() : document.title,
                    r: document.referrer
                };
                a.p && 255 < a.p.length && (a.p = a.p.substring(0, 255));
                this.socket = new $__TawkSocket("wss://" + t.visitorSocketServer + "/", {
                    engineIo: $__TawkEngine,
                    path: "/s",
                    query: a,
                    forceJSONP: h
                });
                this.socket.on("disconnect", function() {
                    d.disconnectHandler()
                });
                this.socket.on("error", function(a) {
                    var h, l = "socket on error";
                    if (a instanceof Error) {
                        h = {
                            toString: a.toString(),
                            stack: a.stack,
                            lineNumber: a.lineNumber,
                            fileName: a.fileName
                        };
                        if (b.loggingHandler.unloading && -1 === h.toString.indexOf("post")) return;
                        "TransportError" === a.type && (h.description = a.description); - 1 !== h.toString.indexOf("post") && (l = "socket post error")
                    } else h = a;
                    b.loggingHandler.logIncident(l, h);
                    d.socket.disconnect();
                    d.disconnectHandler()
                });
                this.socket.on("connect", function() {
                    d.disconnect = !1
                });
                this.socket.on("ready", function(a, h, e) {
                    if (!b) return d.disconnectSocket();
                    d.selfOrigin = a;
                    v.connected = !0;
                    d.ready || (v.loaded = !0, "undefined" !== typeof $_Tawk_LoadStart && b.loggingHandler.logPerformance({
                        socket: (new Date).getTime() - l,
                        register: g.registerTime,
                        widget: (new Date).getTime() - $_Tawk_LoadStart,
                        script: (new Date).getTime() - M,
                        download: M - $_Tawk_LoadStart
                    }));
                    d.ready = !0;
                    try {
                        b.eventEmitter.emit("syncConversation", h)
                    } catch (f) {
                        c.handleError("Unable to emit syncConversation", f.fileName, f.lineNumber, f.stack)
                    }
                    try {
                        b.eventEmitter.emit("pageStatusUpdated", e)
                    } catch (m) {
                        c.handleError("Unable to emit pageStatusUpdated", m.fileName, m.lineNumber, m.stack)
                    }
                    try {
                        b.eventEmitter.emit("socketReady")
                    } catch (k) {
                        c.handleError("Unable to emit socketReady", k.fileName, k.lineNumber,
                            k.stack)
                    }
                    clearTimeout(d.clearRegisterRetryTimeout);
                    d.clearRegisterRetryTimeout = setTimeout(function() {
                        d.disconnect || g.resetRetryCount();
                        d.clearRegisterRetryTimeout = null
                    }, 5E3)
                });
                this.socket.on("remoteDisconnect", function(a) {
                    a = a || {};
                    if ("BANNED" === a.msg) {
                        d.banned = !0;
                        try {
                            d.socket.disconnect()
                        } catch (h) {
                            c.handleError("Unable to emit disconnect socket on ban", h.fileName, h.lineNumber, h.stack)
                        }
                        b.main.hideWidget()
                    } else d.socket.disconnect(), d.disconnectHandler()
                });
                this.addEventListeners()
            };
            Aa.prototype.addEventListeners =
                function() {
                    function a(a, h) {
                        try {
                            b.eventEmitter.emit(a, h)
                        } catch (r) {
                            c.handleError("Unable to emit socket event : " + a + " with data : " + $_TAWK_JSON.stringify(h), r.fileName, r.lineNumber, r.stack)
                        }
                    }
                    var h = this;
                    this.socket.on("visitorChatWindowState", function(b) {
                        h.selfOrigin !== b.origin && a("windowStateUpdated", b)
                    });
                    this.socket.on("visitorDataUpdate", function(b) {
                        h.selfOrigin !== b.origin && a("visitorDataUpdate", b)
                    });
                    this.socket.on("visitorSound", function(a) {
                        a.origin !== h.selfOrigin && b.chatHandler.toggleSound(!!a.sdo)
                    });
                    this.socket.on("visitorMessage", function(b) {
                        h.selfOrigin !== b.origin && a("incomingMessage", b)
                    });
                    this.socket.on("visitorConversationPresenceUpdate", function(b) {
                        a("incomingMessage", b)
                    });
                    this.socket.on("pageStatus", function(b) {
                        a("pageStatusUpdated", b)
                    });
                    this.socket.on("newCriticalUpdate", function(a) {
                        a = a || 0;
                        a != t.criticalVersion && b.main.criticalRefresh(a, !0)
                    });
                    this.socket.on("newUnstableCriticalUpdate", function(a) {
                        a = a || 0;
                        $_Tawk_Unstable && a != t.criticalVersion && b.main.criticalRefresh(a, !0)
                    });
                    this.socket.on("visitorPopupFocus",
                        function(b) {
                            b = b || {};
                            a("visitorPopupFocus", !!b.hasFocus)
                        });
                    this.socket.on("chatBubbleClosed", function(b) {
                        b.origin !== h.selfOrigin && a("chatBubbleClosed", b)
                    });
                    this.socket.on("agentIsTyping", function(b) {
                        a("agentIsTyping", b)
                    });
                    this.socket.on("agentStopedTyping", function(b) {
                        a("agentStopedTyping", b)
                    });
                    this.socket.on("pageDisable", function() {
                        a("removeWidget")
                    });
                    this.socket.on("widgetScheduleUpdate", function(b) {
                        a("scheduleUpdate", b)
                    });
                    this.socket.on("uploadProgress", function(b) {
                        a("fileUploadProgress", b)
                    });
                    this.socket.on("uploadFinished", function(b) {
                        a("fileUploadFinished", b)
                    });
                    this.socket.on("uploadError", function(b) {
                        a("fileUploadError", b)
                    });
                    this.socket.on("vCallStatus", function(b) {
                        a("webrtcCallStatus", b)
                    });
                    this.on("notifyWindowState", function(a) {
                        h.chatWindowStates[a] && h.socket.send("chatWindowState", a)
                    });
                    this.on("notifyChatBubbleClosed", function() {
                        h.socket.send("chatBubbleClose")
                    });
                    this.on("notifyMessagePreview", function(a) {
                        h.socket.send("messagePreview", a, (new Date).getTime())
                    });
                    this.on("sendChatMessage",
                        function(a, b) {
                            h.socket.send("chatMessage", a, b)
                        });
                    this.on("notifyNameChange", function(a, b) {
                        h.socket.send("saveNameChangeForm", a, b)
                    });
                    this.on("notifyEmailTranscript", function(a, b) {
                        h.socket.send("saveTranscriptEmailForm", a, b)
                    });
                    this.on("notifyEndChatTranscript", function(a, b) {
                        h.socket.send("sendTranscript", a, b)
                    });
                    this.on("notifyOfflineMessage", function(a, b) {
                        h.socket.send("service", "visitor-chat", "/v1/visitor/offline-form", a, b)
                    });
                    this.on("notifyPrechat", function(a, b) {
                        h.socket.send("savePrechatForm", a,
                            b)
                    });
                    this.on("setRating", function(a) {
                        h.socket.send("visitorRating", a)
                    });
                    this.on("toggleSound", function(a) {
                        h.socket.send("visitorSound", a)
                    });
                    this.on("notifyWidgetResized", function() {
                        h.socket.send("chatWindowResize")
                    });
                    this.on("popupOnFocus", function(a) {
                        h.socket.send("visitorPopupFocus", a)
                    });
                    this.on("notifySocketStatusUpdate", function(a) {
                        h.socket.send("socketStatusUpdate", a)
                    });
                    this.on("saveForeignKey", function(a, b) {
                        h.socket.send("saveForeignKey", a, b)
                    });
                    this.on("saveConversion", function(a, b) {
                        h.socket.send("saveConversion",
                            a, b)
                    });
                    this.on("submitMultipleOptions", function(a, b) {
                        h.socket.send("saveMultipleOptions", a, b)
                    });
                    this.on("endVisitorChat", function(a, b) {
                        h.socket.send("endChat", b)
                    });
                    this.on("fileUploadMessage", function(a, b) {
                        h.socket.send("fileUploadMessage", a, b)
                    });
                    this.on("addEvent", function(a, b) {
                        h.socket.send("addEvent", a, b)
                    });
                    this.on("setAttributes", function(a, b) {
                        h.socket.send("setAttributes", a, b)
                    });
                    this.on("addTags", function(a, b) {
                        h.socket.send("addTags", a, b)
                    });
                    this.on("removeTags", function(a, b) {
                        h.socket.send("removeTags",
                            a, b)
                    });
                    this.on("getWebRTCToken", function(a, b) {
                        this.socket.send("service", "webrtc", "/v1/vcall/init/visitor", a, b)
                    });
                    this.on("getCallStatus", function(a, b) {
                        this.socket.send("service", "webrtc", "/v1/vcall/status/visitor", a, b)
                    });
                    this.on("declineCall", function(a, b) {
                        this.socket.send("service", "webrtc", "/v1/vcall/reject/visitor", a, b)
                    })
                };
            Aa.prototype.disconnectSocket = function() {
                this.forceDisconnected = !0;
                this.socket && (this.socket.disconnect(), this.disconnectHandler())
            };
            Aa.prototype.disconnectHandler = function() {
                v.connected = !1;
                this.socket.removeAllListeners();
                this.removeAllListeners();
                b.scheduler.clearTimer();
                this.banned || (this.forceDisconnected || this.disconnect) || (this.disconnect = !0, g.retryRegister())
            };
            var D = function(a, b, d, l, r) {
                var c = this;
                this.elementId = a || "";
                this.style = b || "";
                this.tagName = l || "div";
                this.childViews = [];
                this.template = a && u[a] ? u[a] : "";
                this.elementReferrer = null;
                this.documentRef = r || document;
                this.attributes = {};
                this.isVisible = !1;
                this.classNames = [];
                "iframe" === l && (this.isIframe = !0);
                this.elementId && (this.attributes.id =
                    this.elementId);
                d && Object.keys(d).forEach(function(a) {
                    c.attributes[a] = d[a]
                })
            };
            D.prototype.addChildViews = function(a) {
                var b = this;
                a.forEach(function(a) {
                    b.childViews.push(a)
                })
            };
            D.prototype.buildView = function(a) {
                this.documentRef = a || this.documentRef;
                this.elementReferrer = m.createElement(this.documentRef, this.tagName, this.attributes, this.style, this.template);
                this.elementReferrer.className += this.classNames.join(" ");
                this.isIframe || this.buildChildViews();
                return this.elementReferrer
            };
            D.prototype.buildChildViews =
                function(a) {
                    var b = this;
                    this.childViews.length && (this.documentRef = a || this.documentRef, this.childViews.forEach(function(a) {
                        b.elementReferrer.appendChild(a.buildView(b.documentRef))
                    }))
                };
            D.prototype.restyle = function(a, b) {
                b && (-1 === b.indexOf("!important") && (b += " !important"), this.elementReferrer ? this.elementReferrer.style.cssText += ";" + a + ":" + b : this.style += ";" + a + ":" + b)
            };
            D.prototype.attachUserEventListener = function(a, h, d, l) {
                var r;
                if (r = d ? this.getElementById(d) : this.elementReferrer) d = a.split(" "), 1 < d.length ?
                    d.forEach(function(a) {
                        b.eventHandler.listen(r, a, h, a + l)
                    }) : b.eventHandler.listen(r, a, h, l)
            };
            D.prototype.toggle = function() {
                this.isVisible ? (this.restyle("display", "none !important"), this.isVisible = !1) : (this.restyle("display", "block !important"), this.isVisible = !0)
            };
            D.prototype.getElementById = function(a) {
                return this.elementReferrer ? this.documentRef.getElementById(a) : null
            };
            D.prototype.insertHtml = function(a) {
                this.elementReferrer.innerHTML = a
            };
            D.prototype.clear = function() {
                this.elementReferrer && (this.elementReferrer.outerHTML =
                    "", this.elementReferrer = null)
            };
            D.prototype.addClass = function(a) {
                this.classNames.push(a);
                this.elementReferrer && (this.elementReferrer.className = this.classNames.join(" "))
            };
            D.prototype.removeClass = function(a) {
                for (; - 1 !== this.classNames.indexOf(a);) this.classNames.splice(this.classNames.indexOf(a), 1);
                this.elementReferrer && (this.elementReferrer.className = this.classNames.join(" "))
            };
            D.prototype.hide = function() {
                this.restyle("display", "none !important");
                this.isVisible = !1
            };
            D.prototype.show = function() {
                this.restyle("display",
                    "block !important");
                this.isVisible = !0
            };
            D.prototype.insertCssFile = function(a, h) {
                var d = this.documentRef.getElementsByTagName("head")[0],
                    l = this.documentRef.createDocumentFragment(),
                    r = m.createElement(this.documentRef, "style", {
                        type: "text/css"
                    }),
                    c = this.documentRef.createTextNode(h ? a : b.ResetStyle + "" + a);
                l.appendChild(r);
                d.appendChild(l);
                r.styleSheet ? r.styleSheet.cssText = c.nodeValue : r.appendChild(c)
            };
            D.prototype.massRestyle = function(a) {
                for (var b in a) this.restyle(b, a[b])
            };
            var S = function() {
                D.apply(this, arguments)
            };
            S.prototype = new D;
            S.prototype.constructor = S;
            S.prototype.parent = D.prototype;
            S.prototype.buildIframe = function(a, b) {
                this.documentRef = m.getDocument(this.elementReferrer);
                this.documentRef.open();
                this.documentRef.writeln('<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /></head><body></body></html>');
                this.documentRef.close();
                this.insertCssFile(a);
                this.insertContent();
                this.buildChildViews()
            };
            S.prototype.insertContent = function() {
                this.documentRef.body.innerHTML = this.template
            };
            S.prototype.buildChildViews = function() {
                var a = this;
                this.childViews.forEach(function(b) {
                    a.documentRef.body.appendChild(b.buildView(a.documentRef))
                })
            };
            var ma = function(a) {
                this.template = (this.elementId = (this.formData = a) ? a.id : null) && u[this.elementId] ? u[this.elementId] : "";
                this.elementReferrer = null;
                this.documentRef = document;
                this.attributes = {
                    className: "form"
                };
                this.elementId && (this.attributes.id = this.elementId)
            };
            ma.prototype.buildForm = function() {
                this.formData.additionalFields = [];
                this.insertTranslatedTexts()
            };
            ma.prototype.buildView = function(a) {
                this.documentRef = a || this.documentRef;
                return this.elementReferrer = m.createElement(this.documentRef, "div", this.attributes, null, this.template)
            };
            ma.prototype.addPlaceholderText = function(a, h, d, l, r) {
                r = RegExp("__" + a.toUpperCase() + "_PLACEHOLDER__", "gm");
                a.toUpperCase();
                a = RegExp("__" + a.toUpperCase() + "__", "gm");
                var c = b.languageParser.translate("form", d + "Placeholder");
                la || h || (h =
                    c);
                c && c !== d + "Placeholder" || (c = h, h = "");
                if (l) return m.escapeTemplateReplacement(l, [{
                    placeholder: r,
                    textReplace: c
                }, {
                    placeholder: a,
                    textReplace: h
                }]);
                this.template = m.escapeTemplateReplacement(this.template, [{
                    placeholder: r,
                    textReplace: c
                }, {
                    placeholder: a,
                    textReplace: h
                }])
            };
            ma.prototype.addPlaceholderHandler = function() {
                var a, h = this;
                la || (a = this.formData.fields) && a.forEach(function(a) {
                    var l, r, c;
                    "input" !== a.type || a.isEnabled && !a.isEnabled() || (c = a.getValue ? a.getValue() : "", "input" === a.type && m.isArray(c) ? c.forEach(function(b,
                        c) {
                        l = h.documentRef.getElementById(a.fieldName + c);
                        r = b;
                        m.togglePlaceholderText(l, r, a.fieldName + c);
                        "textarea" !== l.tagName.toLowerCase() || m.trim(l.value) || (l.value = r)
                    }) : a.hiddenIE8 || (l = h.documentRef.getElementById(a.fieldName + "Field"), r = b.languageParser.translate("form", a.languageKey + "Placeholder"), m.togglePlaceholderText(l, r, a.fieldName + "Field"), "textarea" !== l.tagName.toLowerCase() || m.trim(l.value) || (l.value = r)))
                })
            };
            ma.prototype.insertTranslatedTexts = function() {
                var a = this,
                    h = "";
                (this.formData.fields || []).forEach(function(b) {
                    var h;
                    h = b.getValue ? b.getValue() : "";
                    a.addPlaceholderText(b.fieldName, h, b.languageKey, null, b.labelText)
                });
                this.template = m.escapeTemplateReplacement(this.template, [{
                    placeholder: "__TITLE__",
                    textReplace: this.formData.getTitle ? this.formData.getTitle() : b.languageParser.translate("form", this.formData.title)
                }, {
                    placeholder: "__OVERLAY__",
                    textReplace: b.languageParser.translate("overlay", this.formData.overlayMessage)
                }, {
                    placeholder: "__CANCEL_BUTTON__",
                    textReplace: b.languageParser.translate("form",
                        "CancelButton")
                }, {
                    placeholder: "__SAVE_BUTTON__",
                    textReplace: b.languageParser.translate("form", "SaveButton")
                }, {
                    placeholder: "__SEND_BUTTON__",
                    textReplace: b.languageParser.translate("form", "SendButton")
                }, {
                    placeholder: "__SUBMIT_BUTTON__",
                    textReplace: b.languageParser.translate("form", "SubmitButton")
                }, {
                    placeholder: "__START_CHAT_BUTTON__",
                    textReplace: b.languageParser.translate("form", "StartChatButton")
                }, {
                    placeholder: "__END_CHAT_BUTTON__",
                    textReplace: b.languageParser.translate("rollover", "end")
                }, {
                    placeholder: "__SUBMITTING_INDICATOR__",
                    textReplace: b.languageParser.translate("form", "SubmittingProcess")
                }, {
                    placeholder: "__ENDING_INDICATOR__",
                    textReplace: b.languageParser.translate("form", "EndingProcess")
                }, {
                    placeholder: "__SENDING_INDICATOR__",
                    textReplace: b.languageParser.translate("form", "SendingProcess")
                }, {
                    placeholder: "__SAVING_INDICATOR__",
                    textReplace: b.languageParser.translate("form", "SavingProcess")
                }, {
                    placeholder: "__EMAIL_TRANSCRIPT_TO__",
                    textReplace: b.languageParser.translate("form", "EmailTranscriptTo")
                }, {
                    placeholder: "__OFFLINE_MESSAGE_SUCCESSFULY_SENT__",
                    textReplace: b.languageParser.translate("form", "OfflineMessageSent")
                }, {
                    placeholder: "__SEND_AGAIN__",
                    textReplace: b.languageParser.translate("form", "sendAgain")
                }, {
                    placeholder: /__STATUS__/gm,
                    textReplace: b.languageParser.translate("form", "saving")
                }, {
                    placeholder: /__IE6__/gm,
                    textReplace: X ? "-ie6" : ""
                }, {
                    placeholder: /__SAFARI__/gm,
                    textReplace: "safari" === K ? "safari-fix" : ""
                }]);
                this.template = "safari" === K || "chrome" === K || "firefox" === K || "mozilla" === K || N && 8 <= H ? this.template.replace("__NON_MODERN__", "") : this.template.replace("__NON_MODERN__",
                    "other-fix");
                A && (h = m.escapeTemplateReplacement(u["close-form-button"], [{
                    placeholder: "__CLOSE_BUTTON__",
                    textReplace: b.languageParser.translate("form", "CloseButton")
                }]));
                this.template = m.escapeTemplateReplacement(this.template, [{
                    placeholder: "__CLOSE_BUTTON_CONTAINER__",
                    textReplace: h
                }])
            };
            var da = function(a, b) {
                ma.apply(this, [a]);
                this.formName = b
            };
            da.prototype = new ma;
            da.prototype.constructor = da;
            da.prototype.parent = ma.prototype;
            da.prototype.buildForm = function() {
                var a, h = [];
                a = "preChatForm" == this.formName ? "prechat" :
                    "offline";
                this.formData.additionalFields = [];
                this.insertTranslatedTexts();
                if (null === this.formData.dynamicFields) {
                    for (var d = 0, l = f[a + "Options"].fields.length; d < l; d++) {
                        var r = {},
                            c = f[a + "Options"].fields[d];
                        c.id = a + d;
                        r.label = c.label;
                        r.instantValidation = !1;
                        r.isRequired = c.isRequired;
                        r.fieldName = a + d;
                        r.fieldType = c.type;
                        r.validation = "isValidString";
                        "name" === c.type ? (r.valueMaxLength = 40, r.getValue = b.visitorHandler.getNameValue, r.languageKey = "Name") : "email" === c.type ? (r.valueMaxLength = 150, r.getValue = b.visitorHandler.getEmailValue,
                            r.validation = "isValidEmail", r.languageKey = "Email") : "message" === c.type || "textArea" === c.type ? r.valueMaxLength = 500 : "inputText" === c.type ? r.valueMaxLength = 150 : "department" === c.type ? r.getValue = b.sessionHandler.getDeparmentOptions : "choice" === c.type || "option" === c.type ? (r.type = "options", r.selections = c.selections) : "phone" === c.type && (r.valueMaxLength = 20, r.validation = "isValidPhone", r.languageKey = "Phone");
                        r.isRequired && !r.languageKey && (r.languageKey = "Required");
                        h.push(r)
                    }
                    this.formData.dynamicFields = h
                }
                this.generateDynamicFields()
            };
            da.prototype.generateDynamicFields = function() {
                for (var a = "", b = RegExp("__LABEL__", "gm"), d = RegExp("__ID__", "gm"), l = RegExp("__MAXLENGTH__", "gm"), c = 0, e = this.formData.dynamicFields.length; c < e; c++) {
                    var f, g = "",
                        m = this.formData.dynamicFields[c];
                    if ("name" === m.fieldType || "email" === m.fieldType || "phone" === m.fieldType || "inputText" === m.fieldType) f = u.inputTextFieldType, f = "email" === m.fieldType ? f.replace("__INPUT_TYPE__", "email") : f.replace("__INPUT_TYPE__", "text");
                    else if ("message" === m.fieldType || "textArea" === m.fieldType) f =
                        u.textAreaFieldType;
                    else if ("department" === m.fieldType) f = u.departmentSelection;
                    else if ("choice" === m.fieldType || "option" === m.fieldType) f = u.selectionsType, g = "choice" === m.fieldType ? this.generateCheckboxOptions(m.fieldName, m.selections) : this.generateRadioOptions(m.fieldName, m.selections);
                    f && (f = f.replace(b, m.label), f = f.replace(d, m.fieldName), f = f.replace(l, m.valueMaxLength), f = m.isRequired ? f.replace(/__REQUIRED__/gm, "*") : f.replace(/__REQUIRED__/gm, ""), m.getValue && ("department" === m.fieldType ? (g = this.generateDropDownOptions(m.getValue(),
                        m.isRequired)) || (f = "") : g = m.getValue()), f = f.replace("__VALUE__", g), a += f)
                }
                this.template = this.template.replace("__FIELDS__", a)
            };
            da.prototype.generateDropDownOptions = function(a, b) {
                var d = "";
                if (0 === a.length) return !1;
                b || (d += '<option value="0"></option>');
                for (var l = 0, c = a.length; l < c; l++) d += '<option value="' + a[l].value + '"' + (a[l].selected ? 'selected="selected"' : "") + ">" + a[l].text + "</option>";
                return d
            };
            da.prototype.generateRadioOptions = function(a, b) {
                for (var d = "", l = u.radioSelectionType, c = 0, e = b.length; c < e; c++) d +=
                    l.replace(/__ID__/gm, a + "radio" + c).replace(/__FIELD_ID__/gm, a).replace(/__VALUE__/gm, b[c]);
                return d
            };
            da.prototype.generateCheckboxOptions = function(a, b) {
                for (var d = "", l = u.checkboxSelectionType, c = 0, e = b.length; c < e; c++) d += l.replace(/__ID__/gm, a + "check" + c).replace(/__FIELD_ID__/gm, a).replace(/__VALUE__/gm, b[c]);
                return d
            };
            da.prototype.updateName = function(a) {
                for (var h, d = 0, l = this.formData.dynamicFields.length; d < l; d++) {
                    var c = this.formData.dynamicFields[d];
                    if ("name" === c.fieldType) {
                        h = b.viewHandler.chatContainer.getElementById(c.fieldName +
                            "Field");
                        break
                    }
                }
                h && (h.value = a)
            };
            da.prototype.updateEmail = function(a) {
                for (var h, d = 0, l = this.formData.dynamicFields.length; d < l; d++) {
                    var c = this.formData.dynamicFields[d];
                    if ("email" === c.fieldType) {
                        h = b.viewHandler.chatContainer.getElementById(c.fieldName + "Field");
                        break
                    }
                }
                h && (h.value = a)
            };
            da.prototype.addPlaceholderHandler = function() {
                var a, b;
                if (!la)
                    for (var d = 0, l = this.formData.dynamicFields.length; d < l; d++) b = this.formData.dynamicFields[d], "department" !== b.fieldType && ("choice" !== b.fieldType && "option" !== b.fieldType) &&
                        (this.formData.dynamicFields[d].placeholderText = (b.isRequired ? "* " : "") + b.label, a = this.documentRef.getElementById(b.fieldName + "Field"), m.togglePlaceholderText(a, this.formData.dynamicFields[d].placeholderText, b.fieldName + "Field"), m.trim(a.value) || (a.value = this.formData.dynamicFields[d].placeholderText))
            };
            var Ba = function(a) {
                var h = this;
                this.container = a;
                this.unansweredMessages = 0;
                this.popUpHasFocus = !1;
                b.eventEmitter.on("visitorPopupFocus", function(a) {
                    h.isPopupFocused = a;
                    h.hide()
                })
            };
            Ba.prototype.initIndicator =
                function() {
                    var a = U.getSessionInformation()[1];
                    if (a = a ? parseInt(a, 10) : 0) this.unansweredMessages = a - 1, this.show()
                };
            Ba.prototype.show = function() {
                var a, h, d;
                "max" === t.chatWindowState() && !f.isPopup || this.isPopupFocused && !b.viewHandler.popoutWin.closed || (99 > this.unansweredMessages && this.unansweredMessages++, U.storeSessionInformation(!0), f.isPopup && this.unansweredMessages ? this.updatePopoutTitle() : this.container && this.container.elementReferrer && (a = this.container.getElementById("tawkchat-chat-indicator"), h = this.container.getElementById("tawkchat-chat-indicator-text"),
                    d = b.viewHandler.iframeContainer.getElementById("tawkchat-minified-iframe-element"), h && (A || !f.isDesktopRectangle() ? h.innerHTML = this.unansweredMessages : h.innerHTML = b.languageParser.translate("chat", "newMessage", {
                        num: this.unansweredMessages
                    })), a && "block" !== a.style.display && (a.style.display = "block", a.style.visibility = "hidden", b.viewHandler.handleIndicatorToggle(!0), b.viewHandler.showWidget(), this.container.show(), d && (b.viewHandler.chatContainer.hide(), d.style.display = "block"))))
            };
            Ba.prototype.updatePopoutTitle =
                function() {
                    var a = "",
                        a = t.pageStatus(),
                        b = "";
                    A || ((a = q.getShortMessage(a)) || (a = ""), 0 < this.unansweredMessages && (b = "(" + this.unansweredMessages + ")"), document.title = b + m.rawDecode(a) + (I.pageName() ? " - " + m.rawDecode(I.pageName()) : ""))
                };
            Ba.prototype.hide = function() {
                var a, h;
                this.unansweredMessages = 0;
                U.storeSessionInformation(!0);
                f.isPopup ? this.updatePopoutTitle() : this.container && this.container.elementReferrer && (a = this.container.getElementById("tawkchat-chat-indicator"), h = this.container.getElementById("tawkchat-chat-indicator-text"),
                    a && "block" === a.style.display && (a.style.display = "none", b.viewHandler.handleIndicatorToggle(), A || this.container.hide()), h && (h.innerHTML = ""))
            };
            var G = TawkClass.extend({
                init: function() {
                    this.chatContainer = null;
                    this.removeAgentNotification = !1;
                    this.lastRadioButton = null;
                    this.clickEvent = "click";
                    this.isPopupFocused = !1;
                    this.indicator = null;
                    this.newMessageNotSeen = !1;
                    this.notSeenMessages = [];
                    this.lastMessageTime = this.lastFocusedElement = null;
                    this.unseenMessageNumber = 0;
                    this.retryUploadList = this.removeDividerTimeout =
                        null;
                    this.tawktoLinkName = m.getRandomName();
                    this.bottomContainerName = m.getRandomName();
                    this.incomingCallTimeout = null;
                    this.callData = {}
                },
                show: function() {},
                appendAgent: function() {},
                removeAgent: function() {},
                clearAgentFooter: function() {},
                clearAgentHeader: function() {},
                handleAcknowledgment: function(a) {
                    var h, d, l, c, e, f, g, k, n = this.chatContainer;
                    if (n && a.messageId && (c = n.getElementById(a.messageId))) {
                        l = c.parentNode;
                        d = 0;
                        for (var p = c.childNodes.length; d < p; d++) {
                            var q = c.childNodes[d]; - 1 !== q.className.indexOf("messageBody") &&
                                (h = m.getElementsByClassName(q, "messageWrapper"), k = m.getElementsByClassName(q, "messageStatusContainer"))
                        }
                        h && (h.length && k && k.length) && (k = k[0], h = h[0], a.error ? k && (l = u["chat-resend-link"].replace("__MESSAGE_ID__", a.messageId).replace("__NOT_DELIVERED__", b.languageParser.translate("chat", "message_not_delivered")), h.className = "messageWrapper error", k.className = "messageStatusContainer errorInMessage", k.innerHTML = l, e = m.rawDecode(h.childNodes[0].textContent || h.childNodes[0].innerText), this.scrollToBottom(),
                            g = b.eventHandler.listen(k, b.viewHandler.clickEvent, function(d) {
                                b.eventHandler.cancelEvent(d);
                                b.chatHandler.sendMessageToServer(e, a.messageId);
                                if (f = n.getElementById("errorFor" + a.messageId)) h.className = "messageWrapper pending";
                                k.className = "messageStatusContainer pending";
                                k.childNodes[0].innerHTML = '<span class="messageStatus"></span>';
                                b.eventHandler.removeEventHandler(h, "click", g)
                            }, "resend" + a.messageId + "click")) : (d = b.chatHandler.messages[a.order], b.viewHandler.addWaitTime(), l.removeChild(c), b.chatHandler.prepareMessage(d, !0, !1, !0)))
                    }
                },
                handleEndChat: function() {},
                clearAgents: function() {},
                handleRestartChat: function() {},
                appendMessage: function(a, h) {
                    var d, l, r, e = a.reDisplay ? a.reDisplay : !1;
                    d = !1;
                    var g = null,
                        k = a.message,
                        n = a.time,
                        p = a.senderType,
                        q = this.chatContainer.documentRef,
                        s = this.ifScrollbarDown(),
                        u = q.getElementById("chatWrapper"),
                        w = "messageId-" + (new Date).getTime().toString() + Object.keys(b.chatHandler.messages).length,
                        v = X ? "messageContainer-ie6" : "messageContainer clearfix",
                        n = m.parseChatTime(n);
                    "undefined" !== typeof Q && (k =
                        Q.unifyUnicode(k), 0 === k.replace(Q.regUnicode, "").trim().length && (v += " emojionly"), k = Q.toImage(k));
                    1 >= y.chatOrder && this.hideEmbeddedGreetings();
                    !t.prechatFormSubmitted && f.showPreChatForm && (t.prechatFormSubmitted = !0, "preChatForm" === b.formHandler.currentForm && b.formHandler.closeForm());
                    "a" === p ? (d = this.parseSurvey(k, w), k = d.message, d = d.isSurvey, b.chatHandler.handleAgentStoppedTyping(a.data.rsc)) : b.chatHandler.visitorHasMessaged || "s" === p || (b.chatHandler.visitorHasMessaged = !0);
                    a.data && a.data.file && (k = this.parseUploadedFile(a.data.file));
                    "c" === a.type && (r = m.escapeTemplateReplacement(h["chat-message-row"], [{
                        placeholder: "__MESSAGE_STATUS_ROW__",
                        textReplace: h["chat-message-status-row"]
                    }, {
                        placeholder: /__MESSAGE_ID__/gm,
                        textReplace: w
                    }, {
                        placeholder: "__MESSAGE__",
                        textReplace: k
                    }, {
                        placeholder: "__PENDING__",
                        textReplace: a.isPending ? "pending" : ""
                    }]), v = "v" === p ? v + " visitorChatContainer " : v + " agentChatContainer ");
                    g = new D(w, null, {
                        className: v
                    }, null, q);
                    this.lastMessageTime = a.isPending ? this.lastMessageTime : n;
                    "c" === a.type ? (b.chatHandler.lastMessageOwner =
                        "s" === p ? "server" : a.isPending ? b.chatHandler.lastMessageOwner : a.ownerId, "a" === p || "s" === p ? ("a" === p && (b.chatHandler.agentHasMessaged = !0, this.removeWaitTime()), l = m.escapeTemplateReplacement(h["chat-message-owner-agent"], [{
                            placeholder: "__NAME__",
                            textReplace: a.name
                        }])) : l = m.isGeneratedName(E.name()) && h["chat-message-owner-visitor"] ? m.escapeTemplateReplacement(h["chat-message-owner-visitor"], [{
                            placeholder: "__NAME__",
                            textReplace: a.name
                        }]) : "", l = m.escapeTemplateReplacement(h["chat-message-container"], [{
                            placeholder: "__OWNER_TPL__",
                            textReplace: l
                        }, {
                            placeholder: "__CONTENT__",
                            textReplace: r
                        }]), "s" === p && (l = l.replace("ownerNameContainer", "ownerNameContainer trigger"), l = l.replace("messageBody", "messageBody trigger"))) : "n" === a.type && (b.chatHandler.lastMessageOwner = "notif", l = h["chat-notification-container"], l = m.escapeTemplateReplacement(h["chat-notification-container"], [{
                        placeholder: "__MESSAGE_ID__",
                        textReplace: w
                    }, {
                        placeholder: "__MESSAGE__",
                        textReplace: k
                    }, {
                        placeholder: "__TIME__",
                        textReplace: n
                    }]));
                    g.template = l;
                    g.buildView();
                    try {
                        u.insertBefore(g.elementReferrer,
                            q.getElementById("agentTypingContainer")), b.eventHandler.listen(g.elementReferrer, "mouseover", function() {
                            g.elementReferrer.className = v + " show-time"
                        }, w + "mouseover"), b.eventHandler.listen(g.elementReferrer, "mouseout", function() {
                            g.elementReferrer.className = v
                        }, w + "mouseout")
                    } catch (x) {
                        c.handleError("Chat wrapper is null to append message : " + $_TAWK_JSON.stringify(a), x.fileName, x.lineNumber, x.stack)
                    }
                    a.dontPlaySound || ("v" === p || a.isPending) || this.popoutWin && !this.popoutWin.closed || b.audioPlayer.play("chat_sound");
                    s && this.scrollToBottom();
                    !e && ("v" !== p && !s) && (this.setDivider(w, h["chat-divider"], g), this.unseenMessageNumber && (r = this.chatContainer.documentRef.getElementById("newMessagesBar"))) && (this.chatContainer.getElementById("notificationMessageText").innerHTML = b.languageParser.translate("chat", "newMessage", {
                        num: this.unseenMessageNumber
                    }));
                    s && this.scrollToBottom();
                    d && this.addSurveyHandlers(w);
                    return w
                },
                parseSurvey: function(a, b) {
                    var d, l, c, e, f, g, k = a.match(m.regSurvey),
                        n = "";
                    if (!k) return {
                        message: a,
                        isSurvey: !1
                    };
                    e = a.match(m.regSurveyQuestion);
                    f = "survey-" + (new Date).getTime();
                    d = 0;
                    for (l = k.length; d < l; d++) c = k[d].replace(m.regOption, ""), c = c.replace(m.regBr, ""), c = m.trim(c), g = f + d, n += m.escapeTemplateReplacement(u["survey-option"], [{
                        placeholder: /__RADIO_ID__/gm,
                        textReplace: g
                    }, {
                        placeholder: "__RADIO_NAME__",
                        textReplace: b
                    }, {
                        placeholder: /__RADIO_VALUE__/gm,
                        textReplace: c
                    }]);
                    return {
                        message: m.escapeTemplateReplacement(u["tawk-survey-wrapper"], [{
                            placeholder: "__QUESTION__",
                            textReplace: e[0].replace(m.regOption, "")
                        }, {
                            placeholder: "__OPTIONS__",
                            textReplace: n
                        }]),
                        isSurvey: !0
                    }
                },
                updateViewByStatus: function(a) {
                    b.formHandler.closeForm();
                    if (f.isPopup) {
                        var h = q.getShortMessage(a);
                        document.title = h ? n.profileName + " - " + m.rawDecode(h) : n.profileName
                    }
                    "online" === a || "away" === a ? (f.showPreChatForm && !t.prechatFormSubmitted && b.formHandler.openForm("preChatForm"), this.showWidget(), p && p.toggleBubble()) : "offline" === a && (f.hideWidgetOnOffline ? this.hideWidget() : (b.formHandler.openForm("offlineForm"), this.showWidget()), p && p.toggleBubble())
                }
            });
            G.prototype.resetView =
                function() {};
            G.prototype.styleAgentBar = function() {};
            G.prototype.expandAgentList = function() {};
            G.prototype.hideWidget = function() {};
            G.prototype.showWidget = function() {};
            G.prototype.toggleWidget = function() {
                A && b.viewHandler.maximize()
            };
            G.prototype.popoutWidget = function() {
                A && b.viewHandler.popup()
            };
            G.prototype.handleIndicatorToggle = function() {};
            G.prototype.begin = function() {};
            G.prototype.getViewportDimensions = function(a) {
                var b, d = {};
                a ? (a = e, b = document) : (a = k.container.elementReferrer, b = k.container.documentRef);
                if ("undefined" !== typeof a.innerWidth) return d.height = a.innerHeight, d.width = a.innerWidth, d;
                if ("undefined" !== typeof b.documentElement && "undefined" !== typeof b.documentElement.clientWidth && 0 !== b.documentElement.clientWidth) return d.height = b.documentElement.clientHeight, d.width = b.documentElement.clientWidth, d;
                d.height = b.getElementsByTagName("body")[0].clientHeight;
                d.width = b.getElementsByTagName("body")[0].clientWidth;
                return d
            };
            G.prototype.getActualViewportDimensions = function() {
                var a = this.getViewportDimensions(!0);
                return {
                    width: this.isVerticalScrollbar() ? a.width - this.getScrollerWidth() : a.width,
                    height: this.isHorizontalScrollbar() ? a.height - this.getScrollerWidth() : a.height
                }
            };
            G.prototype.isVerticalScrollbar = function() {
                return this.getViewportDimensions(!0).height < document.body.scrollHeight
            };
            G.prototype.isHorizontalScrollbar = function() {
                var a = this.getViewportDimensions(!0).width;
                return document.documentElement && a < document.documentElement.scrollWidth || a < document.body.scrollWidth
            };
            G.prototype.getScrollerWidth = function() {
                var a =
                    null,
                    b = null,
                    d = 0,
                    a = 0,
                    a = document.createElement("div");
                a.style.cssText = "position: absolute; top: -10000px; left: -10000px; width: 100px; height: 50px; overflow: hidden";
                b = document.createElement("div");
                b.style.cssText = "width: 100%; height: 200px";
                a.appendChild(b);
                document.body.appendChild(a);
                d = b.offsetWidth;
                a.style.overflow = "auto";
                a = b.offsetWidth;
                document.body.removeChild(document.body.lastChild);
                return d - a
            };
            G.prototype.addSurveyHandlers = function(a) {
                var h, d = this;
                this.chatContainer && (h = this.chatContainer.getElementById(a),
                    h = m.getElementsByTagName(h, "input"), h.forEach(function(h, c) {
                        h.id && d.chatContainer.attachUserEventListener("click", function(a) {
                            d.lastRadioButton !== h.id && (d.lastRadioButton = h.id, b.chatHandler.sendMessage(h.value))
                        }, h.id, "survey" + a + c + "click")
                    }))
            };
            G.prototype.ifScrollbarDown = function() {
                var a, h, d;
                if (!this.chatContainer || !this.chatContainer.elementReferrer) return !1;
                a = this.chatContainer.getElementById("chatContainer");
                d = this.chatContainer.getElementById("chatPanel");
                if (a && d) {
                    if (b.formHandler.currentForm) return d.style.display =
                        "block", h = a.offsetHeight + 10, a = 30 > a.scrollHeight - (a.scrollTop + h), d.style.display = "none", a;
                    h = a.offsetHeight + 10;
                    return 30 > a.scrollHeight - (a.scrollTop + h)
                }
            };
            G.prototype.scrollToBottom = function() {
                if (this.chatContainer && this.chatContainer.elementReferrer) {
                    var a = this.chatContainer.getElementById("chatContainer"),
                        b = this.chatContainer.getElementById("chatPanel");
                    if (a) {
                        var d = a.style.display,
                            l = b.style.display;
                        "none" === d && (a.style.display = "block");
                        "none" === l && (b.style.display = "block");
                        this.chatContainer.getElementById("chatContainer").scrollTop =
                            1E8;
                        "none" === d && (a.style.display = d);
                        "none" === l && (b.style.display = l)
                    }
                }
            };
            G.prototype.isChatScrollbar = function() {
                var a;
                if (this.chatContainer && this.chatContainer.elementReferrer && (a = this.chatContainer.getElementById("chatContainer"))) return a.scrollHeight > this.getViewportDimensions(f.isPopup).height - 139
            };
            G.prototype.addWaitTime = function() {
                var a, h, d, l;
                l = A ? u.estimatedWaitTime : u["wait-time-container"];
                var c = this.chatContainer;
                b.chatHandler.agentHasMessaged || (!f.showWaitTime || c.getElementById("waitTimeContainer")) ||
                    (a = c.getElementById("chatWrapper"), h = Math.ceil(t.waitTime / 6E4), h = b.languageParser.translate("chat", "messageQueuedText", {
                            t: h,
                            strongStart: "<b>",
                            strongEnd: "</b>"
                        }), d = X ? "<center><span>" + b.languageParser.translate("chat", "messageQueuedTitile") + "</span></center>" : "<span>" + b.languageParser.translate("chat", "messageQueuedTitile") + "</span>", l = m.escapeTemplateReplacement(l, [{
                            placeholder: "__TITLE__",
                            textReplace: d
                        }, {
                            placeholder: "__MESSAGE__",
                            textReplace: h
                        }]), h = new D("waitTimeContainer", null, null, null, c.documentRef),
                        h.template = l, h.buildView(), (l = c.getElementById("departmentOfflineNotification")) ? a.insertBefore(h.elementReferrer, l.nextSibling) : a.insertBefore(h.elementReferrer, a.firstChild), this.waitTimeUpdater(!0), "explorer" === K && 9 > H && (c.documentRef.body.className = c.documentRef.body.className))
            };
            G.prototype.removeWaitTime = function() {
                var a;
                this.chatContainer && this.chatContainer.elementReferrer && (a = this.chatContainer.getElementById("waitTimeContainer")) && (a.parentNode.removeChild(a), "explorer" === K && 9 > H && (k.container.documentRef.body.className =
                    k.container.documentRef.body.className))
            };
            G.prototype.waitTimeUpdater = function(a) {
                var b, d, l = this;
                if (this.chatContainer && this.chatContainer.elementReferrer && (d = this.chatContainer.getElementById("waitTime")) && !(6E4 >= t.waitTime)) {
                    b = t.waitTime % 6E4 || 6E4;
                    if (a) return setTimeout(function() {
                        l.waitTimeUpdater()
                    }, b);
                    t.waitTime -= b;
                    d.innerHTML = Math.ceil(t.waitTime / 6E4);
                    setTimeout(function() {
                        l.waitTimeUpdater()
                    }, 6E4)
                }
            };
            G.prototype.appendAgentIsTypingElement = function(a) {
                var h, d, l, c, e = this.ifScrollbarDown(),
                    f = y.agentProfiles[a];
                this.chatContainer && (l = (h = f && f.pi ? t.agentImgUrl + "/" + f.pi : "default") ? "url('" + h + "')" : "transparent", c = "explorer" === K && 9 > H ? "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + h + "',sizingMethod='scale');" : "", "transparent" !== l && (c += "background-position:0 0;background-size:28px 28px"), A ? (d = b.languageParser.translate("chat", "mobileAgentIsTyping", f), h = u["mobile-agent-typing"]) : (f.strongStart = "<b>", f.strongEnd = "</b>", d = b.languageParser.translate("chat", "agentIsTyping", f), h = u["agent-typing"]),
                    h = m.escapeTemplateReplacement(h, [{
                        placeholder: "__MESSAGE_ID__",
                        textReplace: a
                    }, {
                        placeholder: "__MESSAGE__",
                        textReplace: d
                    }, {
                        placeholder: /__NAME__/gm,
                        textReplace: f.n
                    }, {
                        placeholder: "__IMAGE_URL__",
                        textReplace: l
                    }, {
                        placeholder: "__IE_IMAGE_SCALE__",
                        textReplace: c
                    }]), this.chatContainer.getElementById("agentTypingContainer").innerHTML += h, e && this.scrollToBottom())
            };
            G.prototype.removeAgentTypingElement = function(a) {
                this.chatContainer && (a = this.chatContainer.getElementById("agentTyping-" + a)) && a.parentNode.removeChild(a)
            };
            G.prototype.changeRating = function(a) {
                var h, d;
                this.chatContainer && (h = this.chatContainer.getElementById("ratePositive"), d = this.chatContainer.getElementById("rateNegative"), h.className = "", d.className = "", 0 > a ? (d.className = "selected", a = b.languageParser.translate("chat", "dislike")) : 0 < a ? (h.className = "selected", a = b.languageParser.translate("chat", "like")) : a = b.languageParser.translate("chat", "remove_rate"), b.viewHandler.appendMessage({
                    message: a,
                    type: "n",
                    time: new Date,
                    senderType: "v",
                    ownerId: E.visitorId
                }))
            };
            G.prototype.notifiyDepartmentIsNotOnline = function(a, h) {
                var d, l, c = this.chatContainer;
                c && (d = c.getElementById("chatWrapper")) && (l = m.escapeTemplateReplacement(u.departmentOfflineNotification, [{
                    placeholder: "__TITLE__",
                    textReplace: X ? "<span>" + b.languageParser.translate("chat", "notificationTitle") + "</span>" : "<center><span>" + b.languageParser.translate("chat", "notificationTitle") + "</span></center>"
                }, {
                    placeholder: "__MESSAGE__",
                    textReplace: b.languageParser.translate("chat", "offline" === h ? "departmentIsOffline" :
                        "departmentIsAway", {
                            departmentName: a,
                            strongStart: "<b>",
                            strongEnd: "</b>"
                        })
                }]), elem = m.createElement(c.documentRef, "div", {
                    id: "departmentOfflineNotification",
                    className: "messageContainer"
                }, null, l), d.insertBefore(elem, d.firstChild))
            };
            G.prototype.setDivider = function(a, h, d) {
                var l, c, e, g, k = this;
                this.chatContainer.documentRef.getElementById("newMessageDivider") ? 0 < this.unseenMessageNumber && this.unseenMessageNumber++ : (c = this.chatContainer.documentRef.getElementById(a), g = this.chatContainer.documentRef.getElementById("chatWrapper"),
                    e = new D("newMessageDivider"), this.newMessageNotSeen || !b.formHandler.currentForm && (f.isEmbedded || f.isPopup || "min" !== t.chatWindowState()) && m.chatElementInView(c) || (this.newMessageNotSeen = !0, l = this.chatContainer.documentRef.getElementById("newMessagesBar"), this.unseenMessageNumber = 1, l && (l.className = "visible", this.chatContainer.getElementById("newMessagesNotificationLink").title = b.languageParser.translate("chat", "newMessages"), b.eventHandler.listen(l, this.clickEvent, function() {
                        k.unseenMessageNumber = 0;
                        k.scrollToSeeMessage(a)
                    }, "newmessagedivider"))), !b.formHandler.currentForm && (f.isEmbedded || f.isPopup || "min" !== t.chatWindowState()) && m.chatElementInView(c) || this.notSeenMessages.push(c), e.template = m.escapeTemplateReplacement(h, [{
                        placeholder: /__NEW_MESSAGES__/gm,
                        textReplace: b.languageParser.translate("chat", "newMessages").toUpperCase()
                    }]), e.buildView(), g.insertBefore(e.elementReferrer, d.elementReferrer))
            };
            G.prototype.removeDivider = function() {
                var a, b = this;
                clearTimeout(this.removeDividerTimeout);
                this.removeDividerTimeout =
                    setTimeout(function() {
                        (a = b.chatContainer.documentRef.getElementById("newMessageDivider")) && a.parentNode.removeChild(a)
                    }, 2E3)
            };
            G.prototype.scrollToSeeMessage = function(a) {
                var b = this.chatContainer.documentRef.getElementById("chatContainer");
                (a = this.chatContainer.documentRef.getElementById(a)) && b && (b.scrollTop = a.offsetTop - b.offsetHeight + 40)
            };
            G.prototype.checkUnseenMessages = function() {
                var a;
                if (!this.newMessageNotSeen || !this.notSeenMessages.length) return !1;
                for (var b = 0; b < this.notSeenMessages.length; b++) m.chatElementInView(this.notSeenMessages[b]) &&
                    (this.notSeenMessages.splice(b, 1), b--);
                if (!this.notSeenMessages.length || A && this.ifScrollbarDown()) this.newMessageNotSeen = !1, (a = this.chatContainer.documentRef.getElementById("newMessagesBar")) && setTimeout(function() {
                    a.className = ""
                }, 250), this.removeDivider()
            };
            G.prototype.parseUploadedFile = function(a) {
                var h = "https://tawk.link/" + a.name,
                    d = this,
                    l = u["file-upload"];
                if (-1 !== ["jpeg", "png", "gif"].indexOf(a.type) && 2E6 >= a.size) {
                    var c = new Image;
                    c.onload = function() {
                        var b = m.createElement(d.chatContainer.documentRef,
                                "a", {
                                    href: h,
                                    target: "_blank"
                                }),
                            l = d.chatContainer.getElementById("placeholder-" + a.name),
                            e = d.ifScrollbarDown();
                        l && (b.appendChild(c), b.className = "clearfix", l.parentNode.insertBefore(b, l), l.parentNode.removeChild(l), e && d.scrollToBottom())
                    };
                    c.setAttribute("src", h);
                    c.setAttribute("class", "uploaded-image");
                    l = m.escapeTemplateReplacement(l, [{
                        placeholder: "__FILE_DISPLAY__",
                        textReplace: '<div class="image-loader" id="placeholder-' + a.name + '"></div>'
                    }]);
                    showDetails = !1
                } else l = -1 !== ["video/mp4", "video/ogg", "video/webm"].indexOf(a.mimeType) ?
                    m.escapeTemplateReplacement(l, [{
                        placeholder: "__FILE_DISPLAY__",
                        textReplace: '<video width="auto" height="auto" controls style="display: block; max-width: 420px; width: 100%;"><source src="' + h + '" type="' + a.mimeType + '"></source></video>'
                    }]) : -1 !== ["audio/mp3", "audio/ogg"].indexOf(a.mimeType) ? m.escapeTemplateReplacement(l, [{
                        placeholder: "__FILE_DISPLAY__",
                        textReplace: '<audio controls style="display: block; max-width : 220px;"><source src="' + h + '" type="' + a.mimeType + '"></source></audio>'
                    }]) : l.replace("__FILE_DISPLAY__",
                        "");
                return l = m.escapeTemplateReplacement(l, [{
                    placeholder: "__FILE_NAME__",
                    textReplace: a.fileName
                }, {
                    placeholder: "__DOWNLOAD_URL__",
                    textReplace: h
                }, {
                    placeholder: "__DOWNLOAD_TEXT__",
                    textReplace: b.languageParser.translate("chat", "downloadFile")
                }, {
                    placeholder: "__FILE_SIZE__",
                    textReplace: m.formatFileSize(a.size)
                }, {
                    placeholder: "__FILE_TYPE__",
                    textReplace: a.type
                }])
            };
            G.prototype.startUpload = function(a, h, d) {
                var l, c, e, f = this,
                    g = u.fileUploadProgress,
                    k = this.ifScrollbarDown();
                d = d || function() {};
                e = this.chatContainer.getElementById("fileInput");
                l = h ? e.value.replace(/^.*\\/, "") : a.name || a.fileName;
                c = m.getElementsByClassName(f.chatContainer.elementReferrer, "upload-error");
                if (c.length)
                    for (var n = 0; n < c.length; n++) c[n].parentNode.removeChild(c[n]);
                b.fileUploadHandler.getUploadHandler(function(c) {
                    var r;
                    c.handle ? (r = c.handle, g = m.escapeTemplateReplacement(g, [{
                        placeholder: "__HANDLE__",
                        textReplace: r
                    }, {
                        placeholder: "__FILE_NAME__",
                        textReplace: m.rawEncode(l)
                    }]), f.chatContainer.getElementById("chatWrapper").innerHTML += g, 1 >= y.chatOrder && (A ? b.viewHandler.hideEmbeddedGreetings() :
                        f.hideEmbeddedGreetings()), k && f.scrollToBottom(), b.fileUploadHandler.uploadFile(r, a, l, h, function(b, c) {
                        b.success ? d() : (f.handleUploadError(a, l, r, h, c), e.value = "")
                    })) : (f.handleUploadError(a, l, r, h), e.value = "")
                })
            };
            G.prototype.handleUploadError = function(a, h, d, l, c) {
                var e = this.ifScrollbarDown(),
                    f = this,
                    g = document.createElement("a"),
                    k = document.createElement("div");
                c = c || "generalUploadError";
                h = "<span>!</span> " + b.languageParser.translate("chat", c, {
                    fileName: m.rawEncode(h)
                });
                k.setAttribute("class", "upload-error");
                k.innerHTML = h;
                if (a || l) {
                    if (d) {
                        h = this.chatContainer.getElementById("upload-" + d);
                        if (!h) return;
                        h.parentNode.removeChild(h);
                        if (a && !(l || c && "generalUploadError" !== c)) {
                            g.innerHTML = b.languageParser.translate("chat", "retry");
                            g.setAttribute("href", "javascript:void(0);");
                            g.setAttribute("id", "retry-" + d);
                            k.appendChild(g);
                            var n;
                            n = b.eventHandler.listen(g, this.clickEvent, function() {
                                b.eventHandler.removeEventHandler(g, this.clickEvent, n);
                                k.parentNode.removeChild(k);
                                f.startUpload(a)
                            }, "retry-" + d)
                        }
                    }
                    this.chatContainer.getElementById("chatContainer").appendChild(k);
                    e && this.scrollToBottom()
                }
            };
            G.prototype.updateFileProgress = function(a) {
                var b = this.chatContainer.getElementById("upload-" + a.handle);
                b && (b.getElementsByClassName("progress-bar")[0].style.width = a.progress + "%")
            };
            G.prototype.fileUploaded = function(a) {
                (a = this.chatContainer.getElementById("upload-" + a)) && a.parentNode.removeChild(a)
            };
            G.prototype.retryUploadFile = function(a) {
                var b = this,
                    d, l;
                this.retryUploadList[a] && this.startUpload(this.retryUploadList[a], null, function() {
                    d = b.chatContainer.getElementById(a);
                    l = d.parentNode;
                    l.removeChild(d);
                    l.parentNode.removeChild(l);
                    delete b.retryUploadList[a];
                    Object.keys(b.retryUploadList).length || b.chatContainer.getElementById("maxFileNotificationContainer").classList.add("hidden");
                    d = null
                })
            };
            G.prototype.checkUploadFileWarning = function(a, h) {
                var d = this.chatContainer.getElementById("maxFileNotificationContainer"),
                    l = this.chatContainer.getElementById("maxSizeNotificationContainer"),
                    c = this.chatContainer.getElementById("maxFileSizeList"),
                    e = this.chatContainer.getElementById("maxFileNumberList"),
                    f = this,
                    g;
                if (h.length) {
                    g = "<ul>";
                    this.retryUploadList = {};
                    for (var k = 0; k < h.length; k++) this.retryUploadList["retry_upload_" + k] = h[k], g += "<li>" + h[k].name + ' <a id="retry_upload_' + k + '" class="actionRetry">' + b.languageParser.translate("notifications", "retry") + "</a></li>";
                    e.innerHTML = g + "</ul>";
                    g = m.getElementsByClassName(e, "actionRetry");
                    for (e = 0; e < g.length; e++) g[e].addEventListener(f.clickEvent, function() {
                        this.classList.add("hidden");
                        f.retryUploadFile(this.id)
                    });
                    d.classList.remove("hidden")
                }
                if (a.length) {
                    g = "<ul>";
                    for (d = 0; d < a.length; d++) g += "<li>" + a[d].name + "</li>";
                    c.innerHTML = g + "</ul>";
                    l.classList.remove("hidden")
                }
                g && this.scrollToBottom()
            };
            G.prototype.applyWhiteLabelSettings = function() {
                var a, b, d;
                this.chatContainer && (a = this.chatContainer.documentRef.getElementById(this.tawktoLinkName), b = this.chatContainer.documentRef.getElementById(this.bottomContainerName), d = {
                    id: this.tawktoLinkName,
                    parentElem: b,
                    siblingName: b.nextSibling ? b.nextSibling.id : null,
                    grandParentName: b.parentNode.id
                }, f.whiteLabel() ? (d.url = f.whiteLabel().url ||
                    null, d.label = m.transformLabel(m.rawEncode(f.whiteLabel().label)), d.textColor = f.whiteLabel().textColor || "#000000") : (d.url = "javascript:void(0);", d.label = u["default-branding"]), m.insertRandomTagsBeforeAndAfter(b, b.parentNode, "div"), m.insertRandomTagsBeforeAndAfter(a, a.parentNode, "a"), m.applyWhiteLabelSettings(a, d))
            };
            G.prototype.showCallRequest = function(a, h, d) {
                var l, c, e = this;
                l = u.incomingCallRequest;
                var g = (new Date).getTime();
                d = (new Date(d)).getTime();
                g = h - (g - d);
                d = this.chatContainer.getElementById("incoming-call");
                d || (h = this.ifScrollbarDown(), b.chatHandler.webrtcWin && !b.chatHandler.webrtcWin.closed ? b.chatHandler.webrtcWin.focus() : (l = l.replace(/__INCOMING_CALL__/, b.languageParser.translate("chat", "incoming_call_message")), l = l.replace(/__ACCEPT_CALL__/, b.languageParser.translate("chat", "accept_call")).replace(/__DECLINE_CALL__/, b.languageParser.translate("chat", "decline_call")), clearTimeout(this.incomingCallTimeout), d = new D("incoming-call"), d.template = l, d.buildView(), l = this.chatContainer.getElementById("chatContainer"),
                    c = l.parentNode, l && c && (c.insertBefore(d.elementReferrer, l), l.style.top = d.elementReferrer.offsetHeight + "px", l = this.chatContainer.getElementById("accept-call"), d = this.chatContainer.getElementById("decline-call"), h && this.scrollToBottom(), b.eventHandler.listen(l, this.clickEvent, function() {
                        clearTimeout(e.incomingCallTimeout);
                        m.getWebRTCToken(!1, !1, function() {
                            e.removeCallRequest()
                        })
                    }, "acceptVideoCall"), b.eventHandler.listen(d, this.clickEvent, function() {
                        clearTimeout(e.incomingCallTimeout);
                        m.rejectCall(a,
                            function() {
                                e.removeCallRequest()
                            })
                    }, "declineVideoCall"), this.incomingCallTimeout = setTimeout(function() {
                        e.removeCallRequest()
                    }, g), f.isPopup || (b.viewHandler.isMaximized || f.isEmbedded) || ("max" !== f.onClickAction || this.agentHasMessaged || A || this.hasBeenMaximizedOnce ? f.hideWidgetOnLoad || b.viewHandler.indicator.show() : (b.viewHandler.userAction = !1, b.sessionHandler.notifyWindowState("max"), this.hasBeenMaximizedOnce = !0)), b.audioPlayer.play("chat_sound"))))
            };
            G.prototype.removeCallRequest = function() {
                var a = this.chatContainer.getElementById("incoming-call"),
                    b = this.chatContainer.getElementById("chatContainer");
                a && (a.parentNode.removeChild(a), b.style.top = "0px")
            };
            G.prototype.subscribeCallUpdate = function(a) {
                var h, d, l, c, e, f, g, k = this,
                    n = this.chatContainer.documentRef,
                    p = this.callData[a],
                    q = this.ifScrollbarDown();
                p ? h = p.callView : (h = new D(a, null, {
                        className: "webrtcCallContainer messageContainer clearfix"
                    }, null, n), h.template = u.callInfo, h.buildView(), n.getElementById("chatWrapper").insertBefore(h.elementReferrer, n.getElementById("agentTypingContainer")), 1 >= y.chatOrder &&
                    this.hideEmbeddedGreetings(), this.callData[a] = {
                        callView: h
                    });
                d = m.getElementsByClassName(h.elementReferrer, "loader");
                l = m.getElementsByClassName(h.elementReferrer, "callInfoContainer");
                c = m.getElementsByClassName(h.elementReferrer, "callIconWrapper");
                e = m.getElementsByClassName(h.elementReferrer, "callErrorContainer");
                d && d.length && (d[0].style.display = "block");
                e && e.length && (e[0].style.display = "none");
                b.socketManager.sendToConnector("getCallStatus", {
                    callId: a
                }, function(n, p) {
                    d && d.length && (d[0].style.display =
                        "none");
                    n ? (l && l.length && (l[0].style.display = "none"), e && e.length ? e[0].style.display = "block" : (g = u.callError.replace("__HEADER__", b.languageParser.translate("chat", "error_title")).replace("__MESSAGE__", b.languageParser.translate("chat", "call_error_load")).replace("__ACTION__", b.languageParser.translate("notifications", "retry")), e = m.createElement(k.chatContainer.documentRef, "div", null, null, g), e.className = "callErrorContainer", e.style.display = "block", h.elementReferrer.appendChild(e)), (f = m.getElementsByClassName(h.elementReferrer,
                        "retry-load")) && f.length && b.eventHandler.listen(f[0], k.clickEvent, function() {
                        k.subscribeCallUpdate(a)
                    }, "retryCallLoad" + a)) : (l && l.length && (l[0].style.display = "block"), callIcon = p.data.call.f.vid ? '<div class="videoCallIcon icon"></div>' : p.data.call.f.scrn ? '<div class="screenShareIcon icon"></div>' : '<div class="voiceCallIcon icon"></div>', c && c.length && (c[0].innerHTML = callIcon), k.callData[a].ver = p.data.call.ver, q && k.scrollToBottom(), k.updateCallView(p.data.call))
                })
            };
            G.prototype.updateCallView = function(a) {
                var h,
                    d, l, c, e, f = !!a.mssd;
                l = !!a.rjctd;
                d = this.callData[a.clid];
                if (!d) return this.subscribeCallUpdate(a.clid);
                d.ver > a.ver || (e = this.ifScrollbarDown(), d = d.callView, "ringing" === a.stts ? ("v" !== a.cllr.t && this.showCallRequest(a.clid, a.rt, a.so), h = b.languageParser.translate("chat", ("v" === a.cllr.t ? "visitor_" : "agent_") + "ringing")) : "in-progress" === a.stts ? (this.removeCallRequest(), h = b.languageParser.translate("chat", "ongoing_call")) : "completed" === a.stts && (c = m.parseChatTime(a.so), this.removeCallRequest(), f || l ? (h = l ? b.languageParser.translate("chat",
                    "rejected_call") : b.languageParser.translate("chat", "missed_" + ("v" === a.cllr.t ? "agent" : "visitor")), l = b.languageParser.translate("chat", "call_started_on", {
                    startedOn: c
                })) : (l = "<b> " + m.getTimeDifference(a.so, a.eo) + "</b>", h = b.languageParser.translate("chat", "completed_call"), l = b.languageParser.translate("chat", "call_end_details", {
                    startedOn: c,
                    duration: l
                })), (c = m.getElementsByClassName(d.elementReferrer, "callEndDetails")) && c.length && (c[0].innerHTML = l, c[0].style.display = "block")), (d = m.getElementsByClassName(d.elementReferrer,
                    "callTitle")) && d.length && (d[0].innerHTML = h, f && (d[0].className += " missed")), this.callData[a.clid].ver = a.ver, e && this.scrollToBottom())
            };
            var P = function() {
                var a = this;
                this.currentForm = "";
                this.formView = null;
                this.forms = {
                    nameForm: {
                        id: "changeNameForm",
                        title: "NameFormMessage",
                        fields: [{
                            fieldName: "name",
                            valueMaxLength: 40,
                            languageKey: "Name",
                            getValue: b.visitorHandler.getNameValue,
                            validation: "isValidString",
                            type: "input",
                            isRequired: !0
                        }],
                        publish: "notifyNameChange",
                        afterSave: b.visitorHandler.setNameFromForm,
                        resize: "164px"
                    },
                    emailTranscriptForm: {
                        id: "emailTranscriptForm",
                        title: "EmailTranscriptFormMessage",
                        fields: [{
                            fieldName: "name",
                            valueMaxLength: 40,
                            languageKey: "Name",
                            getValue: b.visitorHandler.getNameValue,
                            validation: "isValidString",
                            type: "input",
                            hiddenIE8: !0,
                            isRequired: !0
                        }, {
                            fieldName: "transcriptEmail",
                            valueMaxLength: 150,
                            languageKey: "Email",
                            getValue: b.visitorHandler.getTranscriptEmailValue,
                            validation: "isValidEmail",
                            type: "input",
                            instantValidation: !1,
                            isRequired: !0
                        }],
                        saveFunc: "requestEmailTranscript",
                        afterSave: b.visitorHandler.setTranscriptValue,
                        resize: "164px"
                    },
                    offlineForm: {
                        id: "offlineForm",
                        getTitle: function() {
                            return m.transformGreetings(f.offlineOptions.text)
                        },
                        dynamicFields: null,
                        saveFunc: "submitOfflineForm",
                        dontCloseForm: !0,
                        afterSave: a.showOfflineOverlay
                    },
                    preChatForm: {
                        id: "preChatForm",
                        getTitle: function() {
                            return f.prechatOptions.text ? m.transformGreetings(f.prechatOptions.text) : f.isEmbedded && "page" === $_Tawk_WidgetId && pageType && "profile" === pageType ? b.languageParser.translate("form", "PreChatFormMessageProfile") : b.languageParser.translate("form",
                                "PreChatFormMessage")
                        },
                        dynamicFields: null,
                        saveFunc: "submitPrechatForm",
                        afterSave: a.handlePrechatForm,
                        dontCloseForm: !1
                    },
                    inactivityOverlay: {
                        id: "inactivityOverlay",
                        overlayMessage: "inactive",
                        otherEvent: {
                            eventName: "click",
                            elementName: "inactivityOverlay",
                            executedFunc: b.main.criticalRefresh
                        }
                    },
                    maintenanceOverlay: {
                        id: "maintenanceOverlay",
                        overlayMessage: "maintenance"
                    },
                    endChatForm: {
                        id: "endChatForm",
                        publish: "endVisitorChat",
                        afterSave: a.handleChatEnded,
                        dontCloseForm: !1,
                        resize: "109px",
                        getTitle: function() {
                            return b.languageParser.translate("form",
                                "EndChatTitle")
                        }
                    }
                };
                b.eventEmitter.on("localeChanged", function() {
                    var b = a.currentForm;
                    b && (a.closeForm(), a.openForm(b))
                });
                E.displayName.subscribe(function(b) {
                    !a.currentForm || "preChatForm" !== a.currentForm && "offlineForm" !== a.currentForm || a.formView.updateName(b)
                });
                E.email.subscribe(function(b) {
                    !a.currentForm || "preChatForm" !== a.currentForm && "offlineForm" !== a.currentForm || a.formView.updateEmail(b)
                })
            };
            P.prototype.openForm = function(a) {
                var h = this,
                    d = b.viewHandler.chatContainer.getElementById("formContainer"),
                    l = this.forms[a];
                l && (this.currentForm !== a && d) && (this.formView = null, this.formView = "preChatForm" === a || "offlineForm" === a ? new da(l, a) : new ma(l), this.formView.buildForm(), this.currentForm = a, this.formView.buildView(b.viewHandler.chatContainer.documentRef), d.innerHTML = "", d.appendChild(this.formView.elementReferrer), d.style.display = "block", this.attachEventListeners(), this.formView.addPlaceholderHandler(), A || (l.resize ? (d.style.height = l.resize, d.style.top = "auto") : (d.style.height = "auto", d.style.top = "45px")),
                    b.eventHandler.listen(e, "resize", function() {
                        h.resize()
                    }, "windowresizeform"), this.resize(), m.redraw(d), b.eventEmitter.emit("formOpened"))
            };
            P.prototype.showOfflineOverlay = function(a) {
                b.viewHandler.chatContainer.getElementById("formContainer").className += " success"
            };
            P.prototype.resize = function() {
                var a, h, d, l, c;
                null !== this.formView && A && (l = b.viewHandler.chatContainer.getElementById("formContainer"), d = b.viewHandler.chatContainer.getElementById("formInnerHeight"), c = b.viewHandler.chatContainer.getElementById("topBarContainer"),
                    l && (a = m.getElementsByClassName(l, "formMessageField"), h = m.getElementsByClassName(l, "longFormContainer"), a && (a.length && h && h.length) && (longFormBottomContainerHeight = m.getElementsByClassName(l, "longFormBottomContainer")[0].clientHeight, h[0].style.height = b.viewHandler.iframeContainer.clientHeight - c.clientHeight - longFormBottomContainerHeight + "px"), !d || "android" !== A && "android2" !== A && "android2.3" !== A || (d.style.overflow = "hidden", b.viewHandler.addOverflowScroll(d))))
            };
            P.prototype.closeForm = function() {
                var a =
                    b.viewHandler.chatContainer.getElementById("formContainer"),
                    h = b.viewHandler.chatContainer.getElementById("submitWrapper");
                a && (this.formView && this.currentForm) && (this.formView = null, this.currentForm = "", a.innerHTML = "", a.style.display = "none", a.className.substring("success", ""), h && (h.className = ""), b.eventEmitter.emit("formClosed"))
            };
            P.prototype.attachEventListeners = function() {
                var a = this,
                    h = this.formView.formData,
                    d = b.viewHandler.chatContainer.getElementById("formCancel"),
                    l = b.viewHandler.chatContainer.getElementById("formSubmit"),
                    c = b.viewHandler.chatContainer.getElementById("formCloseChat"),
                    e = b.viewHandler.chatContainer.getElementById("resendButton"),
                    f = this.formView.formData.fields || [];
                this.formView.formData.dynamicFields && (f = this.formView.formData.dynamicFields);
                d && b.eventHandler.listen(d, b.viewHandler.clickEvent, function() {
                    a.closeForm()
                }, "formcancelclick");
                l && b.eventHandler.listen(l, b.viewHandler.clickEvent, function() {
                    a.submitForm()
                }, "formsubmitclick");
                c && b.eventHandler.listen(c, b.viewHandler.clickEvent, function() {
                    b.viewHandler.maximizedWidget ?
                        (b.viewHandler.maximizedWidget.container.hide(), b.viewHandler.isMaximized = !1, b.viewHandler.show()) : b.main.hideWidget()
                }, "formcloseclick");
                e && b.eventHandler.listen(e, b.viewHandler.clickEvent, function() {
                    b.viewHandler.chatContainer.getElementById("submitWrapper").className = b.viewHandler.chatContainer.getElementById("submitWrapper").className.substring("visible", "");
                    b.viewHandler.chatContainer.getElementById("formContainer").className = b.viewHandler.chatContainer.getElementById("formContainer").className.substring("success",
                        "")
                }, "resendButtonClick");
                f.forEach(function(d) {
                    if (!d.disabled) {
                        var h = b.viewHandler.chatContainer.getElementById(d.fieldName + "Field"),
                            l = b.viewHandler.chatContainer.getElementById(d.fieldName + "FieldError"),
                            c = b.languageParser.translate("form", d.languageKey + "Placeholder"),
                            e = b.viewHandler.chatContainer.getElementById(d.fieldName + "FieldValid");
                        if (h) {
                            if (d.instantValidation)
                                if (-1 === (" " + h.parentNode.className + " ").indexOf("valid") && -1 === (" " + h.parentNode.className + " ").indexOf("error")) {
                                    var r = h.value;
                                    if (r =
                                        c === r ? null : m.trim(r)) a[d.validation](r, d.valueMaxLength, d.isRequired) ? (l.innerHTML = "", l.style.display = "none", h.parentNode.className += " valid", e && (e.style.display = "block")) : (l.innerHTML = b.languageParser.translate("form", d.languageKey + "ErrorMessage"), l.style.display = "block", h.parentNode.className += " error")
                                } else h.parentNode.className = h.parentNode.className.replace(" valid", ""), h.parentNode.className = h.parentNode.className.replace(" error", "");
                            "textarea" !== h.nodeName.toLowerCase() && b.eventHandler.listen(h,
                                "keypress",
                                function(b) {
                                    13 === b.keyCode && a.submitForm()
                                }, "formkeypress" + d.fieldName);
                            "options" === d.type && d.instantValidation && (h.parentNode.style.paddingRight = "15px", b.eventHandler.listen(h, "change", function(r) {
                                r = c === h.value ? null : m.trim(h.value);
                                r = a[d.validation](r, d.valueMaxLength, d.isRequired);
                                h.parentNode.className = h.parentNode.className.replace(" error", "");
                                r ? (l.innerHTML = "", l.style.display = "none", -1 === (" " + h.parentNode.className + " ").indexOf("valid") && (h.parentNode.className += " valid", -1 < (" " +
                                    h.parentNode.className + " ").indexOf("other-fix") && (h.parentNode.style.paddingRight = "0px")), e && (e.style.display = "block")) : (l.innerHTML = b.languageParser.translate("form", d.languageKey + "ErrorMessage"), l.style.display = "block", h.parentNode.className += " error", h.parentNode.className = h.parentNode.className.replace(" valid", ""), e && (e.style.display = "none"))
                            }, "formselectchange" + d.fieldName));
                            b.eventHandler.listen(h, "keydown", function(r) {
                                setTimeout(function() {
                                    var r;
                                    d.instantValidation ? (r = c === h.value ? null : m.trim(h.value),
                                        r = a[d.validation](r, d.valueMaxLength, d.isRequired), h.parentNode.className = h.parentNode.className.replace(" error", ""), r ? (l.innerHTML = "", l.style.display = "none", -1 === (" " + h.parentNode.className + " ").indexOf("valid") && (h.parentNode.className += " valid"), e && (e.style.display = "block")) : (l.innerHTML = b.languageParser.translate("form", d.languageKey + "ErrorMessage"), l.style.display = "block", h.parentNode.className += " error", h.parentNode.className = h.parentNode.className.replace(" valid", ""), e && (e.style.display =
                                            "none"))) : "" !== l.innerHTML && (l.innerHTML = "", l.style.display = "none", h.parentNode.className = h.parentNode.className.replace(" error", ""))
                                }, 1)
                            }, "formkeydown" + d.fieldName)
                        }
                    }
                });
                if (h.otherEvent) {
                    var g = h.otherEvent;
                    (h = b.viewHandler.chatContainer.getElementById(g.elementName)) && b.eventHandler.listen(h, g.eventName, function(a) {
                        g.executedFunc()
                    }, "formother")
                }
            };
            P.prototype.submitForm = function() {
                var a, h = this,
                    d = b.viewHandler.chatContainer.getElementById("formSubmit"),
                    l = b.viewHandler.chatContainer.getElementById("formCancel"),
                    e = b.viewHandler.chatContainer.getElementById("formCloseChat"),
                    f = b.viewHandler.chatContainer.getElementById("submitWrapper");
                f.innerHTML = '<p id="submitWrapperMessage">' + b.languageParser.translate("form", "SubmittingProcess") + '</p><div id="submitWrapperIcon"></div>';
                f.className = "visible";
                a = this.validateForm();
                if (null === a) f.className = "";
                else {
                    d.setAttribute("disabled", "disabled");
                    l && l.setAttribute("disabled", "disabled");
                    e && e.setAttribute("disabled", "disabled");
                    if (this.formView.formData.publish) return b.socketManager.sendToConnector(this.formView.formData.publish,
                        a,
                        function(b, d) {
                            a.serverData = d;
                            h.handleAfterSave(b, a)
                        });
                    if (this.formView.formData.saveFunc) try {
                        b.eventEmitter.emit(this.formView.formData.saveFunc, a, function(b, d) {
                            a.serverData = d;
                            h.handleAfterSave(b, a)
                        })
                    } catch (g) {
                        h.handleAfterSave(!0), c.handleError("Unable to emit form handler save func : " + this.formView.formData.saveFunc + " with data : " + $_TAWK_JSON.stringify(a), g.fileName, g.lineNumber, g.stack)
                    }
                }
            };
            P.prototype.handleAfterSave = function(a, h) {
                var d, l, c, e;
                if (b && b.formHandler.formView && b.formHandler.formView.formData) {
                    d =
                        b.formHandler.formView.formData.afterSave;
                    l = b.viewHandler.chatContainer.getElementById("formSubmit");
                    c = b.viewHandler.chatContainer.getElementById("formCancel");
                    e = b.viewHandler.chatContainer.getElementById("formCloseChat");
                    b.viewHandler.chatContainer.getElementById("submitWrapper");
                    l.removeAttribute("disabled");
                    c && c.removeAttribute("disabled");
                    e && e.removeAttribute("disabled");
                    if (a) return this.updateFormStatus(a);
                    d && d(h);
                    this.formView.formData.dontCloseForm ? this.updateFormStatus() : this.closeForm()
                }
            };
            P.prototype.updateFormStatus = function(a) {
                var h, d, l;
                b.viewHandler.chatContainer && (h = b.viewHandler.chatContainer.getElementById("formSavingStatus"), d = b.viewHandler.chatContainer.getElementById("savingStatus"), l = b.viewHandler.chatContainer.getElementById("submitWrapper"), h && d ? a ? (h.className = "errorMessage", d.innerHTML = b.languageParser.translate("form", "errorSaving"), a = m.getElementsByClassName(b.viewHandler.chatContainer.documentRef, "longFormContainer"), a.length && (a[0].scrollTop = 999999999999)) : (h.className =
                    "", d.innerHTML = b.languageParser.translate("form", "saved")) : this.currentForm && "offlineForm" === this.currentForm ? a ? (l.className = "visible", l.innerHTML = "<p>" + b.languageParser.translate("form", "OfflineMessageNotSent") + "</p>", setTimeout(function() {
                    l.className = ""
                }, 3E3)) : (l.className = "", this.clearForm()) : l.className = "")
            };
            P.prototype.validateForm = function() {
                var a, h = {},
                    d = 0,
                    l = this;
                if (this.formView) return a = this.formView.formData.fields || [], this.formView.formData.dynamicFields && (a = this.formView.formData.dynamicFields),
                    a.forEach(function(a) {
                        var c, e, f, g;
                        "additionalQuestion" === a.fieldName && a.getValue && m.isArray(a.getValue()) ? (h.additionalQuestion = {}, a.getValue().forEach(function(d, l) {
                            (e = b.viewHandler.chatContainer.getElementById(a.fieldName + l)) && (h.additionalQuestion[l] = d === e.value ? null : m.trim(e.value))
                        })) : "choice" === a.fieldType || "option" === a.fieldType ? (g = b.viewHandler.chatContainer.documentRef.getElementsByName(a.fieldName + "group"), f = b.viewHandler.chatContainer.getElementById(a.fieldName + "FieldError"), c = b.viewHandler.chatContainer.getElementById(a.fieldName +
                            "Container"), g = "choice" === a.fieldType ? l.getSelectedCheckbox(g, a.isRequired) : l.getSelectedRadio(g, a.isRequired), f.innerHTML = "", f.style.display = "none", c.className = c.className.replace("error", ""), null === g ? (d++, g = !1, f.innerHTML = b.languageParser.translate("form", a.languageKey + "ErrorMessage"), f.style.display = "block", c.className += " error") : h[a.fieldName] = g) : (e = b.viewHandler.chatContainer.getElementById(a.fieldName + "Field"), f = b.viewHandler.chatContainer.getElementById(a.fieldName + "FieldError"), e && (c = a.placeholderText ===
                            e.value ? null : m.trim(e.value), g = l[a.validation](c, a.valueMaxLength, a.isRequired), f.innerHTML = "", f.style.display = "none", e.parentNode.className = e.parentNode.className.replace("error", ""), g ? h[a.fieldName] = c : (d++, f.innerHTML = b.languageParser.translate("form", a.languageKey + "ErrorMessage"), f.style.display = "block", e.parentNode.className += " error")))
                    }), 0 < d ? null : h
            };
            P.prototype.isValidString = function(a, b, d) {
                return d || a ? !(!a || !m.isString(a) || b && !(b && a.length <= b)) : !0
            };
            P.prototype.isValidEmail = function(a, b, d) {
                return d ||
                    a ? !!(a && m.isEmail(a) && m.isString(a) && a.length <= b) : !0
            };
            P.prototype.isValidDepartment = function(a, b, d) {
                var l;
                b = t.departments;
                if (!(d || a && "0" !== a)) return !0;
                for (l in b)
                    if (b[l].did === a) return !0;
                return !1
            };
            P.prototype.getSelectedCheckbox = function(a, b) {
                for (var d = [], l = 0, c = a.length; l < c; l++) a[l].checked && d.push(a[l].value);
                return !d.length && b ? null : d
            };
            P.prototype.getSelectedRadio = function(a, b) {
                for (var d = "", l = 0, c = a.length; l < c; l++)
                    if (a[l].checked) {
                        d = a[l].value;
                        break
                    }
                return !d && b ? null : d
            };
            P.prototype.isValidPhone = function(a,
                b, d) {
                if (!d && !a) return !0;
                "+" === a.charAt(0) && (a = a.replace("+", ""));
                return !!(a.length && 7 <= a.length && a.match(/[0-9]/im))
            };
            P.prototype.handlePrechatForm = function(a) {
                a = m.getDepartmentStatus(a.department);
                a.isOnline || b.viewHandler.notifiyDepartmentIsNotOnline(a.name, a.status);
                b.formHandler.formView.formData.dontCloseForm = !1
            };
            P.prototype.handleChatEnded = function(a) {
                b.formHandler.formView.formData.dontCloseForm = !1;
                b.chatHandler.endChat(a.serverData.chatEndVersion)
            };
            P.prototype.clearForm = function() {
                var a = this.formView.formData.fields || [];
                this.formView.formData.dynamicFields && (a = this.formView.formData.dynamicFields);
                a.forEach(function(a, d) {
                    var l;
                    if ("name" !== a.fieldType && "email" !== a.fieldType && "department" !== a.fieldType)
                        if ("choice" === a.fieldType || "option" === a.fieldType) {
                            l = b.viewHandler.chatContainer.documentRef.getElementsByName(a.fieldName + "group");
                            for (var c = 0, e = l.length; c < e; c++) l[c].checked = !1
                        } else if (l = b.viewHandler.chatContainer.getElementById(a.fieldName + "Field")) l.value = "", "choice" === a.fieldType || "option" === a.fieldType || la ||
                        (l.value = a.placeholderText)
                })
            };
            var V = TawkClass.extend({
                init: function() {
                    var a = this,
                        b = f.minimizedDimensions().width,
                        d = f.minimizedDimensions().height;
                    this.shown = this.inDocument = !1;
                    f.isDesktopRectangle() ? (this.frameHeight = d + "px", this.frameWidth = b + "px", this.container = new S(m.getRandomName(), m.getGenericStyle({
                            zindex: "1000001",
                            position: "fixed",
                            bottom: "0px",
                            display: "none",
                            height: this.frameHeight,
                            width: this.frameWidth,
                            maxheight: this.frameHeight,
                            maxwidth: this.frameWidth,
                            minheight: "40px",
                            minwidth: "126px"
                        }),
                        ga, "iframe"), this.container.template = u["tawkchat-minified-iframe-element-rectangle"], this.chatIndicator = new S(m.getRandomName(), m.getGenericStyle({
                        zindex: "1000003",
                        margin: "0px",
                        width: this.frameWidth,
                        height: "37px",
                        position: "fixed",
                        display: "none",
                        bottom: d + "px",
                        left: "100%",
                        maxheight: "37px",
                        maxwidth: this.frameWidth,
                        minheight: "37px",
                        minwidth: this.frameWidth
                    }), ga, "iframe")) : (this.frameHeight = "66px", this.frameWidth = "62px", this.container = new S(m.getRandomName(), m.getGenericStyle({
                        zindex: "1000001",
                        position: "fixed",
                        bottom: "0px",
                        display: "none",
                        height: this.frameHeight,
                        width: this.frameWidth,
                        maxheight: this.frameHeight,
                        maxwidth: this.frameWidth,
                        minheight: this.frameHeight,
                        minwidth: this.frameWidth
                    }), ga, "iframe"), this.container.template = u["tawkchat-minified-iframe-element-round"], this.chatIndicator = new S(m.getRandomName(), m.getGenericStyle({
                            zindex: "1000003",
                            margin: "0px",
                            width: "60px",
                            height: "22px",
                            position: "fixed",
                            display: "none",
                            bottom: "57px",
                            left: "100%",
                            maxheight: "22px",
                            maxwidth: "60px",
                            minheight: "22px",
                            minwidth: "60px"
                        }),
                        ga, "iframe"));
                    this.bubbleContainer = new S(m.getRandomName(), m.getGenericStyle({
                        zindex: "1000000",
                        width: "146px",
                        height: "85px",
                        position: "fixed",
                        display: "none",
                        bottom: d + 2 + "px",
                        right: "20px",
                        maxheight: "85px",
                        maxwidth: "146px",
                        minheight: "85px",
                        minwidth: "146px"
                    }), ga, "iframe");
                    36 > d - 6 && (this.agentDetails = "tawkchat-agent-details");
                    f.minimizedDimensions.subscribe(function(b) {
                        a.frameHeight = b.height + "px";
                        a.frameWidth = b.width + "px";
                        a.widgetDimensionsUpdated()
                    });
                    t.pageStatus.subscribe(function(b) {
                        a.updateGreetings(b);
                        a.updateStatus(b)
                    });
                    t.chatBubbleClosed.subscribe(function(b) {
                        a.bubbleContainer.clear()
                    });
                    f.chatBubble.subscribe(function() {
                        a.bubbleSettingsChanged()
                    });
                    f.isRTL.subscribe(function() {
                        a.bubbleSettingsChanged()
                    });
                    f.desktopWidget.subscribe(function() {
                        b = f.minimizedDimensions().width;
                        d = f.minimizedDimensions().height;
                        "min" === f.desktopWidget() ? (a.frameHeight = "66px", a.frameWidth = "62px", a.container.template = u["tawkchat-minified-iframe-element-round"], a.container.massRestyle(m.getGenericStyle({
                            zindex: "1000001",
                            position: "fixed",
                            bottom: "0px",
                            display: "none",
                            height: a.frameHeight,
                            width: a.frameWidth,
                            maxheight: a.frameHeight,
                            maxwidth: a.frameWidth,
                            minheight: a.frameHeight,
                            minwidth: a.frameWidth
                        })), a.chatIndicator.massRestyle(m.getGenericStyle({
                            zindex: "1000003",
                            margin: "0px",
                            width: "60px",
                            height: "22px",
                            position: "fixed",
                            display: "none",
                            bottom: "57px",
                            left: "100%",
                            maxheight: "22px",
                            maxwidth: "60px",
                            minheight: "22px",
                            minwidth: "60px"
                        })), a.bubbleContainer = null) : (a.frameHeight = d + "px", a.frameWidth = b + "px", a.container.template = u["tawkchat-minified-iframe-element-rectangle"],
                            a.container.massRestyle(m.getGenericStyle({
                                zindex: "1000001",
                                position: "fixed",
                                bottom: "0px",
                                display: "none",
                                height: a.frameHeight,
                                width: a.frameWidth,
                                maxheight: a.frameHeight,
                                maxwidth: a.frameWidth,
                                minheight: "40px",
                                minwidth: "126px"
                            })), a.chatIndicator.massRestyle(m.getGenericStyle({
                                zindex: "1000003",
                                margin: "0px",
                                width: a.frameWidth,
                                height: "37px",
                                position: "fixed",
                                display: "none",
                                bottom: d + "px",
                                left: "100%",
                                maxheight: "37px",
                                maxwidth: a.frameWidth,
                                minheight: "37px",
                                minwidth: a.frameWidth
                            })));
                        36 > d - 6 && (a.agentDetails =
                            "tawkchat-agent-details");
                        a.buildView();
                        a.updateStatus()
                    })
                },
                buildView: function() {
                    var a;
                    this.container && (this.chatIndicator.buildIframe(b.MinifiedStyle + f.minStyle()), a = m.getElementsByTagName(this.chatIndicator.documentRef, "body")[0], a.innerHTML = u["tawkchat-chat-indicator"], this.container.buildIframe(b.MinifiedStyle + f.minStyle()), this.bubbleContainer && (f.chatBubble() && this.bubbleContainer.elementReferrer ? this.bubbleContainer.buildIframe(b.MinifiedStyle + f.minStyle()) : this.bubbleContainer.clear()), this.widgetDimensionsUpdated(),
                        this.updateGreetings(), this.attachEvents(), this.inDocument = !0)
                },
                attachEvents: function() {
                    this.container && (this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        "max" === f.onClickAction ? (b.viewHandler.userAction = !0, b.sessionHandler.notifyWindowState("max")) : b.viewHandler.popoutWidget();
                        b.eventHandler.cancelEvent(a)
                    }, "tawkchat-minified-wrapper", "minifiedclick"), this.container.attachUserEventListener("mousedown", function(a) {
                            b.viewHandler.lastFocusedElement = e.document.activeElement
                        },
                        "tawkchat-minified-wrapper", "minifiedWidgetMouseDown"), this.attachBubbleEvents())
                },
                createCanvasChatBubble: function() {},
                createVMLChatBubble: function() {}
            });
            V.prototype.updateStatus = function(a) {
                var h;
                a || (a = t.pageStatus());
                if (this.container && a) {
                    if (h = this.container.getElementById("tawkchat-status-icon")) h.className = a;
                    if (h = this.container.getElementById("tawk-minified-mobile-text")) h.innerHTML = "online" === a || "away" === a ? "Chat" : "Mail";
                    try {
                        b.eventEmitter.emit("resizeIframeHeight")
                    } catch (d) {
                        c.handleError("Unable to emit resizeIframeHeight",
                            d.fileName, d.lineNumber, d.stack)
                    }
                }
            };
            V.prototype.attachBubbleEvents = function() {
                f.isDesktopRectangle() && this.bubbleContainer && this.bubbleContainer.attachUserEventListener(b.viewHandler.clickEvent, b.sessionHandler.closeBubble, "tawkchat-chat-bubble-close", "bubblecloseclick")
            };
            V.prototype.hide = function() {
                this.container && (this.shown = !1, this.container.restyle("display", "none !important"), this.toggleBubble())
            };
            V.prototype.show = function() {
                this.container && (this.shown = !0, this.container.restyle("display", "block !important"),
                    this.toggleBubble())
            };
            V.prototype.widgetDimensionsUpdated = function() {
                this.container && (minWidth = f.minimizedDimensions().width, minHeight = f.minimizedDimensions().height, this.container.massRestyle({
                    height: minHeight + "px !important",
                    "min-height": minHeight + "px !important",
                    "max-height": minHeight + "px !important",
                    width: minWidth + "px !important",
                    "min-width": minWidth + "px !important",
                    "max-width": minWidth + "px !important"
                }), this.widgetPositonChanged(), this.bubbleSettingsChanged(), this.calculateIndicatorPositioning())
            };
            V.prototype.bubbleSettingsChanged = function() {
                var a = f.chatBubble();
                if (!a && this.bubbleContainer) return this.bubbleContainer.clear();
                b && (b.viewHandler && b.viewHandler.iframeContainer && b.viewHandler.iframeContainer.elementReferrer && f.isDesktopRectangle()) && (a && (a.type && "default" !== a.type || this.bubbleContainer.elementReferrer && this.bubbleContainer.insertCssFile(".bubble-text-color{color:" + (f.chatBubble() ? f.chatBubble().fgc : "#ffffff") + ";}", !0), a && !this.bubbleContainer.elementReferrer && (b.viewHandler.iframeContainer.elementReferrer.appendChild(this.bubbleContainer.buildView()),
                    this.bubbleContainer.buildIframe(b.MinifiedStyle + f.minStyle()))),  this.attachBubbleEvents())
            };
            V.prototype.updateGreetings = function(a) {
                var b;
                a || (a = t.pageStatus());
                this.container && a && (b = this.container.getElementById("short-message")) && (a = q.getShortMessage(a), null !== a && (b.innerHTML = a))
            };
            V.prototype.clear = function() {
                this.container.clear();
                this.container = null
            };
            V.prototype.widgetPositonChanged = function() {
                var a = "",
                    b = N && 10 > H,
                    d = {},
                    l;
                f.isCenterPositioned() ? (l = f.isDesktopRectangle() ? -0.5 *
                    f.minimizedDimensions().width + 0.5 * f.minimizedDimensions().height + "px !important" : "15px !important", f.isRightPositioned() ? (a = "center right", f.isDesktopRectangle() && (d = m.getRotateStyling("-90", "50%")), d.right = l, d.left = "auto !important", b && (d.right = f.minimizedDimensions().height - f.minimizedDimensions().width + "px !important", d.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)")) : (a = "center left", f.isDesktopRectangle() && (d = m.getRotateStyling("90", "50%")), d.left = l, d.right = "auto !important",
                        b && (d.left = "0px !important", d.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)")), d.top = "50% !important", d.bottom = "auto !important", d.margin = b ? -0.5 * f.minimizedDimensions().width + "px 0 0 0 !important" : -0.5 * f.minimizedDimensions().height + "px 0 0 0 !important") : (d = m.getRotateStyling("0", "0"), d.margin = "0px !important", f.isTopPositioned() ? (d.top = f.isDesktopRectangle() ? "0 !important" : "15px !important", d.bottom = "auto !important", a = " top ") : (d.top = "auto !important", d.bottom = f.isDesktopRectangle() ?
                    "0 !important" : "10px !important", a = " bottom "), f.isRightPositioned() ? (a += " right ", d.right = f.isDesktopRectangle() ? "10px !important" : "15px !important", d.left = "auto !important") : (a += " left ", d.left = f.isDesktopRectangle() ? "10px !important" : "15px !important", d.right = "auto !important"), b && (d.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=0)"));
                this.container.documentRef.body.className = a + " " + (f.isDesktopRectangle() ? "rectangle" : "round");
                this.container.massRestyle(d)
            };
            V.prototype.createBubble =
                function() {
                    var a;
                    this.bubbleContainer && (this.bubbleContainer.elementReferrer && !f.hideWidget && f.chatBubble && !t.chatBubbleClosed()) && (f.chatBubble().type && "default" !== f.chatBubble().type ? this.createImageBubble() : this.createDefaultBubble(), a = this.bubbleContainer.getElementById("tawkchat-chat-bubble-close"), this.bubbleContainer.attachUserEventListener("mouseover", function() {
                        a && (a.style.visibility = "visible")
                    }, null, "bubbleHover"), this.bubbleContainer.attachUserEventListener("mouseout", function() {
                        a && (a.style.visibility =
                            "hidden")
                    }, null, "bubbleOut"), this.bubbleContainer.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        "max" === f.onClickAction ? (b.viewHandler.userAction = !0, b.sessionHandler.notifyWindowState("max")) : b.viewHandler.popoutWidget();
                        b.eventHandler.cancelEvent(a)
                    }, "bubble-image", "bubbleContainerClick"), this.toggleBubble())
                };
            V.prototype.calculateBubblePositioning = function(a, b, d, l, c, e, g) {
                var k = f.minimizedDimensions().width;
                f.minimizedDimensions();
                var n = {};
                m.getElementsByTagName(this.bubbleContainer.documentRef,
                    "body");
                var p = N && 10 > H;
                if (f.isCenterPositioned()) {
                    var q;
                    q = p && 0 !== e ? -0.5 * a : -0.5 * b;
                    0 === e ? (k = 0.5 * (k - b), centerPosition = d + "px !important") : (k = 0.5 * (k - a), centerPosition = -1 * (0.5 * (a - b) - d) + "px !important");
                    n = m.getRotateStyling(e, "49%");
                    f.isRightPositioned() ? (n.right = centerPosition, n.left = "auto !important", p && 0 !== e && (n.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)", n.right = d - (a - b) + "px !important")) : (n.left = centerPosition, n.right = "auto !important", p && 0 !== e && (n.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)",
                        n.left = d + "px !important"));
                    n.top = "50% !important";
                    n.bottom = "auto !important";
                    e = q - k + l
                } else n = m.getRotateStyling("0", "0"), e = "0", f.isTopPositioned() ? (n.top = l + "px !important", n.bottom = "auto !important", g += " top ") : (n.bottom = l + "px !important", n.top = "auto !important", g += " bottom "), f.isRightPositioned() ? (n.right = d + "px !important", n.left = "auto !important", g += " right ") : (n.left = d + "px !important", n.right = "auto !important", g += " left ");
                n.width = a + "px !important";
                n["max-width"] = a + "px !important";
                n["min-width"] =
                    a + "px !important";
                n.height = b + "px !important";
                n["max-height"] = b + "px !important";
                n["min-height"] = b + "px !important";
                n["z-index"] = (0 === c ? "1000000" : "1000002") + " !important";
                n.margin = e + "px 0 0 0 !important";
                this.bubbleContainer.massRestyle(n);
                this.bubbleContainer.documentRef.body.className += g
            };
            V.prototype.createDefaultBubble = function() {
                var a, b, d, l = 0;
                a = 0;
                a = !!document.createElement("canvas").getContext;
                var c = " default ";
                b = N && 9 > H;
                if (a || b) b = m.getElementsByTagName(this.bubbleContainer.documentRef, "body")[0],
                    b.innerHTML = u["tawkchat-chat-bubble-canvas"], a ? this.createCanvasChatBubble() : this.createVMLChatBubble(), a = this.bubbleContainer.getElementById("tawkchat-chat-bubble-text"), a.innerHTML = f.chatBubble().txt, a.style.color = f.chatBubble().fgc, f.isCenterPositioned() ? (f.isRightPositioned() ? (d = -90, l -= 10, f.isRTL() && (l = f.minimizedDimensions().width - 146)) : (d = 90, l = f.minimizedDimensions().width - 146 + 10, f.isRTL() && (l = 0)), a = f.minimizedDimensions().height + 2) : (l = f.minimizedDimensions().height + 2, a = !f.isRightPositioned() &&
                        !f.isRTL() || f.isRightPositioned() && f.isRTL() ? f.minimizedDimensions().width - 146 + 16 : 0), f.isRTL() && (c += " rtl-direction"), this.calculateBubblePositioning(146, 85, a, l, 0, d, c)
            };
            V.prototype.createImageBubble = function() {
                var a, b, d;
                d = m.getElementsByTagName(this.bubbleContainer.documentRef, "body")[0];
                var l = f.chatBubble(),
                    c = l.height + 16;
                "gallery" === l.type ? (a = " gallery ", b = "https://static-v.tawk.to/a-v3-39/images/bubbles/" + l.name + ".png") : (a = " upload ", b = "https://tawk.link/" + f.chatBubble().name);
                d.innerHTML = m.escapeTemplateReplacement(u["tawkchat-chat-bubble-gallery"], [{
                    placeholder: "__IMAGE_SRC__",
                    textReplace: b
                }]);
                f.isTopPositioned() || f.isCenterPositioned() ? (b = l.topOffset, f.isCenterPositioned() && 0 === l.rotate && (b -= 16)) : b = l.bottomOffset;
                d = f.isRightPositioned() ? l.rightOffset : l.leftOffset;
                f.isCenterPositioned() && 0 !== l.rotate && (d = "gallery" === l.type ? d - 3 : d + 2);
                this.calculateBubblePositioning(l.width, c, d, b, l.zIndex, l.rotate, a)
            };
            V.prototype.toggleBubble = function() {
                f.chatBubble && (this.bubbleContainer && this.bubbleContainer.elementReferrer) && (this.shown && "offline" !== t.pageStatus() ?
                    this.bubbleContainer.restyle("display", "block !important") : this.bubbleContainer.restyle("display", "none !important"))
            };
            V.prototype.agentBarChanged = function(a) {
                var b, d, l, c, e, g, k, m = {};
                f.hideWidget || (this.container.massRestyle({
                    height: a + "px !important",
                    "min-height": a + "px !important",
                    "max-height": a + "px !important"
                }), g = N && 10 > H, closeIconWidth = 16, minWidth = f.minimizedDimensions().width, minHeight = f.minimizedDimensions().height, b = f.chatBubble(), d = a - minHeight, k = b.rotate, b.type && "default" !== b.type ? (l = b.topOffset,
                    c = b.bottomOffset, bubbleWidth = b.width, bubbleContainerHeight = b.height + closeIconWidth, e = f.isRightPositioned() ? b.rightOffset : b.leftOffset) : (bubbleWidth = 146, bubbleContainerHeight = 85, f.isCenterPositioned() ? (e = minHeight + 2, k = f.isRightPositioned() ? -90 : 90) : (l = minHeight + 2, c = minHeight + 2, e = f.isRightPositioned() ? 0 : minWidth - bubbleWidth + closeIconWidth)), f.isCenterPositioned() && f.isDesktopRectangle() ? (l = -0.5 * minWidth + 0.5 * a + "px !important", e += d, d = 0 === k ? e + "px !important" : -1 * (0.5 * (bubbleWidth - bubbleContainerHeight) -
                    e) + "px !important", f.isRightPositioned() ? (this.container.restyle("right", l), this.chatIndicator.restyle("right", -0.5 * minWidth + 18.5 + a + "px !important"), m.right = d, g && (this.container.restyle("right", a - minWidth + "px !important"), this.chatIndicator.restyle("right", 37 - minWidth + a + "px !important"), 0 !== k && (m.right = e - (bubbleWidth - bubbleContainerHeight) + "px !important"))) : f.isCenterPositioned() || (this.container.restyle("left", l), this.chatIndicator.restyle("left", -0.5 * minWidth + 18.5 + a + "px !important"), m.left = d, g &&
                    (this.container.restyle("left", "0px !important"), this.chatIndicator.restyle("left", 37 - minWidth + a + "px !important"), 0 !== b.rotate && (m.left = e + "px !important"))), g ? this.container.restyle("margin", -0.5 * minWidth + "px 0 0 0 !important") : this.container.restyle("margin", -0.5 * a + "px 0 0 0 !important")) : !f.isCenterPositioned() && f.isDesktopRectangle() && (f.isTopPositioned() ? (this.chatIndicator.restyle("top", a + "px !important"), m.top = l + d + "px !important") : (this.chatIndicator.restyle("bottom", a + "px !important"), m.bottom =
                    c + d + "px !important")), this.bubbleContainer && (this.bubbleContainer.elementReferrer && f.chatBubble && !t.chatBubbleClosed()) && this.bubbleContainer.massRestyle(m))
            };
            V.prototype.calculateIndicatorPositioning = function() {
                var a = {},
                    b = f.minimizedDimensions().width,
                    d = f.isDesktopRectangle() ? 37 : 22;
                f.minimizedDimensions();
                var l = f.minimizedDimensions().height,
                    c = f.isDesktopRectangle() ? 10 : 15,
                    g = "",
                    k = N && 10 > H;
                f.isCenterPositioned() ? (centerPosition = (f.isDesktopRectangle() ? -0.5 * b + 0.5 * d + l : c) + "px !important", f.isRightPositioned() ?
                    (f.isDesktopRectangle() && (a = m.getRotateStyling(-90, "49%")), a.right = centerPosition, a.left = "auto !important", c = "right", k && (f.isDesktopRectangle() && (a.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)"), a.right = d - b + l + "px !important")) : (f.isDesktopRectangle() && (a = m.getRotateStyling(90, "49%")), a.left = centerPosition, a.right = "auto !important", c = "left", k && (f.isDesktopRectangle() && (a.filter = "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)"), a.left = l + "px !important")), f.isDesktopRectangle() ?
                    a.top = "50% !important" : (l = Math.max(document.documentElement.clientHeight, e.innerHeight || 0), a.top = l / 2 - f.minimizedDimensions().width / 2 + 3 + "px !important"), a.bottom = "auto !important", g += " bottom " + c, a.margin = k ? -0.5 * b + "px 0 0 0 !important" : -0.5 * d + "px 0 0 0 !important") : (f.isTopPositioned() ? (g += " top ", a.top = (f.isDesktopRectangle() ? l : 10) + "px !important", a.bottom = "auto !important") : (g += " bottom ", a.top = "auto !important", a.bottom = (f.isDesktopRectangle() ? l : 57) + "px !important"), f.isRightPositioned() ? (g += " right ",
                    a.right = c + "px !important", a.left = "auto !important") : (g += " left ", a.left = c + "px !important", a.right = "auto !important"));
                a.width = b + "px !important";
                a["max-width"] = b + "px !important";
                a["min-width"] = b + "px !important";
                a.height = d + "px !important";
                a["max-height"] = d + "px !important";
                a["min-height"] = d + "px !important";
                this.chatIndicator.documentRef.body.className += " " + g + " " + (f.isDesktopRectangle() ? "rectangle" : "round");
                this.chatIndicator.massRestyle(a)
            };
            var Qa = V.extend({
                init: function() {
                    var a = this;
                    this._super(this);
                    b.eventEmitter.on("localeChanged", function() {
                        a.setLinkTitle()
                    });
                    f.isRTL.subscribe(function() {
                        a.addClassName()
                    })
                },
                buildView: function() {
                    this._super(this);
                    this.addClassName();
                    this.setLinkTitle()
                },
                attachEvents: function() {
                    this.container && this._super()
                },
                createCanvasChatBubble: function() {
                    var a, b, d, l, c, e, g, k, m, n, p, q, s, t, u, w, v, x = 5,
                        y = f.chatBubble().bgc;
                    if (a = this.bubbleContainer.getElementById("tawkchat-chat-bubble-canvas")) f.chatPosition(), a.width = "146", a.height = "85", c = a.getContext("2d"), c.clearRect(0, 0, 134,
                            63), c.fillStyle = y, f.isTopPositioned() ? (x = 16, e = 68, s = x + 3, q = 81, t = 6, u = !1, a = 1.1, b = 1.9, d = 1.6, l = 0.85) : (e = x = 6, s = x + 63 - 3, q = 55, t = 79, u = !0, a = 0.9, b = 0.1, d = 0.4, l = 1.15), f.isRTL() ? (v = 10, g = v + 2, k = v + 5, m = v - 2, n = v - 2, p = v + 5, q = 81, f.isTopPositioned() ? (w = u, d = 0.2, l = 1.45) : (w = !u, d = 0.6, l = 1.85)) : (v = 2, g = v + 134 - 2, k = v + 134 - 5, m = v + 134 + 2, n = v + 134 + 2, p = v + 134 - 5, w = u), c.beginPath(), c.moveTo(v + 8, x), c.lineTo(68, x), c.lineTo(v + 134 - 8, x), c.quadraticCurveTo(v + 134, x, v + 134, x + 8), c.lineTo(v + 134, x + 63 - 8), c.quadraticCurveTo(v + 134, x + 63, v + 134 - 8, x + 63), c.lineTo(v +
                            8, x + 63), c.quadraticCurveTo(v, x + 63, v, x + 63 - 8), c.lineTo(v, x + 8), c.quadraticCurveTo(v, x, v + 8, x), c.strokeStyle = "#e3e0e7", c.lineWidth = 2, c.stroke(), c.closePath(), c.fill(), c.beginPath(), c.arc(68, s, 10, Math.PI * a, Math.PI * b, u), c.strokeStyle = "#e3e0e7", c.lineWidth = 2, c.stroke(), c.fill(), c.beginPath(), c.arc(q, t, 5, 0, 2 * Math.PI, !1), c.strokeStyle = "#e3e0e7", c.lineWidth = 2, c.stroke(), c.closePath(), c.fill(), c.beginPath(), c.arc(g, e + 5, 10, Math.PI * d, Math.PI * l, w), c.strokeStyle = "#e3e0e7", c.lineWidth = 2, c.stroke(), c.closePath(), c.fillStyle =
                        y, c.fill(), c.beginPath(), c.moveTo(k, e + 1.5), c.lineTo(m, e + 8), c.closePath(), c.lineWidth = 2, c.strokeStyle = f.chatBubble().fgc, c.stroke(), c.beginPath(), c.moveTo(n, e + 1.5), c.lineTo(p, e + 8), c.closePath(), c.lineWidth = 2, c.strokeStyle = f.chatBubble().fgc, c.stroke()
                },
                createVMLChatBubble: function() {
                    var a, b, d, c, e, g = "",
                        k = 0,
                        m = 5,
                        n = f.chatBubble().bgc,
                        p = this.bubbleContainer.getElementById("tawkchat-chat-bubble-graphics-container");
                    p && (f.chatPosition(), this.bubbleContainer.documentRef.namespaces.add("v", "urn:schemas-microsoft-com:vml",
                            "#default#VML"), f.isTopPositioned() ? (m = 15, a = 70) : a = m = 5, f.isRTL() ? (k = 10, b = "90px", d = "0px", c = k - 6 + "," + (a + 1.5) + '" to="' + (k + 2) + "," + (a + 8), e = k + 2 + "," + (a + 1.5) + '" to="' + (k - 6) + "," + (a + 8)) : (k = 0, b = "53px", d = "123px", c = k + 136 - 6 + "," + (a + 1.5) + '" to="' + (k + 136 + 2) + "," + (a + 8), e = k + 136 + 2 + "," + (a + 1.5) + '" to="' + (k + 136 - 6) + "," + (a + 8)), g = '<v:group style="left: 0px; width: 136px; height: 65px; position: absolute; top: 0px; antialias: true" coordsize = "136,65"><v:shape style="width: 136px; height: 65px; position: absolute;" coordorigin="0 0" coordsize="136 65"',
                        g += 'path="', g += "m" + (k + 8) + "," + m, g += "l" + (k + 136 - 8) + "," + m, g += "c" + (k + 136 - 4) + "," + m + "," + (k + 136) + "," + (m + 4) + "," + (k + 136) + "," + (m + 8), g += "l" + (k + 136) + "," + (m + 65 - 8), g += "c" + (k + 136) + "," + (m + 65 - 4) + "," + (k + 136 - 4) + "," + (m + 65) + "," + (k + 136 - 8) + "," + (m + 65), g += "l" + (k + 8) + "," + (m + 65), g += "c" + (k + 4) + "," + (m + 65) + "," + k + "," + (m + 65 - 4) + "," + k + "," + (m + 65 - 8), g += "l" + k + "," + (m + 8), g += "c" + k + "," + (m + 4) + "," + (k + 4) + "," + m + "," + (k + 8) + "," + m, g += 'e x">', g += '<v:fill color="' + n + '"/>', g += '<v:stroke weight="2" opacity="0" color="' + n + '"/>', g += "</v:shape>", f.isTopPositioned() ?
                        (g += '<v:oval style="width:20px; height:20px; position: absolute; left: 65px; top: 9px;" fillcolor="' + n + '" strokeweight="0" strokecolor="' + n + '"> </v:oval>', g += '<v:oval style="width:10px;height:10px; position: absolute; left: ' + b + '; top: 0px;" fillcolor="' + n + '" strokeweight="0" strokecolor="' + n + '"> </v:oval>') : (g += "<v:shape ", g += 'style="width: 10px; height: 10px; position: absolute; left: 75px; top: 67px;" coordorigin="10 20" coordsize="10 10"', g += 'path="', g += "M0,20", g += "C0,35, 25,35, 25,20", g += 'e x">',
                            g += '<v:fill color="' + n + '"/>', g += '<v:stroke weight="2" opacity="0" color="' + n + '"/>', g += "</v:shape>", g += '<v:oval style="width:10px;height:10px; position: absolute; left: ' + b + '; top: 74px;" fillcolor="' + n + '" strokeweight="0" strokecolor="' + n + '"> </v:oval>'), g += '<v:oval style="width:20px;height:20px; position: absolute; left: ' + d + "; top: " + (a - 5) + 'px;" fillcolor="' + n + '" strokeweight="0" strokecolor="' + n + '"> </v:oval>', g += '<v:line from="' + c + '" strokeweight="2" strokecolor="' + f.chatBubble().fgc + '"></v:line>',
                        g += '<v:line from="' + e + '" strokeweight="2" strokecolor="' + f.chatBubble().fgc + '"></v:line>', g += "</v:group>", p.innerHTML = g)
                }
            });
            Qa.prototype.setLinkTitle = function() {
                this.container && this.container.getElementById("maximizeChat").setAttribute("title", b.languageParser.translate("rollover", "maximize"))
            };
            Qa.prototype.chatEnded = function() {
                var a = this.container.getElementById("tawkchat-minified-agent-container"),
                    b = this.container.getElementById("tawkchat-status-text-container"),
                    d = this.container.getElementById("tawkchat-minified-link-container");
                a && b && (a.innerHTML = "", a.style.display = "none", b.style.display = "block", d.style.marginTop = "0px")
            };
            Qa.prototype.addClassName = function() {
                var a;
                a = f.isRTL() ? " rtl-direction" : " ltr-direction";
                this.container && this.container.elementReferrer && (this.container.getElementById("tawkchat-minified-wrapper").className = m.getContrast(f.headerTxtColor) + a);
                this.chatIndicator && this.chatIndicator.elementReferrer && (this.chatIndicator.getElementById("tawkchat-chat-indicator").className = a)
            };
            var ia = TawkClass.extend({
                init: function(a,
                    h) {
                    var d = this;
                    this.inDocument = !1;
                    this.maxNumberFileUpload = 5;
                    d.maxSizeFileUpload = 52428800;
                    this.frameWidth = f.maximizedDimensions().width + "px";
                    this.frameHeight = f.maximizedDimensions().height + "px";
                    this.container = f.isPopup ? new D(m.getRandomName(), "display: none;") : new S(m.getRandomName(), m.getGenericStyle({
                        zindex: "999999",
                        position: "static",
                        display: "none",
                        height: this.frameHeight,
                        width: this.frameWidth
                    }), ga, "iframe");
                    this.wrapper = new D("tawkchat-maximized-wrapper");
                    this.wrapper.template = this.wrapper.template.replace(/__IE6__/gm,
                        X ? "ie6" : "");
                    b.MaximizedStyle = b.MaximizedStyle.replace(/#tawktoLink/g, "#" + a);
                    b.MaximizedStyle = b.MaximizedStyle.replace(/#bottomContainer/g, "#" + h);
                    this.wrapper.template = this.wrapper.template.replace(/__TAWK_TO_LINK__/gm, a);
                    this.wrapper.template = this.wrapper.template.replace(/__BOTTOM_CONTAINER__/gm, h);
                    this.wrapper.template = this.wrapper.template.replace("__TOO_LONG_MESSAGE__", b.languageParser.translate("chat", "message_too_long"));
                    N && 10 > H && this.wrapper.addClass("ie9");
                    this.chatTextarea = new D("chatTextarea",
                        null, null, "textarea");
                    this.container.addChildViews([this.wrapper]);
                    f.maximizedDimensions.subscribe(function(a) {
                        f.isEmbedded || f.isPopup || (d.frameHeight = a.height + "px", d.frameWidth = a.width + "px", d.container.restyle("height", d.frameHeight + " !important"), d.container.restyle("width", d.frameWidth + " !important"))
                    });
                    t.pageStatus.subscribe(function(a) {
                        d.updateGreetings(a)
                    });
                    f.soundOn.subscribe(function() {
                        d.toggleSound()
                    });
                    b.eventEmitter.on("localeChanged", function() {
                        d.container && d.updateGreetings()
                    });
                    f.isRTL.subscribe(function() {
                        d.addClassName()
                    });
                    E.name.subscribe(function() {
                        if (!m.isGeneratedName(E.name()))
                            for (var a = m.getElementsByClassName(d.container.documentRef, "messageOwnerName visitor"), b = 0; b < a.length; b++) a[b].style.display = "none"
                    });
                    f.webRTCSettings.subscribe(function() {
                        d.toggleWebRTCActions()
                    })
                },
                buildView: function() {
                    f.isPopup || this.container.buildIframe(b.MaximizedStyle + f.maxStyle(), !0);
                    this.container.documentRef.getElementById("textareaContainer").appendChild(this.chatTextarea.buildView(this.container.documentRef));
                    f.isEmbedded || f.isPopup ?
                        this.restyleEmbed() : "br" == f.chatPosition() ? this.container.documentRef.body.className = "right" : this.container.documentRef.body.className = "left";
                    this.addClassName();
                    this.updateGreetings();
                    this.toggleSound();
                    this.attachEvents();
                    m.redraw(this.container.elementReferrer);
                    fb(this.container.documentRef);
                    this.inDocument = !0;
                    this.toggleWebRTCActions();
                    this.chatTextarea.elementReferrer.maxLength = 5E3
                },
                attachEvents: function() {
                    var a = this,
                        h = this.container.documentRef.getElementById("emoji-selection-container"),
                        d =
                        this.container.documentRef.getElementById("tooLongMsgNotification");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        b.eventHandler.cancelEvent(a);
                        b.sessionHandler.notifyWindowState("min")
                    }, "minimizeChat", "minlinkclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function() {
                        b.viewHandler.popoutWidget()
                    }, "popoutChat", "poplinkclick");
                    this.chatTextarea.attachUserEventListener("keyup", function(a) {
                        d.className = 5E3 > this.value.length ? "" : "visible"
                    }, null, "chatinputkeyup");
                    this.chatTextarea.attachUserEventListener("keydown", function(a) {
                        if (13 === a.keyCode) {
                            if (5E3 < this.value.length) {
                                a.preventDefault();
                                return
                            }
                            d.className = ""
                        }
                        b.chatHandler.sendTextPreview(a)
                    }, null, "chatinputkeydown");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        var d = b.eventHandler.getTargetElement(a); - 1 !== d.className.indexOf("messageOwnerName") && -1 !== d.className.indexOf("visitor") && (b.formHandler.openForm("nameForm"), b.eventHandler.cancelEvent(a))
                    }, "chatWrapper", "chatWrapperclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        b.formHandler.openForm("emailTranscriptForm");
                        a.closeMenu();
                        b.eventHandler.cancelEvent(d)
                    }, "emailTranscriptOption", "emailclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        b.chatHandler.changeRating(1);
                        b.eventHandler.cancelEvent(a)
                    }, "ratePositive", "ratepveclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                            b.chatHandler.changeRating(-1);
                            b.eventHandler.cancelEvent(a)
                        },
                        "rateNegative", "ratenveclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        b.eventHandler.cancelEvent(a);
                        b.chatHandler.toggleSound()
                    }, "soundOption", "soundclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        b.eventHandler.cancelEvent(a);
                        b.viewHandler.expandAgentList(a)
                    }, "expandableIcon", "expandclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        var d = b.languageParser.translate("chat", "video_call_error");
                        m.getWebRTCToken(!0, !1, function(a, h) {
                            a && b.viewHandler.appendMessage({
                                senderType: "s",
                                message: d,
                                time: new Date,
                                type: "n"
                            })
                        })
                    }, "videoCall", "videoCallClick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        var d = b.languageParser.translate("chat", "voice_call_error");
                        m.getWebRTCToken(!1, !1, function(a) {
                            a && b.viewHandler.appendMessage({
                                senderType: "s",
                                message: d,
                                time: new Date,
                                type: "n"
                            })
                        })
                    }, "voiceCall", "voiceCallClick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(a) {
                            var d = b.languageParser.translate("chat", "screen_share_error");
                            m.getWebRTCToken(!1, !0, function(a) {
                                a && b.viewHandler.appendMessage({
                                    senderType: "s",
                                    message: d,
                                    time: new Date,
                                    type: "n"
                                })
                            })
                        }, "screenShare", "screenShareClick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(b) {
                        a.container.getElementById("maxFileNotificationContainer").classList.add("hidden")
                    }, "closeNumberNotification", "closeNumberNotification");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(b) {
                            a.container.getElementById("maxSizeNotificationContainer").classList.add("hidden")
                        }, "closeSizeNotification", "closeSizeNotification");
                    this.container.attachUserEventListener("mousedown", function(a) {
                        !(a = e.document.activeElement) || "input" !== a.tagName.toLowerCase() && "textarea" !== a.tagName.toLowerCase() || (b.viewHandler.lastFocusedElement = a)
                    }, "innerWrapper", "maximizedWidgetMouseDown");
                    this.container.attachUserEventListener("change", function(d) {
                        b.eventHandler.cancelEvent(d);
                        a.closeMenu();
                        var h =
                            b.eventHandler.getTargetElement(d),
                            c = 0,
                            f = 0,
                            g = [],
                            k = [],
                            m = function() {
                                f++;
                                f === c && (h.value = "")
                            };
                        if (void 0 === e.FormData) a.container.getElementById("upload-form")[0].value && (c = 1, b.viewHandler.startUpload(a.container.getElementById("upload-form"), !0, m));
                        else if ((d = h.files) && d.length) {
                            for (var n = 0; n < d.length; n++) d[n].size > a.maxSizeFileUpload ? g.push(d[n]) : n >= a.maxNumberFileUpload ? k.push(d[n]) : b.viewHandler.startUpload(d[n], null, m);
                            b.viewHandler.checkUploadFileWarning(g, k)
                        }
                    }, "fileInput", "fileInputChanged");
                    this.container.attachUserEventListener("click",
                        function(b) {
                            b.preventDefault();
                            a.chatTextarea && a.chatTextarea.elementReferrer && a.chatTextarea.elementReferrer.focus()
                        }, "textareaContainer", "textareaContainerClick");
                    this.container.attachUserEventListener("dragover", function(b) {
                        b.preventDefault();
                        b.stopPropagation && b.stopPropagation();
                        a.wrapper.addClass("drag-over")
                    }, "innerWrapper", "textareaContainerDragOver");
                    this.container.attachUserEventListener("dragleave", function(b) {
                            b.preventDefault();
                            b.stopPropagation && b.stopPropagation();
                            a.wrapper.removeClass("drag-over")
                        },
                        "innerWrapper", "textareaContainerDragLeave");
                    this.container.attachUserEventListener("dragend", function(b) {
                        b.preventDefault();
                        b.stopPropagation && b.stopPropagation();
                        a.wrapper.removeClass("drag-over")
                    }, "innerWrapper", "textareaContainerDragEnd");
                    this.container.attachUserEventListener("drop", function(d) {
                        d.preventDefault();
                        d.stopPropagation && d.stopPropagation();
                        a.wrapper.removeClass("drag-over");
                        d = d.target.files || d.dataTransfer.files;
                        var h = 0,
                            c = [],
                            e = [],
                            f = function() {
                                h++
                            };
                        if (d && 0 !== d.length) {
                            for (var g = 0; g <
                                d.length; g++) d[g].size > a.maxSizeFileUpload ? c.push(d[g]) : g >= a.maxNumberFileUpload ? e.push(d[g]) : b.viewHandler.startUpload(d[g], null, f);
                            b.viewHandler.checkUploadFileWarning(c, e)
                        }
                    }, "innerWrapper", "textareaContainerDrop");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        b.formHandler.openForm("nameForm");
                        a.closeMenu();
                        b.eventHandler.cancelEvent(d)
                    }, "changeNameOption", "changenameclick");
                    this.container.attachUserEventListener("paste", function(a) {
                        var d, h = !1,
                            c = null;
                        if ((d = (a.originalEvent ||
                                a).clipboardData) && (d = d.items) && d.length) {
                            for (var e = 0; e < d.length; e++) {
                                if ("text/plain" === d[e].type) {
                                    h = !0;
                                    break
                                }
                                if (-1 !== d[e].type.indexOf("image")) {
                                    var f = d[e].getAsFile();
                                    null !== f && (c = f, c.name = b.languageParser.translate("chat", "pasted_image_title", {
                                        dateTime: m.parseChatTime(new Date)
                                    }))
                                }
                            }
                            c && !h && (b.viewHandler.startUpload(c, null), a.preventDefault())
                        }
                    }, "chatTextarea", "chatTextareaPaste");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(b) {
                        b.stopPropagation ? b.stopPropagation() : b.cancelBubble = !0;
                        "active" === a.container.getElementById("viewEmoji").className ? a.closeEmojiSelection() : (a.container.getElementById("viewEmoji").className = "active", eb(h))
                    }, "viewEmoji", "viewEmojiClick");
                    this.wrapper.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        d = b.eventHandler.getTargetElement(d);
                        "function" === typeof h.contains ? h.contains(d) || a.closeEmojiSelection() : m.isDescendent(h, d) && a.closeEmojiSelection()
                    }, null, "maxWidgetClick");
                    this.wrapper.attachUserEventListener("keydown", function(b) {
                        27 === b.keyCode &&
                            a.closeEmojiSelection()
                    }, null, "maxWidgetKeydown");
                    this.chatTextarea.attachUserEventListener("keydown", function(b) {
                        a.resizeTextArea()
                    }, null, "chatinputkeyupresize");
                    this.chatTextarea.attachUserEventListener("change", function(b) {
                        a.resizeTextArea()
                    }, null, "chatinputchangeresize");
                    this.chatTextarea.attachUserEventListener("input", function(b) {
                        a.resizeTextArea()
                    }, null, "chatinputinputresize");
                    this.chatTextarea.attachUserEventListener("paste", function(d) {
                            b.chatHandler.sendTextPreview(d);
                            a.resizeTextArea()
                        },
                        null, "chatinputpasteresize");
                    this.chatTextarea.attachUserEventListener("cut", function(d) {
                        b.chatHandler.sendTextPreview(d);
                        a.resizeTextArea()
                    }, null, "chatinputcutresize")
                },
                toggleSound: function() {
                    var a, b = this.container.getElementById("soundOption");
                    b && (a = b.getElementsByClassName ? b.getElementsByClassName("tooltip")[0] : m.getElementsByClassName(b, "tooltip")[0]);
                    b.className = f.soundOn() ? "item activeSound" : "item disabledSound";
                    a && (a.innerHTML = f.soundOn() ? "Disable Sound" : "Enable Sound")
                }
            });
            ia.prototype.hide =
                function() {
                    this.container.restyle("display", "none !important")
                };
            ia.prototype.show = function() {
                this.container.restyle("display", "block !important")
            };
            ia.prototype.restyleEmbed = function() {
                var a = document.getElementById(n.embedded);
                this.wrapper.addClass("embedded");
                this.container.getElementById("minimizeChat").outerHTML = "";
                this.container.getElementById("popoutChat").outerHTML = "";
                this.container.getElementById("endChat").setAttribute("title", b.languageParser.translate("rollover", "end"));
                if (f.isEmbedded) return a ?
                    b.viewHandler.onEmbeddedWindowResize() : void 0;
                this.container.restyle("width", "100% !important");
                this.container.restyle("height", "100% !important")
            };
            ia.prototype.updateGreetings = function(a) {
                var h, d, c, e;
                if (this.container.elementReferrer) {
                    if (h = this.container.getElementById("drop-text")) h.childNodes[0].innerHTML = b.languageParser.translate("chat", "dragDropText");
                    if (a = a || t.pageStatus()) h = this.container.getElementById("shortMessage"), d = this.container.getElementById("greetingsContainer"), h && (this.chatTextarea &&
                        d) && (c = q.getShortMessage(a), e = q.getLongMessage(a), null !== c && null !== e && (h.innerHTML = c, d.innerHTML = e, "online" === a && f.onlineGreeting && (a = m.rawDecode(f.onlineGreeting.actionMessage), la ? this.chatTextarea.elementReferrer.placeholder = a : (this.chatTextarea.elementReferrer.value = a, m.togglePlaceholderText(this.chatTextarea.elementReferrer, a, "chatTextarea")))))
                }
            };
            ia.prototype.addClassName = function() {
                this.wrapper && this.wrapper.elementReferrer && (f.isRTL() ? (this.wrapper.addClass("rtl-direction"), this.wrapper.removeClass("ltr-direction")) :
                    (this.wrapper.addClass("ltr-direction"), this.wrapper.removeClass("rtl-direction")))
            };
            ia.prototype.toggleEndChatOption = function(a) {
                var b;
                if (b = f.isEmbedded || f.isPopup ? this.container.getElementById("headerBoxControlsContainer") : this.container.getElementById("endChatOption")) b.style.display = a ? "block" : "none"
            };
            ia.prototype.addEmojiToInput = function(a) {
                la || this.chatTextarea.elementReferrer.value !== m.rawDecode(f.onlineGreeting.actionMessage) || (this.chatTextarea.elementReferrer.value = "");
                this.chatTextarea.elementReferrer.value +=
                    a;
                this.chatTextarea.elementReferrer.focus();
                this.closeEmojiSelection()
            };
            ia.prototype.closeEmojiSelection = function() {
                this.container.getElementById("viewEmoji").className = "";
                this.container.getElementById("emoji-selection-container").style.display = "none"
            };
            ia.prototype.resizeTextArea = function() {
                var a = this.chatTextarea.elementReferrer.value,
                    h = this.chatTextarea.elementReferrer.scrollHeight,
                    d = this.container.documentRef.getElementById("textareaContainer"),
                    c = this.container.documentRef.getElementById("actionsContainer"),
                    e = this.container.documentRef.getElementById("chatContainerWrapper"),
                    f = b.viewHandler.ifScrollbarDown();
                a && 52 < h ? (h = 150 < h ? 150 : h, d.style.height = h + "px", c.style.height = h + 69 + "px", e.style.bottom = h + 73 + "px", f && b.viewHandler.scrollToBottom()) : (d.style.height = "52px", c.style.height = "105px", e.style.bottom = "109px")
            };
            ia.prototype.toggleWebRTCActions = function() {
                this.inDocument && (f.webRTCSettings() && f.webRTCSettings().en ? (this.container.documentRef.getElementById("videoCall").style.display = f.webRTCSettings().v ? "inline-block" :
                    "none", this.container.documentRef.getElementById("voiceCall").style.display = "inline-block", this.container.documentRef.getElementById("screenShare").style.display = f.webRTCSettings().s ? "inline-block" : "none") : (this.container.documentRef.getElementById("videoCall").style.display = "none", this.container.documentRef.getElementById("voiceCall").style.display = "none", this.container.documentRef.getElementById("screenShare").style.display = "none"))
            };
            var Ja = ia.extend({
                init: function() {
                    var a = this;
                    this._super.apply(this,
                        arguments);
                    this.wrapper.template = this.wrapper.template.replace("__GREETINGS__", u.greetingsOverlay);
                    b.eventEmitter.on("formClosed", function() {
                        var h = a.container.getElementById("chatPanel");
                        if (h)
                            if (f.showPreChatForm && !t.prechatFormSubmitted) b.formHandler.openForm("preChatForm");
                            else if (h.style.display = "block", b.viewHandler.newMessageNotSeen && b.viewHandler.checkUnseenMessages(), !A && a.container.getElementById("chatTextarea") && "max" === t.chatWindowState() && b.viewHandler.userAction) {
                            var d = m.getDocument(m.getDocument(e).getElementById(a.container.elementId));
                            if (d && d.getElementById("chatTextarea")) try {
                                setTimeout(function() {
                                    d.getElementById("chatTextarea").focus()
                                }, 0)
                            } catch (c) {}
                        }
                    });
                    b.eventEmitter.on("formOpened", function() {
                        a.container && a.container.getElementById("chatPanel") && (a.container.getElementById("chatPanel").style.display = "none")
                    });
                    b.eventEmitter.on("localeChanged", function() {
                        a.insertText();
                        a.setLinkTitle();
                        a.toggleSound()
                    })
                },
                buildView: function() {
                    this._super(this);
                    this.container.documentRef.getElementById("chatTableWrapper").style.display = "none";
                    this.setLinkTitle();
                    this.insertText();
                    this.wrapper && this.wrapper.addClass(m.getContrast(f.headerTxtColor));
                    this.attachEvents()
                },
                insertText: function() {
                    var a;
                    if (this.container) {
                        this.container.getElementById("tawkContent").innerHTML = b.languageParser.translate("overlay", "tawkContent");
                        this.container.getElementById("cancelTawkRedirect").innerHTML = b.languageParser.translate("form", "CancelButton");
                        this.container.getElementById("tawkRedirect").innerHTML = b.languageParser.translate("form", "visitButton");
                        this.container.getElementById("emailTranscriptOption").childNodes[1].innerHTML =
                            b.languageParser.translate("rollover", "emailTranscriptOption");
                        this.container.getElementById("agentListLabel").innerHTML = b.languageParser.translate("menu", "AgentList");
                        this.container.getElementById("maxFileNotificationMessage").innerHTML = b.languageParser.translate("notifications", "maximum_file_upload_warning", {
                            strongStart: "<strong>",
                            strongEnd: "</strong>",
                            limitFileNumber: "5"
                        });
                        this.container.getElementById("maxSizeNotificationMessage").innerHTML = b.languageParser.translate("notifications", "maximum_size_upload_warning", {
                            strongStart: "<strong>",
                            strongEnd: "</strong>",
                            limitFileSize: "50mb"
                        });
                        this.container.getElementById("videoCall").childNodes[1].innerHTML = b.languageParser.translate("rollover", "videoCall");
                        this.container.getElementById("voiceCall").childNodes[1].innerHTML = b.languageParser.translate("rollover", "voiceCall");
                        this.container.getElementById("screenShare").childNodes[1].innerHTML = b.languageParser.translate("rollover", "screenShare");
                        a = m.getElementsByClassName(this.container.getElementById("chatContainer"),
                            "closeNotification");
                        for (var h = 0; h < a.length; h++) a[h].innerHTML = b.languageParser.translate("form", "CloseButton");
                        a = this.container.getElementById("uploadFileOption");
                        m.isFileInputSupported ? a.childNodes[1].innerHTML = b.languageParser.translate("rollover", "uploadFile") : a.parentNode.removeChild(a)
                    }
                },
                attachEvents: function() {
                    var a = this,
                        h = null;
                    this.container.attachUserEventListener("scroll", function(a) {
                        null !== h && clearTimeout(h);
                        h = setTimeout(function() {
                            !b.formHandler.currentForm && (b.viewHandler.newMessageNotSeen &&
                                ("max" === t.chatWindowState() || f.isEmbedded || f.isPopup)) && b.viewHandler.checkUnseenMessages()
                        }, 300)
                    }, "chatContainer", "chatScroll");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(b) {
                        f.whiteLabel() || (f.brandingRedirect() ? '' : a.container.getElementById("tawkToContent").style.display = "block")
                    }, b.viewHandler.tawktoLinkName, "tawktoclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(b) {
                            a.container.getElementById("tawkToContent").style.display = "none"
                        }, "cancelTawkRedirect", "cancelTawkRedirectclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(b) {
                        a.container.getElementById("tawkToContent").style.display = "none";
                    }, "tawkRedirect", "tawkRedirectClicn");
                    this.chatTextarea.attachUserEventListener("keydown", function(d) {
                        var h = b.eventHandler.getTargetElement(d);
                        setTimeout(function() {
                            h.value ? (a.container.getElementById("ratingContainer").style.display = "none", a.container.getElementById("textareaContainer").className = "") : (a.container.getElementById("ratingContainer").style.display = "block", a.container.getElementById("textareaContainer").className = "additionalPadding")
                        }, 0)
                    }, null, "chatinputfocus");
                    this.chatTextarea.attachUserEventListener("blur", function(d) {
                        b.eventHandler.getTargetElement(d).value || (a.container.getElementById("ratingContainer").style.display = "block",
                            a.container.getElementById("textareaContainer").className = "additionalPadding")
                    }, null, "chatinputblur");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        b.formHandler.openForm("emailTranscriptForm");
                        a.closeMenu();
                        b.eventHandler.cancelEvent(d)
                    }, "emailTranscriptOption", "emailclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        "preChatForm" !== b.formHandler.currentForm && "offlineForm" !== b.formHandler.currentForm && "none" !== a.container.getElementById("chatTableWrapper").style.display &&
                            b.chatHandler.isVisitorEngaged() ? (b.formHandler.openForm("endChatForm"), b.eventHandler.cancelEvent(d)) : (b.eventHandler.cancelEvent(d), b.sessionHandler.notifyWindowState("min"))
                    }, "endChat", "endChatclick");
                    this._super(this)
                },
                toggleSound: function() {
                    this._super();
                    this.container.getElementById("soundTitle").innerHTML = f.soundOn() ? b.languageParser.translate("menu", "sound_on") : b.languageParser.translate("menu", "sound_off")
                }
            });
            Ja.prototype.closeMenu = function() {};
            Ja.prototype.setLinkTitle = function() {
                this.container &&
                    (this.container.getElementById("ratePositive").setAttribute("title", b.languageParser.translate("rollover", "positiveRating")), this.container.getElementById("rateNegative").setAttribute("title", b.languageParser.translate("rollover", "negativeRating")), f.isEmbedded || f.isPopup || (this.container.getElementById("minimizeChat").setAttribute("title", b.languageParser.translate("rollover", "minimize")), this.container.getElementById("popoutChat").setAttribute("title", b.languageParser.translate("rollover", "popOut")),
                        this.container.getElementById("endChat").setAttribute("title", b.languageParser.translate("rollover", "end"))))
            };
            Ja.prototype.chatEnded = function() {
                var a, h = this,
                    d = this.container.getElementById("agentWrapper"),
                    c = this.container.getElementById("endChat"),
                    e = this.container.getElementById("agentBar"),
                    f = this.container.getElementById("agentList"),
                    g = this.container.getElementById("headerAccountStateContainer"),
                    k = this.container.getElementById("chatContainerWrapper"),
                    n = this.container.getElementById("agentProfileContainer"),
                    p = this.container.getElementById("options");
                a = new D("chatEnded");
                a.template = m.escapeTemplateReplacement(a.template, [{
                    placeholder: "__CHAT_ENDED__",
                    textReplace: b.languageParser.translate("chat", "chatEnded")
                }, {
                    placeholder: "__START_CHAT__",
                    textReplace: b.languageParser.translate("chat", "newChat")
                }, {
                    placeholder: "__EMAIL_TRANCRIPT__",
                    textReplace: b.languageParser.translate("rollover", "emailTranscriptOption")
                }]);
                a.restyle("display", "block");
                this.container.getElementById("innerWrapper").appendChild(a.buildView());
                this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                    b.formHandler.openForm("emailTranscriptForm");
                    h.closeMenu();
                    b.eventHandler.cancelEvent(a)
                }, "emailTranscript", "emailTranscript");
                this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                    h.chatStarted();
                    b.chatHandler.startNewChat()
                }, "newChat", "newChat");
                d && (d.style.display = "none");
                n && (n.innerHTML = "");
                e && (e.style.display = "none");
                f && (f.innerHTML = "");
                g && (g.style.display = "block");
                c && (c.style.visibility = "hidden");
                k && (k.className += " chat-ended");
                p && (p.style.display = "none")
            };
            Ja.prototype.chatStarted = function() {
                var a = this.container.getElementById("chatEnded"),
                    b = this.container.getElementById("endChat"),
                    d = this.container.getElementById("chatContainerWrapper"),
                    c = this.container.getElementById("options");
                a && a.parentNode.removeChild(a);
                b && (b.style.visibility = "visible");
                d && (d.className = d.className.replace("chat-ended", ""));
                c && (c.style.display = "block")
            };
            var J = G.extend({
                init: function() {
                    var a = this,
                        h = function() {
                            a.dragElement &&
                                (f.isRTL() ? a.dragElement.massRestyle({
                                    left: "96px !important",
                                    right: "0px !important"
                                }) : a.dragElement.massRestyle({
                                    left: "0px ",
                                    right: "96px !important"
                                }))
                        };
                    this._super(this);
                    this.iframeXOffsetPosition = 10;
                    this.startY = this.startX = this.iframeYOffsetPosition = 0;
                    this.userAction = !1;
                    this.dragElement = new D(m.getRandomName(), m.getGenericStyle({
                        height: "45px",
                        top: "1px",
                        backgroundcolor: "#fff",
                        zindex: "999997",
                        cursor: "move",
                        opacity: "0"
                    }) + 'width: expression(this.parentNode.offsetWidth - 306 + "px") !important;');
                    h();
                    this.overlayElement = new D(null, m.getGenericStyle({
                        left: "0px",
                        top: "0px",
                        zindex: "1000001",
                        cursor: "move",
                        width: "100%",
                        height: "100%",
                        display: "none",
                        "float": "left"
                    }));
                    this.iframeContainer = new D(m.getRandomName(), m.getGenericStyle({
                        display: "none",
                        bottom: "0",
                        minwidth: "0",
                        minheight: "0",
                        right: "10px",
                        zindex: N && 9 > H ? "none" : "2000000000",
                        position: "fixed"
                    }));
                    this.resizeFromLeft = new D(m.getRandomName(), m.getGenericStyle({
                        height: "100%",
                        left: "0px",
                        right: "96px",
                        top: "0px",
                        zindex: "999998",
                        cursor: "w-resize",
                        width: "6px"
                    }));
                    this.resizeFromRight = new D(m.getRandomName(), m.getGenericStyle({
                        height: "100%",
                        width: "6px",
                        right: "0px",
                        top: "0px",
                        zindex: "999998",
                        cursor: "e-resize"
                    }));
                    this.resizeFromTop = new D(m.getRandomName(), m.getGenericStyle({
                        height: "6px",
                        width: "100%",
                        right: "0px",
                        top: "0px",
                        zindex: "999998",
                        cursor: "n-resize"
                    }));
                    this.resizeFromBottom = new D(m.getRandomName(), m.getGenericStyle({
                        height: "6px",
                        width: "100%",
                        right: "0px",
                        bottom: "0px",
                        zindex: "999998",
                        cursor: "s-resize"
                    }));
                    this.resizeTopLeft = new D(m.getRandomName(), m.getGenericStyle({
                        height: "12px",
                        width: "12px",
                        left: "0px",
                        top: "0px",
                        zindex: "999998",
                        cursor: "nw-resize"
                    }));
                    this.resizeTopRight = new D(m.getRandomName(), m.getGenericStyle({
                        height: "12px",
                        width: "12px",
                        right: "0px",
                        top: "0px",
                        zindex: "999998",
                        cursor: "ne-resize"
                    }));
                    this.resizeBottomLeft = new D(m.getRandomName(), m.getGenericStyle({
                        height: "12px",
                        width: "12px",
                        bottom: "0px",
                        left: "0px",
                        zindex: "999998",
                        cursor: "sw-resize"
                    }));
                    this.resizeBottomRight = new D(m.getRandomName(), m.getGenericStyle({
                        height: "12px",
                        width: "12px",
                        bottom: "0px",
                        right: "0px",
                        zindex: "999999",
                        cursor: "se-resize"
                    }));
                    k = new Ja(this.tawktoLinkName, this.bottomContainerName);
                    this.iframeContainer.addChildViews([k.container]);
                    f.isPopup || f.isEmbedded || (p = new Qa, this.indicator = new Ba(p.chatIndicator), this.iframeContainer.addChildViews([p.container, p.chatIndicator, p.bubbleContainer, this.dragElement, this.resizeFromLeft, this.resizeFromRight, this.resizeFromTop, this.resizeFromBottom, this.resizeTopLeft, this.resizeTopRight, this.resizeBottomLeft, this.resizeBottomRight, this.overlayElement]));
                    this.chatContainer =
                        k.container;
                    this.iframeContainer.buildView();
                    t.pageStatus.subscribe(function(b) {
                        a.updateViewByStatus(b)
                    });
                    y.rating.subscribe(function(b) {
                        a.changeRating(b)
                    });
                    f.isPopup || f.isEmbedded || t.chatWindowState.subscribe(function(b) {
                        "max" === b ? a.maximizeWidget() : a.minimizeWidget()
                    });
                    f.minStyle.subscribe(function() {
                        p && p.container.elementReferrer && (p.container.insertCssFile(f.minStyle(), !0), p.container.documentRef.getElementById("tawkchat-minified-wrapper").className = m.getContrast(f.headerTxtColor))
                    });
                    f.maxStyle.subscribe(function() {
                        k &&
                            k.container.elementReferrer && (k.container.insertCssFile(f.maxStyle(), !0), k.wrapper.removeClass("black"), k.wrapper.removeClass("white"), k.wrapper.addClass(m.getContrast(f.headerTxtColor)))
                    });
                    f.isRTL.subscribe(function() {
                        h()
                    });
                    b.chatHandler.hasChatStarted.subscribe(function(a) {
                        k.toggleEndChatOption(a)
                    })
                },
                show: function() {
                    k.hide();
                    f.isEmbedded || f.isPopup ? (this.iframeContainer.restyle("position", "static"), this.iframeContainer.restyle("right", ""), this.iframeContainer.restyle("left", ""), this.iframeContainer.restyle("width",
                        "100%"), this.iframeContainer.restyle("height", "100%"), k.show()) : (this.indicator.initIndicator(), X && this.fixContainerBorder(), b.main.maximize ? this.maximizeWidget() : this.minimizeWidget());
                    this.updateViewByStatus(t.pageStatus());
                    this._super();
                    m.redraw(this.iframeContainer.elementReferrer)
                },
                showEmbeddedGreetings: function() {},
                hideEmbeddedGreetings: function() {}
            });
            J.prototype.maximizeWidget = function() {
                this.indicator && this.indicator.hide();
                if ("max" !== f.onClickAction) return this.popoutWidget();
                f.hideWidgetOnOffline &&
                    "offline" === t.pageStatus() && b.formHandler.openForm("offlineForm");
                (f.hideWidgetOnLoad || f.hideWidgetOnOffline) && this.showWidget();
                this.iframeContainer.restyle("bottom", this.iframeYOffsetPosition + "px");
                "br" === f.chatPosition() || "tr" === f.chatPosition() || "cr" === f.chatPosition() ? (this.iframeContainer.restyle("right", this.iframeXOffsetPosition + "px"), this.iframeContainer.restyle("left", "auto")) : (this.iframeContainer.restyle("left", this.iframeXOffsetPosition + "px"), this.iframeContainer.restyle("right", "auto"));
                k.show();
                p && p.container && p.hide();
                n.onChatMaximized();
                this.wasScrollbarDown && this.scrollToBottom();
                b.viewHandler.newMessageNotSeen && b.viewHandler.checkUnseenMessages();
                if (!A && this.chatContainer.getElementById("chatTextarea") && "max" === t.chatWindowState() && !b.formHandler.currentForm && b.viewHandler.userAction) {
                    var a = m.getDocument(m.getDocument(e).getElementById(k.container.elementId));
                    if (a && a.getElementById("chatTextarea")) try {
                        setTimeout(function() {
                            a.getElementById("chatTextarea").focus();
                            b.viewHandler.userAction = !1
                        }, 0)
                    } catch (h) {}
                }
            };
            J.prototype.minimizeWidget = function() {
                var a;
                if (!f.isPopup && !f.isEmbedded) {
                    k.container.elementReferrer.blur();
                    k.hide();
                    b.viewHandler.lastFocusedElement && setTimeout(function() {
                        b.viewHandler.lastFocusedElement.focus()
                    }, 0);
                    if (f.hideWidgetOnLoad) return this.hideWidget();
                    this.wasScrollbarDown = this.ifScrollbarDown();
                    this.iframeYOffsetPosition = parseInt(this.iframeContainer.elementReferrer.style.bottom.replace("px", ""), 10);
                    a = "br" == f.chatPosition() ? parseInt(this.iframeContainer.elementReferrer.style.right.replace("px",
                        ""), 10) : parseInt(this.iframeContainer.elementReferrer.style.left.replace("px", ""), 10);
                    isNaN(a) || (this.iframeXOffsetPosition = a);
                    "br" === f.chatPosition() || "tr" === f.chatPosition() || "cr" === f.chatPosition() ? (this.iframeContainer.restyle("bottom", "0px"), this.iframeContainer.restyle("right", "0px"), this.iframeContainer.restyle("left", "auto")) : (this.iframeContainer.restyle("bottom", "0px"), this.iframeContainer.restyle("left", "0px"), this.iframeContainer.restyle("right", "auto"));
                    p.show();
                    n.onChatMinimized()
                }
            };
            J.prototype.popoutWidget = function() {
                this.indicator.hide();
                this.popoutWin && !this.popoutWin.closed && this.popoutWin.focus ? this.popoutWin.focus() : (this.popoutWin = e.open("https://tawk.to/chat/" + I.pageId + "/" + $_Tawk_WidgetId + "/?$_tawk_popout=true&$_tawk_sk=" + t.sessionKey + "&$_tawk_tk=" + t.transferKey + "&v=" + t.serverVersion, "Tawk", "height=500, width=450, resizable=yes, toolbar=no, location=no, menubar=no, personalbar=no"), t.chatWindowState("min"))
            };
            J.prototype.toggleWidget = function() {
                var a = t.chatWindowState();
                t.chatWindowState("min" === a ? "max" : "min")
            };
            J.prototype.removeBubble = function() {
                try {
                    b.eventEmitter.emit("notifyBubbleClosed")
                } catch (a) {
                    c.handleError("Unable to emit notifyBubbleClosed", a.fileName, a.lineNumber, a.stack)
                }
            };
            J.prototype.insertPopupStyle = function() {
                var a = document.getElementsByTagName("head")[0],
                    h = document.createDocumentFragment(),
                    d = m.createElement(document, "style", {
                        type: "text/css"
                    }),
                    c;
                c = document.createTextNode(b.ResetStyle + "" + b.MaximizedStyle + f.maxStyle());
                d.styleSheet ? d.styleSheet.cssText =
                    c.nodeValue : d.appendChild(c);
                h.appendChild(d);
                a.appendChild(h);
                document.body.className = "popup"
            };
            J.prototype.begin = function() {
                var a = this,
                    h = document.getElementById(n.embedded),
                    d;
                b.main.started || (this.iframeContainer && (d = document.getElementById(this.iframeContainer.elementId)), d && d.parentNode.removeChild(d), f.isEmbedded && h ? (h.appendChild(this.iframeContainer.elementReferrer), b.eventHandler.listen(e, "resize", function() {
                    a.onEmbeddedWindowResize()
                }, "windowresize")) : (document.body.appendChild(this.iframeContainer.elementReferrer),
                    f.isPopup ? this.insertPopupStyle() : (p.buildView(), this.dragElement.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b)
                    }, null, "dragfocus"), this.resizeFromLeft.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b, "left")
                    }, null, "resizeLeftfocus"), this.resizeFromRight.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b, "right")
                    }, null, "resizeRightfocus"), this.resizeFromTop.attachUserEventListener("mousedown", function(b) {
                            a.onHeaderMouseDown(b, null, "top")
                        },
                        null, "resizeTopfocus"), this.resizeFromBottom.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b, null, "bottom")
                    }, null, "resizeBottomfocus"), this.resizeTopLeft.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b, "left", "top")
                    }, null, "resizeTopLeftfocus"), this.resizeTopRight.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b, "right", "top")
                    }, null, "resizeTopRightfocus"), this.resizeBottomLeft.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b,
                            "left", "bottom")
                    }, null, "resizeBottomLeftfocus"), this.resizeBottomRight.attachUserEventListener("mousedown", function(b) {
                        a.onHeaderMouseDown(b, "right", "bottom")
                    }, null, "resizeBottomRightfocus"), b.eventHandler.listen(e, "resize", function() {
                        a.onWindowResize()
                    }, "windowresize"))), k.buildView(), "br" != f.chatPosition() && this.iframeContainer.restyle("left", "10px"))
            };
            J.prototype.fixContainerBorder = function() {
                var a, h = this;
                this.iframeContainer.restyle("position", "absolute");
                b.eventHandler.listen(e, "scroll", function() {
                    clearTimeout(a);
                    h.iframeContainer.restyle("bottom", "0px");
                    h.iframeContainer.restyle("visibility", "hidden");
                    h.iframeContainer.restyle("visibility", "visible");
                    a = setTimeout(function() {
                        document.body.className = document.body.className;
                        document.body.style.visibility = "hidden";
                        document.body.style.visibility = "visible"
                    }, 50)
                }, "windowscroll")
            };
            J.prototype.hideWidget = function() {
                this.iframeContainer.hide();
                n.onChatHidden()
            };
            J.prototype.showWidget = function() {
                this.scrollToBottom();
                this.iframeContainer.show()
            };
            J.prototype.toggleVisibility =
                function() {
                    this.scrollToBottom();
                    this.iframeContainer.toggle()
                };
            J.prototype.isWidgetHidden = function() {
                return !this.iframeContainer.isVisible
            };
            J.prototype.onDragMove = function(a) {
                this.setChatWindowXPosition(a.clientX);
                this.setChatWindowYPosition(a.clientY)
            };
            J.prototype.onHeaderMouseUp = function() {
                this.overlayElement.restyle("display", "none !important");
                this.resetFrameDimensions();
                this.isResized && (this.isResized = !1, b.socketManager.sendToConnector("notifyWidgetResized"));
                b.eventHandler.removeEventHandler(document,
                    "mousemove", this.mouseMovehandler);
                b.eventHandler.removeEventHandler(document, "mouseup", this.mouseUpHandler)
            };
            J.prototype.onHeaderMouseDown = function(a, h, d) {
                var c = this,
                    f = b.eventHandler.getTargetElement(a);
                f.id !== this.resizeFromLeft.elementId && f.id !== this.resizeFromRight.elementId && f.id !== this.resizeFromTop.elementId && f.id !== this.resizeFromBottom.elementId && f.id !== this.resizeTopLeft.elementId && f.id !== this.resizeBottomLeft.elementId && f.id !== this.resizeTopRight.elementId && f.id !== this.resizeBottomRight.elementId &&
                    f.id !== this.dragElement.elementId || (1 === a.button && !e.event && !k.documentRef.event || 1 < a.button) || (b.eventHandler.cancelEvent(a), this.overlayElement.restyle("display", "block !important"), a = this.getActualViewportDimensions(), this.actualViewPortWidth = a.width, this.actualViewPortHeight = a.height, this.startOffsetY = this.startOffsetX = 0, this.mouseMovehandler = f.id === this.dragElement.elementId ? b.eventHandler.listen(document, "mousemove", function(a) {
                        c.onDragMove(a);
                        c.redrawIE()
                    }, "dragmove") : b.eventHandler.listen(document,
                        "mousemove",
                        function(a) {
                            c.setResizedDimensions(a, h, d);
                            c.isResized = !0;
                            c.redrawIE()
                        }, "dragmove"), this.mouseUpHandler = b.eventHandler.listen(document, "mouseup", function(a) {
                        c.onHeaderMouseUp(a)
                    }, "dragleave"))
            };
            J.prototype.redrawIE = function() {
                "explorer" === K && (this.iframeContainer.restyle("visibility", "hidden !important"), this.iframeContainer.restyle("visibility", "visible !important"))
            };
            J.prototype.setResizedDimensions = function(a, h, d) {
                var c, e = this.iframeContainer.elementReferrer;
                parseInt(k.frameWidth.replace("px",
                    ""), 10);
                parseInt(k.frameHeight.replace("px", ""), 10);
                var g = this.ifScrollbarDown();
                this.isRight && "undefined" !== typeof this.isRight || (this.isRight = f.isRightPositioned());
                this.startX = a.clientX;
                this.startY = a.clientY;
                if (h) {
                    c = this.isRight ? "right" : "left";
                    var n = parseInt(m.computedStyle(this.chatContainer.elementReferrer, "width").replace("px", ""), 10),
                        p = parseInt(e.style[c].replace("px", "")),
                        q = this.isRight ? this.actualViewPortWidth - a.clientX : a.clientX,
                        q = 0 > q ? 0 : q;
                    this.isRight && "right" === h || !this.isRight && "left" ===
                        h ? (h = n - (q - p), 280 > h ? h = 280 : (q > this.actualViewPortWidth - h - 1 && (q = this.actualViewPortWidth - h - 1), e.style.cssText += ";" + c + ":" + q + "px !important", this.startOffsetX = h)) : this.startOffsetX = h = this.isRight ? this.actualViewPortWidth - a.clientX - p : a.clientX - p;
                    280 <= h && 0 < this.actualViewPortWidth - (h + parseInt(e.style[c].replace("px", ""), 10)) && this.setWidth(h)
                }
                d && ("bottom" === d ? (d = parseInt(e.style.bottom.replace("px", "")), a = this.actualViewPortHeight - a.clientY, 0 > a && (a = 0), d = parseInt(m.computedStyle(this.chatContainer.elementReferrer,
                    "height").replace("px", ""), 10) - (a - d), 330 > d ? d = 330 : (a > this.actualViewPortHeight - d - 1 && (a = this.actualViewPortHeight - d - 1), e.style.cssText += ";bottom:" + a + "px !important", this.startOffsetY = d)) : (startOffsetY = parseInt(e.style.bottom.replace("px", ""), 10), d = this.actualViewPortHeight - a.clientY - startOffsetY, this.startOffsetY = this.startY - startOffsetY), 330 <= d && 0 < this.actualViewPortHeight - (d + parseInt(e.style.bottom.replace("px", ""), 10)) && this.setHeight(d));
                g && this.scrollToBottom();
                b && b.formHandler && b.formHandler.resize()
            };
            J.prototype.setChatWindowXPosition = function(a) {
                var b, d, c = parseInt(k.frameWidth.replace("px", ""), 10);
                "undefined" === typeof this.isRight && (this.isRight = f.isRightPositioned());
                this.isRight ? (b = "right", d = parseInt(this.iframeContainer.elementReferrer.style.right, 10)) : (b = "left", d = -parseInt(this.iframeContainer.elementReferrer.style.left, 10));
                this.startOffsetX || (this.startOffsetX = a + d);
                a = this.isRight ? this.startOffsetX - a : a - this.startOffsetX;
                20 > a ? a = 0 : 20 > this.actualViewPortWidth - (a + c) && (a = this.actualViewPortWidth -
                    c);
                this.iframeContainer.restyle(b, a + "px !important")
            };
            J.prototype.setChatWindowYPosition = function(a) {
                var b, d, c = parseInt(k.frameHeight.replace("px", ""), 10);
                "auto" === this.iframeContainer.elementReferrer.style.bottom ? (styleKey = "top", b = -parseInt(this.iframeContainer.elementReferrer.style.top, 10), d = !1) : (styleKey = "bottom", b = parseInt(this.iframeContainer.elementReferrer.style.bottom, 10), d = !0);
                this.startOffsetY || (this.startOffsetY = a + b);
                a = d ? this.startOffsetY - a : a - this.startOffsetY;
                20 > a ? a = 0 : 20 > this.actualViewPortHeight -
                    (a + c) && (a = this.actualViewPortHeight - c);
                this.iframeContainer.restyle(styleKey, a + "px !important")
            };
            J.prototype.onWindowResize = function() {
                var a = this;
                clearTimeout(this.resizeTimeout);
                this.wasScrollbarDown = this.ifScrollbarDown();
                this.resizeTimeout = setTimeout(function() {
                    a.onWindowResizeTimeout()
                }, 100)
            };
            J.prototype.onWindowResizeTimeout = function() {
                var a = this.getActualViewportDimensions(),
                    b = a.width,
                    a = a.height,
                    d = this.iframeContainer.elementReferrer,
                    c = this.isBottom ? parseInt(d.style.bottom.replace("px", ""),
                        10) : parseInt(d.style.top.replace("px", ""), 10),
                    e = this.isRight ? parseInt(d.style.right.replace("px", ""), 10) : parseInt(d.style.left.replace("px", ""), 10),
                    f = parseInt(k.frameWidth.replace("px", ""), 10),
                    g = parseInt(k.frameHeight.replace("px", ""), 10);
                f + e > b && (e = b - f, 0 > e && (f += e, e = 0, this.setWidth(f)), this.isRight ? d.style.right = e + "px" : d.style.left = e + "px");
                g + c > a && (c = a - g, 0 > c && (g += c, c = 0, this.setHeight(g)), this.isBottom ? d.style.bottom = c + "px" : d.style.top = c + "px");
                this.wasScrollbarDown && this.scrollToBottom();
                this.resetFrameDimensions()
            };
            J.prototype.setWidth = function(a) {
                if (!a || 300 > a) a = 300;
                X && this.dragElement.restyle("width", a - 102 + "px !important");
                this.chatContainer.restyle("width", a + "px !important")
            };
            J.prototype.setHeight = function(a) {
                if (!a || 350 > a) a = 350;
                this.chatContainer.restyle("height", a + "px !important")
            };
            J.prototype.onEmbeddedWindowResize = function() {
                null === this.isWidgetElementDimensionsNull && this.setWidgetElementDimensions();
                this.isWidgetElementDimensionsNull ? (this.setWidth(f.maximizedDimensions().width), this.setHeight(f.maximizedDimensions().height)) :
                    (this.chatContainer.restyle("width", "100%"), this.chatContainer.restyle("height", "100%"))
            };
            J.prototype.setWidgetElementDimensions = function() {
                var a = document.getElementById(n.embedded);
                this.isWidgetElementDimensionsNull = 280 > a.clientWidth || 330 > a.clientHeight ? !0 : !1
            };
            J.prototype.resetFrameDimensions = function() {
                var a = parseInt(m.computedStyle(this.chatContainer.elementReferrer, "width").replace("px", ""), 10),
                    b = parseInt(m.computedStyle(this.chatContainer.elementReferrer, "height").replace("px", ""), 10);
                k.frameWidth =
                    a + "px";
                k.frameHeight = b + "px"
            };
            J.prototype.isWidgetElementDimensionsNull = null;
            J.prototype.styleAgentBar = function() {
                var a, h = this.chatContainer;
                if (h) {
                    a = h.getElementById("agentWrapper");
                    try {
                        0 < b.agents.agentsCount ? (h.getElementById("headerAccountStateContainer").style.display = "none", a.style.display = "block") : (h.getElementById("headerAccountStateContainer").style.display = "block", a.style.display = "none")
                    } catch (d) {
                        c.handleError("headerAccountStateContainer is null", d.fileName, d.lineNumber, d.stack)
                    }
                }
            };
            J.prototype.expandAgentList =
                function(a) {
                    var b, d;
                    if (d = this.chatContainer) b = d.getElementById("agentBar"), d = d.getElementById("expandableLink"), 1 === a.button && !e.event || 1 < a.button || (-1 === b.className.indexOf("expanded") ? (b.className += " expanded", d.className = "expanded") : (b.className = b.className.replace("expanded", ""), d.className = ""), this.styleAgentBar())
                };
            J.prototype.resetView = function() {
                var a, b, d, c, e, f;
                if (f = this.chatContainer) a = f.getElementById("chatWrapper"), d = f.getElementById("agentList"), e = f.getElementById("agentBar"), c = f.getElementById("expandableLink"),
                    f = f.getElementById("headerAccountStateContainer"), a && (b = a.lastChild, a.innerHTML = "", a.appendChild(b)), d && (d.innerHTML = ""), e && (a = e.parentNode.childNodes[0], e.className = "", a && -1 !== a.className.indexOf("agentWrapper") && a.parentNode.removeChild(a)), c && (c.style.visibility = "hidden", c.className = ""), f && (f.style.display = "block"), this.showEmbeddedGreetings(), this.show()
            };
            J.prototype.handleIndicatorToggle = function(a) {
                p && (p.container && p.chatIndicator) && (a = p.chatIndicator.getElementById("tawkchat-chat-indicator"),
                    a.style.visibility = "visible")
            };
            var Ra = J.extend({
                init: function() {
                    this._super(this);
                    this.mainAgent = null
                },
                appendMessage: function(a) {
                    var b, d, c = {
                            "chat-message-row": u["chat-message-row"],
                            "chat-resend-link": u["chat-resend-link"],
                            "chat-message-owner-agent": u["chat-message-owner-agent"],
                            "chat-message-owner-visitor": u["chat-message-owner-visitor"],
                            "chat-message-container": u["chat-message-container"],
                            "chat-notification-container": u["chat-notification-container"],
                            "chat-message-status-row": u["chat-message-status-row"],
                            "chat-divider": u["chat-divider"]
                        },
                        e = m.parseChatTime(a.time);
                    "a" === a.senderType ? (d = (b = (d = y.agentProfiles[a.ownerId]) && d.pi ? t.agentImgUrl + "/" + y.agentProfiles[a.ownerId].pi : "") ? "url('" + b + "')" : "transparent", b = "explorer" === K && 9 > H ? "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + b + "',sizingMethod='scale');" : "", "transparent" !== d && (b += "background-position:0 0;background-size:28px 28px"), c["chat-message-owner-agent"] = c["chat-message-owner-agent"].replace("__IMAGE_URL__", d).replace("__IE_IMAGE_SCALE__",
                        b)) : "s" === a.senderType && (c["chat-message-owner-agent"] = c["chat-message-owner-agent"].replace("__IMAGE_URL__", "").replace("__IE_IMAGE_SCALE__", ""));
                    c["chat-message-status-row"] = a.isPending ? u["chat-message-pending-row"] : c["chat-message-status-row"].replace("__TIME__", e).replace("__TIME_CLASS__", "v" === a.senderType ? "visitor" : "agent");
                    return this._super(a, c)
                },
                showEmbeddedGreetings: function() {
                    var a;
                    k.container && (a = k.container.getElementById("greetingsOverlay"), chatWrapper = k.container.getElementById("chatTableWrapper"),
                        a && chatWrapper && (chatWrapper.style.display = "none", a.style.display = "block", this._super(this)))
                },
                hideEmbeddedGreetings: function() {
                    var a, b;
                    k.container && (a = k.container.getElementById("greetingsOverlay"), b = k.container.getElementById("chatTableWrapper"), a && b && (a.style.display = "none", b.style.display = "table", this._super(this)))
                },
                appendAgent: function(a) {
                    var h, d, c, e, f, g, n = this;
                    e = this.chatContainer;
                    h = e.getElementById("agentProfileContainer");
                    var p = e.getElementById("agentList");
                    d = e.getElementById("chatWrapper");
                    e && (h && p) && (b.agents.agentsCount++, 1 === b.agents.agentsCount ? (this.mainAgent = a, this.renderAgentHeader(a.pid), this.renderAgentMinimizedWidget(a.pid), d.className = "single-agent") : (k.container.getElementById("profileDetailNoImage") && (this.renderAgentHeader(this.mainAgent.pid), this.renderAgentMinimizedWidget(this.mainAgent.pid)), this.changeDragElementSize(50), d.className = "multi-agent", this.expandAgentList = b.eventHandler.listen(h, "click", function(a) {
                            n.openAgentList()
                        }, "expandClick")), h = u["agent-profile"],
                        d = u["agent-profile-image"], c = u["agent-profile-description"], e = new D("agentProfile-" + a.pid, null, {
                            className: "agentWrapper clearfix"
                        }, null, e.documentRef), f = a.pi ? t.agentImgUrl + "/" + a.pi : "", g = (g = "explorer" === K && 9 > H) ? "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + f + "',sizingMethod='scale');" : "", f = f ? "background-image : url('" + f + "'); background-size : 40px 40px; background-position : 0px 0px;" : "", c = m.escapeTemplateReplacement(c, [{
                            placeholder: "__POSITION_CLASS__",
                            textReplace: a.pst ? "agentName" : "agentNameCentered"
                        }, {
                            placeholder: "__POSITION__",
                            textReplace: a.pst
                        }, {
                            placeholder: "__NAME__",
                            textReplace: a.n
                        }]), d = d.replace("__PROFILE_ID__", a.pid).replace("__IMAGE_URL__", f).replace("__IE_IMAGE_SCALE__", g), e.template = m.escapeTemplateReplacement(h, [{
                            placeholder: "__AGENT_PROFILE_DETAIL__",
                            textReplace: c
                        }, {
                            placeholder: "__AGENT_PROFILE_IMAGE__",
                            textReplace: d
                        }, {
                            placeholder: "__ID__",
                            textReplace: ""
                        }]), p.appendChild(e.buildView()), this.styleAgentBar())
                },
                changeDragElementSize: function(a) {
                    f.isRTL() ? this.dragElement.restyle("right",
                        a + "px !important") : this.dragElement.restyle("left", a + "px !important")
                },
                removeAgent: function(a) {
                    var h, d;
                    if (d = k.container.elementReferrer ? k.container : null) b.agents.agentsCount--, h = d.getElementById("agentProfileContainer"), d = d.getElementById("agentProfile-" + a), 0 === b.agents.agentsCount ? (this.clearAgentHeader(), this.clearAgentFooter(), this.changeDragElementSize(0)) : 1 === b.agents.agentsCount && (b.eventHandler.removeEventHandler(h, "click", this.expandAgentList), this.changeDragElementSize(0)), 0 < b.agents.agentsCount &&
                        this.mainAgent.pid === a && (this.mainAgent = y.agentProfiles[Object.keys(y.agentProfiles)[0]], this.renderAgentHeader(this.mainAgent.pid), this.renderAgentMinimizedWidget(this.mainAgent.pid)), d && d.parentNode.removeChild(d), 1 === b.agents.agentsCount && (this.renderAgentHeader(this.mainAgent.pid), this.renderAgentMinimizedWidget(this.mainAgent.pid));
                    this.styleAgentBar();
                    d = this.chatContainer;
                    h = d.getElementById("agentProfileContainer");
                    f.chatPosition();
                    a = f.minimizedDimensions().height;
                    f.minimizedDimensions();
                    f.chatBubble();
                    d.getElementById("agentList");
                    h && 0 === b.agents.agentsCount && (this.clearAgentHeader(), this.clearAgentFooter(), p && p.agentBarChanged(a))
                },
                renderAgentHeader: function(a) {
                    var h, d;
                    d = "";
                    var c = this.chatContainer,
                        e = c.getElementById("agentProfileContainer");
                    c && (e && a) && (a = y.agentProfiles[a], h = a.pi ? t.agentImgUrl + "/" + a.pi : "", this.clearAgentHeader(), this.addProfileDetail(a), h || 1 < b.agents.agentsCount) && (d = "background-image : url('" + h + "'); background-size : 40px 40px; background-position : 0px 0px;", "explorer" === K &&
                        9 > H && (d += "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + h + "',sizingMethod='scale');"), c.getElementById("innerWrapper").className = "border-corner has-profile-image ", c.getElementById("headerBoxControlsContainer") && this.dragElement.restyle("height", "50px !important"), h = new D("profileFallbackImage", null, {
                            className: "alias-image"
                        }, null, c.documentRef), d = new D("profileImage-" + a.pid, d, {
                            className: "alias-image"
                        }, null, c.documentRef), e.appendChild(h.buildView()), e.appendChild(d.buildView()))
                },
                clearAgentHeader: function() {
                    var a = this.chatContainer,
                        b = a.getElementById("agentProfileContainer");
                    b.innerHTML = "";
                    a.getElementById("innerWrapper").className = "border-corner";
                    a.getElementById("headerBoxControlsContainer") && this.dragElement.restyle("height", "45px !important");
                    b.style.height = "45px"
                },
                renderAgentMinimizedWidget: function(a) {
                    var h, d, c, e, g, k, n, q = p && p.container && p.container.elementReferrer ? p.container : null;
                    if (q && (this.chatContainer && a) && (e = y.agentProfiles[a], a = q.getElementById("tawkchat-minified-agent-container"),
                            d = q.getElementById("tawkchat-status-text-container"), c = q.getElementById("tawkchat-minified-link-container"), n = q.getElementById("tawkchat-chat-indicator"), f.chatBubble(), h = f.minimizedDimensions().height, f.minimizedDimensions(), chatIndicatorHeight = 37, heightDifference = 60 - h, a)) {
                        this.clearAgentFooter();
                        h = e.pi ? t.agentImgUrl + "/" + e.pi : "";
                        g = new D("profileDetail", null, null, null, q.documentRef);
                        h || 1 < b.agents.agentsCount ? g.template = m.escapeTemplateReplacement(u["agent-profile-description"], [{
                            placeholder: "__POSITION_CLASS__",
                            textReplace: e.pst ? "agentName" : "agentNameCentered"
                        }, {
                            placeholder: "__POSITION__",
                            textReplace: e.pst
                        }, {
                            placeholder: "__NAME__",
                            textReplace: e.n
                        }]) : (k = e.pst ? "&nbsp-&nbsp" + e.pst : "", g.template = m.escapeTemplateReplacement(u["agent-profile-description-noimage"], [{
                            placeholder: "__POSITION__",
                            textReplace: k
                        }, {
                            placeholder: "__NAME__",
                            textReplace: e.n
                        }]));
                        a.appendChild(g.buildView());
                        if (h || 1 < b.agents.agentsCount) 0 < heightDifference && p.agentBarChanged(60), g = "background-image : url('" + h + "'); background-position: 0; background-size: 40px 40px;",
                            "explorer" === K && 9 > H && (g += "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + h + "',sizingMethod='scale');"), e = new D("profileImage-" + e.pid, g, {
                                className: "alias-image"
                            }, null, q.documentRef), fallbackView = new D("profileFallbackImage", null, {
                                className: "alias-image"
                            }, null, q.documentRef), a.appendChild(fallbackView.buildView()), a.appendChild(e.buildView());
                        a.style.display = "block";
                        d.style.display = "none";
                        h || 1 < b.agents.agentsCount ? (c.style.marginTop = "17px", R && (a.style.marginTop = "2px")) : R && (a.style.marginTop =
                            "10px");
                        n && "block" === n.style.display && b.viewHandler.handleIndicatorToggle(!0)
                    }
                },
                clearAgentFooter: function() {
                    var a, b, d;
                    (d = p && p.container && p.container.elementReferrer ? p.container : null) && (this.chatContainer && f.isDesktopRectangle()) && (a = d.getElementById("tawkchat-minified-agent-container"), b = d.getElementById("tawkchat-status-text-container"), d = d.getElementById("tawkchat-minified-link-container"), p.agentBarChanged(f.minimizedDimensions().height), a.innerHTML = "", a.style.display = "none", b.style.display = "block",
                        d.style.marginTop = R ? "10px" : "3px")
                },
                handleEndChat: function() {
                    k.chatEnded();
                    p && p.container && p.chatEnded();
                    this.clearAgentHeader();
                    f.isEmbedded || (f.isPopup ? (b.socketManager.sendToConnector("popupOnFocus", !1), setTimeout(function() {
                        1 < e.history.length ? e.history.back() : e.close()
                    }, 200)) : b.sessionHandler.notifyWindowState("min"))
                },
                handleRestartChat: function() {
                    b.formHandler.closeForm();
                    k.chatStarted()
                }
            });
            Ra.prototype.addProfileDetail = function(a) {
                var h, d, c, e = this.chatContainer.getElementById("agentProfileContainer");
                a.pi || 1 < b.agents.agentsCount ? (h = new D("profileDetail", null, null, null, this.chatContainer.documentRef), c = u["agent-profile-description"], h.template = m.escapeTemplateReplacement(c, [{
                    placeholder: "__POSITION_CLASS__",
                    textReplace: a.pst ? "agentName" : "agentNameCentered"
                }, {
                    placeholder: "__POSITION__",
                    textReplace: a.pst
                }, {
                    placeholder: "__NAME__",
                    textReplace: a.n
                }])) : (h = new D("profileDetailNoImage", null, {
                        className: "noImageAgentProfileDetail"
                    }, null, this.chatContainer.documentRef), d = a.pst ? "&nbsp-&nbsp" + a.pst : "", c = u["agent-profile-description-noimage"],
                    h.template = m.escapeTemplateReplacement(c, [{
                        placeholder: "__POSITION__",
                        textReplace: d
                    }, {
                        placeholder: "__NAME__",
                        textReplace: a.n
                    }]));
                e.appendChild(h.buildView())
            };
            Ra.prototype.openAgentList = function() {
                var a = this;
                this.chatContainer.getElementById("agentProfileContainer").style.display = "none";
                this.chatContainer.getElementById("agentListBack").style.display = "block";
                this.chatContainer.getElementById("agentBar").style.display = "block";
                b.eventHandler.listen(this.chatContainer.getElementById("agentListBack"),
                    "click",
                    function(b) {
                        a.closeAgentList()
                    }, "backClick")
            };
            Ra.prototype.closeAgentList = function() {
                this.chatContainer.getElementById("agentProfileContainer").style.display = "block";
                this.chatContainer.getElementById("agentListBack").style.display = "none";
                this.chatContainer.getElementById("agentBar").style.display = "none"
            };
            var sa = function() {
                var a = this;
                this.setDimensions();
                this.clickToPopout = this.setPopoutHref = this.isMoving = !1;
                this.clickEvent = "touchend";
                this.container = new S(m.getRandomName(), m.getGenericStyle({
                    width: a.minifiedBoxWidth +
                        "px",
                    height: a.minifiedBoxHeight + "px",
                    minwidth: a.minifiedBoxWidth + "px",
                    minheight: a.minifiedBoxHeight + "px",
                    maxwidth: a.minifiedBoxWidth + "px",
                    maxheight: a.minifiedBoxHeight + "px",
                    zindex: "1000000",
                    display: "none"
                }), ga, "iframe");
                t.pageStatus.subscribe(function(b) {
                    a.updateStatus(b)
                });
                f.chatPosition.subscribe(function(b) {
                    a.updateWidgetPosition()
                });
                f.mobMinStyle.subscribe(function() {
                    a.container && a.container.elementReferrer && a.container.insertCssFile(f.mobMinStyle(), !0)
                })
            };
            sa.prototype.setDimensions = function() {
                "rectangle" ===
                f.mobileWidget() ? (this.minifiedBoxWidth = 110, this.minifiedBoxHeight = 68) : (this.minifiedBoxWidth = 49, this.minifiedBoxHeight = 54)
            };
            sa.prototype.buildView = function() {
                this.container.buildIframe(b.MinifiedMobileStyle + f.mobMinStyle());
                this.updateStatus();
                this.attachEvents();
                this.updateWidgetPosition()
            };
            sa.prototype.updateStatus = function(a) {
                var h;
                a || (a = t.pageStatus());
                if (this.container && a) {
                    if (h = this.container.getElementById("tawkchat-status-icon")) h.className = a;
                    if (h = this.container.getElementById("tawk-minified-mobile-text")) h.innerHTML =
                        "online" === a || "away" === a ? "Chat" : "Mail";
                    try {
                        b.eventEmitter.emit("resizeIframeHeight")
                    } catch (d) {
                        c.handleError("Unable to emit resizeIframeHeight", d.fileName, d.lineNumber, d.stack)
                    }
                }
            };
            sa.prototype.attachEvents = function() {
                var a = this;
                this.container.attachUserEventListener(b.viewHandler.clickEvent, function() {
                    a.isMoving || b.sessionHandler.notifyWindowState("max");
                    a.isMoving = !1
                }, "tawkchat-minified-box", "mobpclick");
                this.container.attachUserEventListener("touchmove", function() {
                        a.isMoving = !0
                    }, "tawkchat-minified-box",
                    "mobpmove")
            };
            sa.prototype.show = function() {
                this.container.restyle("display", "block")
            };
            sa.prototype.updateWidgetPosition = function() {
                var a = "";
                this.container && this.container.elementReferrer && (a = f.isCenterPositioned() ? a + " center " : f.isTopPositioned() ? a + " top " : a + " bottom ", a = f.isRightPositioned() ? a + " right " : a + " left ", a += " " + f.mobileWidget() + " ", this.container.documentRef.body.className = a)
            };
            var ta = TawkClass.extend({
                init: function() {
                    var a = this;
                    this.container = new S(m.getRandomName(), m.getGenericStyle({
                        width: "100%",
                        height: "100%",
                        zindex: "1000000",
                        display: "none",
                        position: "static",
                        top: "0",
                        bottom: "0",
                        overflow: "hidden",
                        "max-width": "none",
                        "max-height": "none",
                        border: "0 none",
                        padding: "0",
                        margin: "0"
                    }), ga, "iframe");
                    this.wrapper = U.isCookieEnabled ? new D("tawkchat-maximized-container-element") : new D("tawkchat-maximized-container-element-no-cookies");
                    this.container.addChildViews([this.wrapper]);
                    this.maxNumberFileUpload = 5;
                    this.maxSizeFileUpload = 2097152;
                    this.isScrollbarDown = !0;
                    this.scrollTimeout = null;
                    this.tabContentScroll = !1;
                    t.pageStatus.subscribe(function(b) {
                        a.updateGreetings(b)
                    });
                    b.eventEmitter.on("formOpened", function() {
                        a.container && a.container.getElementById("chatPanel") && (a.container.getElementById("chatPanel").style.display = "none")
                    });
                    b.eventEmitter.on("formClosed", function() {
                        a.container && a.container.getElementById("chatPanel") && (a.container.getElementById("chatPanel").style.display = "block")
                    });
                    f.isRTL.subscribe(function(b) {
                        a.wrapper && (b ? a.wrapper.addClass("rtl-direction") : a.wrapper.addClass("ltr-direction"))
                    });
                    f.webRTCSettings.subscribe(function() {
                        a.toggleWebRTCActions()
                    })
                },
                buildView: function() {
                    b.MaximizedMobileStyle = b.MaximizedMobileStyle.replace(/#tawktoLink/g, "#" + b.viewHandler.tawktoLinkName);
                    b.MaximizedMobileStyle = b.MaximizedMobileStyle.replace(/#bottomContainer/g, "#" + b.viewHandler.bottomContainerName);
                    this.wrapper.template = this.wrapper.template.replace(/__TAWK_TO_LINK__/gm, b.viewHandler.tawktoLinkName);
                    this.wrapper.template = this.wrapper.template.replace(/__BOTTOM_CONTAINER__/gm, b.viewHandler.bottomContainerName);
                    this.wrapper.template = this.wrapper.template.replace("__TOO_LONG_MESSAGE__", b.languageParser.translate("chat", "message_too_long"));
                    this.container.buildIframe(b.ResetStyle + "" + b.MaximizedMobileStyle + f.mobMaxStyle());
                    this.updateGreetings();
                    this.attachEvents();
                    this.wrapper.addClass("iphone");
                    f.isRTL() ? this.wrapper.addClass("rtl-direction") : this.wrapper.addClass("ltr-direction");
                    fb(this.container.documentRef);
                    this.toggleWebRTCActions()
                },
                attachEvents: function() {
                    var a = this,
                        c = this.container.documentRef.getElementById("emoji-selection-container");
                    this.container.attachUserEventListener("touchstart", function(b) {
                        a.isScrolling = !1
                    }, "menuOptions", "startMenuOptionsTouchEvent");
                    this.container.attachUserEventListener("touchend", function(b) {
                        a.isScrolling = !1
                    }, "menuOptions", "endMenuOptionsTouchEvent");
                    this.container.attachUserEventListener("touchmove", function(b) {
                        a.isScrolling = !0
                    }, "menuOptions", "moveMenuOptionsTouchEvent");
                    this.container.attachUserEventListener("focus", function(d) {
                        a.isScrollbarDown && setTimeout(function() {
                                b.viewHandler.scrollToBottom()
                            },
                            500)
                    }, "chatTextarea", "chatinputfocus");
                    b.eventHandler.listen(e, "resize", function() {
                        a.isScrollbarDown && b.viewHandler.scrollToBottom()
                    }, "mobileresize");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        b.chatHandler.changeRating(1);
                        b.eventHandler.cancelEvent(a)
                    }, "ratePositive", "ratepveclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        b.chatHandler.changeRating(-1);
                        b.eventHandler.cancelEvent(a)
                    }, "rateNegative", "ratenveclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(d) {
                            var c = a.container.getElementById("chatTextarea");
                            b.eventHandler.cancelEvent(d);
                            b.chatHandler.sendMessage(c.value);
                            c.value = ""
                        }, "textareaSubmitButton", "submitclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        a.container.getElementById("maxFileNotificationContainer").classList.add("hidden");
                        b.eventHandler.cancelEvent(d)
                    }, "closeNumberNotification", "closeNumberNotification");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        a.container.getElementById("maxSizeNotificationContainer").classList.add("hidden");
                        b.eventHandler.cancelEvent(d)
                    }, "closeSizeNotification", "closeSizeNotification");
                    this.container.attachUserEventListener("scroll", function() {
                        clearTimeout(a.scrollTimeout);
                        a.scrollTimeout = setTimeout(function() {
                            a.isScrollbarDown = b.viewHandler.ifScrollbarDown();
                            !b.formHandler.currentForm && (b.viewHandler.newMessageNotSeen && (b.viewHandler.isMaximized || f.isPopup)) && b.viewHandler.checkUnseenMessages()
                        }, 200)
                    }, "chatContainer", "mobilechatscroll");
                    this.container.attachUserEventListener("change", function(d) {
                        b.eventHandler.cancelEvent(d);
                        a.toggleMenu();
                        var c = b.eventHandler.getTargetElement(d),
                            h = 0,
                            f = 0,
                            g = [],
                            k = [],
                            m = function() {
                                f++;
                                f === h && (c.value = "")
                            };
                        if (void 0 === e.FormData) h = 1, b.viewHandler.startUpload(a.container.getElementById("upload-form"), !0, m);
                        else if ((d = c.files) && d.length) {
                            for (var n = 0; n < d.length; n++) d[n].size > a.maxSizeFileUpload ? g.push(d[n]) : n >= a.maxNumberFileUpload ? k.push(d[n]) : b.viewHandler.startUpload(d[n], null, m);
                            b.viewHandler.checkUploadFileWarning(g, k)
                        }
                    }, "fileInput", "fileInputChanged");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(b) {
                            b.stopPropagation();
                            "active" === a.container.getElementById("viewEmoji").className ? a.closeEmojiSelection() : (a.container.getElementById("viewEmoji").className = "active", eb(c))
                        }, "viewEmoji", "viewEmojiClick");
                    this.wrapper.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        d = b.eventHandler.getTargetElement(d);
                        "function" === typeof c.contains ? c.contains(d) || a.closeEmojiSelection() : m.isDescendent(c, d) && a.closeEmojiSelection()
                    }, null, "maxWidgetClick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(b) {
                            a.tabContentScroll ? b.stopPropagation() : a.tabContentScroll = !1
                        }, "tab-content", "mobpclick");
                    this.container.attachUserEventListener("touchmove", function() {
                        a.tabContentScroll = !0
                    }, "tab-content", "mobpmove");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        m.getWebRTCToken(!0, !1, function(a, d) {
                            a && b.viewHandler.appendMessage({
                                senderType: "s",
                                message: "Video call is not available.",
                                time: new Date,
                                type: "n"
                            })
                        })
                    }, "videoCallOption", "videoCallClick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(a) {
                            m.getWebRTCToken(!1, !1, function(a, d) {
                                a && b.viewHandler.appendMessage({
                                    senderType: "s",
                                    message: "Voice call is not available.",
                                    time: new Date,
                                    type: "n"
                                })
                            })
                        }, "voiceCallOption", "voiceCallClick")
                }
            });
            ta.prototype.show = function() {
                this.container.restyle("display", "block");
                b.viewHandler.newMessageNotSeen && b.viewHandler.checkUnseenMessages()
            };
            ta.prototype.updateGreetings = function(a) {
                var b, d;
                if ((a = a || t.pageStatus()) && this.container.elementReferrer) {
                    if (!f.isPopup) {
                        b = this.container.getElementById("siteName");
                        if (!b) return;
                        d = q.getShortMessage(a);
                        if (!d) return;
                        b.innerHTML = d
                    }
                    if (a = q.getLongMessage(a))
                        if (b = this.container.getElementById("greetingsContainer")) b.innerHTML = a
                }
            };
            ta.prototype.toggleEndChatOption = function(a) {
                var b = this.container.getElementById("endChatOption");
                b && (b.style.display = a ? "block" : "none")
            };
            ta.prototype.addEmojiToInput = function(a) {
                var b = this.container.getElementById("chatTextarea");
                this.closeEmojiSelection();
                b.value += a;
                setTimeout(function() {
                    b.focus()
                }, 20)
            };
            ta.prototype.closeEmojiSelection = function() {
                this.container.getElementById("viewEmoji").className =
                    "";
                this.container.getElementById("emoji-selection-container").style.display = "none"
            };
            ta.prototype.toggleWebRTCActions = function() {
                this.container.documentRef && (f.webRTCSettings() && f.webRTCSettings().en ? (this.container.documentRef.getElementById("videoCallOption").style.display = f.webRTCSettings().v ? "block" : "none", this.container.documentRef.getElementById("voiceCallOption").style.display = "block") : (this.container.documentRef.getElementById("videoCallOption").style.display = "none", this.container.documentRef.getElementById("voiceCallOption").style.display =
                    "none"))
            };
            var na = ta.extend({
                init: function() {
                    var a = this;
                    this.hasChatStarted = !1;
                    this._super(this);
                    b.eventEmitter.on("formOpened", function() {
                        a.container && ("preChatForm" !== b.formHandler.currentForm && "offlineForm" !== b.formHandler.currentForm || a.toggleMenuContainer(!1))
                    });
                    b.eventEmitter.on("formClosed", function() {
                        a.container && (b.chatHandler.hasChatEnded || (!b.viewHandler.isMaximized || a.container.getElementById("chatEnded")) || (a.hasChatStarted = !0), a.toggleMenuContainer(!0))
                    });
                    f.soundOn.subscribe(function() {
                        a.toggleSound()
                    });
                    I.pageName.subscribe(function(b) {
                        a.container && (a.container.getElementById("siteName") && f.isPopup) && (a.container.getElementById("siteName").innerHTML = b)
                    });
                    b.eventEmitter.on("localeChanged", function() {
                        b.languageParser.language.chat.defaultName = b.languageParser.language.chat.mobileName;
                        a.container && (a.insertText(), a.toggleSound())
                    })
                },
                buildView: function() {
                    this._super(this);
                    this.toggleSound();
                    this.insertText();
                    this.wrapper.addClass(m.getContrast(f.headerTxtColor));
                    b.languageParser && b.languageParser.language &&
                        (b.languageParser.language.chat.defaultName = b.languageParser.language.chat.mobileName);
                    this.attachEvents()
                },
                attachEvents: function() {
                    var a = this,
                        c = this.container.getElementById("chatTextarea"),
                        d = this.container.getElementById("menuOptions"),
                        l = this.container.documentRef.getElementById("tooLongMsgNotification");
                    this._super(this);
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                            a.isScrolling || (a.toggleMenu(), b.formHandler.openForm("nameForm"), b.eventHandler.cancelEvent(d))
                        }, "changeNameOption",
                        "changenameclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(c) {
                        b.eventHandler.cancelEvent(c);
                        d && (d.style.display = "none");
                        b.formHandler.currentForm && "preChatForm" !== b.formHandler.currentForm && "offlineForm" !== b.formHandler.currentForm ? b.formHandler.closeForm() : "block" === a.container.getElementById("tawkToContent").style.display ? a.container.getElementById("tawkToContent").style.display = "none" : f.isPopup ? e.close() : (b.sessionHandler.notifyWindowState("min"), b.viewHandler.maximizedWidget.container.hide(),
                            b.viewHandler.isMaximized = !1, b.viewHandler.show())
                    }, "backButtonContainer", "backclick");
                    c && ib.initElement(c, function(d, c) {
                        l.className = 5E3 > c.length ? "" : "visible";
                        a.toggleSubmitButton(c);
                        b.chatHandler.sendTextPreview(d)
                    });
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                        a = b.eventHandler.getTargetElement(a);
                        "menuButton" === a.id || ("menuButtonContainer" === a.id || d.contains(a)) || (d.style.display = "none")
                    }, "tawkchat-maximized-container-element", "mainclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(d) {
                            a.toggleMenu();
                            b.eventHandler.cancelEvent(d)
                        }, "menuButtonContainer", "menuclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        a.isScrolling || (a.toggleMenu(), b.formHandler.openForm("emailTranscriptForm"), b.eventHandler.cancelEvent(d))
                    }, "emailTranscriptOption", "emailtranscriptclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(b) {
                        a.isScrolling || f.whiteLabel() || (U.isCookieEnabled ? f.brandingRedirect() ? '' : a.container.getElementById("tawkToContent").style.display = "block" : "nokia" === A ? '' : '')
                    }, b.viewHandler.tawktoLinkName, "tawktoclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent,
                        function(b) {
                            a.isScrolling || (a.container.getElementById("tawkToContent").style.display = "none")
                        }, "cancelTawkRedirect", "cancelTawkRedirectclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(b) {
                        a.isScrolling || (a.container.getElementById("tawkToContent").style.display = "none", "nokia" === A ? '' :
                            '')
                    }, "tawkRedirect", "tawkRedirectClick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        a.isScrolling || (b.eventHandler.cancelEvent(d), b.chatHandler.toggleSound())
                    }, "soundOption", "soundclick");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                            a.isScrolling || (a.toggleMenu(), b.formHandler.openForm("endChatForm"), b.eventHandler.cancelEvent(d))
                        },
                        "endChatOption", "endChatOptionClicked");
                    this.container.attachUserEventListener(b.viewHandler.clickEvent, function(d) {
                        a.isScrolling || (b.viewHandler.popup(), b.eventHandler.cancelEvent(d))
                    }, "popOut", "popOutOptionClicked")
                }
            });
            na.prototype.toggleMenu = function() {
                var a = this.container.getElementById("menuOptions");
                a && (a.style.display = "block" === a.style.display ? "none" : "block")
            };
            na.prototype.toggleMenuContainer = function(a) {
                var b, d;
                this.container && (d = this.container.getElementById("menuOptions"), (b = this.container.getElementById("menuButtonContainer")) &&
                    d && (b.style.display = a ? "block" : "none", a || (d.style.display = "none")))
            };
            na.prototype.toggleSound = function() {
                U.isCookieEnabled && (this.container.getElementById("soundOption").className = f.soundOn() ? "on" : "off", this.container.getElementById("soundTitle").innerHTML = f.soundOn() ? b.languageParser.translate("menu", "sound_on") : b.languageParser.translate("menu", "sound_off"))
            };
            na.prototype.chatEnded = function() {
                var a, c = this,
                    d = this.container.getElementById("chatContainer");
                this.hasChatStarted = !1;
                a = new D("chatEnded");
                a.template = m.escapeTemplateReplacement(a.template, [{
                    placeholder: "__CHAT_ENDED__",
                    textReplace: b.languageParser.translate("chat", "chatEnded")
                }, {
                    placeholder: "__START_CHAT__",
                    textReplace: b.languageParser.translate("chat", "newChat")
                }, {
                    placeholder: "__EMAIL_TRANCRIPT__",
                    textReplace: b.languageParser.translate("rollover", "emailTranscriptOption")
                }]);
                a.restyle("display", "block");
                this.container.documentRef.getElementById("tawkchat-maximized-container-element").appendChild(a.buildView());
                this.container.attachUserEventListener(b.viewHandler.clickEvent,
                    function(a) {
                        b.formHandler.openForm("emailTranscriptForm");
                        b.eventHandler.cancelEvent(a)
                    }, "emailTranscript", "emailTranscript");
                this.container.attachUserEventListener(b.viewHandler.clickEvent, function(a) {
                    c.chatStarted();
                    b.chatHandler.startNewChat()
                }, "newChat", "newChat");
                d && (d.className += " chat-ended");
                this.toggleMenuContainer(!1)
            };
            na.prototype.chatStarted = function() {
                var a = this.container.getElementById("chatEnded"),
                    c = this.container.getElementById("chatContainer");
                a && a.parentNode.removeChild(a);
                c && (c.className =
                    c.className.replace("chat-ended", ""));
                f.showPreChatForm && !t.prechatFormSubmitted ? b.formHandler.openForm("preChatForm") : this.hasChatStarted = !0;
                this.toggleMenuContainer(!0)
            };
            na.prototype.toggleSubmitButton = function(a) {
                var b = this.container.getElementById("ratingContainer"),
                    d = this.container.getElementById("textareaSubmitContainer");
                a && this.isSubmitShown || !a && !this.isSubmitShown || (a ? (b.style.display = "none", d.style.display = "block", this.isSubmitShown = !0) : (d.style.display = "none", b.style.display = "block", this.isSubmitShown = !1))
            };
            na.prototype.insertText = function() {
                var a;
                this.container.getElementById("cancelTawkRedirect").innerHTML = b.languageParser.translate("form", "CancelButton");
                this.container.getElementById("tawkRedirect").innerHTML = b.languageParser.translate("form", "visitButton");
                this.container.getElementById("tawkContent").innerHTML = b.languageParser.translate("overlay", "tawkContent");
                if (U.isCookieEnabled) {
                    this.container.getElementById("chatTextarea").placeholder = b.languageParser.translate("chat", "mobileEnterText");
                    this.container.getElementById("changeNameOption").childNodes[1].innerHTML = b.languageParser.translate("menu", "change_name");
                    this.container.getElementById("emailTranscriptOption").childNodes[1].innerHTML = b.languageParser.translate("rollover", "emailTranscriptOption");
                    this.container.getElementById("endChatOption").childNodes[1].innerHTML = b.languageParser.translate("rollover", "end");
                    this.container.getElementById("popOut").childNodes[1].innerHTML = b.languageParser.translate("rollover", "popOut");
                    this.container.getElementById("maxFileNotificationMessage").innerHTML =
                        b.languageParser.translate("notifications", "maximum_file_upload_warning", {
                            strongStart: "<strong>",
                            strongEnd: "</strong>",
                            limitFileNumber: "5"
                        });
                    this.container.getElementById("maxSizeNotificationMessage").innerHTML = b.languageParser.translate("notifications", "maximum_size_upload_warning", {
                        strongStart: "<strong>",
                        strongEnd: "</strong>",
                        limitFileSize: "2mb"
                    });
                    this.container.getElementById("videoCallOption").childNodes[1].innerHTML = b.languageParser.translate("rollover", "videoCall");
                    this.container.getElementById("voiceCallOption").childNodes[1].innerHTML =
                        b.languageParser.translate("rollover", "voiceCall");
                    listElem = m.getElementsByClassName(this.container.getElementById("chatContainer"), "closeNotification");
                    for (a = 0; a < listElem.length; a++) listElem[a].innerHTML = b.languageParser.translate("form", "CloseButton");
                    a = this.container.getElementById("uploadFileOption");
                    m.isFileInputSupported ? a.childNodes[0].childNodes[1].innerHTML = b.languageParser.translate("rollover", "uploadFile") : a.parentNode.removeChild(a)
                }
            };
            var C = function(a) {
                var c = this;
                arguments.length && (this.browser =
                    a, this.metaContent = this.getMetaContent(), this.landscape = !1, this.zoom = 1, this.resizeTimeout = this.hasKeyboard = this.minAndMaxScalesAreEqual = this.hasViewportHeightWidth = this.hasInitialScale = !1, this.removeAgentNotification = !0, this.clickEvent = "touchend", this.hasChatStarted = this.isMaximized = this.isBottomWidget = !1, this.originalDocumentStyle = null, this.isTherePreChat = f.showPreChatForm, this.noZoomMetaTag = null, this.isIndicatorOn = !1, this.scrollTop = this.scrollLeft = 0, this.shapeChanged(), this.minifiedWidget = new sa,
                    this.maximizedWidget = new na, this.iframeContainer = new D("tawkchat-container", "border: 0 none !important; padding: 0 !important; margin: 0 !important; z-index: 999999999 !important; overflow : visible !important; min-width: 0 !important; min-height: 0 !important; max-width: none !important; max-height: none !important; width : auto !important; height : auto !important"), this.indicator = new Ba(this.minifiedWidget.container), this.iframeContainer.addChildViews([this.minifiedWidget.container, this.maximizedWidget.container]),
                    "#max-widget" === e.location.hash && (e.history ? e.history.replaceState({}, document.title, ".") : e.location.hash = ""), this.iframeContainer.buildView(), this.chatContainer = this.maximizedWidget.container, b.eventEmitter.on("resizeIframeHeight", function() {
                        c.resizeIframeHeight()
                    }), b.eventEmitter.on("visitorPopupFocus", function(a) {
                        c.isPopupFocused = a
                    }), e.onpopstate = function(a) {
                        !f.isPopup && (c.isMaximized && "#max-widget" !== e.location.hash) && t.chatWindowState("min")
                    }, t.chatWindowState.subscribe(function(a) {
                        f.isPopup ||
                            (c.hideWidget(), "max" === a ? (n.disableMobileBackHistory || (e.history.pushState ? e.history.pushState(null, null, e.location.href + "#max-widget") : e.location.hash = "max-widget"), c.maximize()) : (n.disableMobileBackHistory || "#max-widget" === e.location.hash && e.history.back(), c.isMaximized = !1, c.show()))
                    }), t.pageStatus.subscribe(function(a) {
                        c.updateViewByStatus(a)
                    }), f.mobileWidget.subscribe(function() {
                        c.renderBottomWidget();
                        c.minifiedWidget.buildView()
                    }), f.chatPosition.subscribe(function() {
                        c.updateWidgetPosition()
                    }),
                    y.rating.subscribe(function(a) {
                        c.changeRating(a)
                    }), f.mobMaxStyle.subscribe(function() {
                        c.chatContainer.insertCssFile(f.mobMaxStyle());
                        c.maximizedWidget.wrapper.removeClass("white");
                        c.maximizedWidget.wrapper.removeClass("black");
                        c.maximizedWidget.wrapper.addClass(m.getContrast(f.headerTxtColor))
                    }), f.mobileWidget.subscribe(function(a) {
                        c.shapeChanged();
                        c.minifiedWidget.container.massRestyle({
                            width: c.minifiedBoxWidth + "px !important",
                            height: c.minifiedBoxHeight + "px !important",
                            "min-width": c.minifiedBoxWidth +
                                "px !important",
                            "min-height": c.minifiedBoxHeight + "px !important",
                            "max-width": c.minifiedBoxWidth + "px !important",
                            "max-height": c.minifiedBoxHeight + "px !important"
                        })
                    }), b.chatHandler.hasChatStarted.subscribe(function(a) {
                        c.maximizedWidget.toggleEndChatOption(a)
                    }))
            };
            C.prototype = new G;
            C.prototype.constructor = C;
            C.prototype.parent = G.prototype;
            C.prototype.begin = function() {
                document.body.appendChild(this.iframeContainer.elementReferrer);
                if ("symbian" === this.browser || "ie" === this.browser || "opera" === this.browser ||
                    "android2.3" === this.browser) this.clickEvent = "click";
                this.minifiedWidget.buildView();
                this.maximizedWidget.buildView();
                this.chatContainer = this.maximizedWidget.container;
                this.noZoomMetaTag = document.createElement("meta");
                this.noZoomMetaTag.name = "viewport";
                this.parent.begin.call(this);
                if (m.isTouchDevice() && ("android" === A || "android2" === A || "android2.3" === A)) {
                    var a = this.chatContainer.getElementById("chatContainer"),
                        c = this.chatContainer.getElementById("menuScrollable");
                    this.addOverflowScroll(a);
                    this.addOverflowScroll(c);
                    a.style.overflow = "hidden";
                    c.style.overflow = "hidden"
                }
                b.audioPlayer.initAudioPlayer()
            };
            C.prototype.shapeChanged = function() {
                (this.isMinifiedRound = "round" === f.mobileWidget() ? !0 : !1) ? (this.defaultWidth = 49, this.defaultHeight = 54, this.minifiedBoxWidth = 49, this.minifiedBoxHeight = 54) : (this.defaultWidth = 110, this.defaultHeight = 68, this.minifiedBoxWidth = 110, this.minifiedBoxHeight = 68)
            };
            C.prototype.handleEndChat = function() {
                this.maximizedWidget.chatEnded();
                this.chatContainer.hide();
                this.isMaximized = !1;
                this.iframeContainer.restyle("right",
                    "0px");
                this.show()
            };
            C.prototype.show = function() {
                var a = document.querySelector("meta[name=viewport]") || document.querySelector("meta[name=VIEWPORT]");
                this.isMaximized ? (this.iframeContainer.massRestyle({
                    left: "0px",
                    top: "0px",
                    right: "0px",
                    bottom: "0px"
                }), this.isMobileOptimizedWebsite() || null === this.noZoomMetaTag || (this.metaContent || "" !== this.noZoomMetaTag.content ? this.metaContent && !this.hasNoScale && a && a.setAttribute("content", this.metaContent + ", user-scalable=no") : (this.noZoomMetaTag.content = "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no",
                    this.noZoomMetaTag.parentNode || document.getElementsByTagName("head")[0].appendChild(this.noZoomMetaTag))), this.isVisibilityToggled || (this.iframeContainer.show(), this.chatContainer.show()), this.minifiedWidget.container.hide(), "max" !== t.chatWindowState() && b.sessionHandler.notifyWindowState("max"), b.viewHandler.newMessageNotSeen && setTimeout(function() {
                    b.viewHandler.checkUnseenMessages()
                }, 0)) : (this.isMobileOptimizedWebsite() || (this.metaContent && !this.hasNoScale ? a && a.setAttribute("content", this.metaContent) :
                        this.noZoomMetaTag.parentNode && (this.noZoomMetaTag.content = "", document.getElementsByTagName("head")[0].removeChild(this.noZoomMetaTag))), m.blurElements(this.maximizedWidget.container.documentRef.body.getElementsByTagName("input")), m.blurElements(this.maximizedWidget.container.documentRef.body.getElementsByTagName("textarea")), this.isVisibilityToggled || (this.minifiedWidget.container.show(), this.showWidget()), this.resetOriginalStyle(), this.indicator.initIndicator(), "min" !== t.chatWindowState() && b.sessionHandler.notifyWindowState("min"),
                    this.resizeHandler());
                this.isVisibilityToggled || (this.updateViewByStatus(t.pageStatus()), this.parent.show.call(this))
            };
            C.prototype.hideWidget = function() {
                this.isMaximized ? (this.isPopupFocused && b.socketManager.sendToConnector("popupOnFocus", !1), this.chatContainer.hide()) : (null !== this.originalDocumentStyle && (this.iframeContainer.documentRef.body.style.cssText = this.originalDocumentStyle), this.minifiedWidget.container.hide());
                this.iframeContainer.hide()
            };
            C.prototype.showWidget = function() {
                this.iframeContainer.show();
                if (this.isMaximized) this.scrollLeft = void 0 !== e.pageXOffset ? e.pageXOffset : (document.documentElement || document.body.parentNode || document.body).scrollLeft, this.scrollTop = void 0 !== e.pageYOffset ? e.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop, this.scrollToBottom(), this.originalDocumentStyle = this.iframeContainer.documentRef.body.style.cssText, this.iframeContainer.documentRef.body.style.setProperty("height", "100%", "important"), this.iframeContainer.documentRef.body.style.setProperty("min-height",
                    "100%", "important"), this.iframeContainer.documentRef.body.style.setProperty("max-height", "100%", "important"), this.iframeContainer.documentRef.body.style.setProperty("width", "100%", "important"), this.iframeContainer.documentRef.body.style.setProperty("min-width", "100%", "important"), this.iframeContainer.documentRef.body.style.setProperty("max-width", "100%", "important"), this.iframeContainer.documentRef.body.style.setProperty("overflow", "hidden", "important"), this.iframeContainer.documentRef.body.style.setProperty("position",
                    "fixed", "important"), this.maximizedWidget.container.show();
                else {
                    if (f.hideWidgetOnLoad) {
                        this.hideWidget();
                        return
                    }
                    this.minifiedWidget.container.show();
                    this.resizeIframeHeight();
                    null !== this.originalDocumentStyle && (this.iframeContainer.documentRef.body.style.cssText = this.originalDocumentStyle, this.originalDocumentStyle = null, e.scrollTo(this.scrollLeft, this.scrollTop))
                }
                this.iframeContainer.show()
            };
            C.prototype.init = function() {
                this.checkMetaContent();
                this.addResizeEvents();
                this.resizeHandler()
            };
            C.prototype.getZoom =
                function() {
                    this.zoom = screen.width / e.innerWidth
                };
            C.prototype.addResizeEvents = function(a) {
                var c, d = this;
                c = function(a) {
                    d.resizeHandler()
                };
                b.eventHandler.listen(e, "resize", c, "mobileresize");
                b.eventHandler.listen(e, "scroll", c, "mobilescroll");
                a && b.eventHandler.listen(e, "touchmove", c)
            };
            C.prototype.checkMetaContent = function() {
                var a, b = {},
                    d = this.metaContent;
                if (d) {
                    for (var d = d.replace(/ /g, ""), d = d.split(","), c = 0, e = d.length; c < e; c++) a = d[c].split("="), b[a[0]] = a[1];
                    this.hasInitialScale = "1.0" === b["initial-scale"];
                    this.hasViewportHeightWidth = !(!b.width && !b.height);
                    this.minAndMaxScalesAreEqual = b["minimum-scale"] && b["maximum-scale"] && b["minimum-scale"] === b["maximum-scale"];
                    this.initialAndMaxScalesAreEqual = b["initial-scale"] && b["maximum-scale"] && b["initial-scale"] === b["maximum-scale"];
                    this.hasNoScale = "no" === b["user-scalable"] || "0" === b["user-scalable"]
                }
            };
            C.prototype.ifScrollbarDown = function() {
                if (this.isMaximized) return this.parent.ifScrollbarDown.call(this);
                var a, b;
                if (!document) return !1;
                if (a = document.body) return b =
                    document.documentElement.clientHeight + 10, scrollTop = a.scrollTop || document.documentElement.scrollTop, 80 > a.scrollHeight - (scrollTop + b)
            };
            C.prototype.resizeHandler = function() {
                var a = this;
                "offline" === t.pageStatus() && f.hideWidgetOnOffline || this.isMaximized || (clearTimeout(this.resizeTimeout), this.resizeTimeout = setTimeout(function() {
                    var b = a.isLandscape(),
                        d = a.ifScrollbarDown();
                    "offline" === t.pageStatus() && f.hideWidgetOnOffline || (a.landscape !== b && d && setTimeout(function() {
                            a.scrollToBottom()
                        }, 200), a.landscape = b,
                        a.isMobileOptimizedWebsite() && "opera" !== A && "android2.3" !== A || (a.getZoom(), a.renderMinifiedBox()))
                }, 100))
            };
            C.prototype.getMetaContent = function() {
                var a, b, d = document.getElementsByTagName("meta"),
                    c = "";
                a = 0;
                for (b = d.length; a < b; a++) d[a].getAttribute("name") && "viewport" === d[a].getAttribute("name").toLowerCase() && (c = d[a].getAttribute("content"));
                return c
            };
            C.prototype.isLandscape = function() {
                return screen.height < screen.width || e.innerHeight < e.innerWidth
            };
            C.prototype.isMobileOptimizedWebsite = function() {
                this.checkMetaContent();
                return this.minAndMaxScalesAreEqual && (this.hasViewportHeightWidth || this.hasNoScale) || this.initialAndMaxScalesAreEqual
            };
            C.prototype.scaleContent = function(a, b) {
                if (!this.isMaximized) {
                    var d = this.minifiedBoxHeight,
                        c = this.minifiedBoxWidth,
                        e = this.minifiedWidget.container.getElementById("tawkchat-minified-box"),
                        f = "scale(" + a + ")",
                        f = "-moz-transform : " + f + "; -webkit-transform : " + f + "; -o-transform : " + f + "; -ms-transform : " + f + "; transform : " + f + ";";
                    a && e && (d = Math.ceil(d * a), c = Math.ceil(c * a), this.minifiedWidget.container.massRestyle({
                        height: d +
                            "px !important",
                        width: c + "px !important",
                        "min-height": d + "px !important",
                        "min-width": c + "px !important",
                        "max-height": d + "px !important",
                        "max-width": c + "px !important"
                    }), e.style.cssText += f + "-moz-transform-origin : bottom left; -webkit-transform-origin : bottom left; -o-transform-origin : bottom left; -ms-transform-origin : bottom left; transform-origin : bottom left");
                    this.updateWidgetPosition(d)
                }
            };
            C.prototype.popup = function() {
                this.indicator.hide();
                this.chatContainer.hide();
                this.isMaximized = !1;
                this.show();
                this.chatContainer.getElementById("menuOptions").style.display = "none";
                if (this.myWin && !this.myWin.closed) return this.myWin.focus();
                this.myWin = "nokia" === A ? e.open("https://m.tawk.to/chat/" + I.pageId + "/" + $_Tawk_WidgetId + "/?$_tawk_popout=true&$_tawk_sk=" + t.sessionKey + "&$_tawk_tk=" + t.transferKey + "&v=" + t.serverVersion, "Tawk", "height=500, width=450, resizable=yes, toolbar=no, location=no, menubar=no, personalbar=no") : e.open("https://m.tawk.to/chat/" + I.pageId + "/" + $_Tawk_WidgetId + "/?$_tawk_popout=true&$_tawk_sk=" +
                    t.sessionKey + "&$_tawk_tk=" + t.transferKey + "&v=" + t.serverVersion)
            };
            C.prototype.maximize = function() {
                "firefox" === A && !this.isMobileOptimizedWebsite() || "pop" === f.onClickAction ? this.popup() : (this.hasChatStarted || (f.showPreChatForm = this.isTherePreChat), this.indicator.hide(), this.minifiedWidget.container.hide(), this.originalIframeContainerStyle || (this.originalIframeContainerStyle = this.iframeContainer.elementReferrer.style.cssText), this.iframeContainer.restyle("margin", "0px !important"), this.isMaximized = !0,
                    this.show())
            };
            C.prototype.resetOriginalStyle = function() {
                this.originalIframeContainerStyle && (this.iframeContainer.elementReferrer.style.cssText = this.originalIframeContainerStyle)
            };
            C.prototype.resizeIframeHeight = function() {
                var a;
                !this.isMaximized && (this.iframeContainer && this.minifiedWidget.container.elementReferrer && this.isIEWidget) && (a = this.minifiedWidget.container.getElementById("tawkchat-status-text-container").offsetHeight, this.minifiedWidget.container.restyle("height", a + "px"), this.iframeContainer.restyle("marginTop",
                    "-" + a / 2 + "px"), this.iframeContainer.restyle("height", a + "px"))
            };
            C.prototype.renderBottomWidget = function() {
                this.isMaximized || (this.isBottomWidget = !0, this.minifiedWidget.container.template = u["mobile-bottom-" + f.mobileWidget()], this.iframeContainer.restyle("position", "fixed"), this.updateWidgetPosition())
            };
            C.prototype.handleIndicatorToggle = function(a) {
                var b = this.minifiedBoxWidth,
                    d = this.minifiedWidget.container.getElementById("tawkchat-chat-indicator"),
                    c = this.minifiedWidget.container.getElementById("tawkchat-minified-wrapper");
                this.minifiedWidget.container.getElementById("tawkchat-minified-box");
                this.isIndicatorOn = a;
                c.className = a ? c.className + " indicator-on " : c.className.replace("indicator-on", "");
                this.minifiedBoxWidth = a ? b + 7 : this.defaultWidth;
                this.isMobileOptimizedWebsite() ? this.scaleContent(1) : this.renderMinifiedBox();
                d.style.visibility = "visible"
            };
            C.prototype.updateViewByStatus = function(a) {
                this.isMaximized ? (this.parent.updateViewByStatus.call(this, a), this.maximizedWidget && ("preChatForm" !== b.formHandler.currentForm && "offlineForm" !==
                    b.formHandler.currentForm) && this.maximizedWidget.toggleMenuContainer("online" === a || "away" === a)) : this.iframeContainer.elementReferrer && ("offline" === a && f.hideWidgetOnOffline ? this.hideWidget() : this.showWidget(), this.resizeHandler())
            };
            C.prototype.updateWidgetPosition = function(a) {
                var b = {},
                    d = {};
                a = a || this.minifiedBoxHeight;
                this.iframeContainer && (f.isCenterPositioned() ? (b.top = "50% !important", b.bottom = "auto !important", b.margin = this.isMinifiedRound ? -0.5 * a + "px 0 0 0 !important" : -0.5 * a - (this.defaultHeight -
                    37) / 2 + "px 0 0 0 !important") : (b.margin = "0 !important", f.isTopPositioned() ? (b.top = "0px !important", b.bottom = "auto !important", d.top = this.isMinifiedRound ? "20px !important" : "-10px !important") : (b.bottom = "0px !important", b.top = "auto !important", d.bottom = this.isMinifiedRound ? "14px !important" : "0px !important")), f.isRightPositioned() ? (b.right = "0px !important", b.left = "auto !important", d.right = this.isMinifiedRound ? "20px !important" : "15px !important") : (b.left = "0px !important", b.right = "auto !important", d.left =
                    this.isMinifiedRound ? "20px !important" : "15px !important"), this.iframeContainer.massRestyle(b), this.minifiedWidget.container.massRestyle(d))
            };
            C.prototype.appendMessage = function(a) {
                var b, d, c, e = {
                        "chat-message-row": u["chat-message-row"],
                        "chat-resend-link": u["chat-resend-link"],
                        "chat-message-owner-agent": u["chat-message-owner-agent"],
                        "chat-message-container": u["chat-message-container"],
                        "chat-notification-container": u["chat-notification-container"],
                        "chat-message-status-row": u["chat-message-status-row"],
                        "chat-divider": u["chat-divider"]
                    },
                    f = m.parseChatTime(a.time);
                "a" === a.senderType ? (b = (b = (c = y.agentProfiles[a.ownerId]) && c.pi ? t.agentImgUrl + "/" + y.agentProfiles[a.ownerId].pi : "") ? "url('" + b + "')" : "transparent", d = "explorer" === K && 9 > H ? "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + b + "',sizingMethod='scale');" : "background-position:0 0;background-size:28px 28px;", e["chat-message-owner-agent"] = e["chat-message-owner-agent"].replace("__IMAGE_URL__", b).replace("__IE_IMAGE_SCALE__", c && c.pi ? d : "")) :
                    "s" === a.senderType && (e["chat-message-owner-agent"] = e["chat-message-owner-agent"].replace("__IMAGE_URL__", "").replace("__IE_IMAGE_SCALE__", ""));
                e["chat-message-status-row"] = a.isPending ? u["chat-message-pending-row"] : e["chat-message-status-row"].replace("__TIME__", f).replace("__TIME_CLASS__", "v" === a.senderType ? "visitor" : "agent");
                return this.parent.appendMessage.call(this, a, e)
            };
            C.prototype.appendAgentIsTypingElement = function(a) {
                this.parent.appendAgentIsTypingElement.call(this, a)
            };
            C.prototype.removeAgentTypingElement =
                function(a) {
                    this.parent.removeAgentTypingElement.call(this, a)
                };
            C.prototype.addOverflowScroll = function(a) {
                var c = 0,
                    d = this;
                b.eventHandler.listen(a, "touchstart", function(b) {
                    c = a.scrollTop + b.touches[0].pageY
                }, "mobiletouchstart" + a.id);
                b.eventHandler.listen(a, "touchmove", function(e) {
                    b.eventHandler.cancelEvent(e);
                    20 >= e.touches[0].pageY || 0 > c - e.touches[0].pageY || (a.scrollTop = c - e.touches[0].pageY, this.maximizedWidget.isScrollbarDown = d.ifScrollbarDown())
                }, "mobiletouchmove" + a.id)
            };
            C.prototype.addStartTime = function(a) {
                var c,
                    d = this.chatContainer.documentRef;
                d && (a = m.getDateFromUTC(a), a = b.languageParser.translate("days", a.getDay()) + ", " + b.languageParser.translate("months", a.getMonth()) + " " + a.getDate() + ", " + a.getFullYear(), c = u["mobile-first-message-time"], c = c.replace("__CONTENT__", a), messageContainer = new D("firstMessageTimeWrapper", null, {
                    className: "chatLineContainer"
                }, null, d.documentRef), messageContainer.template = c, messageContainer.buildView(), chatWrapper.insertBefore(messageContainer.elementReferrer, d.getElementById("chatWrapper").firstChild))
            };
            C.prototype.resetView = function() {
                var a, b;
                if (a = this.chatContainer) {
                    if (a = a.getElementById("chatWrapper")) b = a.lastChild, a.innerHTML = "", a.appendChild(b), this.showEmbeddedGreetings();
                    this.show()
                }
            };
            C.prototype.appendAgent = function() {
                var a = this.chatContainer,
                    c = a.getElementById("chatWrapper");
                a && (b.agents.agentsCount++, c.className = 1 >= b.agents.agentsCount ? "single-agent" : "multi-agent")
            };
            C.prototype.removeAgent = function(a) {
                this.chatContainer.elementReferrer && b.agents.agentsCount--
            };
            C.prototype.handleRestartChat =
                function() {
                    b.formHandler.closeForm();
                    this.maximizedWidget.chatStarted()
                };
            C.prototype.hideEmbeddedGreetings = function() {
                var a, b;
                a = this.maximizedWidget.container.getElementById("greetingsWrapper");
                b = this.maximizedWidget.container.getElementById("chatWrapper");
                a && b && (a.style.display = "none", b.style.display = "block")
            };
            C.prototype.showEmbeddedGreetings = function() {
                var a, b;
                a = this.maximizedWidget.container.getElementById("greetingsWrapper");
                b = this.maximizedWidget.container.getElementById("chatWrapper");
                a && b &&
                    (b.style.display = "none", a.style.display = "block")
            };
            C.prototype.toggleWidget = function() {
                this.isMaximized ? b.sessionHandler.notifyWindowState("min") : b.sessionHandler.notifyWindowState("max")
            };
            C.prototype.toggleVisibility = function() {
                this.scrollToBottom();
                (this.isVisibilityToggled = !this.isVisibilityToggled) ? this.hideWidget(): this.showWidget()
            };
            C.prototype.isWidgetHidden = function() {
                return !this.iframeContainer.isVisible
            };
            var Sa = function(a) {
                C.call(this, a)
            };
            Sa.prototype = new C;
            Sa.prototype.init = function() {
                this.renderBottomWidget();
                this.addResizeEvents();
                this.resizeHandler()
            };
            Sa.prototype.renderMinifiedBox = function() {
                var a = (1 / this.zoom.toFixed(2)).toFixed(2);
                this.scaleContent(0.2 > a ? 0.2 : a)
            };
            var Ca = function(a) {
                C.call(this, a)
            };
            Ca.prototype = new C;
            Ca.prototype.init = function() {
                this.renderBottomWidget();
                this.addResizeEvents();
                this.resizeHandler()
            };
            Ca.prototype.isLandscape = function() {
                return 0 !== e.orientation
            };
            Ca.prototype.getZoom = function() {
                this.zoom = (this.isLandscape() ? screen.height : screen.width) / e.innerWidth
            };
            Ca.prototype.renderMinifiedBox =
                function() {
                    var a = (1 / this.zoom.toFixed(2)).toFixed(2);
                    this.scaleContent(a, !1)
                };
            var Ta = function(a) {
                C.call(this, a)
            };
            Ta.prototype = new C;
            Ta.prototype.init = function() {
                this.renderBottomWidget();
                this.addResizeEvents();
                this.resizeHandler()
            };
            Ta.prototype.renderMinifiedBox = function() {
                var a = (1 / this.zoom.toFixed(2)).toFixed(2);
                this.scaleContent(a, !0)
            };
            var ua = function(a) {
                C.call(this, a);
                this.screenWidth = 0
            };
            ua.prototype = new C;
            ua.prototype.init = function() {
                this.renderBottomWidget();
                this.addResizeEvents(!0);
                this.resizeHandler()
            };
            ua.prototype.isLandscape = function() {
                return 0 !== e.orientation
            };
            ua.prototype.getZoom = function() {
                this.isLandscape() ? this.screenWidth = screen.height : this.screenWidth = screen.width;
                this.zoom = this.screenWidth / e.innerWidth
            };
            ua.prototype.renderMinifiedBox = function() {
                var a;
                a = this.isMobileOptimizedWebsite() ? (0.2 * this.screenWidth / this.minifiedBoxWidth).toFixed(2) : (1 / this.zoom.toFixed(2)).toFixed(2);
                this.scaleContent(a, !0)
            };
            var Ua = function(a) {
                C.call(this, a)
            };
            Ua.prototype = new C;
            Ua.prototype.init = function() {
                this.renderBottomWidget();
                this.addResizeEvents();
                this.resizeHandler()
            };
            Ua.prototype.renderMinifiedBox = function() {
                this.scaleContent()
            };
            var Va = function(a) {
                C.call(this, a)
            };
            Va.prototype = new C;
            Va.prototype.init = function() {
                this.renderBottomWidget();
                this.checkMetaContent();
                this.addResizeEvents();
                this.resizeHandler()
            };
            Va.prototype.renderMinifiedBox = function() {
                var a = (1 / this.zoom.toFixed(2)).toFixed(2);
                this.scaleContent(a, !0)
            };
            var va = function(a) {
                C.call(this, a)
            };
            va.prototype = new C;
            va.prototype.init = function() {
                var a;
                "ie" === this.browser &&
                    (a = document.createElement("meta"), a.httpEquiv = "X-UA-Compatible", a.setAttribute("content", "IE=edge"), document.getElementsByTagName("head")[0].appendChild(a));
                this.renderBottomWidget();
                this.addResizeEvents();
                this.resizeHandler()
            };
            va.prototype.renderMinifiedBox = function() {
                var a = (1 / this.zoom.toFixed(2)).toFixed(2);
                this.scaleContent(0.2 > a ? 0.2 : a)
            };
            var Wa = function(a) {
                C.call(this, a)
            };
            Wa.prototype = new C;
            Wa.prototype.init = function() {
                this.renderBottomWidget();
                this.addResizeEvents();
                this.resizeHandler()
            };
            Wa.prototype.renderMinifiedBox =
                function() {
                    var a = (1 / this.zoom.toFixed(2)).toFixed(2);
                    this.scaleContent(0.2 > a ? 0.2 : a)
                };
            var oa = G.extend({
                init: function() {
                    var a, c, d, e, g = this;
                    this._super(this);
                    a = document.getElementsByTagName("head")[0];
                    c = document.createDocumentFragment();
                    d = m.createElement(document, "style", {
                        type: "text/css"
                    });
                    e = document.createTextNode(b.ResetStyle + "" + b.MaximizedMobileStyle + f.mobMaxStyle());
                    d.styleSheet ? d.styleSheet.cssText = e.nodeValue : d.appendChild(e);
                    c.appendChild(d);
                    a.appendChild(c);
                    this.clickEvent = "touchend";
                    this.iframeContainer =
                        new D(m.getRandomName(), "border: 0 none; padding: 0; margin: 0; z-index: 9999999; width: 100%; height: 100%; display: none; position : fixed; top :0; bottom : 0; min-width: 0 !important; min-height: 0 !important; max-width: none !important; max-height: none !important;");
                    s = new na;
                    this.iframeContainer.addChildViews([s.container]);
                    this.iframeContainer.buildView();
                    this.chatContainer = s.container;
                    s.wrapper.addClass("isPopout");
                    y.rating.subscribe(function(a) {
                        g.changeRating(a)
                    });
                    t.pageStatus.subscribe(function(a) {
                        g.updateViewByStatus(a)
                    });
                    E.displayName.subscribe(function(a) {
                        g.changeVisitorName(a)
                    });
                    f.mobMaxStyle.subscribe(function() {
                        s.container.insertCssFile(f.mobMaxStyle());
                        s.wrapper.removeClass("white");
                        s.wrapper.removeClass("black");
                        s.wrapper.addClass(m.getContrast(f.headerTxtColor))
                    });
                    b.chatHandler.hasChatStarted.subscribe(function(a) {
                        s.toggleEndChatOption(a)
                    })
                },
                show: function() {
                    s.show();
                    this.updateViewByStatus(t.pageStatus());
                    this._super();
                    b.socketManager.sendToConnector("popupOnFocus", !0)
                },
                appendMessage: function(a) {
                    var b, d, c,
                        e = {
                            "chat-message-row": u["chat-message-row"],
                            "chat-resend-link": u["chat-resend-link"],
                            "chat-message-owner-agent": u["chat-message-owner-agent"],
                            "chat-message-owner-visitor": u["chat-message-owner-visitor"],
                            "chat-message-container": u["chat-message-container"],
                            "chat-notification-container": u["chat-notification-container"],
                            "chat-message-status-row": u["chat-message-status-row"],
                            "chat-divider": u["chat-divider"]
                        },
                        f = m.parseChatTime(a.time);
                    "a" === a.senderType ? (b = (b = (c = y.agentProfiles[a.ownerId]) && c.pi ? t.agentImgUrl +
                        "/" + y.agentProfiles[a.ownerId].pi : "") ? "url('" + b + "')" : "transparent", d = "explorer" === K && 9 > H ? "filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + b + "',sizingMethod='scale');" : "background-position:0 0;background-size:28px 28px;", e["chat-message-owner-agent"] = e["chat-message-owner-agent"].replace("__IMAGE_URL__", b).replace("__IE_IMAGE_SCALE__", c && c.pi ? d : "")) : "s" === a.senderType && (e["chat-message-owner-agent"] = e["chat-message-owner-agent"].replace("__IMAGE_URL__", "").replace("__IE_IMAGE_SCALE__",
                        ""));
                    e["chat-message-status-row"] = a.isPending ? u["chat-message-pending-row"] : e["chat-message-status-row"].replace("__TIME__", f).replace("__TIME_CLASS__", "v" === a.senderType ? "visitor" : "agent");
                    return this._super(a, e)
                },
                prepareResendLink: function(a) {
                    var c, d, e, f = this.chatContainer.getElementById(a);
                    f && f.childNodes.length && (e = f.parentNode.childNodes[0]) && (c = e.childNodes[0], d = m.rawDecode(f.childNodes[0].textContent || f.childNodes[0].innerText), c && d && this.chatContainer.attachUserEventListener(this.clickEvent,
                        function(c) {
                            b.eventHandler.cancelEvent(c); - 1 !== e.className.indexOf("errorInMessage") && (e.className = "messageStatusContainer pending", b.chatHandler.sendMessageToServer(d, a))
                        }, "resendMessage-" + a, "resend" + a + "click"))
                },
                updateViewByStatus: function(a) {
                    this._super(a);
                    s && ("preChatForm" !== b.formHandler.currentForm && "offlineForm" !== b.formHandler.currentForm) && (s.toggleMenuContainer("online" === a || "away" === a), f.isPopup && (a = q.getShortMessage(a), document.title = a ? n.profileName + " - " + m.rawDecode(a) : n.profileName))
                },
                handleEndChat: function() {
                    s.chatEnded();
                    this.hideWidget()
                },
                handleRestartChat: function() {
                    s.chatStarted()
                },
                hideEmbeddedGreetings: function() {
                    var a, b;
                    s && s.container && (a = s.container.getElementById("greetingsWrapper"), b = s.container.getElementById("chatWrapper"), a && b && (a.style.display = "none", b.style.display = "block"))
                },
                showEmbeddedGreetings: function() {
                    var a;
                    s.container && (a = s.container.getElementById("greetingsOverlay"), chatWrapper = s.container.getElementById("chatTableWrapper"), a && chatWrapper && (chatWrapper.style.display =
                        "none", a.style.display = "block"))
                },
                changeVisitorName: function(a) {
                    var b, d, c, e;
                    if (this.chatContainer && this.chatContainer.elementReferrer && (b = this.chatContainer.getElementById("chatWrapper")))
                        for (e = m.getElementsByClassName(b, "messageOwnerName visitor"), d = 0, c = e.length; d < c; d += 1) b = e[d], b.innerHTML = a
                },
                appendAgent: function() {
                    var a = this.chatContainer,
                        c = a.getElementById("chatWrapper");
                    a && (b.agents.agentsCount++, c.className = 1 >= b.agents.agentsCount ? "single-agent" : "multi-agent")
                },
                removeAgent: function(a) {
                    this.chatContainer.elementReferrer &&
                        b.agents.agentsCount--
                }
            });
            oa.prototype.begin = function() {
                var a = A;
                document.body.appendChild(this.iframeContainer.elementReferrer);
                if ("symbian" === a || "ie" === a || "opera" === a || "android2.3" === a) this.clickEvent = "click";
                s.buildView();
                this.chatContainer.documentRef.getElementById("popOut").style.display = "none";
                if (m.isTouchDevice() && ("android" === A || "android2" === A || "android2.3" === A)) {
                    var a = this.chatContainer.getElementById("chatContainer"),
                        c = this.chatContainer.getElementById("menuScrollable");
                    this.addOverflowScroll(a);
                    this.addOverflowScroll(c);
                    a.style.overflow = "hidden";
                    c.style.overflow = "hidden"
                }
                b.audioPlayer.initAudioPlayer()
            };
            oa.prototype.hideWidget = function() {
                b.socketManager.sendToConnector("popupOnFocus", !1);
                setTimeout(function() {
                    1 < e.history.length ? e.history.back() : e.close()
                }, 200)
            };
            oa.prototype.showWidget = function() {
                this.scrollToBottom();
                this.iframeContainer.show()
            };
            oa.prototype.addStartTime = function(a) {
                var c, d = this.chatContainer.documentRef;
                d && (a = m.getDateFromUTC(a), a = b.languageParser.translate("days", a.getDay()) +
                    ", " + b.languageParser.translate("months", a.getMonth()) + " " + a.getDate() + ", " + a.getFullYear(), c = u["mobile-first-message-time"], c = c.replace("__CONTENT__", a), messageContainer = new D("firstMessageTimeWrapper", null, {
                        className: "chatLineContainer"
                    }, null, d.documentRef), messageContainer.template = c, messageContainer.buildView(), chatWrapper.insertBefore(messageContainer.elementReferrer, d.getElementById("chatWrapper").firstChild))
            };
            oa.prototype.resetView = function() {
                var a, b;
                if (a = this.chatContainer) {
                    if (a = a.getElementById("chatWrapper")) b =
                        a.lastChild, a.innerHTML = "", a.appendChild(b), this.showEmbeddedGreetings();
                    this.show()
                }
            };
            oa.prototype.addOverflowScroll = function(a) {
                var c = 0,
                    d = this;
                b.eventHandler.listen(a, "touchstart", function(b) {
                    c = a.scrollTop + b.touches[0].pageY
                }, "mobiletouchstart" + a.id);
                b.eventHandler.listen(a, "touchmove", function(e) {
                    b.eventHandler.cancelEvent(e);
                    20 >= e.touches[0].pageY || 0 > c - e.touches[0].pageY || (a.scrollTop = c - e.touches[0].pageY, s.isScrollbarDown = d.ifScrollbarDown())
                }, "mobiletouchmove" + a.id)
            };
            oa.prototype.addEmojiToInput =
                function(a) {
                    s.addEmojiToInput(a)
                };
            oa.prototype.closeEmojiSelection = function() {
                s.closeEmojiSelection()
            };
            var Ka = function() {
                var a = this,
                    c = !1;
                this.onActivityHandler = function() {
                    b && (a.away && v.connected && b.socketManager.sendToConnector("notifySocketStatusUpdate", "online"), a.active = !0, a.away = !1)
                };
                this.popupOnFocusHandler = function() {
                    b && (!v.connected && b.socketManager.isForcedDisconnect() ? b.main.criticalRefresh(t.serverVersion, !1, !0) : (a.hasFocus || (a.active = !0, a.hasFocus = !0, v.connected && b.socketManager.sendToConnector("popupOnFocus", !0)), a.away && v.connected && b.socketManager.sendToConnector("notifySocketStatusUpdate", "online"), a.away = !1))
                };
                this.popupOnBlurHandler = function() {
                    b && (a.hasFocus = !1, v.connected && b.socketManager.sendToConnector("popupOnFocus", !1))
                };
                this.reconnectOnActivity = function() {
                    b && !c && (c = !0, b.main.criticalRefresh(t.serverVersion))
                };
                this.away = this.active = this.hasFocus = !1;
                this.interval = this.awayTimeout = this.inactivityTimeout = null;
                this.initActivityReset = function() {
                    a.resetTimeout();
                    a.setupListeners();
                    a.interval = setInterval(function() {
                        a.active &&
                            (a.resetTimeout(), a.active = !1)
                    }, 1E4)
                }
            };
            Ka.prototype.resetTimeout = function() {
                var a = this;
                clearTimeout(this.inactivityTimeout);
                clearTimeout(this.awayTimeout);
                this.awayTimeout = setTimeout(function() {
                    !a.away && b && (a.away = !0, b && (b.socketManager && v.connected) && b.socketManager.sendToConnector("notifySocketStatusUpdate", "away"))
                }, 6E5);
                b && !b.socketManager.isForcedDisconnect() && (this.inactivityTimeout = setTimeout(function() {
                    a.inactivityTimeoutHandler()
                }, 12E5))
            };
            Ka.prototype.inactivityTimeoutHandler = function() {
                b &&
                    (b.socketManager.disconnectConnector(), f.isEmbedded ? b.formHandler.openForm("inactivityOverlay") : t.chatWindowState("min"), A ? (b.eventHandler.listen(b.viewHandler.chatContainer.documentRef, "touchmove", this.reconnectOnActivity, "acitmmousemove"), b.eventHandler.listen(b.viewHandler.chatContainer.documentRef, b.viewHandler.clickEvent, this.reconnectOnActivity, "acitmclick"), b.eventHandler.listen(b.viewHandler.chatContainer.documentRef, "keydown", this.reconnectOnActivity, "acitmkeydown"), b.eventHandler.listen(document,
                        "touchmove", this.reconnectOnActivity, "acitmousemove"), b.eventHandler.listen(document, b.viewHandler.clickEvent, this.reconnectOnActivity, "acitclick"), b.eventHandler.listen(document, "keydown", this.reconnectOnActivity, "acitkeydown")) : (b.eventHandler.listen(document, "mousemove", this.reconnectOnActivity, "acitmousemove"), b.eventHandler.listen(document, "click", this.reconnectOnActivity, "acitclick"), b.eventHandler.listen(document, "keydown", this.reconnectOnActivity, "acitkeydown"), document.onfocusin ? b.eventHandler.listen(document,
                        "focusin", this.reconnectOnActivity, "acitfocus") : b.eventHandler.listen(e, "focus", this.reconnectOnActivity, "acitfocus")))
            };
            Ka.prototype.cleanUp = function() {
                clearInterval(this.interval);
                clearTimeout(this.inactivityTimeout);
                clearTimeout(this.awayTimeout)
            };
            Ka.prototype.setupListeners = function() {
                A ? (b.eventHandler.listen(b.viewHandler.chatContainer.documentRef, "touchmove", this.onActivityHandler, "acmmousemove"), b.eventHandler.listen(b.viewHandler.chatContainer.documentRef, b.viewHandler.clickEvent, this.onActivityHandler,
                    "acmclick"), b.eventHandler.listen(b.viewHandler.chatContainer.documentRef, "keydown", this.onActivityHandler, "acmkeydown"), b.eventHandler.listen(document, "touchmove", this.onActivityHandler, "acmousemove"), b.eventHandler.listen(document, b.viewHandler.clickEvent, this.onActivityHandler, "acclick"), b.eventHandler.listen(document, "keydown", this.onActivityHandler, "ackeydown")) : f.isPopup ? (document.onfocusin ? (b.eventHandler.listen(document, "focusin", this.popupOnFocusHandler, "acfocus"), b.eventHandler.listen(document,
                    "focusout", this.popupOnBlurHandler, "acblur")) : (b.eventHandler.listen(e, "focus", this.popupOnFocusHandler, "acfocus"), b.eventHandler.listen(e, "blur", this.popupOnBlurHandler, "acblur")), b.eventHandler.listen(document, "click", this.popupOnFocusHandler, "acphclick"), b.eventHandler.listen(document, "keydown", this.popupOnFocusHandler, "acphkeydown")) : (b.eventHandler.listen(document, "mousemove", this.onActivityHandler, "acmousemove"), b.eventHandler.listen(document, "click", this.onActivityHandler, "acclick"), b.eventHandler.listen(document,
                    "keydown", this.onActivityHandler, "ackeydown"))
            };
            var Da = function() {
                var a = this;
                this.originalPageStatus = this.agentCountSubscription = this.setupTimeout = null;
                this.utcOffset = 0;
                b.eventEmitter.on("scheduleUpdate", function(b) {
                    f.widgetId === b.wdgt && (f.schedule = null !== b.ws ? b.ws.sch : null, f.scheduleTimezone = {}, null !== b.wstz && (f.scheduleTimezone = {
                        utc: b.wstz.utc,
                        tzo: b.wstz.offset
                    }), a.setup())
                })
            };
            Da.prototype.setup = function() {
                clearTimeout(this.setupTimeout);
                null === this.originalPageStatus && (this.originalPageStatus =
                    t.pageStatus());
                f.schedule ? (this.utcOffset = -1 * ((new Date).getTime() - f.scheduleTimezone.utc), this.calculate()) : t.pageStatus(this.originalPageStatus)
            };
            Da.prototype.calculate = function() {
                var a, b, d = this;
                f.schedule && (clearTimeout(this.setupTimeout), a = new Date, localOffset = -6E4 * a.getTimezoneOffset(), b = f.scheduleTimezone.tzo - localOffset, a = new Date(a.getTime() + this.utcOffset + b), b = a.getDay(), todayStartValue = f.schedule[b].start, todayEndValue = f.schedule[b].end, tomorrow = 6 === b ? 0 : b + 1, tomorrowStartValue = f.schedule[tomorrow].start,
                    since = 36E5 * a.getHours() + 6E4 * a.getMinutes(), 0 === todayStartValue && 0 === todayEndValue ? (this.goOffline(), this.setupTimeout = setTimeout(function() {
                        d.calculate()
                    }, 864E5 - since + tomorrowStartValue)) : since < todayStartValue ? (this.goOffline(), this.setupTimeout = setTimeout(function() {
                        d.calculate()
                    }, todayStartValue - since)) : since >= todayEndValue ? (this.goOffline(), this.setupTimeout = setTimeout(function() {
                        d.calculate()
                    }, 864E5 - since + tomorrowStartValue)) : (this.goOnline(), this.setupTimeout = setTimeout(function() {
                            d.calculate()
                        },
                        todayEndValue - since)))
            };
            Da.prototype.goOnline = function() {
                "offline" !== this.originalPageStatus && (t.pageStatus(this.originalPageStatus), null !== this.agentCountSubscription && (b.agents.totalAgents.unsubscribe(this.agentCountSubscription), this.agentCountSubscription = null))
            };
            Da.prototype.goOffline = function() {
                0 !== b.agents.totalAgents() ? this.agentCountSubscription = b.agents.totalAgents.subscribe(function(a) {
                    0 === a && t.pageStatus("offline")
                }) : t.pageStatus("offline")
            };
            Da.prototype.clearTimer = function() {
                clearTimeout(this.setupTimeout);
                this.originalPageStatus = this.setupTimeout = null
            };
            var ea = function() {
                this.registerTime = 0;
                this.registerStart = null;
                this.maxRetrycount = 3;
                this.retryCount = 0;
                this.registerData = this.registerDelayTimeout = this.connectionCookieInterval = this.requestCancelTimeout = this.previousRegisterCall = null;
                this.registerStarted = !1;
                this.retryDelay = null;
                this.retryInitialDelay = 30;
                this.retryMultiplier = 1.5;
                this.minRandom = 0.5;
                this.maxRandom = 1.5;
                this.maxDelay = 120;
                this.retryRegisterTimeout = null
            };
            ea.prototype.register = function() {
                this.registerStarted = !0;
                this.clearTimers();
                this.prepareData()
            };
            ea.prototype.prepareData = function() {
                var a, c, d, e = "",
                    g = "";
                if (b) {
                    a = U.getSessionInformation();
                    c = t.sessionKey || void 0;
                    a.length && (g = a[0]);
                    d = (new Date).getTimezoneOffset();
                    if (-900 > d || 900 < d) d = 0;
                    this.registerData ? (this.registerData.k = c, this.registerData.d = g) : (e = b.browserData.getReferredSearchEngine(), a = "undefined" === typeof $_Tawk_WidgetId ? "default" : $_Tawk_WidgetId, this.registerData = {
                        a: I.pageId || "",
                        k: c,
                        w: a,
                        d: g,
                        mb: A ? 1 : 0,
                        m: d,
                        s: e,
                        q: "",
                        r: document.referrer
                    });
                    b.main.maximize &&
                        (this.registerData.h = "max");
                    this.registerData.wv = f.widgetVersion;
                    f.isPopup && (t.transferKey && t.sessionKey) && (this.registerData.tk = t.transferKey);
                    b.main.previousSessionKey = this.registerData.k;
                    this.getUUID()
                }
            };
            ea.prototype.getUUID = function() {
                var a, c, d, f = !1,
                    g = Infinity,
                    k = b.punycode.toASCII(e.location.hostname);
                "www." === k.substring(0, 4) && (k = k.replace("www.", ""));
                a = U.getStoredUUID();
                for (var m = 0, n = a.length; m < n; m++) {
                    var p, q, s, t;
                    t = U.parseSessionInformation(a[m]);
                    if (4 === t.length)
                        if (p = t[0], q = t[1], s = t[2], t = t[3],
                            "e" === p) {
                            if (k === q) {
                                c = s;
                                d = t;
                                break
                            }
                        } else "p" === p && (p = k.match(q)) && (k.substr(p.index) === q && p.index < g) && (g = p.index, c = s, d = t, f = !0)
                }
                this.registerData && (this.registerData.u = c, this.registerData.uv = d, f && (this.registerData.uw = !0));
                this.startRegister()
            };
            ea.prototype.abort = function() {
                null !== this.previousRegisterCall && (Fa.abort(this.previousRegisterCall), this.previousRegisterCall = null)
            };
            ea.prototype.setupRegisterTimeout = function() {
                var a = this;
                clearTimeout(this.requestCancelTimeout);
                this.requestCancelTimeout = setTimeout(function() {
                    a.abort();
                    a.retryRegister()
                }, 9E4)
            };
            ea.prototype.startRegister = function() {
                var a = U.getHTTPCookie("TawkConnectionTime"),
                    a = parseInt(a.length ? a[0] : null, 10);
                !a || 1E3 < (new Date).getTime() - (new Date(a)).getTime() ? (U.setHTTPCookie("TawkConnectionTime", (new Date).getTime(), !0), this.connectionCookieInterval = setInterval(function() {
                    U.setHTTPCookie("TawkConnectionTime", (new Date).getTime(), !0)
                }, 100), this.doRegister()) : this.delayRegister()
            };
            ea.prototype.delayRegister = function() {
                var a = this;
                clearTimeout(this.registerDelayTimeout);
                this.registerDelayTimeout = setTimeout(function() {
                    a.register()
                }, 1E3)
            };
            ea.prototype.doRegister = function() {
                var a = t.visitorAppServer + "/register/",
                    c = this,
                    d = function(a, d) {
                        if (!a && !d) return c.clearTimers(), c.retryRegister();
                        b && (d = m.trim(d), b.main.begin($_TAWK_JSON.parse(d)))
                    };
                this.registerStart = (new Date).getTime();
                this.setupRegisterTimeout();
                a += this.registerStart;
                this.previousRegisterCall = !Fa.hasCORS || "symbian" === A || "android" === A && 4 === H ? Fa.jsonpLoad(a, this.registerData, d) : Fa.xhrRequest(a, this.registerData,
                    d)
            };
            ea.prototype.retryRegister = function() {
                var a, c = this;
                null === this.retryRegisterTimeout && (this.retryCount >= this.maxRetrycount ? (this.clearTimers(), b && b.main.hideWidget()) : (this.retryCount++, a = this.getRetryWaitDelay(), this.retryRegisterTimeout = setTimeout(function() {
                    c.register()
                }, a)))
            };
            ea.prototype.resetRetryCount = function() {
                this.retryCount = 0;
                this.retryDelay = 10
            };
            ea.prototype.getRetryWaitDelay = function() {
                var a, b = Math.random() * (this.maxRandom - this.minRandom) + this.minRandom;
                null === this.retryDelay ? this.retryDelay =
                    this.retryInitialDelay : (a = this.retryDelay * this.retryMultiplier, this.retryDelay = this.retryDelay > this.maxDelay || a > this.maxDelay ? this.maxDelay : a);
                return 1E3 * Math.round(this.retryDelay * b)
            };
            ea.prototype.clearTimers = function() {
                this.abort();
                clearTimeout(this.requestCancelTimeout);
                clearTimeout(this.registerDelayTimeout);
                clearTimeout(this.retryRegisterTimeout);
                clearInterval(this.connectionCookieInterval);
                U.setHTTPCookie("TawkConnectionTime", 0, !0);
                this.connectionCookieInterval = this.requestCancelTimeout = this.registerDelayTimeout =
                    this.retryRegisterTimeout = null
            };
            var ra = function() {};
            ra.prototype.processSettings = function(a) {
                var c, d, e, g = "",
                    k = d = "",
                    n = "";
                if (!(a.wv < f.widgetVersion)) {
                    f.widgetVersion = a.wv;
                    f.chatPosition(a.pos);
                    A ? f.mobileWidget(a.mw || "round") : f.desktopWidget(a.dw || "full");
                    f.maximizedDimensions({
                        width: parseInt(a.w, 10) || 320,
                        height: parseInt(a.h, 10) || 400
                    });
                    f.isDesktopRectangle() ? (c = parseInt(a.minw, 10) || 320, e = parseInt(a.minh, 10) || 40) : (c = 62, e = 66);
                    f.minimizedDimensions({
                        width: c,
                        height: e,
                        position: a.pos
                    });
                    f.chatBubble(a.bbl);
                    f.headerBgColor = a.thm.hbg || "#7fb06f";
                    f.headerTxtColor = a.thm.htx || "#ffffff";
                    f.agentTextBgColor = a.thm.aBblBg || m.shadeColor(f.headerBgColor, -0.1);
                    f.agentTextColor = a.thm.aBblTx || "#ffffff";
                    f.visitorTextBgColor = a.thm.vBblBg || "#e5e5e5";
                    f.visitorTextColor = a.thm.vBblTx || "#333333";
                    "undefined" !== typeof a.thm.topc ? f.topCorner = a.thm.topc : f.isTopPositioned() ? f.topCorner = 0 : f.topCorner = 8;
                    "undefined" !== typeof a.thm.btmc ? f.bottomCorner = a.thm.btmc : f.isTopPositioned() ? f.bottomCorner = 8 : f.bottomCorner = 0;
                    if (f.isEmbedded ||
                        f.isPopup) f.topCorner = 0, f.bottomCorner = 0;
                    f.onClickAction = a.woc;
                    f.hideWidgetOnLoad = a.hwol;
                    f.hideWidgetOnOffline = a.hwof;
                    f.hideWidget = !!a.dsw;
                    f.showAgentBar = !a.hab;
                    f.showWaitTime = !a.hwt;
                    f.locale = a.lc;
                    f.onlineGreeting = a.onlineGreeting;
                    f.awayGreeting = a.awayGreeting;
                    f.schedule = a.ws;
                    f.soundOn(!a.dws);
                    0 <= m.rtlLangTab.indexOf(f.locale) ? f.isRTL(!0) : f.isRTL(!1);
                    this.processPrechatForm(a);
                    this.processOfflineForm(a, a.grt);
                    b && (a = ".theme-background-color{background-color: " + f.headerBgColor + ";}", c = ".theme-text-color{color: " +
                        f.headerTxtColor + ";}", b.MinifiedStyle && (e = f.topCorner + "px " + f.topCorner + "px " + f.bottomCorner + "px " + f.bottomCorner + "px !important;", d = d + a + c, d += ".border-corner{border-radius : " + e + "-moz-border-radius : " + e + "-webkit-border-radius : " + e + "};", d += ".bubble-text-color{color:" + (f.chatBubble() ? f.chatBubble().fgc : "#ffffff") + ";}", f.minStyle(d)), b.MaximizedStyle && (e = f.topCorner + "px " + f.topCorner + "px 0px 0px !important;", d = ".border-corner{border-radius : " + e + "-moz-border-radius : " + e + "-webkit-border-radius : " +
                            e + "};", g = g + a + c, g += "button.theme-background-color:hover{background-color: " + m.shadeColor(f.headerBgColor, -0.3) + ";}", g += ".agentChatContainer .message{background-color: " + f.agentTextBgColor + " !important; color : " + f.agentTextColor + " !important;}", g += ".visitorChatContainer .message{background-color: " + f.visitorTextBgColor + " !important; color : " + f.visitorTextColor + " !important;}", g += d, f.maxStyle(g)), b.MinifiedMobileStyle && (n = n + a + c, f.mobMinStyle(n)), b.MaximizedMobileStyle && (k = k + a + c, k += ".theme-background-color .button:hover, button.approveButton:active{background-color: " +
                            m.shadeColor(f.headerBgColor, -0.3) + ";}", k += "#topBarContainer{border-color: " + m.shadeColor(f.headerBgColor, -0.3) + ";}", k += ".agentChatContainer .message{background-color: " + f.agentTextBgColor + " !important; color : " + f.agentTextColor + " !important;}", k += ".visitorChatContainer .message{background-color: " + f.visitorTextBgColor + " !important; color : " + f.visitorTextColor + " !important;}", f.mobMaxStyle(k)))
                }
            };
            ra.prototype.processPrechatForm = function(a) {
                f.showPreChatForm = null !== a.prechatForm;
                f.showPreChatForm &&
                    (f.prechatOptions = a.prechatForm)
            };
            ra.prototype.processOfflineForm = function(a) {
                a = a.offlineForm ? a.offlineForm : {
                    text: b.languageParser.translate("form", "OfflineFormMessage"),
                    shortMessage: b.languageParser.translate("status", "offline"),
                    fields: [{
                        label: b.languageParser.translate("form", "name"),
                        isRequired: !0,
                        type: "name"
                    }, {
                        label: b.languageParser.translate("form", "email"),
                        isRequired: !0,
                        type: "email"
                    }, {
                        label: b.languageParser.translate("form", "message"),
                        isRequired: !0,
                        type: "message"
                    }]
                };
                f.offlineOptions = a
            };
            ra.prototype.getPrechatFields =
                function() {
                    return f.prechatOptions.fields
                };
            ra.prototype.getOfflineFields = function() {
                return f.offlineOptions.fields
            };
            ra.prototype.getShortMessage = function(a) {
                var b = null;
                "online" === a && f.onlineGreeting ? b = f.onlineGreeting.shortMessage : "away" === a && f.awayGreeting ? b = f.awayGreeting.shortMessage : "offline" === a && f.offlineOptions && (b = f.offlineOptions.shortMessage);
                return b
            };
            ra.prototype.getLongMessage = function(a) {
                var b = null;
                "online" === a ? f.onlineGreeting && (b = f.onlineGreeting.longMessage) : "away" === a ? f.awayGreeting &&
                    (b = f.awayGreeting.longMessage) : f.offlineOptions && (b = f.offlineOptions.text);
                return m.transformGreetings(b)
            };
            q = new ra;
            var ja = function() {
                var a = this;
                E.name.subscribe(function(a) {
                    E.displayName(m.parseVisitorName(a))
                });
                b.eventEmitter.on("localeChanged", function() {
                    E.displayName(m.parseVisitorName(E.name()))
                });
                b.eventEmitter.on("visitorDataUpdate", function(b) {
                    a.updateVisitorInformation(b)
                });
                b.eventEmitter.on("requestEmailTranscript", function(a, d) {
                    a.chatEndVersion = y.chatEndVersion;
                    b.chatHandler.hasChatEnded ?
                        b.socketManager.sendToConnector("notifyEndChatTranscript", a, d) : b.socketManager.sendToConnector("notifyEmailTranscript", a, d)
                })
            };
            ja.prototype.updateVisitorUUID = function(a) {
                var b = $_TAWK_JSON.parse(a.uuids);
                E.uuid = a.uuid;
                E.uuidVer = a.uver || 0;
                b && (Object.keys(b.e).forEach(function(a) {
                    E.uuids.push({
                        isExact: !0,
                        domain: a,
                        uuid: b.e[a]
                    })
                }), Object.keys(b.p).forEach(function(a) {
                    E.uuids.push({
                        isExact: !1,
                        domain: a,
                        uuid: b.p[a]
                    })
                }));
                U.storeUUID()
            };
            ja.prototype.updateVisitorInformation = function(a) {
                a.n && m.isString(a.n) &&
                    E.name(a.n);
                a.te && m.isString(a.te) && (E.transcriptEmail = a.te);
                a.e && m.isString(a.e) && E.email(a.e);
                a.vid && (E.visitorId = a.vid);
                a.dpt && m.isString(a.dpt) && (y.chatDepartment = a.dpt)
            };
            ja.prototype.setNameFromForm = function(a) {
                b.visitorHandler.setNameValue(a);
                n.onVisitorNameChanged(a.name)
            };
            ja.prototype.getNameValue = function() {
                return E.name() === E.displayName() ? E.name() : ""
            };
            ja.prototype.setNameValue = function(a) {
                E.name(m.rawEncode(a.name))
            };
            ja.prototype.getTranscriptEmailValue = function() {
                return E.transcriptEmail
            };
            ja.prototype.getEmailValue = function() {
                return E.email() || E.transcriptEmail
            };
            ja.prototype.setEmailValue = function(a) {
                E.email(a.email)
            };
            ja.prototype.setTranscriptValue = function(a) {
                a.name && E.name(m.rawEncode(a.name));
                E.transcriptEmail = a.transcriptEmail
            };
            var W = function() {
                var a = this;
                b.eventEmitter.on("chatBubbleClosed", function() {
                    t.chatBubbleClosed(!0)
                });
                b.eventEmitter.on("windowStateUpdated", function(a) {
                    t.chatWindowState(a.cw)
                });
                b.eventEmitter.on("pageStatusUpdated", function(a) {
                    var d;
                    a && (d = a.ast) && (m.isString(d) &&
                        m.isArray(a.dptst)) && a.asver > t.pageStatusVersion && (b.scheduler.originalPageStatus = a.ast, t.pageStatusVersion = a.asver, t.departments = a.dptst, t.pageStatus(a.ast), b.scheduler.calculate())
                });
                b.eventEmitter.on("submitPrechatForm", function(b, d) {
                    a.formatPrechatData(b, d)
                });
                b.eventEmitter.on("submitOfflineForm", function(b, d) {
                    a.formatOfflineData(b, d)
                });
                t.pageStatus.subscribe(function(a) {
                    n.onStatusChange(a)
                })
            };
            W.prototype.closeBubble = function() {
                t.chatBubbleClosed(!0);
                b.socketManager.sendToConnector("notifyChatBubbleClosed")
            };
            W.prototype.getDeparmentOptions = function() {
                var a, c, d, e = [],
                    f = t.departments;
                a = 0;
                for (c = f.length; a < c; a++) d = f[a], e.push({
                    text: m.rawDecode(d.n) + " (" + b.languageParser.translate("status", d.st) + ")",
                    value: d.did,
                    selected: y.chatDepartment === d.did
                });
                return e
            };
            W.prototype.getDeparmentName = function(a) {
                var b, d, c = t.departments;
                b = 0;
                for (d = c.length; b < d; b++)
                    if (c[b].did === a) return m.rawDecode(c[b].n);
                return a
            };
            W.prototype.formatFormData = function(a, b) {
                var d, c, e, f = {
                    questions: []
                };
                d = 0;
                for (c = b.length; d < c; d++) {
                    e = b[d];
                    "name" ===
                    e.type && (f.name = a[e.id]);
                    "email" === e.type && (f.email = a[e.id]);
                    if ("department" === e.type) {
                        if (!a[e.id] || "0" == a[e.id]) continue;
                        f.department = a[e.id];
                        a[e.id] = this.getDeparmentName(a[e.id])
                    }
                    a[e.id] && 0 !== a[e.id].length && (m.isArray(a[e.id]) ? f.questions.push({
                        label: e.label,
                        answer: a[e.id].join(", ")
                    }) : f.questions.push({
                        label: e.label,
                        answer: a[e.id]
                    }))
                }
                return f
            };
            W.prototype.formatPrechatData = function(a, c) {
                var d = this,
                    e = this.formatFormData(a, q.getPrechatFields());
                b.socketManager.sendToConnector("notifyPrechat", e,
                    function(a) {
                        if (a) return c(a, e);
                        n.onPrechatSubmit(e.questions);
                        d.handlePrechatSave(e, c)
                    })
            };
            W.prototype.handlePrechatSave = function(a, c) {
                var d, e, f = "";
                a.name && b.visitorHandler.setNameValue(a);
                a.email && b.visitorHandler.setEmailValue(a);
                t.prechatFormSubmitted = !0;
                if (0 === a.questions.length) return c(null, a);
                if (0 < a.questions.length)
                    for (d = 0, e = a.questions.length; d < e; d++) f += m.rawDecode(a.questions[d].label) + " : " + a.questions[d].answer, d !== e - 1 && (f += "\r\n");
                b.chatHandler.sendMessageToServer(f, null, function(d) {
                    d.error ||
                        (b.chatHandler.prepareMessage({
                            ut: "v",
                            t: "c",
                            m: m.rawEncode(f),
                            co: new Date,
                            uid: E.visitorId
                        }, !1, !1, !0), b.viewHandler.addWaitTime());
                    c(d.error, a)
                })
            };
            W.prototype.formatOfflineData = function(a, c) {
                var d = this.formatFormData(a, q.getOfflineFields());
                d.questions.unshift({
                    label: b.languageParser.translate("form", "SubmittedFrom"),
                    answer: e.location.href
                });
                b.socketManager.sendToConnector("notifyOfflineMessage", d, function(a) {
                    if (a) return c(a, d);
                    n.onOfflineSubmit(d);
                    c(null, d)
                })
            };
            W.prototype.notifyWindowState = function(a) {
                t.chatWindowState(a);
                b.socketManager.sendToConnector("notifyWindowState", a)
            };
            W.prototype.addEvent = function(a, c, d) {
                var e;
                "function" === typeof c && (d = c, c = null);
                d = d || function() {};
                e = this.secureWrapper({});
                e.name = a;
                e.data = c;
                b.socketManager.sendToConnector("addEvent", e, d)
            };
            W.prototype.setAttributes = function(a, c, d) {
                d = d || function() {};
                if (c && (a.name || a.email)) {
                    if (!a.name || !a.email || !a.hash) return d("UNAUTHORIZED_API_CALL");
                    n.visitor = {
                        name: a.name,
                        email: a.email,
                        hash: a.hash
                    }
                } else a = this.secureWrapper(a);
                b.socketManager.sendToConnector("setAttributes",
                    a,
                    function(c) {
                        c || (a.name && b.visitorHandler.setNameValue(a), a.email && b.visitorHandler.setEmailValue(a));
                        d(c)
                    })
            };
            W.prototype.addTags = function(a, c) {
                var d;
                c = c || function() {};
                d = this.secureWrapper({});
                d.tags = a;
                b.socketManager.sendToConnector("addTags", d, c)
            };
            W.prototype.removeTags = function(a, c) {
                var d;
                c = c || function() {};
                d = this.secureWrapper({});
                d.tags = a;
                b.socketManager.sendToConnector("removeTags", d, c)
            };
            W.prototype.secureWrapper = function(a) {
                "undefined" === a && (a = {});
                n && (n.visitor && "undefined" !== typeof n.visitor.hash &&
                    null !== n.visitor.hash && "undefined" !== typeof n.visitor.email && null !== n.visitor.email) && (a.email = n.visitor.email, a.hash = n.visitor.hash);
                return a
            };
            W.prototype.setForeignKey = function(a, c) {
                var d;
                c = c || function() {};
                d = this.secureWrapper({});
                d.key = a;
                b.socketManager.sendToConnector("saveForeignKey", d, c)
            };
            W.prototype.setConversionId = function(a, c) {
                var d;
                c = c || function() {};
                d = this.secureWrapper({});
                d.key = a;
                b.socketManager.sendToConnector("saveConversion", d, c)
            };
            W.prototype.setVisitorAttributes = function() {
                var a = {};
                n && n.visitor && (n.visitor.name && (a.name = n.visitor.name), n.visitor.email && (a.email = n.visitor.email), this.setAttributes(a, !1))
            };
            var O = function() {
                var a = this;
                this.agentHasMessaged = this.visitorHasMessaged = !1;
                this.messageBuffer = [];
                this.messages = {};
                this.agentsTyping = [];
                this.agentProfilesTyping = [];
                this.previousTextTime = this.previousText = this.lastMessageOwner = null;
                this.hasChatEnded = !1;
                this.hasChatStarted = x.observable(!1);
                this.hasWebRTCall = this.hasBeenMaximizedOnce = !1;
                b.eventEmitter.on("syncConversation", function(b) {
                    a.conversationUpdate(b)
                });
                b.eventEmitter.on("incomingMessage", function(b) {
                    a.handleMessageFromServer(b)
                });
                b.eventEmitter.on("agentIsTyping", function(b) {
                    a.handleAgentTyping(b.rsc)
                });
                b.eventEmitter.on("agentStopedTyping", function(b) {
                    a.handleAgentStoppedTyping(b.rsc)
                });
                b.eventEmitter.on("newChatRating", function(b) {
                    parseInt(b.rt, 10);
                    a.changeRating(b.rsc, !0)
                });
                b.eventEmitter.on("webrtcCallStatus", function(a) {
                    b.viewHandler.subscribeCallUpdate(a.clid)
                })
            };
            O.prototype.parseHistory = function() {
                var a, c, d;
                (new Date).getTime();
                var e = d = 0;
                this.noRedraw = !0;
                y.chatEndVersion = 1;
                a = 0;
                for (c = y.chatHistory.length; a < c; a++) "CHAT_ENDED" === y.chatHistory[a].m && (d = a + 1, y.chatEndVersion++);
                a = d;
                for (c = y.chatHistory.length; a < c; a++)
                    if (d = y.chatHistory[a], !d.md || d.md && !d.md.ao) "v" !== d.ut || (this.visitorHasMessaged || "c" !== d.t) || (e = (new Date).getTime() - m.getMilliseconds(d.co)), "WEBRTC_CALL" === d.m && d.md && d.md.webrtc ? (this.hasWebRTCall = !0, b.viewHandler.subscribeCallUpdate(d.md.clid)) : this.prepareMessage(d, !0, !1, !1);
                this.noRedraw = !1;
                this.visitorHasMessaged && (!this.agentHasMessaged &&
                    f.showWaitTime) && (t.waitTime = t.waitTime < e ? 6E4 : t.waitTime - e, b.viewHandler.addWaitTime());
                this.hasChatStarted(this.visitorHasMessaged)
            };
            O.prototype.handleIndicator = function() {
                b.viewHandler.indicator.show();
                A && (b.viewHandler.hasChatStarted = !0)
            };
            O.prototype.handleMessageFromServer = function(a) {
                var c = null;
                if (a.md && a.md.ao) return y.chatVersion = a.cver;
                if ("offline" === t.pageStatus())
                    if ("a" === a.ut) t.pageStatus("online");
                    else return;
                if (!y.chatSynced) return y.chatBuffer.push(a);
                this.hasChatEnded && this.startNewChat();
                if ("WEBRTC_CALL" === a.m && a.md && a.md.webrtc) this.hasWebRTCall = !0;
                else if ("CHAT_ENDED" !== a.m || this.hasChatEnded) {
                    "v" === a.ut && "c" === a.t && b.viewHandler.addWaitTime();
                    f.isPopup || ("c" !== a.t || b.viewHandler.isMaximized || "v" === a.ut || f.isEmbedded) || ("max" !== f.onClickAction || this.agentHasMessaged || A || this.hasBeenMaximizedOnce ? f.hideWidgetOnLoad || (b.viewHandler.indicator.show(), A && (b.viewHandler.hasChatStarted = !0)) : (b.viewHandler.userAction = !1, b.sessionHandler.notifyWindowState("max"), this.hasBeenMaximizedOnce = !0));
                    y.chatVersion = a.cver;
                    "s" === a.ut || ("c" !== a.t || this.hasChatStarted()) || (this.hasChatStarted("v" === a.ut), n.onChatStarted());
                    if ("c" === a.t)
                        if ("a" === a.ut)
                            if (a.md && a.md.file) n.onFileUpload("https://tawkto.link/" + a.md.file.name);
                            else n.onChatMessageAgent(a.m);
                    else {
                        if ("s" === a.ut) n.onChatMessageSystem(a.m)
                    } else if ("n" === a.t)
                        if ("AGENT_JOIN_CONVERSATION" === a.m) a.md && (a.md.pi && a.md.pi.length) && (c = "https://s3.amazonaws.com/talk-pi/" + a.md.pi), n.onAgentJoinChat({
                            name: a.n,
                            position: a.md.pst,
                            image: c,
                            id: a.uid
                        });
                        else if ("AGENT_LEFT_CONVERSATION" === a.m) n.onAgentLeaveChat({
                        name: a.n,
                        id: a.uid
                    });
                    this.prepareMessage(a, !1);
                    b.scheduler.calculate();
                    f.showPreChatForm && "preChatForm" === b.formHandler.currentForm && b.formHandler.closeForm()
                } else this.endChat(a.md.cev)
            };
            O.prototype.prepareMessage = function(a, c, d, e) {
                var f, g, k, m, n = !0;
                "n" === a.t && "v" === a.ut ? "VISITOR_RATING" === a.m && this.changeRating(a.md.rt, !0) : ("v" === a.ut ? (f = E.displayName(), g = a.uid) : (f = a.n, "a" === a.ut && (g = y.profiles[a.md.rsc])), "n" !== a.t || "AGENT_JOIN_CONVERSATION" !==
                    a.m && "AGENT_LEFT_CONVERSATION" !== a.m || (this.hasChatStarted() || this.visitorHasMessaged || this.agentHasMessaged || Object.keys(this.messages).length || this.hasWebRTCall ? (n = !1, b.agents.updateAgentPresence(a.m, a.md, a.n, a.md.rsc, !d)) : (n = b.agents.updateAgentPresence(a.m, a.md, a.n, a.md.rsc, !d), k = b.languageParser.translate("chat", a.m, {
                        n: "<b>" + a.n + "</b>"
                    }))), A && (g && y.agentProfiles[g]) && (m = y.agentProfiles[g].pi), n && (k || (k = this.parseText(a.m)), void 0 === c && (c = !0), a.messageId = b.viewHandler.appendMessage({
                        message: k,
                        name: f,
                        type: a.t,
                        time: a.co,
                        data: a.md,
                        isPending: !1,
                        senderType: a.ut,
                        ownerId: g,
                        dontPlaySound: c,
                        profileImg: m,
                        reDisplay: e
                    }), e || y.chatOrder++, this.messages[y.chatOrder] = a))
            };
            O.prototype.parseText = function(a) {
                if (a) return a = a.replace(m.regLineBreaks, m.br), a = this.createUrl(a.split(/\s/), " ")
            };
            O.prototype.createUrl = function(a, c) {
                function d(a) {
                    return b.chatHandler.parseUrl(a)
                }

                function e(a) {
                    return b.chatHandler.parseEmail(a)
                }
                var f, g, k;
                g = 0;
                for (k = a.length; g < k; g++) - 1 !== a[g].indexOf(m.br) ? (f = a[g].split(m.regBr), a[g] =
                    this.createUrl(f, m.br)) : a[g].match(m.regEmailMatch) ? a[g] = a[g].replace(m.regEmailMatch, e) : (a[g] = a[g].replace(m.regMatchUrl, d), a[g] = a[g].replace(m.regMatchIp, d));
                return a.join(c)
            };
            O.prototype.parseUrl = function(a) {
                var b, d = "";
                if ("undefined" !== typeof Q && Q.unifyUnicode(a) !== a) return a;
                a.match(m.regEmailMatch) && (d = "mailto:");
                if ("mailto:" === d) return b = a.match(m.regEmailMatch)[0], -1 !== b.indexOf("mailto") && (d = ""), a.replace(m.regEmailMatch, '<a href="' + (d + b) + '" title="' + (d + b) + '" style="word-wrap:break-word; white-space:normal;>' +
                    b + "</a> ");
                0 !== a.toLowerCase().indexOf("http") && 0 !== a.toLowerCase().indexOf("ftp") && (d = "http://");
                return '<a target="_blank" href="' + (d + a) + '" title="' + (d + a) + '" style="word-wrap:break-word; white-space:normal;">' + a + "</a> "
            };
            O.prototype.parseEmail = function(a) {
                var b = "";
                if ("undefined" !== typeof Q && Q.unifyUnicode(a) !== a) return a; - 1 === a.indexOf("mailto") && (b = "mailto:");
                return '<a href="' + (b + a) + '" title="' + (b + a) + '">' + a + "</a> "
            };
            O.prototype.sendTextPreview = function(a) {
                var c, d, e = this;
                c = b.eventHandler.getTargetElement(a);
                if (13 === a.keyCode && !a.shiftKey) return b.eventHandler.cancelEvent(a), d = m.trim(c.value), c.value = "", this.sendMessage(d);
                this.keyDownTimeout || (this.keyDownTimeout = setTimeout(function() {
                    d = m.trim(c.value);
                    "undefined" !== typeof Q && (d = Q.toShort(d));
                    b.socketManager.sendToConnector("notifyMessagePreview", d);
                    clearTimeout(e.keyDownTimeout);
                    e.keyDownTimeout = 0
                }, 1E3))
            };
            O.prototype.sendMessage = function(a, c, d) {
                var e = (new Date).getTime();
                a = m.trim(a);
                clearTimeout(this.keyDownTimeout);
                this.keyDownTimeout = 0;
                if (!a) return d ?
                    d() : !1;
                "undefined" !== typeof Q && (a = Q.toShort(a));
                this.previousText && (this.previousTextTime && this.previousText === a && 500 > e - this.previousTextTime) && b.loggingHandler.logIncident("Double message occured", {
                    previousText: this.previousText,
                    currentText: a,
                    currentT: e,
                    previousT: this.previousTextTime
                });
                this.previousTextTime = e;
                this.previousText = a;
                c = !!c;
                c = b.viewHandler.appendMessage({
                    message: this.parseText(m.rawEncode(a)),
                    name: E.displayName(),
                    type: "c",
                    time: new Date,
                    isPending: !0,
                    senderType: "v",
                    ownerId: E.visitorId,
                    dontPlaySound: c
                });
                this.sendMessageToServer(a, c, d)
            };
            O.prototype.sendMessageToServer = function(a, c, d) {
                var e = this,
                    f;
                d = d || function(a) {
                    b.viewHandler.handleAcknowledgment(a)
                };
                b.socketManager.sendToConnector("sendChatMessage", a, function(b, g, k) {
                    b || (f = ++y.chatOrder, e.messages[f] = {
                        ut: "v",
                        t: "c",
                        m: m.rawEncode(a),
                        co: g,
                        messageId: c,
                        uid: E.visitorId
                    }, y.chatVersion = k, e.hasChatStarted() || "offline" === t.pageStatus() || (e.hasChatStarted(!0), n.onChatStarted()), n.onChatMessageVisitor(a));
                    d({
                        error: b,
                        messageId: c,
                        order: f
                    })
                })
            };
            O.prototype.conversationUpdate = function(a) {
                a = a || {};
                var c, d, e = a.cver || 0,
                    g = a.c || [];
                d = y.chatBuffer;
                y.chatSynced = !0;
                if (!(y.chatVersion >= e)) {
                    a = 0;
                    for (c = d.length; a < c; a++) d[a].cver > e && g.push(d[a]);
                    a = 0;
                    for (c = g.length; a < c; a++) d = g[a], d.md && d.md.ao || this.prepareMessage(d, !1);
                    this.visitorHasMessaged && (!this.agentHasMessaged && f.showWaitTime) && b.viewHandler.addWaitTime();
                    y.chatVersion = e;
                    this.isScrollbar = b.viewHandler.isChatScrollbar();
                    b.viewHandler.scrollToBottom()
                }
            };
            O.prototype.handleAgentTyping = function(a) {
                var c =
                    y.profiles[a];
                c && (y.agentProfiles[c] && !this.agentsTyping[a]) && (this.agentsTyping[a] = !0, this.agentProfilesTyping[c] ? this.agentProfilesTyping[c]++ : (this.agentProfilesTyping[c] = 1, b.viewHandler.appendAgentIsTypingElement(c)))
            };
            O.prototype.handleAgentStoppedTyping = function(a) {
                var c = y.profiles[a];
                this.agentsTyping[a] && delete this.agentsTyping[a];
                !this.agentProfilesTyping[c] || 0 < --this.agentProfilesTyping[c] || (delete this.agentProfilesTyping[c], b.viewHandler.removeAgentTypingElement(c))
            };
            O.prototype.changeRating =
                function(a, c) {
                    y.rating() === a && (a = 0);
                    y.rating(a);
                    c || (b.socketManager.sendToConnector("setRating", a), n.onChatSatisfaction(y.rating()))
                };
            O.prototype.toggleSound = function(a) {
                var c = !f.soundOn();
                void 0 !== a && (c = a);
                f.soundOn(c);
                void 0 === a && b.socketManager.sendToConnector("toggleSound", c)
            };
            O.prototype.clearChatMessages = function() {
                this.agentHasMessaged = this.visitorHasMessaged = !1;
                this.messageBuffer = [];
                this.messages = {};
                this.agentsTyping = [];
                this.agentProfilesTyping = [];
                this.lastMessageOwner = null;
                y.chatOrder = 0;
                y.chatSynced = !1;
                y.chatBuffer = []
            };
            O.prototype.startNewChat = function() {
                this.clearChatMessages();
                b.viewHandler.resetView();
                b.viewHandler.handleRestartChat();
                y.chatSynced = !0;
                A || ("max" === t.chatWindowState() ? b.viewHandler.maximizeWidget() : b.viewHandler.minimizeWidget());
                this.hasChatEnded = !1
            };
            O.prototype.endChat = function(a) {
                b.viewHandler.handleEndChat();
                b.agents.clearAgents();
                this.hasChatEnded = !0;
                this.hasChatStarted(!1);
                y.chatEndVersion = a;
                n.onChatEnded()
            };
            O.prototype.sendFileMessage = function(a) {
                var c = this,
                    d = {
                        fileName: a.filename,
                        name: a.name,
                        type: a.extension,
                        mimeType: a.mimeType,
                        size: a.size
                    };
                b.socketManager.sendToConnector("fileUploadMessage", d, function(e, f, g) {
                    e || (b.viewHandler.fileUploaded(a.handle), d.fileName = m.rawEncode(d.fileName), messageId = b.viewHandler.appendMessage({
                        message: "FILE",
                        name: E.displayName(),
                        type: "c",
                        time: f,
                        isPending: !1,
                        senderType: "v",
                        ownerId: E.visitorId,
                        dontPlaySound: !0,
                        data: {
                            file: d
                        }
                    }), chatOrder = ++y.chatOrder, c.messages[chatOrder] = {
                        ut: "v",
                        t: "c",
                        m: "FILE",
                        co: f,
                        messageId: messageId,
                        uid: E.visitorId,
                        md: {
                            file: d
                        }
                    }, y.chatVersion = g, n.onFileUpload("https://tawkto.link/" + d.name))
                })
            };
            O.prototype.isChatOngoing = function() {
                return !this.hasChatEnded && this.visitorHasMessaged && 0 < b.agents.totalAgents()
            };
            O.prototype.isVisitorEngaged = function() {
                return !this.hasChatEnded && this.visitorHasMessaged
            };
            O.prototype.triggerEndChat = function() {
                var a = this;
                b.socketManager.sendToConnector("endVisitorChat", {}, function(b, d) {
                    b || a.endChat(d.chatEndVersion)
                })
            };
            var wa = function() {
                this.agentsCount = 0;
                this.totalAgents = x.observable(0)
            };
            wa.prototype.updateAgentPresence = function(a, b, d, c, e) {
                if (!f.showAgentBar) return !0;
                if ("AGENT_JOIN_CONVERSATION" !== a && "AGENT_LEFT_CONVERSATION" !== a) return !1;
                switch (a) {
                    case "AGENT_JOIN_CONVERSATION":
                        return this.addAgentToList(b, d, c, e);
                    case "AGENT_LEFT_CONVERSATION":
                        return this.removeAgentFromList(b, c, e)
                }
            };
            wa.prototype.addAgentToList = function(a, c, d, e) {
                var f = y.agents[d];
                if (f)
                    if (f.seq.time < a.seq.time || f.seq.time === a.seq.time && f.seq.inc < a.seq.inc) {
                        f.seq = a.seq;
                        if (f.pid === a.pid) return !1;
                        this.changeAgentProfile(f.pid,
                            e);
                        f.pid = a.pid;
                        y.profiles[d] = a.pid
                    } else return !1;
                else y.agents[d] = a, y.profiles[d] = a.pid;
                if (!a.pid) return !1;
                this.totalAgents(this.totalAgents() + 1);
                if ("undefined" !== typeof y.agentProfiles[a.pid]) return y.agentProfiles[a.pid].pi = a.pi, y.agentProfiles[a.pid].count++, !1;
                c = {
                    pi: a.pi,
                    pst: a.pst || "",
                    pid: a.pid,
                    n: c,
                    count: 1
                };
                y.agentProfiles[a.pid] = c;
                e && b.viewHandler.appendAgent(c);
                return !0
            };
            wa.prototype.changeAgentProfile = function(a, c) {
                var d;
                d = y.agentProfiles[a];
                this.decrementProfileCount(a, c) && c && (d = {
                    message: b.languageParser.translate("chat",
                        "AGENT_LEFT_CONVERSATION", {
                            n: "<b>" + d.n + "</b>"
                        }),
                    name: "",
                    type: "n",
                    time: new Date,
                    isPending: !1,
                    senderType: "a",
                    ownerId: "",
                    dontPlaySound: !0
                }, y.chatOrder++, b.chatHandler.messages[y.chatOrder] = d, b.viewHandler.appendMessage(d))
            };
            wa.prototype.removeAgentFromList = function(a, b, c) {
                var e = y.agents[b];
                if (!e) return y.agents[b] = a, !1;
                b = e.pid;
                if (e.seq.time < a.seq.time || e.seq.time === a.seq.time && e.seq.inc < a.seq.inc) e.seq = a.seq, e.pid = null;
                else return !1;
                this.totalAgents(this.totalAgents() - 1);
                return this.decrementProfileCount(b,
                    c)
            };
            wa.prototype.decrementProfileCount = function(a, c) {
                var d = y.agentProfiles[a];
                if (d) return d.count--, 1 > d.count ? (delete y.agentProfiles[a], c && b.viewHandler.removeAgent(a), !0) : !1
            };
            wa.prototype.clearAgents = function() {
                this.agentsCount = 0;
                this.totalAgents(0);
                y.agentProfiles = {};
                y.agents = {};
                y.profiles = {};
                b.viewHandler.clearAgentFooter();
                b.viewHandler.clearAgentHeader()
            };
            var pa = function() {
                var a = this;
                this.stack = [];
                this.socketConnector = new Aa;
                this.stackLock = !1;
                b.eventEmitter.on("socketReady", function() {
                    a.clearStack()
                })
            };
            pa.prototype.initConnector = function() {
                this.socketConnector.init()
            };
            pa.prototype.sendToConnector = function(a, b, d) {
                if (v.connected)
                    if (void 0 !== d || "function" === typeof b) this.safeCallback(a, b, d);
                    else try {
                        this.socketConnector.emit(a, b, d)
                    } catch (e) {
                        c.handleError("Unable to emit to socket connector in sendToConnector for command : " + a + " with data :" + $_TAWK_JSON.stringify(b), e.fileName, e.lineNumber, e.stack)
                    } else this.addToStack(a, b, d)
            };
            pa.prototype.addToStack = function(a, b, c) {
                var e = this;
                if (this.stackLock) return setTimeout(function() {
                    e.addToStack(a,
                        b, c)
                }, 100);
                this.stack.push({
                    command: a,
                    data: b,
                    callback: c
                })
            };
            pa.prototype.clearStack = function() {
                var a = this;
                this.stackLock = !0;
                this.stack.forEach(function(b) {
                    a.sendToConnector(b.command, b.data, b.callback)
                });
                this.stack = [];
                this.stackLock = !1
            };
            pa.prototype.safeCallback = function(a, b, d) {
                var e, f;
                "function" === typeof b && (d = b, b = null);
                e = setTimeout(function() {
                    d(!0);
                    throw Error("Socket server did not execute the callback for " + a + " with data : " + $_TAWK_JSON.stringify(b));
                }, 35E3);
                f = function() {
                    clearTimeout(e);
                    f = function() {};
                    d.apply(null, arguments)
                };
                try {
                    null === b ? this.socketConnector.emit(a, f) : this.socketConnector.emit(a, b, f)
                } catch (g) {
                    c.handleError("Unable to emit to socket connector in safeCallback for command : " + a + " with data :" + $_TAWK_JSON.stringify(b), g.fileName, g.lineNumber, g.stack)
                }
            };
            pa.prototype.disconnectConnector = function() {
                this.socketConnector.disconnectSocket()
            };
            pa.prototype.connectorListeningOn = function(a) {
                return 0 !== this.socketConnector.listeners(a).length
            };
            pa.prototype.isForcedDisconnect = function() {
                return this.socketConnector.forceDisconnected
            };
            var ba = function() {
                this.started = this.maximize = this.isDocumentReady = !1;
                this.previousSessionKey = null;
                this.waitingForLanguage = !1;
                this.startTime = v.startTime;
                this.versionReloadTimeout = null;
                this.dataIsReady = this.viewIsReady = !1
            };
            ba.prototype.load = function() {
                var a = this;
                I.pageId = $_Tawk_AccountKey;
                "undefined" !== typeof I.pageId && (q.processSettings(v.widgetSettings), this.init(), this.isDocumentReady || (b.eventHandler.listen(document, "DOMContentLoaded", function() {
                    a.init()
                }, "domloaded"), b.eventHandler.listen(document,
                    "readystatechange",
                    function() {
                        ("complete" === document.readyState || "interactive" === document.readyState && document.body) && a.init()
                    }, "domstatechange"), b.eventHandler.listen(e, "load", function() {
                    a.init()
                }, "windowload")), b.eventEmitter.on("removeWidget", function(b) {
                    a.removeWidget()
                }))
            };
            ba.prototype.init = function() {
                var a;
                if (!this.isDocumentReady && (this.isDocumentReady = !0, a = m.parseQueryString(), !a.$_tawk_beacon && "operamini" !== A)) {
                    a.$_tawk_popout && (t.transferKey = a.$_tawk_tk, t.sessionKey = a.$_tawk_sk, f.isPopup = !0);
                    if (a = m.getReloadedScript()) a = m.parseQueryString(a.src), t.restarted = a.restarted, this.maximize = a.maximized;
                    m.parseApi();
                    n.embedded && (f.isEmbedded = !0, A = null);
                    if (!U.isCookieEnabled) return lb.init();
                    A ? (f.isPopup ? b.viewHandler = new oa : this.initRenderer(A), b.formHandler = new P) : (b.formHandler = new P, b.viewHandler = new Ra, b.audioPlayer.initAudioPlayer());
                    b.viewHandler && (b.sessionHandler.setVisitorAttributes(), n.onBeforeLoad(), this.bootStrap())
                }
            };
            ba.prototype.bootStrap = function() {
                var a = this;
                this.dataIsReady =
                    this.viewIsReady = !1;
                setTimeout(function() {
                    b.viewHandler.begin();
                    a.viewIsReady = !0;
                    a.setupDone()
                }, 0);
                setTimeout(function() {
                    g.register()
                }, 0)
            };
            ba.prototype.initRenderer = function(a) {
                switch (a) {
                    case "chrome":
                        b.viewHandler = new Sa(a);
                        break;
                    case "safari":
                        b.viewHandler = new Ca(a);
                        break;
                    case "opera":
                        b.viewHandler = new Ta(a);
                        break;
                    case "android":
                        b.viewHandler = new ua(a);
                        break;
                    case "android2.3":
                        b.viewHandler = new Ua(a);
                        break;
                    case "android2":
                        b.viewHandler = new va(a);
                        break;
                    case "firefox":
                        b.viewHandler = new Va(a);
                        break;
                    case "ie":
                        b.viewHandler = 10 > H ? new va(a) : new Wa(a);
                        break;
                    case "blackberry":
                        b.viewHandler = new va(a);
                        break;
                    case "nokia":
                        b.viewHandler = new va(a);
                        break;
                    case "uc":
                        b.viewHandler = new ua(a)
                }
                b.viewHandler && b.viewHandler.init()
            };
            ba.prototype.begin = function(a) {
                g.registerStarted = !1;
                g.clearTimers();
                g.registerTime = (new Date).getTime() - g.registerStart;
                g.registerStart = null;
                a.error ? "USER_ERROR" === a.error || "SERVER_DOWN" === a.error ? this.hideWidget() : g.retryRegister() : (b.activityManager.initActivityReset(), this.started ?
                    this.reinited(a) : (this.started = !0, this.extractRegisterData(a), this.dataIsReady = !0, this.setupDone()))
            };
            ba.prototype.extractRegisterData = function(a) {
                a.wdgt && (a.wdgt.lc !== v.widgetSettings.lc && (this.waitingForLanguage = !0, m.insertScript("https://static-v.tawk.to/574/languages/" + a.wdgt.lc + ".js")), q.processSettings(a.wdgt));
                "max" !== f.onClickAction || A || (this.maximize = "max" === a.cw, t.chatWindowState(a.cw));
                t.criticalVersion = a.cjsv || 0;
                t.visitorSocketServer = a.vss;
                t.sessionKey = a.sk;
                t.transferKey = a.tk;
                t.transferedSession = !!a.ts;
                t.serverVersion = a.jsv || 0;
                b.visitorHandler.updateVisitorUUID(a);
                b.visitorHandler.updateVisitorInformation(a);
                f.soundOn(a.sdo);
                f.whiteLabel(a.wl);
                f.scheduleTimezone = a.wstz;
                t.prechatFormSubmitted = !!a.pcfs;
                t.departments = m.isArray(a.dptst) ? a.dptst.reverse() : [];
                t.pageStatusVersion = a.asver || 0;
                t.waitTime = void 0 !== a.ewt && 0 !== a.ewt ? 1E3 * a.ewt : 6E4;
                t.pageStatus(a.ast || "offline");
                t.chatBubbleClosed(!!a.bblc);
                I.tawkId = a.twid;
                I.pageName(a.pgn);
                y.chatVersion = a.cver || 0;
                y.chatDepartment = a.dpt || "any";
                y.chatHistory =
                    a.c || [];
                y.rating(a.rt || 0);
                f.webRTCSettings(a.webrtc);
                f.brandingRedirect(a.otl)
            };
            ba.prototype.initBuildChat = function() {
                b.chatHandler.parseHistory();
                b.viewHandler.applyWhiteLabelSettings();
                this.showWidget();
                b.socketManager.initConnector();
                v.ready = !0;
                n.onLoad();
                delete v.init
            };
            ba.prototype.reinited = function(a) {
                var c = t.sessionKey;
                this.extractRegisterData(a);
                c !== a.sk ? (b.chatHandler.clearChatMessages(), b.viewHandler.resetView(), b.agents.clearAgents()) : (t.visitorSocketServer = a.vss, t.sessionKey = a.sk, t.transferKey =
                    a.tk, t.transferedSession = !!a.ts, t.serverVersion = a.jsv || 0, b.visitorHandler.updateVisitorUUID(a));
                b.scheduler.setup();
                b.viewHandler.updateViewByStatus(t.pageStatus());
                b.socketManager.initConnector()
            };
            ba.prototype.criticalRefresh = function(a, c, d) {
                var g = this,
                    k = (new Date).getTime(),
                    n = "https://embed.tawk.to/" + I.pageId + "/" + $_Tawk_WidgetId + "?refresh=true&";
                if (f.isPopup) return e.location.reload(!!c);
                this.dataIsReady = this.viewIsReady = !1;
                this.removeWidget();
                c && (n += "restarted=true&");
                d && (n += "maximized=true&");
                n += "v=" + a || t.serverVersion || t.currentVersion;
                delete v.downloaded;
                m.insertScript(n, "TawkScript-" + k);
                var p = setInterval(function() {
                    e.$_Tawk.startTime !== g.startTime && (b = null, clearInterval(p), clearTimeout(g.versionReloadTimeout))
                }, 200)
            };
            ba.prototype.removeWidget = function() {
                var a;
                b && (b.viewHandler && b.viewHandler.iframeContainer) && (a = document.getElementById(b.viewHandler.iframeContainer.elementId));
                g.clearTimers();
                b.eventHandler.clearEvents();
                b.activityManager.cleanUp();
                b.socketManager.disconnectConnector();
                b.eventEmitter.removeAllListeners();
                b.scheduler.clearTimer();
                clearTimeout(m.checkWhiteLabelRef);
                a && a.parentNode.removeChild(a)
            };
            ba.prototype.setupDone = function(a) {
                a && (b.languageParser.language = v.language, this.waitingForLanguage = !1);
                this.viewIsReady && (this.dataIsReady && !this.waitingForLanguage) && this.initBuildChat()
            };
            ba.prototype.showWidget = function() {
                b.scheduler.setup();
                !f.isPopup && f.hideWidgetOnLoad || b.viewHandler.show()
            };
            ba.prototype.hideWidget = function() {
                b && b.viewHandler && b.viewHandler.hideWidget()
            };
            v.languageUpdater = function() {
                if (b && b.main && b.main.waitingForLanguage) {
                    b.main.setupDone(!0);
                    try {
                        b.eventEmitter.emit("localeChanged")
                    } catch (a) {
                        c.handleError("Unable to emit locale changed", a.fileName, a.lineNumber, a.stack)
                    }
                }
            };
            var La = function(a, b) {
                this.language = a;
                this.notFoundCallback = "function" === typeof b ? b : function() {}
            };
            La.prototype.translate = function(a, b, c, e) {
                var f, g;
                f = [];
                var k = this.language || e;
                if (!k[a]) return this.notFoundCallback(Error("Missing context : {" + a + "}, {" + b + "}")), b;
                e = k[a][b];
                if (!e) return this.notFoundCallback(Error("Missing key : {" +
                    a + "}, {" + b + "}")), b;
                b = e.pluralVars ? e.pluralVars.length : 0;
                g = e.vars ? e.vars.length : 0;
                if (0 < b) {
                    for (a = 0; a < b; a++) f.push(k.pluralFormFunction(c[e.pluralVars[a]]));
                    f = e.message[f.join("_")];
                    for (a = 0; a < b; a++) f = f.replace(RegExp("#" + e.pluralVars[a], "g"), this.escapeStringReplacePlacement(c[e.pluralVars[a]]))
                } else f = e.message;
                if (0 < g)
                    for (a = 0; a < g; a++) f = f.replace(RegExp("#" + e.vars[a], "g"), this.escapeStringReplacePlacement(c[e.vars[a]]));
                return f
            };
            La.prototype.escapeStringReplacePlacement = function(a) {
                return "string" ===
                    typeof a ? a.replace(/\$/g, "$$$") : a
            };
            La.prototype.hasTranslation = function(a, b, c) {
                c = c || this.language;
                return !!(c && c[a] && c[a][b])
            };
            "undefined" !== typeof module && (module.exports = La);
            b.eventEmitter = new EventEmitter;
            b.eventEmitter.on("error", function(a) {
                c.handleError("EventEmitter on error", a.fileName, a.lineNumber, a.stack)
            });
            b.loggingHandler = new Ea;
            b.eventHandler = new qa;
            b.activityManager = new Ka;
            b.scheduler = new Da;
            b.main = new ba;
            b.languageParser = new La(v.language);
            b.socketManager = new pa;
            b.sessionHandler = new W;
            b.chatHandler = new O;
            b.agents = new wa;
            b.visitorHandler = new ja;
            b.audioPlayer = new Za;
            g = new ea;
            b.fileUploadHandler = new $a;
            void 0 !== v.downloaded ? (b.eventHandler.clearEvents(), b.eventEmitter.removeAllListeners(), b = null) : (v.downloaded = !0, b.main.load())
        } catch (Ma) {
            if (c) c.handleError(Ma.message, "tawk.js", Ma.lineNumber || Ma.line, Ma.stack);
            else throw Error("tawk : " + Ma.message);
        }
    }).call(this, window.$_Tawk);

})(window);