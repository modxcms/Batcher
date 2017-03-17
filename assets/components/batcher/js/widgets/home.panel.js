Batcher.panel.Home = function(config) {
    config = config || {};
    var tabItems = [];
    tabItems.push({
        title: _('batcher.resources')
        ,tabTip: 'Batcher Batcher Batcher (mushroom mushroom!)'
        ,autoHeight: true
        ,layout: 'form'
        ,items: [{
            html: '<p>'+_('batcher.intro_msg')+'</p>'
            ,border: false
            ,bodyCssClass: 'panel-desc'
        },{
            xtype: 'batcher-grid-resource'
            ,preventRender: true
            ,cls: 'main-wrapper'
        }]
    });
    if (MODx.perm.element_tree) {
        tabItems.push({
            title: _('batcher.elements')
            ,autoHeight: true
            ,layout: 'form'
            ,items: [{
                html: '<p>'+_('batcher.elements.intro_msg')+'</p>'
                ,border: false
                ,bodyCssClass: 'panel-desc'
            },{
                xtype: 'batcher-grid-element'
                ,cls: 'main-wrapper'
                ,preventRender: true
            }]
        });
    }
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container form-with-labels'
        ,items: [{
            html: '<h2>'+_('batcher')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,stateful: true
            ,stateId: 'batcher-home-tabpanel'
            ,stateEvents: ['tabchange']
            ,getState:function() {
                return {activeTab:this.items.indexOf(this.getActiveTab())};
            }
            ,items: tabItems
        }]
    });
    Batcher.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(Batcher.panel.Home,MODx.Panel);
Ext.reg('batcher-panel-home',Batcher.panel.Home);
