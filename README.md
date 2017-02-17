# EzQueryTypeBackportBundle

EzQueryTypeBackportBundle is a backport of the [eZ Platform `QueryType` feature](https://github.com/ezsystems/ezpublish-kernel/blob/master/doc/specifications/misc/query_types.md).

QueryTypes are named objects that build a Query.

To define a new QueryType, you need to create a class that implements the QueryType
interface, and register it as such in the service container.

Refer to [`QueryType` documentation for more information](https://github.com/ezsystems/ezpublish-kernel/blob/master/doc/specifications/misc/query_types.md).


## Compatibility
This bundle is compatible with **eZ Publish 5.4 / 2014.11+**.

It is **NOT** compatible with eZ Platform (kernel >= 6.0). If you use such version, please just use the native feature :wink:

## License
As this bundle is a full backport, **GPL-2.0 license from eZ Systems A.S. has been kept as is**.
An additional license for integration has been added (GPL-2.0 as well, for license compatibility).

Please refer to `LICENSE-EZ` and `LICENSE-Jerome-Vieilledent` for details.
