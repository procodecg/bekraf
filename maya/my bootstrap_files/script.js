'use strict'

var creative = {

  // config
  container: null,

  left: null,

  card: null,
  front: null,
  back: null,
  searchBox:null,
  ctaBackground: null,
  cta: null,
  ctaHover: null,
  bgExit: null,
  
  backgroundContent:'',
  searchVisible:false,
  searchAlignLeft:false,
  searchTextContent:'',
  ctaContent:'',
  ctaColor:'',
  exitURL:'',
  
  init: function() {

    // DYNAMIC CONTENT
    // Dynamic Content variables and sample values
    Enabler.setProfileId(1065435);
    var devDynamicContent = {};

    devDynamicContent.Direct_Response_Creative_2016_Feed= [{}];
    devDynamicContent.Direct_Response_Creative_2016_Feed[0]._id = 0;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Unique_ID = 1;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Reporting_Label = "UK";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Search = false;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Search_Text = "harmony";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].SearchBoxAlign = "LEFT";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Statement = "EXPLORE MILLIONS OF EXCLUSIVE IMAGES ONLY FROM iSTOCK";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Statement_Point_Size = 28;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].iStock_Photographer = "";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Photographer = "";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Ad_Name = "Harmony";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Weights = 100;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Final_Text = "Buy for less. Explore for free.";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Final_Text_Point_Size = 28;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].CTA = "Explore now";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].CTA_Colour = "#51c5ee";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].AssetLibrary = {};
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].AssetLibrary.Type = "file";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].AssetLibrary.Url = "https://s0.2mdn.net/ads/richmedia/studio/40619882/28384_20151222030425371_Harmony_300x600.jpg";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Default = false;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Active = true;
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Geo = {};
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Geo.Value = ["GB"];
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Exit_URL = {};
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Exit_URL.Url = "http://www.istockphoto.com?esource=DIS_IS_2016_DR_GB_DYNAMIC_300x600";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Backup_Image = {};
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Backup_Image.Type = "file";
    devDynamicContent.Direct_Response_Creative_2016_Feed[0].Backup_Image.Url = "https://s0.2mdn.net/ads/richmedia/studio/40729186/28384_20160106011808287_GB_300x600.jpg";
    Enabler.setDevDynamicContent(devDynamicContent);
    
    creative.setupDom();

    creative.backgroundContent = Enabler.getUrl(dynamicContent.Direct_Response_Creative_2016_Feed[0].AssetLibrary.Url);
    creative.searchVisible = dynamicContent.Direct_Response_Creative_2016_Feed[0].Search;
    creative.searchAlignLeft = dynamicContent.Direct_Response_Creative_2016_Feed[0].SearchBoxAlign==='LEFT';
    creative.searchTextContent = dynamicContent.Direct_Response_Creative_2016_Feed[0].Search_Text;
    creative.ctaContent = dynamicContent.Direct_Response_Creative_2016_Feed[0].CTA;
    creative.ctaColor = dynamicContent.Direct_Response_Creative_2016_Feed[0].CTA_Colour;; //'#51c5ee';
    creative.exitURL = Enabler.getUrl(dynamicContent.Direct_Response_Creative_2016_Feed[0].Exit_URL.Url);

    creative.addListeners();

    // Polite loading
    if(Enabler.isPageLoaded()) {   
      creative.setup();  
    } else {
      Enabler.addEventListener(studio.events.StudioEvent.PAGE_LOADED, creative.setup);
    }

    if (Enabler.isVisible()) {
      creative.show();
    }
    else {
      Enabler.addEventListener(studio.events.StudioEvent.VISIBLE, creative.show);
    }
  },

  setupDom: function() {

    // get DOM elements
    creative.container=document.getElementById('container');
    creative.left=document.getElementById('left');

    creative.searchBox=document.getElementById('searchBox');
    creative.ctaBackground=document.getElementById('cta-background');
    creative.cta=document.getElementById('cta');
    creative.ctaHover=document.getElementById('cta-hover');

    creative.bgExit=document.getElementById('bg-exit');
  },

  addListeners: function() {
    creative.bgExit.addEventListener('click', creative.exitClickHandler);
  },

  exitClickHandler: function() {
    //Enabler.exit('Background Exit');
    Enabler.exitOverride('Background Exit', creative.exitURL);
  },

  setup: function() {
    //console.log('setup');
    creative.left.style.backgroundImage='url("'+creative.backgroundContent+'")';
    creative.searchBox.style.display=(creative.searchVisible)?'block':'none';
    if (creative.searchAlignLeft) {
      creative.searchBox.classList.add('left');
    }
    creative.searchBox.innerHTML=creative.searchTextContent;
    creative.ctaBackground.style.borderColor=creative.ctaColor;
    creative.cta.innerHTML=creative.ctaContent;
    creative.cta.style.color=creative.ctaColor;
    creative.ctaHover.innerHTML=creative.ctaContent;
    creative.ctaHover.style.backgroundColor=creative.ctaColor;
  },
  show: function() {
    //console.log('init');
  }
}


// If true, start function. If false, listen for INIT.
window.onload = function() {
  if (Enabler.isInitialized()) {
      creative.init();
  } else {
      Enabler.addEventListener(studio.events.StudioEvent.INIT, creative.init);
  }
}