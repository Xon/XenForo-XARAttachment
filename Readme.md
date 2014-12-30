Xenforo-SVXARAttachment
======================

Enables the use of Nginx's X-Accel-Redirect for attachment serving.

As XenForo_FileOutput is not extensible, this addon reimplements:
- XenForo_ViewAdmin_Attachment_View
- XenForo_ViewPublic_Attachment_View

This addon assumes the /internal_data folder exists within XenForo's webroot, even if it is only accessible locally.

You may need a construct like:
    location /internal_data {
        internal;
        alias /path/to/internal_data;
    }
or:
    location /internal_data { 
        internal;
        proxy_pass http://www.example.com/internal_data; 
    }

If you are proxying /internal_data somewhere else, you will likely want to ensure the Content-Type set by XenForo is respected:
    proxy_hide_header Content-Type;

To ensure you match how XenForo serves files, add the following headers into your site config where appropriate:
    add_header X-Frame-Options SAMEORIGIN;
    add_header X-Content-Type-Options nosniff;
