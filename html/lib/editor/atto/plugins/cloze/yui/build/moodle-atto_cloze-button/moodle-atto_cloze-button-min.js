YUI.add("moodle-atto_cloze-button",function(s,t){var a="atto_cloze",r={ANSWER:"atto_cloze_answer",ANSWERS:"atto_cloze_answers",ADD:"atto_cloze_add",CANCEL:"atto_cloze_cancel",DELETE:"atto_cloze_delete",FEEDBACK:"atto_cloze_feedback",FRACTION:"atto_cloze_fraction",LEFT:"atto_cloze_col0",LOWER:"atto_cloze_down",RIGHT:"atto_cloze_col1",MARKS:"atto_cloze_marks",DUPLICATE:"atto_cloze_duplicate",RAISE:"atto_cloze_up",SUBMIT:"atto_cloze_submit",SUMMARY:"atto_cloze_summary",TOLERANCE:"atto_cloze_tolerance",TYPE:"atto_cloze_qtype"},o={FORM:'<div class="atto_cloze"><form class="atto_form"><p>{{qtype}}<label for="{{elementid}}_mark">{{get_string "defaultmark" "question"}}</label><input id="{{elementid}}_mark" type="text" class="{{CSS.MARKS}}" value="{{marks}}" /><img class="{{CSS.ADD}}" title="{{get_string "addmoreanswerblanks" "qtype_calculated"}}" src="'+M.util.image_url("t/add","core")+'"><div class="{{CSS.ANSWERS}}"><ol>{{#answerdata}}<li><div><div class="{{../CSS.LEFT}}"><a class="{{../CSS.ADD}}" title="{{get_string "addmoreanswerblanks" "qtype_calculated"}}"><img class="icon_smallicon" src="'+M.util.image_url("t/add","core")+'"></a><a class="{{../CSS.DELETE}}" title="{{get_string "delete" "core"}}"><img class="icon_smallicon" src="'+M.util.image_url("t/delete","core")+'"></a><a class="{{../CSS.RAISE}}" title="{{get_string "up" "core"}}"><img class="icon_smallicon" src="'+M.util.image_url("t/up","core")+'"></a><a class="{{../CSS.LOWER}}" title="{{get_string "down" "core"}}"><img class="icon_smallicon" src="'+M.util.image_url("t/down","core")+'"></a><br /><label id="{{id}}_grade">{{get_string "grade" "core"}}</label><select id="{{id}}_grade" value="{{fraction}}" class="{{../CSS.FRACTION}}" selected>{{#if fraction}}<option value="{{../fraction}}">{{../fraction}}%</option>{{/if}}<option value="">{{get_string "incorrect" "question"}}</option>{{#../fractions}}<option value="{{fraction}}">{{fraction}}%</option>{{/../fractions}}</select></div><div class="{{../CSS.RIGHT}}"><label for="{{id}}_answer">{{get_string "answer" "question"}}</label><input id="{{id}}_answer" type="text" class="{{../CSS.ANSWER}}" value="{{answer}}" />{{#if ../numerical}}<label for="{{id}}_tolerance">{{{get_string "tolerance" "qtype_calculated"}}}</label><input id="{{id}}_tolerance" type="text" class="{{../../CSS.TOLERANCE}}" value="{{tolerance}}" />{{/if}}<label for="{{id}}_feedback">{{get_string "feedback" "question"}}</label><input id="{{id}}_feedback" type="text" class="{{../CSS.FEEDBACK}}" value="{{feedback}}" /></div></div></li>{{/answerdata}}</ol></div><p><button type="submit" class="{{CSS.SUBMIT}}" title="{{get_string "common:insert" "editor_tinymce"}}">{{get_string "common:insert" "editor_tinymce"}}</button><button type="submit" class="{{CSS.CANCEL}}">{{get_string "cancel" "core"}}</button></p></form></div>',OUTPUT:"&#123;{{marks}}:{{qtype}}:{{#answerdata}}~{{#if fraction}}%{{../fraction}}%{{/if}}{{answer}}{{#if tolerance}}:{{tolerance}}{{/if}}{{#if feedback}}#{{feedback}}{{/if}}{{/answerdata}}&#125;",TYPE:'<div class="atto_cloze">{{get_string "chooseqtypetoadd" "question"}}<form ="atto_form"><div class="{{CSS.TYPE}}">{{#types}}<div class="option"><input name="qtype" id="qtype_qtype_{{type}}" value="{{type}}" type="radio"><label for="qtype_qtype_{{type}}"><span class="typename">{{type}}</span><span class="{{../CSS.SUMMARY}}"><h6>{{name}}</h6><p>{{summary}}</p><ul>{{#options}}<li>{{option}}</li>{{/options}}</ul></span></label></div>{{/types}}</div><p><button type="submit" class="{{CSS.SUBMIT}}" title="{{get_string "add" "core"}}">{{get_string "add" "core"}}</button>{{#qtype}}<button type="submit" class="{{../CSS.DUPLICATE}}">{{get_string "duplicate" "core"}}</button>{{/qtype}}<button type="submit" class="{{CSS.CANCEL}}">{{get_string "cancel" "core"}}</button></p></form></div>'},n=[{fraction:100},{fraction:50},{fraction:33.33333},{fraction:25},{fraction:20},{fraction:16.66667},{fraction:14.28571},{fraction:12.5},{fraction:11.11111},{fraction:10},{fraction:5},{fraction:0},{fraction:-5},{fraction:-10},{fraction:-11.11111},{fraction:-12.5},{fraction:-14.28571},{fraction:-16.66667},{fraction:-20},{fraction:-25},{fraction:-33.333},{fraction:-50},{fraction:-100}];s.namespace("M.atto_cloze").Button=s.Base.create("button",s.M.editor_atto.EditorPlugin,[],{_form:null,_answerdata:null,_qtype:null,_selectedText:null,_marks:null,_currentSelection:null,initializer:function(){this._groupFocus={};var t=this.get("host").editor.ancestor("body#page-question-type-multianswer form, body#page-question-type-multianswerwiris form");t&&this.get("host").editor.compareTo(t.one(".editor_atto_content"))&&t.test('[action="question.php"]')&&(this.addButton({icon:"icon",iconComponent:"qtype_multianswer",callback:this._displayDialogue}),this._marks=1,this._answerDefault="",this.get("host").on("atto:selectionchanged",function(){this._resolveSubquestion()?this.highlightButtons():this.unHighlightButtons()},this))},_displayDialogue:function(){var t,e,i=this.get("host");i.editor.focus(),this._currentSelection=i.getSelection(),!1!==this._currentSelection&&(this._selectedText=this._currentSelection.toString(),t=this.getDialogue({headerContent:M.util.get_string("pluginname",a),bodyContent:'<div style="height:500px"></div>',width:500},!0),(e=this._resolveSubquestion())?(this._parseSubquestion(e),t.set("bodyContent",this._getDialogueContent(null,this._qtype))):t.set("bodyContent",this._getDialogueContent()),t.show(),this._dialogue=t)},_getDialogueContent:function(t,e){var i,a;return this._form&&this._form.remove().destroy(!0),e?(i=s.Handlebars.compile(o.FORM),a=s.Node.create(i({CSS:r,answerdata:this._answerdata,elementid:s.guid(),fractions:n,qtype:this._qtype,marks:this._marks,numerical:"NUMERICAL"===this._qtype||"NM"===this._qtype})),(this._form=a).one("."+r.SUBMIT).on("click",this._setSubquestion,this),a.one("."+r.CANCEL).on("click",this._cancel,this),a.delegate("click",this._deleteAnswer,"."+r.DELETE,this),a.delegate("click",this._addAnswer,"."+r.ADD,this),
a.delegate("key",this._addAnswer,"enter","."+r.ANSWER+", ."+r.FEEDBACK,this),a.delegate("click",this._lowerAnswer,"."+r.LOWER,this),a.delegate("click",this._raiseAnswer,"."+r.RAISE,this)):(i=s.Handlebars.compile(o.TYPE),a=s.Node.create(i({CSS:r,qtype:this._qtype,types:this.get("questiontypes")})),(this._form=a).delegate("click",this._choiceHandler,"."+r.SUBMIT+", ."+r.DUPLICATE,this),a.one("."+r.CANCEL).on("click",this._cancel,this)),a},_getAnswerDefault:function(){switch(this._qtype){case"SHORTANSWER":case"SA":case"NUMERICAL":case"NM":this._answerDefault=100;break;default:this._answerDefault=""}return this._answerDefault},_choiceHandler:function(t){t.preventDefault();var e=this._form.one("input[name=qtype]:checked");e&&(this._qtype=e.get("value"),this._getAnswerDefault()),t&&t.currentTarget&&t.currentTarget.hasClass(r.SUBMIT)&&(this._answerdata=[{id:s.guid(),answer:this._selectedText,feedback:"",fraction:100,tolerance:0}]),this._dialogue.set("bodyContent",this._getDialogueContent(t,this._qtype)),this._form.one("."+r.ANSWER).focus()},_parseSubquestion:function(t){var e,i=/\{([0-9]*):([_A-Z]+):(.*?)\}$/g,a=i.exec(t);a&&(this._marks=a[1],this._qtype=a[2],this._getAnswerDefault(),this._answerdata=[],(e=a[3].match(/(\\.|[^~])*/g))&&e.forEach(function(t){var e,i=/^(%(-?[.0-9]+)%|(=?))((\\.|[^#])*)#?(.*)/.exec(t);if(i&&i[4]){if("NUMERICAL"===this._qtype||"NM"===this._qtype)return e=/^([^:]*):?(.*)/.exec(i[4])[2]||0,void this._answerdata.push({answer:this._decode(i[4].replace(/:.*/,"")),id:s.guid(),feedback:this._decode(i[6]),tolerance:e,fraction:i[3]?100:i[2]||0});this._answerdata.push({answer:this._decode(i[4]),id:s.guid(),feedback:this._decode(i[6]),fraction:i[3]?100:i[2]||0})}},this))},_addAnswer:function(t){var e,i;t.preventDefault(),-1===(e=this._form.all("."+r.ADD).indexOf(t.target))&&-1!==(e=this._form.all("."+r.ANSWER+", ."+r.FEEDBACK).indexOf(t.target))&&(e=Math.floor(e/2)+1),t.target.ancestor("li")&&(this._answerDefault=t.target.ancestor("li").one("."+r.FRACTION).getDOMNode().value,e=this._form.all("li").indexOf(t.target.ancestor("li"))+1),i=0,t.target.ancestor("li")&&t.target.ancestor("li").one("."+r.TOLERANCE)&&(i=t.target.ancestor("li").one("."+r.TOLERANCE).getDOMNode().value),this._getFormData()._answerdata.splice(e,0,{answer:"",id:s.guid(),feedback:"",fraction:this._answerDefault,tolerance:i}),this._dialogue.set("bodyContent",this._getDialogueContent(t,this._qtype)),this._form.all("."+r.ANSWER).item(e).focus()},_deleteAnswer:function(t){var e,i;t.preventDefault(),-1===(e=this._form.all("."+r.DELETE).indexOf(t.target))&&(e=this._form.all("li").indexOf(t.target.ancestor("li"))),this._getFormData()._answerdata.splice(e,1),this._dialogue.set("bodyContent",this._getDialogueContent(t,this._qtype)),i=this._form.all("."+r.ANSWER),e=Math.min(e,i.size()-1),i.item(e).focus()},_lowerAnswer:function(t){t.preventDefault();var e=t.target.ancestor("li");e.insertBefore(e.next(),e),e.one("."+r.ANSWER).focus()},_raiseAnswer:function(t){t.preventDefault();var e=t.target.ancestor("li");e.insertBefore(e,e.previous()),e.one("."+r.ANSWER).focus()},_cancel:function(t){t.preventDefault(),this._dialogue.hide()},_setSubquestion:function(t){var e,i,a,n;t.preventDefault(),e=s.Handlebars.compile(o.OUTPUT),this._getFormData(),this._answerdata.forEach(function(t){t.answer=this._encode(t.answer),t.feedback=this._encode(t.feedback)},this),i=e({CSS:r,answerdata:this._answerdata,qtype:this._qtype,marks:this._marks}),a=this.get("host"),this._dialogue.hide(),a.focus(),a.setSelection(this._currentSelection),n=window.rangy.saveSelection(),a.insertContentAtFocusPoint(i),window.rangy.restoreSelection(n)},_getFormData:function(){var t,e,i,a,n,o;for(this._answerdata=[],e=this._form.all("."+r.ANSWER),i=this._form.all("."+r.FEEDBACK),a=this._form.all("."+r.FRACTION),n=this._form.all("."+r.TOLERANCE),o=0;o<e.size();o++)t=e.item(o).getDOMNode().value,"NM"!==this._qtype&&"NUMERICAL"!==this._qtype||(t=Number(t)),this._answerdata.push({answer:t,id:s.guid(),feedback:i.item(o).getDOMNode().value,fraction:a.item(o).getDOMNode().value,tolerance:n.item(o)?n.item(o).getDOMNode().value:0}),this._marks=this._form.one("."+r.MARKS).getDOMNode().value;return this},_getAnchor:function(t,e){if(!t.hasChildNodes())return{anchor:t,offset:e};for(var i=t.firstChild;e>i.textContent.length;)e-=i.textContent.length,i=i.nextSibling;return this._getAnchor(i,e)},_getOffset:function(t,e){if(t===e)return 0;if(!t.contains(e))return 0;for(var i=0,a=t.firstChild;!a.contains(e);)i+=a.textContent.length,a=a.nextSibling;return i+this._getOffset(a,e)},_encode:function(t){return String(t).replace(/(#|\}|~)/g,"\\$1")},_decode:function(t){return String(t).replace(/\\(#|\}|~)/g,"$1")},_resolveSubquestion:function(){var t,a,n,o,s,r,l,e=this.get("host"),c=e.getSelectionParentNode(),i=/\{[0-9]*:(\\.|[^}])*?\}/g;return!!c&&(!!(t=c.textContent.match(i))&&(n=this.get("host").getSelection(),o="",s=0,!(!n||0===n.length)&&(r=this._getIndex(c,n[0].startContainer,n[0].startOffset),l=this._getIndex(c,n[0].endContainer,n[0].endOffset),t.forEach(function(t){var e,i;a=c.textContent.indexOf(t,s),s=a+t.length,a<=r&&l<=s&&(o=t,e=this._getAnchor(c,a),i=this._getAnchor(c,s),n[0].setStart(e.anchor,e.offset),n[0].setEnd(i.anchor,i.offset),this._currentSelection=n)},this),o)))},_getIndex:function(t,e,i){return e.firstChild?e.childNodes[i]?this._getOffset(t,e.childNodes[i]):this._getOffset(t,e.lastChild)+e.lastChild.textContent.length:this._getOffset(t,e)+i}},{ATTRS:{questiontypes:[]}})},"@VERSION@",{requires:["escape","moodle-tinymce_cloze-editor"]});