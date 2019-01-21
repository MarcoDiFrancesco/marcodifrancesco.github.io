var FR = {
	UI: {translations:[]},
	submitForm: function() {
		FR.win.el.mask(FR.T('Please wait...'));
		FR.recoveryForm.getForm().submit({
			url: submitURL,
			failure: function(frm, act) {
				FR.win.el.unmask();
				var msg = act.result ? act.result.msg : FR.T('A problem was encountered while trying to submit the form: ')+act.response.responseText;
				new Ext.ux.prompt({text: msg});
			},
			success: function(frm, act) {
				FR.win.el.unmask();
				new Ext.ux.prompt({text: act.result.msg, callback: function() {document.location.href = URLRoot;}});
			}
		});
	}
};
Ext.onReady(function() {
	FR.recoveryForm = new Ext.form.FormPanel({
		baseCls: 'x-plain', hideLabels: true, autoHeight: true,
		items: [
			{
				id: 'usr', xtype: 'textfield', emptyText: FR.T('E-mail address'),
				name: 'email', width:'100%', cls: 'loginFormField'
			}
		]
	});
	var canvasSize = Ext.getBody().getViewSize();
	var windowWidth = 380;
	if (canvasSize.width < windowWidth) {
		windowWidth = canvasSize.width - 20;
	}
	FR.win = new Ext.Window({
		layout: 'fit',
		constrain: true, closable: false,
		resizable: false, draggable: false,
		title: FR.T('Password Reset'),
		height: 240, width: windowWidth,
		bodyStyle:'padding:45px',
		items: [FR.recoveryForm], buttonAlign: 'left',
		buttons: [
			{
				text: FR.T('Sign in'), cls: 'fr-btn-link',
				handler: function(){document.location.href = URLRoot;}
			},
			new Ext.Toolbar.Fill(),
			{
				text: FR.T('Submit'), cls: 'fr-btn-default fr-btn-primary',
				handler: FR.submitForm
			}
		]
	});
	FR.win.show().anchorTo(Ext.get('theBODY'), 'c-c');
	new Ext.KeyMap("usr", {
	    key: Ext.EventObject.ENTER,
	    fn: FR.submitForm
	});
});