/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.addTemplates('default',{imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath('templates')+'templates/images/'),
templates:[{title:'Two Columns',image:'two-columns.gif',description:'Div container with two columns.',html:'<p>Text before two columns.</p><div class="two-columns"><div class="col1"><p>Column 1</p></div><div class="col2"><p>Column 2</p></div></div><p>Text after two colums.</p>'},
{title:'Three Columns',image:'three-columns.gif',description:'Div container with three columns.',html:'<p>Text before two columns.</p><div class="three-columns"><div class="col1"><p>Column 1</p></div><div class="col2"><p>Column 2</p></div><div class="col3"><p>Column 3</p></div></div><p>Text after three colums.</p>'}
]});