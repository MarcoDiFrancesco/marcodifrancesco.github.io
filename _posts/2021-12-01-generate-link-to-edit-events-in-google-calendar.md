---
title: "Generate link to edit events in Google Calendar"
permalink: /generate-link-to-edit-events-in-google-calendar/
---
After downloading an ICS file from Google Calendar, how do I generate the URL to edit a specific event?
If that's the question you are asking this is the right article for you!

![](/assets/img/generate-link-to-edit-events-in-google-calendar/breakfast-event.png)

## Context

Google Calendar allows to download an ICS file of a specific calendar. We can do going to ***Settings and sharing → Integrate calendar → Secret address in iCal format***.

The link that appears in the box should look like one of these 2:

```
ACCOUNT'S CALENDAR:
https://calendar.google.com/calendar/ical/xxxxxxxxxxxxxxxxxxxxxxxxxx%40gmail.com/private-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/basic.ics
OTHER CALENDAR:
https://calendar.google.com/calendar/ical/xxxxxxxxxxxxxxxxxxxxxxxxxx%40group.calendar.google.com/private-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/basic.ics
```

The type of link we see depend on the type of calendar we are analyzing, in can be either:
- Calendars not connected to a specific account (*@group.calendar.google.com*)
- Calendar connected to the Google Account (*@gmail.com*)

## Calendar ID
From the Calendar link, we want to find the the Calendar ID. It is localed in the link the URL after ***/ical/***.

In the examples above the Calendar IDs are:

```
xxxxxxxxxxxxxxxxxxxxxxxxxx%40gmail.com
xxxxxxxxxxxxxxxxxxxxxxxxxx%40group.calendar.google.com
```

From these URLs we need to decode them from the [Percent-encoding](https://en.wikipedia.org/wiki/Percent-encoding) to UTF-8. In this case we are changing ***%40*** to ***@***.

```
xxxxxxxxxxxxxxxxxxxxxxxxxx@gmail.com
xxxxxxxxxxxxxxxxxxxxxxxxxx@group.calendar.google.com
```

We then need to take the part up to the ***@*** (included) and the following character ***g***. Obtaining in both examples:

```
xxxxxxxxxxxxxxxxxxxxxxxxxx@g
```

Pay attention that the number of characters before the ***@***, indeed this may vary depending on the number of characters of the email address we found above. That's why we cannot select a consistent number of characters.

We are going to use this later when [creating the final url](#create-the-link).

## Event ID

When downloading the ICS file we get the following information for each event:

```bash
BEGIN:VEVENT
DTSTART:20200923T092300Z
DTEND:20200923T114900Z
UID:abcxxxxxxxxxxxxxxxxxxxxxyz@google.com
....
END:VEVENT
```

The only part we need is ***UID***. Pay attenction that the number of characters before ***@google.com*** is not consistent, it may be either 58 or 26 characters.

We are going to extract all the characters before the ***@***. In the example above it will be:

```bash
abcxxxxxxxxxxxxxxxxxxxxxyz
```

## Create the link

We need to merge the UID and Calendar ID in the following way: `UID+space+IDCAL`. So obtaining:

```bash
abcxxxxxxxxxxxxxxxxxxxxxyz xxxxxxxxxxxxxxxxxxxxxxxxxx@g
```

Then we need to encode it in [Base64](https://www.base64encode.org/) obtaining:

```bash
YWJjeHh4eHh4eHh4eHh4eHh4eHh4eHh4eXogeHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHhAZw==
```

Finally paste this token after the Google Calendar edit link in the following way:

```bash
https://calendar.google.com/calendar/u/0/r/eventedit/YWJjeHh4eHh4eHh4eHh4eHh4eHh4eHh4eXogeHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHhAZw=
```

You can try to navigate to this link! Consider that you need to be logged in with the right permissions to edit the event!

## Conclusions

You can find the implementation using Pandas in Python in my [Calendar Analyzer](https://github.com/MarcoDiFrancesco/CalendarAnalyzer) open source project, in the function below ([link](https://github.com/MarcoDiFrancesco/CalendarAnalyzer/blob/6a2ba3ea8498edb9b2fbdc7b19d43c630fcc622b/utils/admin.py#L51-L82)).


<script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2FMarcoDiFrancesco%2FCalendarAnalyzer%2Fblob%2F6a2ba3ea8498edb9b2fbdc7b19d43c630fcc622b%2Futils%2Fadmin.py%23L51-L82&style=github&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on&fetchFromJsDelivr=on"></script>

If you find it useful you can star it!
