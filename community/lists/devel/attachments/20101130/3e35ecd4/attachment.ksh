diff -r 97ad060b8e48 orte/mca/rmaps/base/rmaps_base_common_mappers.c
--- a/orte/mca/rmaps/base/rmaps_base_common_mappers.c	Thu Oct 14 11:05:54 2010 +0200
+++ b/orte/mca/rmaps/base/rmaps_base_common_mappers.c	Mon Oct 18 13:57:22 2010 +0200
@@ -191,7 +191,8 @@
             if (0 == node->slots_alloc) {
                 num_procs_to_assign = 1;
             } else {
-                num_possible_procs = node->slots_alloc / jdata->map->cpus_per_rank;
+                //In rmaps_base_common_mappers 'num_possible_procs' define number of ranks
+                num_possible_procs = node->slots_alloc;
                 if (0 == num_possible_procs) {
                     num_procs_to_assign = 1;
                 } else {
@@ -199,7 +200,8 @@
                 }
             }
         } else {
-            num_possible_procs = (node->slots_alloc - node->slots_inuse) / jdata->map->cpus_per_rank;
+            //In rmaps_base_common_mappers 'num_possible_procs' define number of ranks
+            num_possible_procs = (node->slots_alloc - node->slots_inuse);
             if (0 == num_possible_procs) {
                 num_procs_to_assign = 1;
             } else {
diff -r 97ad060b8e48 orte/mca/rmaps/base/rmaps_base_support_fns.c
--- a/orte/mca/rmaps/base/rmaps_base_support_fns.c	Thu Oct 14 11:05:54 2010 +0200
+++ b/orte/mca/rmaps/base/rmaps_base_support_fns.c	Mon Oct 18 13:57:22 2010 +0200
@@ -339,7 +339,7 @@
                          ORTE_JOBID_PRINT(jdata->jobid), current_node->name));
     
     /* Be sure to demarcate the slots for this proc as claimed from the node */
-    current_node->slots_inuse += cpus_per_rank;
+    current_node->slots_inuse += 1;
     
     /* see if this node is oversubscribed now */
     if (current_node->slots_inuse > current_node->slots) {
