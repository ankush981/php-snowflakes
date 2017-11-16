<?php

/*
While we are on the subject of anti-patterns, there are a few more that are
not related to software design per se, but are better avoided.
 
=> Don't use the database as a queueing system. 

=> In MySQL, frequent updating of flags in a table causes Cache Invalidation,
making the whole slower than it should be.

=> Auto-increments for primary keys should be avoided because they result in
imbalanced shards, if at all. UUIDs are a much better bet.

=> Do not use a cron job to schedule background jobs. These are better served
using systems like Monit or Gearman.

=> Do not architect at software level what can be handled at infrastructure-level.
For instance, proxy passing is bese done by the web server, while the  PHP
script will turn out to be messy solution (handling request types, errors, etc.).

*/