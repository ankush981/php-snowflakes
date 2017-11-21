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

=> Interface Bloat is another thing to watch out for. Your interfaces shouln't
become so large that they are better replaced by a single class. If a class isn't
going to be reused often, maybe letting it remain a separate class is a good idea.

The last anti-pattern belongs to the family of 'Swiss Army Knife' or 'Kitchen Sink'
patterns, which try to stuff too much funtionality into one entity.

=> Don't plan for a feature that's not needed right away, and for God's sake, don't
start to architect it for "scale" before the need arises.

=> Development should be combined with Operations (=DevOps) because it results in  
higher-quality systems.

=> Sequential coupling: This happens when methods in a class need to be executed
in a particular order. For instace, if a Car class has separate methods start()
and accelerate(), then there's a problem. A better design is to allow for checking
that the car is started, and if not, start it from inside of other functions by
calling the start() function.

=> The big rewrite is a tempting concept but isn't necessariliy good. It isn't
going to improve the existing developers, and will incur massive costs for the
business. Better to rewrite small portions of the code one at a time.

=> Analysis Paralysis. Do not try to get the perfect solution upfront, but focus
on perfecting a working solution slowly.

=> Bikeshedding means spending time and energy over trivial issues. For example,
should the logs toolbar be green or blue?

=> Optimization doesn't mean wrangling with data structures as you write code.
Optimzation are always data-led (with the help of tools like XDebug), and 
come only after a clean code base has been established.
*/