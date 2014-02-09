![Object Model Event](http://yuml.me/diagram/scruffy/class/
[Camp]<1-*<>[CampCollaboration],
[Camp]++1-*>[Event],
[Camp]++1-*>[EventCategory],
[Camp]->[CampType],
[CampCollaboration]< 1- *<>[EventResp],
[Event]< 1- *<>[EventResp],
[Event]++ 1- *>[EventPlugin],
[Event]- 1>[EventCategory],
[EventType]++-*>[EventTypePlugin],
[EventType]++-*>[EventTypeFactory],
[CampType]++-*>[EventType]
[EventCategory]- 1>[EventType],
[EventTemplate]< 1- *<>[PluginPosition],
[EventTypePlugin]<1-*<>[PluginPosition]
[EventPlugin]- 1>[Plugin],
[EventTypePlugin]- 1>[Plugin],
[EventType]++1-*>[EventTemplate]
[EventTemplate]- 1>[Medium],
)