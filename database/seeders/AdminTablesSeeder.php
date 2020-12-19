<?php

namespace Database\Seeders;

use Dcat\Admin\Models;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Models\Menu::truncate();
        Models\Menu::insert(
            [
                [
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Index",
                    "icon" => "feather icon-bar-chart-2",
                    "uri" => "/",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:20",
                    "updated_at" => "2020-11-09 16:22:51"
                ],
                [
                    "id" => 8,
                    "parent_id" => 0,
                    "order" => 8,
                    "title" => "Software Management",
                    "icon" => "feather icon-disc",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:21",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 9,
                    "parent_id" => 8,
                    "order" => 10,
                    "title" => "Software Categories",
                    "icon" => "",
                    "uri" => "software/categories",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:22",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 11,
                    "parent_id" => 0,
                    "order" => 25,
                    "title" => "Vendor Records",
                    "icon" => "feather icon-zap",
                    "uri" => "vendor/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:23",
                    "updated_at" => "2020-11-18 21:14:55"
                ],
                [
                    "id" => 12,
                    "parent_id" => 8,
                    "order" => 9,
                    "title" => "Software Records",
                    "icon" => "",
                    "uri" => "software/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:23",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 13,
                    "parent_id" => 0,
                    "order" => 12,
                    "title" => "Hardware Management",
                    "icon" => "feather icon-server",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:24",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 14,
                    "parent_id" => 13,
                    "order" => 14,
                    "title" => "Hardware Categories",
                    "icon" => "",
                    "uri" => "hardware/categories",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:24",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 15,
                    "parent_id" => 13,
                    "order" => 13,
                    "title" => "Hardware Records",
                    "icon" => "",
                    "uri" => "hardware/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:24",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 16,
                    "parent_id" => 0,
                    "order" => 4,
                    "title" => "Device Management",
                    "icon" => "feather icon-monitor",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:25",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 17,
                    "parent_id" => 16,
                    "order" => 6,
                    "title" => "Device Categories",
                    "icon" => "",
                    "uri" => "device/categories",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:27",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 18,
                    "parent_id" => 0,
                    "order" => 16,
                    "title" => "Staff Management",
                    "icon" => "feather icon-user-check",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:25",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 19,
                    "parent_id" => 18,
                    "order" => 18,
                    "title" => "Staff Departments",
                    "icon" => "",
                    "uri" => "staff/departments",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:27",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 20,
                    "parent_id" => 18,
                    "order" => 17,
                    "title" => "Staff Records",
                    "icon" => "",
                    "uri" => "staff/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:26",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 21,
                    "parent_id" => 16,
                    "order" => 5,
                    "title" => "Device Records",
                    "icon" => "",
                    "uri" => "device/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:28",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 22,
                    "parent_id" => 8,
                    "order" => 11,
                    "title" => "Software Tracks",
                    "icon" => "",
                    "uri" => "software/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:28",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 23,
                    "parent_id" => 13,
                    "order" => 15,
                    "title" => "Hardware Tracks",
                    "icon" => "",
                    "uri" => "hardware/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:29",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 24,
                    "parent_id" => 16,
                    "order" => 7,
                    "title" => "Device Tracks",
                    "icon" => "",
                    "uri" => "device/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:29",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 25,
                    "parent_id" => 0,
                    "order" => 22,
                    "title" => "Check Management",
                    "icon" => "feather icon-check-circle",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-04 10:22:42",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 26,
                    "parent_id" => 25,
                    "order" => 23,
                    "title" => "Check Records",
                    "icon" => NULL,
                    "uri" => "check/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-04 10:23:17",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 27,
                    "parent_id" => 25,
                    "order" => 24,
                    "title" => "Check Tracks",
                    "icon" => NULL,
                    "uri" => "check/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-04 10:23:33",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 28,
                    "parent_id" => 0,
                    "order" => 19,
                    "title" => "Service Management",
                    "icon" => "feather icon-activity",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-06 21:38:40",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 29,
                    "parent_id" => 28,
                    "order" => 20,
                    "title" => "Service Records",
                    "icon" => NULL,
                    "uri" => "service/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-06 21:39:02",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 30,
                    "parent_id" => 28,
                    "order" => 21,
                    "title" => "Service Tracks",
                    "icon" => NULL,
                    "uri" => "service/tracks",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-06 22:02:15",
                    "updated_at" => "2020-12-19 01:10:31"
                ],
                [
                    "id" => 31,
                    "parent_id" => 0,
                    "order" => 3,
                    "title" => "Service Issues",
                    "icon" => "feather icon-alert-triangle",
                    "uri" => "service/issues",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-06 23:23:22",
                    "updated_at" => "2020-12-19 01:10:40"
                ],
                [
                    "id" => 53,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Maintenance Records",
                    "icon" => "feather icon-shield",
                    "uri" => "maintenance/records",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-10 15:06:15",
                    "updated_at" => "2020-12-19 01:10:21"
                ],
                [
                    "id" => 54,
                    "parent_id" => 56,
                    "order" => 29,
                    "title" => "Version",
                    "icon" => "feather icon-chevrons-down",
                    "uri" => "version",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-10-22 15:05:00",
                    "updated_at" => "2020-12-16 18:04:30"
                ],
                [
                    "id" => 55,
                    "parent_id" => 56,
                    "order" => 33,
                    "title" => "Menu",
                    "icon" => NULL,
                    "uri" => "auth/menu",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:22:49",
                    "updated_at" => "2020-11-25 19:58:20"
                ],
                [
                    "id" => 56,
                    "parent_id" => 0,
                    "order" => 28,
                    "title" => "Settings",
                    "icon" => "feather icon-settings",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:23:14",
                    "updated_at" => "2020-12-19 01:10:59"
                ],
                [
                    "id" => 57,
                    "parent_id" => 56,
                    "order" => 30,
                    "title" => "Users",
                    "icon" => NULL,
                    "uri" => "auth/users",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:25:13",
                    "updated_at" => "2020-11-25 19:58:20"
                ],
                [
                    "id" => 58,
                    "parent_id" => 56,
                    "order" => 31,
                    "title" => "Roles",
                    "icon" => NULL,
                    "uri" => "auth/roles",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:25:25",
                    "updated_at" => "2020-11-25 19:58:20"
                ],
                [
                    "id" => 59,
                    "parent_id" => 56,
                    "order" => 32,
                    "title" => "Permissions",
                    "icon" => NULL,
                    "uri" => "auth/permissions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-03 14:26:37",
                    "updated_at" => "2020-11-25 19:58:20"
                ],
                [
                    "id" => 60,
                    "parent_id" => 0,
                    "order" => 26,
                    "title" => "Purchased Channels",
                    "icon" => "feather icon-shopping-cart",
                    "uri" => "purchased/channels",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-11-18 21:08:58",
                    "updated_at" => "2020-11-18 21:14:55"
                ],
                [
                    "id" => 61,
                    "parent_id" => 0,
                    "order" => 27,
                    "title" => "Depreciation Rules",
                    "icon" => "feather icon-trending-down",
                    "uri" => "/depreciation/rules",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-19 01:11:08"
                ],
                [
                    "id" => 62,
                    "parent_id" => 56,
                    "order" => 29,
                    "title" => "Configuration",
                    "icon" => "",
                    "uri" => "/configurations",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-14 19:38:17",
                    "updated_at" => "2020-12-19 01:11:08"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "认证管理",
                    "slug" => "auth-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 1,
                    "parent_id" => 0,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:45:54"
                ],
                [
                    "id" => 2,
                    "name" => "管理员管理",
                    "slug" => "users",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "order" => 2,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:18"
                ],
                [
                    "id" => 3,
                    "name" => "角色管理",
                    "slug" => "roles",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "order" => 3,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:10"
                ],
                [
                    "id" => 4,
                    "name" => "权限管理",
                    "slug" => "permissions",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "order" => 4,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:26"
                ],
                [
                    "id" => 5,
                    "name" => "菜单管理",
                    "slug" => "menu",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "order" => 5,
                    "parent_id" => 1,
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:46:33"
                ],
                [
                    "id" => 7,
                    "name" => "动作",
                    "slug" => "device.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 9,
                    "parent_id" => 14,
                    "created_at" => "2020-11-19 08:57:47",
                    "updated_at" => "2020-11-19 13:32:55"
                ],
                [
                    "id" => 8,
                    "name" => "设备删除",
                    "slug" => "device.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 10,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:58:10",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 9,
                    "name" => "设备归属",
                    "slug" => "device.track",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 11,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:58:23",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 10,
                    "name" => "设备归属解除",
                    "slug" => "device.track.disable",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 12,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:59:02",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 11,
                    "name" => "设备关联信息清单",
                    "slug" => "device.related",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 13,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 08:59:54",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 12,
                    "name" => "设备变动履历",
                    "slug" => "device.history",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 14,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 09:00:27",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 13,
                    "name" => "设备故障",
                    "slug" => "device.maintenance",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 15,
                    "parent_id" => 7,
                    "created_at" => "2020-11-19 09:23:03",
                    "updated_at" => "2020-12-19 01:13:21"
                ],
                [
                    "id" => 14,
                    "name" => "设备管理",
                    "slug" => "device",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 6,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 09:55:45",
                    "updated_at" => "2020-11-19 13:11:45"
                ],
                [
                    "id" => 15,
                    "name" => "软件管理",
                    "slug" => "software",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 16,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 09:59:31",
                    "updated_at" => "2020-11-19 13:24:56"
                ],
                [
                    "id" => 16,
                    "name" => "硬件管理",
                    "slug" => "hardware",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 25,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 09:59:57",
                    "updated_at" => "2020-11-19 13:35:38"
                ],
                [
                    "id" => 17,
                    "name" => "雇员管理",
                    "slug" => "staff",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 34,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:00:31",
                    "updated_at" => "2020-11-19 13:38:31"
                ],
                [
                    "id" => 18,
                    "name" => "服务管理",
                    "slug" => "service",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 39,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:00:55",
                    "updated_at" => "2020-12-19 01:13:48"
                ],
                [
                    "id" => 19,
                    "name" => "盘点管理",
                    "slug" => "check",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 48,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:01:27",
                    "updated_at" => "2020-11-19 13:45:12"
                ],
                [
                    "id" => 20,
                    "name" => "维修记录",
                    "slug" => "maintenance",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 55,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:01:59",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 21,
                    "name" => "厂商",
                    "slug" => "vendor",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 60,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:03:42",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 22,
                    "name" => "购入途径",
                    "slug" => "purchased",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 63,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:04:11",
                    "updated_at" => "2020-11-30 09:30:14"
                ],
                [
                    "id" => 23,
                    "name" => "版本信息",
                    "slug" => "version",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 66,
                    "parent_id" => 0,
                    "created_at" => "2020-11-19 10:04:37",
                    "updated_at" => "2020-11-30 09:30:14"
                ],
                [
                    "id" => 24,
                    "name" => "动作",
                    "slug" => "software.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 19,
                    "parent_id" => 15,
                    "created_at" => "2020-11-19 10:06:25",
                    "updated_at" => "2020-11-19 13:35:49"
                ],
                [
                    "id" => 25,
                    "name" => "软件删除",
                    "slug" => "software.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 20,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:09:16",
                    "updated_at" => "2020-11-19 13:35:38"
                ],
                [
                    "id" => 26,
                    "name" => "软件归属",
                    "slug" => "software.track",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 21,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:09:40",
                    "updated_at" => "2020-11-19 13:35:38"
                ],
                [
                    "id" => 27,
                    "name" => "软件归属解除",
                    "slug" => "software.track.disable",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 22,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:10:02",
                    "updated_at" => "2020-11-19 13:35:38"
                ],
                [
                    "id" => 28,
                    "name" => "软件变动履历",
                    "slug" => "software.history",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 23,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:10:28",
                    "updated_at" => "2020-11-19 13:35:38"
                ],
                [
                    "id" => 29,
                    "name" => "软件管理归属",
                    "slug" => "software.track.list",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 24,
                    "parent_id" => 24,
                    "created_at" => "2020-11-19 10:11:19",
                    "updated_at" => "2020-11-19 13:35:38"
                ],
                [
                    "id" => 30,
                    "name" => "动作",
                    "slug" => "hardware.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 28,
                    "parent_id" => 16,
                    "created_at" => "2020-11-19 10:14:24",
                    "updated_at" => "2020-11-19 13:38:37"
                ],
                [
                    "id" => 31,
                    "name" => "硬件删除",
                    "slug" => "hardware.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 29,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:02",
                    "updated_at" => "2020-11-19 13:38:31"
                ],
                [
                    "id" => 32,
                    "name" => "硬件归属",
                    "slug" => "hardware.track",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 30,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:12",
                    "updated_at" => "2020-11-19 13:38:31"
                ],
                [
                    "id" => 33,
                    "name" => "硬件变动履历",
                    "slug" => "hardware.history",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 32,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:27",
                    "updated_at" => "2020-11-19 13:38:31"
                ],
                [
                    "id" => 34,
                    "name" => "硬件故障",
                    "slug" => "hardware.maintenance",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 33,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:15:44",
                    "updated_at" => "2020-12-19 01:13:30"
                ],
                [
                    "id" => 35,
                    "name" => "硬件归属解除",
                    "slug" => "hardware.track.disable",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 31,
                    "parent_id" => 30,
                    "created_at" => "2020-11-19 10:16:04",
                    "updated_at" => "2020-11-19 13:38:31"
                ],
                [
                    "id" => 36,
                    "name" => "动作",
                    "slug" => "staff.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 37,
                    "parent_id" => 17,
                    "created_at" => "2020-11-19 10:18:46",
                    "updated_at" => "2020-11-19 13:41:41"
                ],
                [
                    "id" => 37,
                    "name" => "雇员删除",
                    "slug" => "staff.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 38,
                    "parent_id" => 36,
                    "created_at" => "2020-11-19 10:18:57",
                    "updated_at" => "2020-11-19 13:41:34"
                ],
                [
                    "id" => 38,
                    "name" => "动作",
                    "slug" => "service.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 42,
                    "parent_id" => 18,
                    "created_at" => "2020-11-19 10:19:54",
                    "updated_at" => "2020-11-19 13:45:19"
                ],
                [
                    "id" => 39,
                    "name" => "服务删除",
                    "slug" => "service.delete",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 43,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:20:16",
                    "updated_at" => "2020-11-19 13:45:12"
                ],
                [
                    "id" => 40,
                    "name" => "服务归属",
                    "slug" => "service.track",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 44,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:20:26",
                    "updated_at" => "2020-11-19 13:45:12"
                ],
                [
                    "id" => 41,
                    "name" => "服务故障",
                    "slug" => "service.issue",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 45,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:21:32",
                    "updated_at" => "2020-11-19 13:45:12"
                ],
                [
                    "id" => 42,
                    "name" => "服务归属解除",
                    "slug" => "service.track.disable",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 46,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:21:56",
                    "updated_at" => "2020-11-19 13:45:12"
                ],
                [
                    "id" => 43,
                    "name" => "服务故障修复",
                    "slug" => "service.issue.fix",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 47,
                    "parent_id" => 38,
                    "created_at" => "2020-11-19 10:22:25",
                    "updated_at" => "2020-11-27 15:25:36"
                ],
                [
                    "id" => 44,
                    "name" => "动作",
                    "slug" => "check.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 51,
                    "parent_id" => 19,
                    "created_at" => "2020-11-19 10:29:48",
                    "updated_at" => "2020-11-19 14:01:03"
                ],
                [
                    "id" => 45,
                    "name" => "盘点动作",
                    "slug" => "check.track",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 52,
                    "parent_id" => 44,
                    "created_at" => "2020-11-19 10:30:28",
                    "updated_at" => "2020-11-27 14:55:44"
                ],
                [
                    "id" => 47,
                    "name" => "动作",
                    "slug" => "maintenance.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 58,
                    "parent_id" => 20,
                    "created_at" => "2020-11-19 10:31:18",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 48,
                    "name" => "物资故障修复",
                    "slug" => "maintenance.fix",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 59,
                    "parent_id" => 47,
                    "created_at" => "2020-11-19 10:31:43",
                    "updated_at" => "2020-12-19 01:15:33"
                ],
                [
                    "id" => 49,
                    "name" => "盘点完成",
                    "slug" => "check.finish",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 53,
                    "parent_id" => 44,
                    "created_at" => "2020-11-19 10:35:29",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 50,
                    "name" => "盘点取消",
                    "slug" => "check.cancel",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 54,
                    "parent_id" => 44,
                    "created_at" => "2020-11-19 10:35:38",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 51,
                    "name" => "表单基础：只读",
                    "slug" => "device.read-only",
                    "http_method" => "GET",
                    "http_path" => "device/tracks*,device/records*,device/categories*",
                    "order" => 7,
                    "parent_id" => 14,
                    "created_at" => "2020-11-19 13:18:12",
                    "updated_at" => "2020-11-19 13:32:26"
                ],
                [
                    "id" => 52,
                    "name" => "表单基础：全部",
                    "slug" => "device.all",
                    "http_method" => "",
                    "http_path" => "device/tracks*,device/records*,device/categories*",
                    "order" => 8,
                    "parent_id" => 14,
                    "created_at" => "2020-11-19 13:21:28",
                    "updated_at" => "2020-12-19 01:19:54"
                ],
                [
                    "id" => 53,
                    "name" => "表单基础：只读",
                    "slug" => "software.read-only",
                    "http_method" => "GET",
                    "http_path" => "software/tracks*,software/records*,software/categories*",
                    "order" => 17,
                    "parent_id" => 15,
                    "created_at" => "2020-11-19 13:22:53",
                    "updated_at" => "2020-11-19 13:33:29"
                ],
                [
                    "id" => 54,
                    "name" => "表单基础：全部",
                    "slug" => "software.all",
                    "http_method" => "",
                    "http_path" => "software/tracks*,software/records*,software/categories*",
                    "order" => 18,
                    "parent_id" => 15,
                    "created_at" => "2020-11-19 13:23:56",
                    "updated_at" => "2020-12-19 01:19:47"
                ],
                [
                    "id" => 55,
                    "name" => "表单基础：只读",
                    "slug" => "hardware.read-only",
                    "http_method" => "GET",
                    "http_path" => "hardware/tracks*,hardware/records*,hardware/categories*",
                    "order" => 26,
                    "parent_id" => 16,
                    "created_at" => "2020-11-19 13:37:36",
                    "updated_at" => "2020-11-19 13:37:43"
                ],
                [
                    "id" => 56,
                    "name" => "表单基础：全部",
                    "slug" => "hardware.all",
                    "http_method" => "",
                    "http_path" => "hardware/tracks*,hardware/records*,hardware/categories*",
                    "order" => 27,
                    "parent_id" => 16,
                    "created_at" => "2020-11-19 13:38:18",
                    "updated_at" => "2020-12-19 01:19:39"
                ],
                [
                    "id" => 57,
                    "name" => "表单基础：只读",
                    "slug" => "staff.read-only",
                    "http_method" => "GET",
                    "http_path" => "staff/records*,staff/departments*",
                    "order" => 35,
                    "parent_id" => 17,
                    "created_at" => "2020-11-19 13:40:44",
                    "updated_at" => "2020-11-19 13:41:34"
                ],
                [
                    "id" => 58,
                    "name" => "表单基础：全部",
                    "slug" => "staff.all",
                    "http_method" => "",
                    "http_path" => "staff/records*,staff/departments*",
                    "order" => 36,
                    "parent_id" => 17,
                    "created_at" => "2020-11-19 13:41:10",
                    "updated_at" => "2020-12-19 01:19:30"
                ],
                [
                    "id" => 59,
                    "name" => "表单基础：只读",
                    "slug" => "service.read-only",
                    "http_method" => "GET",
                    "http_path" => "service/records*,service/tracks*,service/issues*",
                    "order" => 40,
                    "parent_id" => 18,
                    "created_at" => "2020-11-19 13:44:25",
                    "updated_at" => "2020-11-19 13:45:12"
                ],
                [
                    "id" => 60,
                    "name" => "表单基础：全部",
                    "slug" => "service.all",
                    "http_method" => "",
                    "http_path" => "service/records*,service/tracks*,service/issues*",
                    "order" => 41,
                    "parent_id" => 18,
                    "created_at" => "2020-11-19 13:45:00",
                    "updated_at" => "2020-12-19 01:19:23"
                ],
                [
                    "id" => 61,
                    "name" => "表单基础：只读",
                    "slug" => "check.read-only",
                    "http_method" => "GET",
                    "http_path" => "check/records*,check/tracks*",
                    "order" => 49,
                    "parent_id" => 19,
                    "created_at" => "2020-11-19 14:00:10",
                    "updated_at" => "2020-11-19 14:00:55"
                ],
                [
                    "id" => 62,
                    "name" => "表单基础：全部",
                    "slug" => "check.all",
                    "http_method" => "",
                    "http_path" => "check/records*,check/tracks*",
                    "order" => 50,
                    "parent_id" => 19,
                    "created_at" => "2020-11-19 14:00:45",
                    "updated_at" => "2020-12-19 01:19:12"
                ],
                [
                    "id" => 63,
                    "name" => "表单基础：只读",
                    "slug" => "maintenance.read-only",
                    "http_method" => "GET",
                    "http_path" => "maintenance/records*",
                    "order" => 56,
                    "parent_id" => 20,
                    "created_at" => "2020-11-19 14:01:46",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 64,
                    "name" => "表单基础：全部",
                    "slug" => "maintenance.all",
                    "http_method" => "",
                    "http_path" => "maintenance/records*",
                    "order" => 57,
                    "parent_id" => 20,
                    "created_at" => "2020-11-19 14:02:10",
                    "updated_at" => "2020-12-19 01:19:02"
                ],
                [
                    "id" => 65,
                    "name" => "表单基础：只读",
                    "slug" => "vendor.read-only",
                    "http_method" => "GET",
                    "http_path" => "vendor/records*",
                    "order" => 61,
                    "parent_id" => 21,
                    "created_at" => "2020-11-19 14:03:07",
                    "updated_at" => "2020-11-30 09:30:13"
                ],
                [
                    "id" => 66,
                    "name" => "表单基础：全部",
                    "slug" => "vendor.all",
                    "http_method" => "",
                    "http_path" => "vendor/records*",
                    "order" => 62,
                    "parent_id" => 21,
                    "created_at" => "2020-11-19 14:03:24",
                    "updated_at" => "2020-12-19 01:18:57"
                ],
                [
                    "id" => 67,
                    "name" => "表单基础：只读",
                    "slug" => "puchased.read-only",
                    "http_method" => "GET",
                    "http_path" => "purchased/channels*",
                    "order" => 64,
                    "parent_id" => 22,
                    "created_at" => "2020-11-19 14:04:08",
                    "updated_at" => "2020-11-30 09:30:14"
                ],
                [
                    "id" => 68,
                    "name" => "表单基础：全部",
                    "slug" => "purchased.all",
                    "http_method" => "",
                    "http_path" => "purchased/channels*",
                    "order" => 65,
                    "parent_id" => 22,
                    "created_at" => "2020-11-19 14:04:39",
                    "updated_at" => "2020-12-19 01:18:49"
                ],
                [
                    "id" => 69,
                    "name" => "表单基础：只读",
                    "slug" => "version.read-only",
                    "http_method" => "GET",
                    "http_path" => "version",
                    "order" => 67,
                    "parent_id" => 23,
                    "created_at" => "2020-11-19 14:05:14",
                    "updated_at" => "2020-11-30 09:30:14"
                ],
                [
                    "id" => 70,
                    "name" => "动作",
                    "slug" => "version.actions",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 68,
                    "parent_id" => 23,
                    "created_at" => "2020-11-19 14:05:40",
                    "updated_at" => "2020-11-30 09:30:14"
                ],
                [
                    "id" => 72,
                    "name" => "更新数据库结构",
                    "slug" => "version.migrate",
                    "http_method" => "",
                    "http_path" => "version/migrate",
                    "order" => 69,
                    "parent_id" => 70,
                    "created_at" => "2020-11-19 14:06:39",
                    "updated_at" => "2020-11-30 09:30:14"
                ],
                [
                    "id" => 73,
                    "name" => "折旧规则",
                    "slug" => "depreciation_rule",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 70,
                    "parent_id" => 0,
                    "created_at" => "2020-12-19 01:16:23",
                    "updated_at" => "2020-12-19 01:16:32"
                ],
                [
                    "id" => 74,
                    "name" => "表单基础：只读",
                    "slug" => "depreciation_rule.read-only",
                    "http_method" => "GET",
                    "http_path" => "depreciation/rules*",
                    "order" => 71,
                    "parent_id" => 73,
                    "created_at" => "2020-12-19 01:17:19",
                    "updated_at" => "2020-12-19 01:17:32"
                ],
                [
                    "id" => 75,
                    "name" => "表单基础：全部",
                    "slug" => "depreciation_rule.all",
                    "http_method" => "",
                    "http_path" => "depreciation/rules*",
                    "order" => 72,
                    "parent_id" => 73,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-19 01:18:30"
                ],
                [
                    "id" => 76,
                    "name" => "站点配置",
                    "slug" => "configuration",
                    "http_method" => "",
                    "http_path" => "depreciation/rules*",
                    "order" => 73,
                    "parent_id" => 0,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-19 01:18:30"
                ],
                [
                    "id" => 77,
                    "name" => "表单基础：只读",
                    "slug" => "configuration.read-only",
                    "http_method" => "GET",
                    "http_path" => "configurations*",
                    "order" => 74,
                    "parent_id" => 76,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-19 01:18:30"
                ],
                [
                    "id" => 78,
                    "name" => "表单基础：全部",
                    "slug" => "configuration.all",
                    "http_method" => "",
                    "http_path" => "configurations*",
                    "order" => 75,
                    "parent_id" => 76,
                    "created_at" => "2020-12-19 01:18:30",
                    "updated_at" => "2020-12-19 01:18:30"
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "超级管理员",
                    "slug" => "administrator",
                    "created_at" => "2020-09-18 09:45:49",
                    "updated_at" => "2020-11-18 17:45:16"
                ],
                [
                    "id" => 2,
                    "name" => "观察者",
                    "slug" => "observer",
                    "created_at" => "2020-11-19 09:25:18",
                    "updated_at" => "2020-11-19 14:09:37"
                ]
            ]
        );

        Models\Setting::truncate();
        Models\Setting::insert(
            [

            ]
        );

        Models\Extension::truncate();
        Models\Extension::insert(
            [

            ]
        );

        Models\ExtensionHistory::truncate();
        Models\ExtensionHistory::insert(
            [

            ]
        );

        // pivot tables
        DB::table('admin_permission_menu')->truncate();
        DB::table('admin_permission_menu')->insert(
            [
                [
                    "permission_id" => 2,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 2,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 3,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 4,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 5,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 32,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 33,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 34,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 35,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 36,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 37,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 38,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 39,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 40,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 41,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 42,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 43,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 44,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 45,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 46,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 47,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 48,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 49,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 50,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 6,
                    "menu_id" => 52,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
        );

        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 2,
                    "permission_id" => 51,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 53,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 55,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 57,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 59,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 61,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 63,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 65,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 67,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 69,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 74,
                    "created_at" => "2020-12-19 01:20:17",
                    "updated_at" => "2020-12-19 01:20:17"
                ]
            ]
        );

        // users tables
        Models\Administrator::truncate();
        Models\Administrator::insert(
            [
                [
                    "id" => 1,
                    "username" => "admin",
                    "password" => "\$2y\$10\$c3TTfU9ArSf2hvlTG5CTk.BUBzJOgdPale0VKi1MJXCoCG6mAcsPe",
                    "name" => "Administrator",
                    "avatar" => NULL,
                    "remember_token" => NULL,
                    "created_at" => "2020-11-30 09:58:49",
                    "updated_at" => "2020-12-16 17:28:14"
                ]
            ]
        );

        DB::table('admin_role_users')->truncate();
        DB::table('admin_role_users')->insert(
            [
                [
                    "role_id" => 1,
                    "user_id" => 1,
                    "created_at" => NULL,
                    "updated_at" => NULL
                ]
            ]
        );

        // finish
    }
}
