<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

$conf['settings']['app.title'] = 'Booked Scheduler';
$conf['settings']['default.timezone'] = 'America/New_York';
$conf['settings']['allow.self.registration'] = 'true';
$conf['settings']['admin.email'] = 'bwrege@thermaltech.com';
$conf['settings']['admin.email.name'] = 'Blake Wrege';
$conf['settings']['default.page.size'] = '50';
$conf['settings']['enable.email'] = 'true';
$conf['settings']['default.language'] = 'en_us';
$conf['settings']['script.url'] = 'http://localhost/booked/Web';
$conf['settings']['image.upload.directory'] = 'Web/uploads/images';
$conf['settings']['image.upload.url'] = 'uploads/images';
$conf['settings']['cache.templates'] = 'true';
$conf['settings']['use.local.jquery'] = 'true';
$conf['settings']['registration.captcha.enabled'] = 'true';
$conf['settings']['registration.require.email.activation'] = 'true';
$conf['settings']['registration.auto.subscribe.email'] = 'true';
$conf['settings']['registration.notify.admin'] = 'true';
$conf['settings']['inactivity.timeout'] = '200';
$conf['settings']['name.format'] = '{first} {last}';
$conf['settings']['css.extension.file'] = '';
$conf['settings']['disable.password.reset'] = 'false';
$conf['settings']['home.url'] = '';
$conf['settings']['logout.url'] = '';
$conf['settings']['schedule']['use.per.user.colors'] = 'false';
$conf['settings']['schedule']['show.inaccessible.resources'] = 'true';
$conf['settings']['schedule']['reservation.label'] = '{name}';
$conf['settings']['schedule']['hide.blocked.periods'] = 'false';
$conf['settings']['ics']['require.login'] = 'true';
$conf['settings']['ics']['subscription.key'] = '';
$conf['settings']['ics']['import'] = 'false';
$conf['settings']['ics']['import.key'] = '';
$conf['settings']['privacy']['view.schedules'] = 'false';
$conf['settings']['privacy']['view.reservations'] = 'false';
$conf['settings']['privacy']['hide.user.details'] = 'false';
$conf['settings']['privacy']['hide.reservation.details'] = 'false';
$conf['settings']['reservation']['start.time.constraint'] = 'future';
$conf['settings']['reservation']['updates.require.approval'] = 'false';
$conf['settings']['reservation']['prevent.participation'] = 'false';
$conf['settings']['reservation']['prevent.recurrence'] = 'false';
$conf['settings']['reservation']['enable.reminders'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.add'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.update'] = 'true';
$conf['settings']['reservation.notify']['resource.admin.delete'] = 'true';
$conf['settings']['reservation.notify']['application.admin.add'] = 'true';
$conf['settings']['reservation.notify']['application.admin.update'] = 'true';
$conf['settings']['reservation.notify']['application.admin.delete'] = 'true';
$conf['settings']['reservation.notify']['group.admin.add'] = 'true';
$conf['settings']['reservation.notify']['group.admin.update'] = 'true';
$conf['settings']['reservation.notify']['group.admin.delete'] = 'true';
$conf['settings']['uploads']['enable.reservation.attachments'] = 'false';
$conf['settings']['uploads']['reservation.attachment.path'] = 'uploads/reservation';
$conf['settings']['uploads']['reservation.attachment.extensions'] = 'txt,jpg,gif,png,doc,docx,pdf,xls,xlsx,ppt,pptx,csv';
$conf['settings']['database']['type'] = 'mysql';
$conf['settings']['database']['user'] = 'booked_user';
$conf['settings']['database']['password'] = 'password';
$conf['settings']['database']['hostspec'] = 'localhost';
$conf['settings']['database']['name'] = 'bookedscheduler';
$conf['settings']['phpmailer']['mailer'] = 'sendmail';
$conf['settings']['phpmailer']['smtp.host'] = 'localhost.thermaltech.com';
$conf['settings']['phpmailer']['smtp.port'] = '25';
$conf['settings']['phpmailer']['smtp.secure'] = '';
$conf['settings']['phpmailer']['smtp.auth'] = true;
$conf['settings']['phpmailer']['smtp.username'] = "";
$conf['settings']['phpmailer']['smtp.password'] = "";
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['smtp.debug'] = 'true';
$conf['settings']['plugins']['Authentication'] = '';
$conf['settings']['plugins']['Authorization'] = '';
$conf['settings']['plugins']['Permission'] = '';
$conf['settings']['plugins']['PostRegistration'] = '';
$conf['settings']['plugins']['PreReservation'] = '';
$conf['settings']['plugins']['PostReservation'] = '';
$conf['settings']['install.password'] = 'thermal';
$conf['settings']['pages']['enable.configuration'] = 'true';
$conf['settings']['api']['enabled'] = 'false';
$conf['settings']['recaptcha']['enabled'] = 'false';
$conf['settings']['recaptcha']['public.key'] = '';
$conf['settings']['recaptcha']['private.key'] = '';
$conf['settings']['email']['default.from.address'] = 'localhost.thermaltech.com';
$conf['settings']['email']['default.from.name'] = 'Blake';
$conf['settings']['reports']['allow.all.users'] = 'true';
$conf['settings']['password']['minimum.letters'] = '6';
$conf['settings']['password']['minimum.numbers'] = '0';
$conf['settings']['password']['upper.and.lower'] = 'false';
?>
