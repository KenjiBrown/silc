#
#  Makefile.am
#
#  Author: Pekka Riikonen <priikone@silcnet.org>
#
#  Copyright (C) 2003 Pekka Riikonen
#
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; version 2 of the License.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#

AUTOMAKE_OPTIONS = 1.0 no-dependencies foreign

bin_PROGRAMS = silcmap

silcmap_SOURCES = 		\
	silcmap.c		\
	silcmap_bitmap.c	\
	silcmap_command.c	\
	silcmap_client.c	\
	silcmap_html.c

LIBS = $(SILC_COMMON_LIBS) -lsilcclient -lsilc -lm
LDADD =

EXTRA_DIST = *.h silcmap.conf example.server.com_706.pub default.fnt

include $(top_srcdir)/Makefile.defines.in
